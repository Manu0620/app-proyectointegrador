<?php

namespace App\Http\Controllers;

use App\Http\Requests\citasRequest;
use App\Models\citas;
use App\Models\solicitudes;
use Illuminate\Http\Request;

class citasController extends Controller
{
    public function show(){
        return view('citas.registrarCitas');
    }

    public function create(citasRequest $request){
        $cita = citas::create($request->validated());

        return redirect()->to('registrarCitas')->with('success', 'Formulario enviado correctamente!');
    }

    public function query(){
        $datos['citas'] = citas::where('estcit', 'Pendiente')->paginate(5); 
        return view('citas.consultarCitas', $datos);
    }

    public function edit(){
        $cita = citas::find($_GET['cita']);
        return view('citas.editarCitas', compact('cita'));
    }

    public function update(Request $request){
        $cita = citas::find($request->codcit);

        $cita->codsol = $request->codsol;
        $cita->codusu = $request->codusu;
        $cita->fecha = $request->fecha;
        $cita->descrip = $request->descrip;
        $cita->estcit = $request->estcit;
        
        $cita->save();
        return redirect('consultarCitas')->with('success', 'Edicion realizada correctamente');
    }

    public function agendar(Request $request){
        $citas = new citas();

        $fechaHoy = date("Y-m-d h:i",strtotime(date("Y-m-d h:i")));

        $request->validate([
            'fecha' => 'required|after_or_equal:'.$fechaHoy,
        ]);

        $citas->codsol = $request->input('codsol');
        $citas->codusu = $request->input('codusu');
        $citas->fecha = $request->input('fecha');
        $citas->descrip = $request->input('descrip');
        $citas->estcit = $request->input('estcit');
        
        $citas->save();

        $solicitud = solicitudes::find($request->input('codsol')); 

        $solicitud->estsol = 'Aprobada';
        $solicitud->save();
        return redirect('consultarCitas')->with('success', 'Cita agendada correctamente');
    }

    public function approve(){
        $codsol = $_GET['solicitud'];
        return view('citas.agendarCita', compact('codsol'));
    }
}
