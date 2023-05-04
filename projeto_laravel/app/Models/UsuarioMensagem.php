<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioMensagem extends Model
{
    use HasFactory;

    protected $fillable = [
        'mensagem',
        'remetente_id',
        'destinatario_id'
    ];
}
