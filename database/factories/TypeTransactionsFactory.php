<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TypeTransactionsFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->name()
        ];
    }
}
