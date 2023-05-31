<?php

namespace App\Models;

use App\Models\User;
use App\Models\Annonce;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Appliedjobs extends Model
{
    use HasFactory;
    protected $fillable = [
        'apply',
        'decline',
        'user_id',
        'annonce_id',
    ];

    
    public function user( )
    {
        return $this->belongsTo(User::class);
    }
    public function annonces( )
    {
return $this->belongsTo(Annonce::class);

    }
}
