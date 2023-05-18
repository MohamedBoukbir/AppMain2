<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        DB::table('users')->insert([
            [ 
              'username'=>'Admin1',
              'email' =>'admin@homehelp.org',
              'password' =>bcrypt('test12345'),
        ],
            [ 
                   'username'=>'candidat',
                   'email'=>'candidat@gmail.com',
                   'password'=>bcrypt('test12345')
                ],
               [
                            'username'=>'famille',
                            'email'=>'famille@gmail.com',
                            'password'=>bcrypt('test12345'),
                        ],

        ]);





    }
}
