<?php

namespace App\Http\Controllers;

use App\Factura;
use App\Mesa;
use App\Producto;
use Illuminate\Http\Request;

class FacturasController extends Controller
{
    //
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

        return view('factura')->with(
            [
                'factura' => $factura,
                'productos' => $productos
            ]
        );
    }
}
