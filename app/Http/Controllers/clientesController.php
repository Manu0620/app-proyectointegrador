<?php

namespace App\Http\Controllers;

use App\Http\Requests\clienteRequest;
use App\Models\clientes;
use App\Models\tipo_clientes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class clientesController extends Controller
{

    public function show(){
        $tipo_clientes = tipo_clientes::all();
        return view('clientes.registrarClientes',compact('tipo_clientes'));
    }

    public function create(clienteRequest $request){
        $cliente = clientes::create($request->validated());
        return redirect()->to('registrarClientes')->with('success', 'Formulario enviado correctamente!');
    }

    public function query(){
        $datos['clientes'] = clientes::where('estcli','activo')
        ->paginate(5);
        return view('clientes.consultarClientes', $datos);
    }

    public function edit($codcli){
        $cliente = clientes::find($codcli);
        return view('clientes.editarClientes', compact('cliente'));
    }

    public function update(Request $request, $codcli){
        $cliente = clientes::find($codcli);

        $cliente->nomcli = $request->input('nomcli');
        $cliente->apecli = $request->input('apecli');
        $cliente->tecli1 = $request->input('tecli1');
        $cliente->tecli2 = $request->input('tecli2');
        $cliente->dircli = $request->input('dircli');
        $cliente->corcli = $request->input('corcli');
        $cliente->cedrnc = $request->input('cedrnc');
        $cliente->codtpcli = $request->input('codtpcli');
        
        $cliente->save();
        return redirect('consultarClientes')->with('success', 'Edicion realizada correctamente');
    }

    public function delete($id){
        $cliente = clientes::find($id); 

        $cliente->estcli = 'inactivo';
        $cliente->save();

        return redirect('consultarClientes')->with('sucess', 'Usuario inhabilitado correctamente');
    }
}
