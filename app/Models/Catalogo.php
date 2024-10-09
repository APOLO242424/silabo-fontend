<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Catalogo extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $fillable = [
        'nombre',
        'depende_de'
    ];
    public $table = 'catalogos';
}
