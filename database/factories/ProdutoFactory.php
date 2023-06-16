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
        $names=['boné', 'chapeu', 'bermuda', 'calça' , 'tenis', 'sapato', 'gravata', 'terno', 'bota', 'chinelo','cama', 'carro','patins','ps5','xbox','fal','ak49','m4'] ;
        return [
            'name' => $this->faker->randomElement($names),
            'price' => $this->faker->randomFloat(2,1, 50000),
            'quantity' => $this->faker->numberBetween(1, 10000),
        ];
    }
}
