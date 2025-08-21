<?php

namespace Database\Factories;

use App\Models\Classe;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Secao>
 */
class SecaoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => random_int(1000, 9999), // numero aleatorio de 4 digitos
            'classe_id' => Classe::inRandomOrder()->first()->id
        ];
    }
}
