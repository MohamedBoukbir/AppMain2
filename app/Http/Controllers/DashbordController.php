<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashbordController extends Controller
{
    public function logincontrole()
    {
        
        try{
           
        $user = Auth::user();
        switch ($user) {
            case $user->hasRole('admin'):
                $users = User::whereRoleIs(['famille', 'candidat'])->orderBy('id', 'desc')->paginate("");
                // $users = User::whereNull(['email_verified_at'])->orderBy('id', 'desc')->paginate("");
                $familles = User::whereRoleIs('famille')->orderBy('id', 'desc')->paginate("");
                $candidats = User::whereRoleIs('candidat')->orderBy('created_at', 'asc')->paginate("");
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
    }catch(Exception $e){
    return view('front.welcome'); 

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



    ///////////////////////////////////////////// Shearch //////////////////

    public function liveSearch(Request $request){
         $users = User::whereRoleIs(['famille', 'candidat'])->orderBy('id', 'desc')->paginate("");
      if($request->ajax() && $request->username <> ''){
          $data = User::where('username','LIKE',$request->username.'%')->get();
          $output='';
          if (count( $data)>0){
            $output .='<ul class="list-group" style="display:block; position:relative; z-indez:1">';
            foreach($data as $row){
                $output .='<li class="list-group-item">'.$row->username.'</li>';
            }
            $output .='</ul>';
          }else{
            $output .='<li class="list-group-item"> No Data Found</li>';
          }
          return $output;
      }
        return view ('admin.adminHome');

    }
 ///////////////////////////////////////////////////////////////////


 public function search( Request $request) {

    $request->validate([

        'username' => 'required'
    ]);

    $username = $request->username;
    $familles = User::whereRoleIs('famille')->orderBy('id', 'desc')->paginate("");
    $candidats = User::whereRoleIs('candidat')->orderBy('created_at', 'asc')->paginate("");
    $users = User::where('username', 'like', '%' . $username . '%')
                             ->paginate("");
                            // ->get();
     
        // $filteredUsers->paginate("3");
                            
    // if ($filteredUsers->count()) {
// foreach($users as $row){
//     dd($row->username);
// }
    return view('admin.adminHome', compact('users', 'familles', 'candidats'));
    // } else {

    //     return redirect()->route('utilisateurs.index')->with('success','search failed ,, please try again');
    // }
    
}
}
