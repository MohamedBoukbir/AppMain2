<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubscribePaypal extends Model
{
    use HasFactory;


    protected $fillable=[
        'email',
        'payerstatus',
        'firstName',
        'lastName',
        'countrycode',
        'currencycode',
        'amt',
        'user_id',
        'enddate',
    ];


    public function user( )
    {
        return $this->belongsTo(User::class);
        # code...
    }
}
