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
                    $newUser=User::updateOrCreate([
                          'email'=>$user->email,
                           'username'=>$user->name,
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
