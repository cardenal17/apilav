<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class His_en extends Model
{
    protected $fillable = [
        'codigo', 'resultado','puesto','observacion','estatus','ens_id','usu_id'
    ];
}

