<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cpf' => fake()->cpf(false),
            'nome' => fake()->firstName(),
            'sobrenome' => fake()->lastName(),
            'email' => fake()->unique()->safeEmail(),
            'telefone' => fake()->cellphoneNumber(false),
            'cep' => fake()->postcode(),
            'logradouro' => fake()->streetName(),
            'numero' => fake()->buildingNumber(),
            'complemento' => fake()->secondaryAddress(),
            'bairro' => fake()->streetSuffix(),
            'cidade' => fake()->city(),
            'estado' => fake()->stateAbbr(),

        ];
    }
}
