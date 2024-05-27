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

    protected $guarded = []; //TUDO QUE FOR ENVIADO PELO POST NAO TEM NENHUM RESTRICAO

    public function user() {

        return $this->belongsTo('App\Models\User'); // pertence ao model User
    }


    public function users() {
        return $this->belongsToMany('App\Models\User');
    }

}
