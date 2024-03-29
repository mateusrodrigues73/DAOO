<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    protected $fillable = [
        'modelo',
        'marca',
        'categoria',
        'informacoes',
        'preco',
        'usuario_id'
    ];

    public function usuario(){
        return $this->belongsTo(Usuario::class);
    }

    public function produtoImagem()
    {
        return $this->hasOne(ProdutoImagem::class);
    }
}
