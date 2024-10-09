<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Asignatura extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $fillable =[
        'nombre',
        'codigo',
        'area_formacion_id',
        'area_diciplinaria_id',
        'modaliadad_id',
        'reguimen_id',
        'anio_academico_id',
        'plan_estudio_id',
        'prerrequisitos',
        'creditos',
        'horas_precenciales',
        'horas_trabajo_independiente',
        'frecuencia',
        'fehca_aprobacion',
        'autorizado_por',
    ];
    public $table = 'asignaturas';
}
