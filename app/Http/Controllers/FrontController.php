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

        // dd( $request->location);
if ( $request->username){
    dd('username');
}elseif($request->location && $request->category){
    dd('location or ');
}else{
   $request->validate([
            'username' => 'required'
        ]);  
}
    

        $filteredUsers = User::where('nom', 'like', '%' . $q . '%')
                                ->orWhere('prenom', 'like', '%' . $q . '%')->paginate("");
                                // ->get();
         
            // $filteredUsers->paginate("3");
                                
        if ($filteredUsers->count()) {

            return view('utilisateurs.index')->with([
                'utilisateurs' =>  $filteredUsers
            ]);
        } else {

            return redirect()->route('utilisateurs.index')->with('success','aucun résultat');
        }
        
    }
}
