<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Detalle_silabo extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $fillable =[
        'silabos',
        'encuentro',
        'fecha',
        'unidades_id',
        'objetivos_id',
        'contenidos_id',
        'forma_organizativa_id',
        'forma_organizativa_detalle',
        'metodologia',
        'horas_presenciales',
        'horas_trabajo_independiente',
        'evaluacion_id',
        'evaluacion_detalle',
        'observaciones',
    ];

    public $table = 'detalle_silabos';
}
