<?php

namespace App\Http\Controllers;

use Exception;
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
            try{
            //    dd('nadi');
            $user=Socialite::driver('google')->user();
            //    dd($user);
                $finduser =User::where('google_id',$user->id)->first();
                if( $finduser){
                    Auth::login($finduser);
                    return redirect()->intended('dashboard');
                }else{
                    $nom=explode(' ',$user->name);
                    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                    $randomString = '';
                    for ($i = 0; $i < 5; $i++) {
                        $index = rand(0, strlen($characters) - 1);
                        $randomString .= $characters[$index];
                    }
                    // return $randomString;
                    // dd($user->user["given_name"]);
                    $newUser=User::updateOrCreate([
                          'email'=>$user->email,
                           'username'=>$user->user["given_name"].'_'.$randomString,
                            'google_id'=>$user->id,
                            'password'=>Hash::make($user->name.'123456'), 
                    ]);
                    Auth::login($newUser);
                    return redirect()->intended('dashboard');
                }
    
               
            }catch(Exception $e){
                return view('front.welcome'); 
    
            }
        }
}
