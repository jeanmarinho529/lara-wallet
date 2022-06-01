<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWalletMovementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wallet_movements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('type_transaction_id');
            $table->unsignedBigInteger('wallet_id');
            $table->double('amount', 8, 2);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('type_transaction_id', 'fk_wallet_movements_type_transaction_id')
                ->references('id')
                ->on('type_transactions');

            $table->foreign('wallet_id', 'fk_wallet_movements_wallet_id')
                ->references('id')
                ->on('wallets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wallet_movements');
    }
}
