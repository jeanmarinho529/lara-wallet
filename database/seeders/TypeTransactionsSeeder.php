<?php

namespace Database\Seeders;

use App\Models\TypeTransactions;
use Illuminate\Database\Seeder;

class TypeTransactionsSeeder extends Seeder
{
    public function run(): void
    {
        foreach ($this->types() as $type) {
            TypeTransactions::firstOrCreate([
                'name' => $type
            ]);
        }
    }

    private function types(): array
    {
        return [
            TypeTransactions::DEPOSIT,
            TypeTransactions::WITHDRAW,
            TypeTransactions::TRANSFER
        ];
    }
}
