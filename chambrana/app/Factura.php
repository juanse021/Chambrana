<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    //
    protected $fillable = [
        'fecha', 'id_mesa', 'id_contabilidad', 'esta_pago', 'total'
    ];

    protected $table = 'facturas';

    public function mesa(){
        return $this->belongsTo('App\Models\Diplomado', 'id_mesa');

    }

    public function productos(){
        return $this->hasMany('App\Producto', 'id_factura');
    }

    public function contabilidad(){
        return $this->belongsTo('App\Contabilidad', 'id_contabilidad');

    }

}
