<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contabilidad extends Model
{
    //
    protected $fillable = [
        'fecha',
    ];

    protected $table = 'contabilidades';

    public function facturas(){
        return $this->hasMany('App\Factura', 'id_contabilidad');
    }
}
