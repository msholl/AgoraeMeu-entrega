<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pedido>
 */
class PedidoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cliente_id' => $this->faker->randomElement(Cliente::pluck('id')),
            'pagamento' => $this->faker->word,
            'envio' => $this->faker->randomElement(["motoboy","correios","retirada"]),
            'vendedor' => $this->faker->name,
            'descricao' => $this->faker->text,
            'valor' => $this->faker->randomFloat(2, 0, 999.99),
            'status' => $this->faker->randomElement(["aguardando","enviado","cancelado"]),
            'data' => $this->faker->date( 'Y-m-d', 'now'),
        ];
    }
}
