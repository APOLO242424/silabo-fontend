<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plan extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $fillable = [
        'silabo_id',
        'sede_id',
        'detalle_silabo_id',
        'objetivo_conceptual',
        'objetivo_procedimental',
        'objetivo_actitudinal',
        'primer_momento',
        'segundo_momento',
        'tercer_momento',
        'aplicacion_eje',
        'observaciones',
      ];

      public $table = 'plans';
}
