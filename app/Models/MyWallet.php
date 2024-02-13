<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Bavix\Wallet\Models\Wallet as WalletBase;
class MyWallet extends WalletBase 
{
    use HasFactory;

    public function helloWorld(): string { return "hello world"; }
}
