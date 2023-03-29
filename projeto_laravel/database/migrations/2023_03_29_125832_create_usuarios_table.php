<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->text('nome');
            $table->text('sobrenome');
            $table->text('email');
            $table->text('senha');
            $table->boolean('estatus');
            $table->text('imagem');
            $table->boolean('administrador');
            $table->float('media_de_avaliacoes');
            $table->integer('total_de_avaliacoes');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
