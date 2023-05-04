<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProdutoImagem>
 */
class ProdutoImagemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'capa' => fake()->word() . 'png',
            'imagem1' => fake()->word() . 'png',
            'imagem2' => fake()->word() . 'png',
            'imagem3' => fake()->word() . 'png',
            'imagem4' => fake()->word() . 'png',
            'imagem5' => fake()->word() . 'png'
        ];
    }
}
