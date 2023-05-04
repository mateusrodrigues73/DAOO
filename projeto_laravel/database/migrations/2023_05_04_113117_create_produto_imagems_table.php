<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('produto_imagems', function (Blueprint $table) {
            $table->id();
            $table->text('capa');
            $table->text('imagem1');
            $table->text('imagem2');
            $table->text('imagem3');
            $table->text('imagem4');
            $table->text('imagem5');
            $table->timestamps();
            $table->foreignId('produto_id')
                ->references('id')->on('produtos')
                ->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('produto_imagems');
    }
};
