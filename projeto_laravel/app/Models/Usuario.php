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

    public function produtos()
    {
        return $this->hasMany(Produto::class);
    }

    public function produtoImagens(){
        return $this->hasManyThrough(ProdutoImagem::class, Produto::class);
    }
}
