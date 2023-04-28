<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->text('modelo');
            $table->text('marca');
            $table->text('categoria');
            $table->text('informacoes');
            $table->float('preco');
            $table->timestamps();
            $table->foreignId('usuario_id')
                ->references('id')->on('usuarios')
                ->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
