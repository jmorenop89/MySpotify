<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Artista extends Model
{
    use SoftDeletes;

    public $table = 'artista';

    public $fillable = [
        'nombre','apellido','nacionalidad'
    ];
}
