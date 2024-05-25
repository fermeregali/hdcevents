<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    //Faz o cast sinalizando para o Laravel que o items eh um array e nao uma string.
    protected $casts = [
        'items' => 'array'
    ];


    //Informar para o laravel que possui campo date.
    protected $dates = ['date'];
}
