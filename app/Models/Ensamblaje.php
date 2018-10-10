<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Ensamblaje extends Model
{
    protected $fillable = [
        'codigo','etiqueta','cantidad','consecutivo','orden_pro','estatus'
    ];
}
