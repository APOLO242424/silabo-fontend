<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Horario extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $fillable = [
       'carreara_id',
        'user_id',
        'aula_id',
        'sade_id',
        'anio_lecticvo_id',
     ];
     public $table = 'horarios';

}
