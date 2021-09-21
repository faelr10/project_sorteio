<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use Notifiable;

    protected $table = 'usuarios';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nome','cpf','email','login', 'senha',
    ];

    protected $hidden = [
        'senha'
    ];

    public $timestamps = false;

    public function sorteio(){
        return $this->hasMany(Sorteio::class,'id_usuarios');
    }

}
