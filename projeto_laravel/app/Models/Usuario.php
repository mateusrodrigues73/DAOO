<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Usuario extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'nome',
        'sobrenome',
        'email',
        'senha',
        'estatus',
        'imagem',
        'papel',
        'media_de_avaliacoes',
        'total_de_avaliacoes'
    ];

    protected $hidden = [
        // 'password',
        'remember_token',
    ];

    public function forums()
    {
        return $this->hasMany(Forum::class);
    }

    public function produtos()
    {
        return $this->hasMany(Produto::class);
    }

    public function produtoImagens(){
        return $this->hasManyThrough(ProdutoImagem::class, Produto::class);
    }
}
