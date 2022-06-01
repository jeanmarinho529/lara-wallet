<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeTransactions extends Model
{
    use HasFactory;

    public const DEPOSIT = 'deposit';
    public const WITHDRAW = 'withdraw';
    public const TRANSFER = 'transfer';

    protected $table = 'type_transactions';

    protected $fillable = [
        'name'
    ];

}
