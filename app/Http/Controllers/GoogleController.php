<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
   
    public function loginWithGoogle(){
        return Socialite::driver('google')->redirect();
        }
    
        public function googleredirect(){
            // try{
            //    dd('nadi');
            $user=Socialite::driver('google')->user();
            //    dd($user);
                $finduser =User::where('google_id',$user->id)->first();
                if( $finduser){
                    Auth::login($finduser);
                    return redirect()->intended('dashboard');
                }else{
<<<<<<< HEAD
                    // $nom=explode(' ',$user->name);
                    // if($nom[1])
                    // {
                    // $name=$nom[1];
                    // }else{
                    //     $name=$nom[0];  
                    // }
                    // dd($user->geven);
                    //  dd( );
                    $newUser=User::updateOrCreate([
                          'email'=>$user->email,
                           'username'=>$user->user["given_name"].'_'.rand(0,1000).''.strlen(rand(0,26)),
=======
                    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                    $randomString = '';
                 
                    for ($i = 0; $i < 5; $i++) {
                        $index = rand(0, strlen($characters) - 1);
                        $randomString .= $characters[$index];
                    }
                    $newUser=User::updateOrCreate([
                          'email'=>$user->email,
                           
                           'username'=>$user->user["given_name"].'_'.$randomString,
>>>>>>> 78d372c441cf00f4ed3b15a276a9cffbfc8b64c9
                            'google_id'=>$user->id,
                            'password'=>Hash::make($user->name.'123456'), 
                    ]);
                    // if (session()->has('user')) {
                    //     $newUser->attachRole(session()->get('user'));
                    // }
                    // session()->forget('user');
                    Auth::login($newUser);
                    return redirect()->intended('dashboard');
                }
    
               
            // }catch(Exception $e){
            //     // dd($user->email);
            //     dd($e->getMessage()); 
    
            // }
        }
}
