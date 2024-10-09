<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Guia extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $fillable = [
        'silabo_id',
        'detalle_silabo_id',
        'carrera_id',
        'sede_id',
        'asignatura_id',
        'objetivo_conceptual',
        'objetivo_procedimental',
        'objetivo_actitudinal',
      ];

      public $table = 'guias';

}
