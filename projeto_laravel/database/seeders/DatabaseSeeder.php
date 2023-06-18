<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Usuario;
use App\Models\Produto;
use App\Models\Forum;
use App\Models\ProdutoImagem;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Usuario::factory(50)->has(
        //     Produto::factory(5)->has(
        //         ProdutoImagem::factory()
        //     )
        // )->create();

        Usuario::factory(50)->has(
            Produto::factory(5)->has(
                ProdutoImagem::factory()
            )
        )->has(
            Forum::factory(2)
        )->create();

        // Forum::factory(1)
        //     ->recycle(
        //         Usuario::factory(50)->has(
        //                 Produto::factory(5)->has(
        //                     ProdutoImagem::factory()
        //                 )
        //             )->create()
        //     )->create();
    }
}
