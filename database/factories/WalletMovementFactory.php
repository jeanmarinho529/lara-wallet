<?php

namespace Database\Factories;

use App\Models\TypeTransactions;
use App\Models\Wallet;
use Illuminate\Database\Eloquent\Factories\Factory;

class WalletMovementFactory extends Factory
{
    public function definition(): array
    {
        return [
            'type_transaction_id' => TypeTransactions::factory(),
            'wallet_id' => Wallet::factory(),
            'amount' => $this->faker->numberBetween(1, 999)
        ];
    }
}
