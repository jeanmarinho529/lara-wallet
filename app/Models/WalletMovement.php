<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WalletMovement extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'wallet_movements';

    protected $fillable = [
        'type_transaction_id',
        'wallet_id',
        'amount'
    ];

}
