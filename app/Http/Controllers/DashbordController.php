<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashbordController extends Controller
{
    public function logincontrole()
    {
        $user = Auth::user();
        switch ($user) {
            case $user->hasRole('admin'):
                $users = User::whereRoleIs(['famille', 'candidat'])->orderBy('id', 'desc')->paginate("");
                $familles = User::whereRoleIs('famille')->orderBy('id', 'desc')->paginate("");
                $candidats = User::whereRoleIs('candidat')->orderBy('id', 'desc')->paginate("");
                return view('admin.adminHome', compact('users', 'familles', 'candidats'));
                break;
            case $user->hasRole('famille'):
                return view('front.dashboard-account');
                break;
            case $user->hasRole('candidat'):
                return view('candidat');
                break;
            default:
                return redirect()->route('users.selectusernorole');
        }
    }

    public function selectusernorole()
    {
        $user = [
            'usernorol' => 'candidat',
        ];
        return view('front.selectusernohasrol', compact('user'));
    }


    public function usernoroleAtacher($user)
    {
       $users = Auth::user();
        $users->attachRole($user);
        return redirect()->route('dashboard');
    }



    // public function selectUser()
    // {
    //     $user = [
    //         'users' => 'candidat',
    //     ];
    //     return view('front.selectuser', compact('user'));
    // }

    // public function userAtacher($user)
    // {
        // dd($user);
    //     session()->put('user', $user);
    //     return view('front.signup');
    // }

    /// where usernohasrol
 
}
