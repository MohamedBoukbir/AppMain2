<?php

namespace App\Models;
// use Laravel\Cashier\Subscription ;
use Laravel\Cashier\Subscription as CashierSubscription;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subscription extends CashierSubscription
{
    use HasFactory;
}
