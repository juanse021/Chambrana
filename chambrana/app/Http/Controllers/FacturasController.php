<?php

namespace App\Http\Controllers;

use App\Detalle;
use App\Factura;
use App\Mesa;
use App\Producto;
use Illuminate\Http\Request;

class FacturasController extends Controller
{
    //

    public function index(){
        $facturas = Factura::all();
        return view('facturas')->with(
            [
                'facturas' => $facturas
            ]
        );
    }

    public function show($id){
        $factura = Factura::find($id);
        $detalles = $factura->detalle;
        return view('ver_factura')->with(
            [
                'factura' => $factura,
                'detalles' => $detalles
            ]
        );
    }
    public function mesas()
    {
        $mesas = Mesa::all();
        return view('cajamesas')->with(
            [
                'mesas' => $mesas
            ]
        );
    }

    public function abrirFactura($id)
    {
        $mesa = Mesa::findOrFail($id);
        $factura = Factura::where([
            ['id_mesa', $mesa->id],
            ['esta_pago', 0]
        ])->get()->first();
        if(is_null($factura)){

            $factura = Factura::create([
                'fecha' => date('Y-m-d H:i:s'),
                'id_mesa' => $mesa->id,
                'total' => 0.00,
                'esta_pago' => 0,
            ]);
        }

        $productos = Producto::all();

        $detalles = $factura->detalle;
        return view('factura')->with(
            [
                'factura' => $factura,
                'productos' => $productos,
                'detalles' => $detalles
            ]
        );
    }

    public function agregarProducto(Request $request)
    {
        $rtAjax = [
            'ok' => false,
            'error' => ''
        ];
        try{
            $input = $request->all();
            $factura = Factura::findOrFail($input['id_factura']);
            $producto = Producto::findOrFail($input['producto']);
            $cantidad = (int) $input['cantidad'];
            $detalle = Detalle::create([
                'id_factura' => $factura->id,
                'id_producto' => $producto->id,
                'cantidad' => $cantidad,
            ]);
            $factura->total += $producto->precio * $cantidad;
            $factura->save();
            $rtAjax['ok'] = true;
        }
        catch(\Exception $e){
            $rtAjax['ok'] = false;
            $rtAjax['error'] = $e . '';
        }
        return $rtAjax;

    }

    public function pagar($id, Request $request){
        $factura = Factura::findOrFail($id);
        $factura->esta_pago = 1;
        $factura->save();
        return redirect()->route('caja');
    }
}
