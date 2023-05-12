<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produto_mensagems', function (Blueprint $table) {
            $table->id();
            $table->text('mensagem');
            $table->timestamps();
            $table->foreignId('produto_id')
                ->references('id')->on('produtos')
                ->cascadeOnDelete();
            $table->foreignId('usuario_id')
                ->references('id')->on('usuarios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produto_mensagems');
    }
};
