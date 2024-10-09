<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Silabo extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $fillable =[
        'asignatura_id',
        'user_id',
        'sede_id',
        'anio_lectivo_id',
        'tipo_evaluacion_id',
        'trimestre_id',
    ];

    public $table = 'silabos';

}
