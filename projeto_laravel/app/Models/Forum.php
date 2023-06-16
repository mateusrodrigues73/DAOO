<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo',
        'tema',
        'usuario_id'
    ];

    public function usuario(){
        return $this->belongsTo(Usuario::class);
    }
}
