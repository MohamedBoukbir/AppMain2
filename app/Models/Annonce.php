<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Annonce extends Model
{
    use HasFactory;


    protected $fillable = [
        'helper_nationality',
        'gender',
        'religion',
        'education_level',
        'contract_situation',
        'monthly_salary',
        'currency_coin',
        'define_needs',
        'title_of_offer',
        'address',
        'phone',
        'country',
        'child_baby',
        'child_kid',
        'child_boy',
        'type_of_employment',
        'living_arrangement',
        'accommodation',
        'day_off',
        'expected_start_date',
        'user_id',
        'status',
    ];

    
    public function user( )
    {
        return $this->belongsTo(User::class);
        # code...
    }

}
