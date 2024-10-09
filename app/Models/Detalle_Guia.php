<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Detalle_Guia extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $fillable =[
        'guia_id',
        'detalle_silabo_id',
        'actividades',
        'evaluacion',
        'recursos',
        'fecha',
    ];

    public $table = 'detalle_guias';
}
