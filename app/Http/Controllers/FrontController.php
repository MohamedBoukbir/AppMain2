<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function searchfront( Request $request) {

        // $request->validate([

        //     'q' => 'required'
        // ]);

        
if ( $request->location || $request->category){
    switch ($request->category) {
        case 'childminder':
           
            // $users = User::whereRoleIs('candidat')
            // ->where('childminder', $request->category)
            // ->orWhere('country',$request->location)->paginate("");
            // dd($users);

            $users = User::whereRoleIs('candidat')
            ->where(function ($query) use ($request) {
                $query->where('childminder', $request->category)
                      ->orWhere('country', $request->location);
            })
            ->paginate();
            break;
        case 'nanny':
            // $users = User::whereRoleIs('candidat')
            // ->where('nanny', $request->category)
            // ->orWhere('country',$request->location)->paginate("");
            $users = User::whereRoleIs('candidat')
            ->where(function ($query) use ($request) {
                $query->where('nanny', $request->category)
                      ->orWhere('country', $request->location);
            })
            ->paginate();
           
            break;
        case 'maid':
            // $users = User::whereRoleIs('candidat')
            // ->where('maid', $request->category)
            // ->orWhere('country',$request->location)->paginate("");
            $users = User::whereRoleIs('candidat')
            ->where(function ($query) use ($request) {
                $query->where('maid', $request->category)
                      ->orWhere('country', $request->location);
            })
            ->paginate();
            break;
        default:
        // $users = User::whereRoleIs('candidat')
        // ->where('babysitter', $request->category)
        // ->orWhere('country',$request->location)->paginate("");

        $users = User::whereRoleIs('candidat')
        ->where(function ($query) use ($request) {
            $query->where('babysitter', $request->category)
                  ->orWhere('country', $request->location);
        })
        ->paginate();
    }
    return view('front.welcome',compact('users'));

}
return back();
    }
}
