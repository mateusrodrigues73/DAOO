<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Usuario;
use App\Models\Produto;
use App\Models\Forum;
use App\Models\ProdutoImagem;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Usuario::factory(50)->has(
            Produto::factory(5)->has(
                ProdutoImagem::factory()
            )
        )->has(
            Forum::factory(2)
        )->create();

        Usuario::factory()->create([
            'nome' => 'admin',
            'sobrenome' => 'admin',
            'email' => 'admin@gmail',
            'papel' => 'admin',
            'senha' => Hash::make('admin')
        ]);
    }
}
