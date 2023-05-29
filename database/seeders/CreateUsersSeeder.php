<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create(['username' => 'Admin',
                             'email' =>'mohamed.boukbir@uit.ac.ma',
                             'password' =>Hash::make('test12345'),
        ]); 
        $admin->attachRole('admin');
     
        $candidat=User::create(['username' => 'candidat',
                                'email' =>'candidat@gmail.com',
                                'password' =>Hash::make('test12345'),
        ]); 
         $candidat->attachRole('candidat');
         

        $famille=User::create(['username' => 'famille',
                                'email' =>'famille@gmail.com',
                                'password' =>Hash::make('test12345'),
        ]); 
        $famille->attachRole('famille');
    }
}
