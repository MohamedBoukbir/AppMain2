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
        try{
        $user=Socialite::driver('facebook')->user();
            $finduser =User::where('facebook_id',$user->id)->first();
            if( $finduser){
                Auth::login($finduser);
                return redirect()->intended('dashboard');
            }else{
                $findmail =User::where('email',$user->email)->first();
            
                if($findmail){

                    return redirect()->route('signup');
                }else{
                $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $randomString = '';
             
                for ($i = 0; $i < 5; $i++) {
                    $index = rand(0, strlen($characters) - 1);
                    $randomString .= $characters[$index];
                }
                $newUser=User::updateOrCreate([
                      'email'=>$user->email,
                       'username'=>$user->name.'_'.$randomString,
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
            }

           
        }catch(Exception $e){
            // dd($user->email);
            return view('front.welcome'); 

        }
    }
}
