<?php

namespace App\Http\Controllers;

use App\Mesa;
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
}
