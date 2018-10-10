<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class His_per extends Model
{
   protected $fillable = [
        'codigo', 'puesto','resultado','observacion','estatus','per_id','usu_id'
    ];


}
