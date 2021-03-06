<?php

namespace App\Http\Controllers;

use App\Http\Requests\facturaRequest;
use App\Models\clientes;
use App\Models\cuentas;
use App\Models\detalle_factura;
use App\Models\facturas;
use App\Models\propiedades;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class facturaController extends Controller
{
    public function create(){
        $clientes = clientes::all();
        $propiedades = propiedades::join('itbis','propiedades.citbis','=','itbis.citbis')
        ->select('itbis.itbis', 'propiedades.codpro', 'propiedades.titulo', 'propiedades.preven', 'propiedades.preren')
        ->get();
        return view('Facturacion', compact(['clientes', 'propiedades']));
    }

    public function save(facturaRequest $request){
        
        $facturas = new facturas();

        $facturas->codcli = $request->codcli;
        $facturas->codusu = Auth::user()->id;
        $facturas->condicion = $request->condicion;
        $facturas->subtot = $request->subtot;
        $facturas->total = $request->total;
        $facturas->fecvenc = date("Y-m-d h:i",strtotime(date("Y-m-d h:i")."+ 30 days"));
        $facturas->observaciones = $request->observaciones;
        if($request->condicion == 'Credito'){
            $facturas->estfac = 'Pendiente';
        }else{ $facturas->estfac = 'Completada'; }
        $facturas->save();
        $numfac = $facturas->numfac;

        $condicion = $request->condicion;

        $detalle = new detalle_factura();

        $detalle->numfac = $numfac;
        $detalle->codpro = $request->codpro;
        $detalle->concepto = $request->concepto;
        $detalle->cantidad = $request->cantidad;
        $detalle->precio = $request->total;
        if($request->condicion == 'Credito'){
            $detalle->estfac = 'Pendiente';
        }else{ $detalle->estfac = 'Completada'; }
        $detalle->save();

        $cliente = $request->codcli;
        
        $cuentas = new cuentas();

        if($condicion == 'Credito'){
            $cuentas->codcli = $request->codcli;
            $cuentas->numfac = $numfac;
            $cuentas->balance = $request->total;
            $cuentas->totpag = 0;
            $cuentas->balpend = $request->total;
            $cuentas->save();
        }

        return redirect()->to('Facturacion')->with('success', 'Formulario enviado correctamente!');
    }

    public function query(){
        return view('consultarFacturas');
    }
}
