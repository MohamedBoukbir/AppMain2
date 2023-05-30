<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FrontController extends Controller
{
 public function indexfront(){
    $childminders=count(User::whereRoleIs('candidat')
                   ->where('childminder','childminder')->get());
    $nannys=count(User::whereRoleIs('candidat')
            ->where('nanny','nanny')->get());
    $maids= count(User::whereRoleIs('candidat')
    ->where('maid','maid')->get());
    $babysitters=count(User::whereRoleIs('candidat')
    ->where('babysitter','babysitter')->get()) ;
    $users=User::where('maid',1)->get();

    $first2childminder=User::whereRoleIs('candidat')
                    ->where('childminder','childminder')
                    ->orderBy('rate', 'desc') 
                    ->take(2)
                    ->get();
    
    $first2nanny=User::whereRoleIs('candidat')
                    ->where('nanny','nanny')
                    ->orderBy('rate', 'desc') 
                    ->take(2)
                    ->get();

    $first2maid=User::whereRoleIs('candidat')
                    ->where('maid','maid')
                    ->orderBy('rate', 'desc') 
                    ->take(2)
                    ->get();
     $first2babysitter=User::whereRoleIs('candidat')
                    ->where('babysitter','babysitter')
                    ->orderBy('rate', 'desc') 
                    ->take(2)
                    ->get();

    return view('front.welcome',compact('childminders','users','nannys','maids','babysitters','first2childminder','first2nanny','first2maid','first2babysitter'));
 }



    public function searchfront( Request $request) {   
if ( $request->location || $request->category){
    switch ($request->category) {
        case 'childminder':
            $users = User::whereRoleIs('candidat')
            ->where(function ($query) use ($request) {
                $query->where('childminder', $request->category)
                      ->orWhere('country', $request->location);
            })
            ->paginate();
            break;
        case 'nanny':
          
            $users = User::whereRoleIs('candidat')
            ->where(function ($query) use ($request) {
                $query->where('nanny', $request->category)
                      ->orWhere('country', $request->location);
            })
            ->paginate();
           
            break;
        case 'maid':
            $users = User::whereRoleIs('candidat')
            ->where(function ($query) use ($request) {
                $query->where('maid', $request->category)
                      ->orWhere('country', $request->location);
            })
            ->paginate();
            break;
        default:
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


      ///////////////////////////////////////////// Shearch //////////////////

      public function livesearchfront(Request $request){
        // $users = User::whereRoleIs(['famille', 'candidat'])->orderBy('id', 'desc')->paginate("");
      if($request->ajax() && $request->username <> ''){
          $data = User::whereRoleIs('candidat')
                 ->where('username','LIKE',$request->username.'%')->get();
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
}
