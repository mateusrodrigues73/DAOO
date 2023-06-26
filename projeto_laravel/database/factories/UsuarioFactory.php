<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
 */
class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => fake()->firstName(),
            'sobrenome' => fake()->lastName(),
            'email' => fake()->unique()->safeEmail(),
            'senha' => fake()->password(), 
            'estatus' => fake()->boolean(),
            'imagem' => fake()->word() . '.png',
            'media_de_avaliacoes' => fake()->randomFloat(1, 0, 5),
            'total_de_avaliacoes' => fake()->numberBetween(0, 100),
            'remember_token' => Str::random(10),
        ];
    }
}
