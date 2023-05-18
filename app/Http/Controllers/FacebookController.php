<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class FacebookController extends Controller
{
    public function facebookpage(){
    return Socialite::driver('facebook')->redirect('facebookrederectelogin');
 
    }
    public function facebookredirect(){
        // try{
        $user=Socialite::driver('facebook')->user();
        //  dd($user->id);
            $finduser =User::where('facebook_id',$user->id)->first();
            if( $finduser){
                Auth::login($finduser);
                return redirect()->intended('dashboard');
            }else{
                $nom=explode(' ',$user->name);
                $newUser=User::updateOrCreate([
                      'email'=>$user->email,
                       'username'=>$nom[1].'_'.rand(0,1000),
                        'facebook_id'=>$user->id,
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
