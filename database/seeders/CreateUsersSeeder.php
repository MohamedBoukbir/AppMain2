<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;

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
                             'type' =>'admin',
                             'email_verified_at'=>Carbon::now()
        ]); 
        $admin->attachRole('admin');
     
        $candidat=User::create(['username' => 'candidat',
                                'email' =>'candidat@gmail.com',
                                'password' =>Hash::make('test12345'),
                                'type' =>'candidat',
                                'rate' =>5,
                                'email_verified_at'=>Carbon::now()
        ]); 
         $candidat->attachRole('candidat');

         //////////////// !test  candidat ///////////////////

         $candidat1=User::create(['username' => 'candidat1',
         'email' =>'candidat1@gmail.com',
         'password' =>Hash::make('test12345'),
         'type' =>'candidat',
         'rate' =>1,
         'email_verified_at'=>Carbon::now()
            ]); 
            $candidat1->attachRole('candidat');

            $candidat2=User::create(['username' => 'candidat2',
            'email' =>'candidat2@gmail.com',
            'password' =>Hash::make('test12345'),
            'type' =>'candidat',
            'rate' =>2,
            'email_verified_at'=>Carbon::now()
               ]); 
               $candidat2->attachRole('candidat');
               $candidat3=User::create(['username' => 'candidat3',
               'email' =>'candidat3@gmail.com',
               'password' =>Hash::make('test12345'),
               'type' =>'candidat',
               'rate' =>3,
               'email_verified_at'=>Carbon::now()
                  ]); 
                  $candidat3->attachRole('candidat');
                  $candidat4=User::create(['username' => 'candidat4',
                  'email' =>'candidat4@gmail.com',
                  'password' =>Hash::make('test12345'),
                  'type' =>'candidat',
                  'rate' =>4,
                  'email_verified_at'=>Carbon::now()
                     ]); 
                 $candidat4->attachRole('candidat');

          //////////////// !test ///////////////////

        $famille=User::create(['username' => 'famille',
                                'email' =>'famille@gmail.com',
                                'password' =>Hash::make('test12345'),
                                'type' =>'famille',
                                'email_verified_at'=>Carbon::now()
        ]); 
        $famille->attachRole('famille');
    }
}
