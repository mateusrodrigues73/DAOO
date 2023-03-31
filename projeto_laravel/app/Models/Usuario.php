<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'sobrenome',
        'email',
        'senha',
        'estatus',
        'estatus',
        'imagem',
        'administrador',
        'media_de_avaliacoes',
        'total_de_avaliacoes'
    ];
}
