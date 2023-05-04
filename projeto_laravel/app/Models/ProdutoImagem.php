<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdutoImagem extends Model
{
    use HasFactory;

    protected $fillable = [
        'capa',
        'imagem1',
        'imagem2',
        'imagem3',
        'imagem4',
        'imagem5',
        'produto_id'
    ];

    
}
