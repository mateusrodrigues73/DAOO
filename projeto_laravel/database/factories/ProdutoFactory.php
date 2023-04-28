<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produto>
 */
class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'modelo' => fake()->word(),
            'marca' => fake()->company(),
            'categoria' => fake()->word(),
            'informacoes' => fake()->paragraph(),
            'preco' => fake()->randomFloat(2, 10, 10000)
        ];
    }
}
