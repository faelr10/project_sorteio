<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sorteio extends Model
{
    protected $table = 'sorteio';
    protected $primaryKey = 'id';
    protected $foreingKey = 'id_usuarios';

    protected $fillable = [
        'nome','quantidade','valor','porcentagem','id_usuarios',
    ];

    public $timestamps = false;

    public function user(){
        return $this->belongsTo(Usuario::class,'id');
    }

}
