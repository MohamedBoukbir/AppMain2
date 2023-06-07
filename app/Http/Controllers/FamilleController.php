<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Liked;
use Carbon\Carbon;
use App\Models\Annonce;
use App\Models\Subscribe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class FamilleController extends Controller
{
    public function index()
    {
        $upgrade=Subscribe::where('user_id',auth()->user()->id)
        ->where('enddate','>',Carbon::now())->first();
        return view('front.dashboard-account',compact('upgrade'));
    }


//     public function create()
//     {
//         return view('familles.add-famille');
//     }

// public function store(Request $request)
//     {
//         $request->validate([
//             'firstName' => 'required',
//             'lastName' => 'required',
//             'email' => 'required',
//             'password' => 'required',
//             'address' => 'required',
//             'country' => 'required',
//             'phone' => 'required',
//             'religion' => 'required',
//             'domain' => 'required',
//             'child' => 'required',
//             'social_status' => 'required',

//         ]);

//         $user = new User();
        
//         $user->firstName = $request->firstName;
//         $user->lastName = $request->lastName;
//         $user->email = $request->email;
//         $user->password = Hash::make($request->password);
//         $user->address = $request->address;
//         $user->country = $request->country;
//         $user->phone = $request->phone;
//         $user->religion = $request->religion;
//         $user->domain = $request->domain;
//         $user->child = $request->child;
//         $user->social_status = $request->social_status;
//         $user->type='famille';

//         $user->save();
//         return redirect()->route('familles.familleHome')->with('success','famille  Ajouter ');
//     }
// edit famille
    // public function edit(User $famille)
    // {
    //     return view('familles.edit-famille',compact('famille'));
    // }

    // public function update(Request $request, User $famille)
    // {
        
    //     $request->validate([
    //         'firstName' => 'required',
    //         'lastName' => 'required',
    //         'password' => 'required',
    //         'address' => 'required',
    //         'country' => 'required',
    //         'phone' => 'required',
    //         'religion' => 'required',
    //         'domain' => 'required',
    //         'child' => 'required',
    //         'social_status' => 'required', 
    //     ]);
    //     $famille = User::find($famille->id);

    //     if($famille->email == $request->email){
    //         $famille->firstName = $request->firstName;
    //         $famille->lastName = $request->lastName;
    //         // $famille->email = $request->email;
    //         $famille->password = Hash::make($request->password);
    //         $famille->address = $request->address;
    //         $famille->country = $request->country;
    //         $famille->phone = $request->phone;
    //         $famille->religion = $request->religion;
    //         $famille->domain = $request->domain;
    //         $famille->child = $request->child;
    //         $famille->social_status = $request->social_status;
    //         $famille->type='famille';

    //     }else{
    //         $request->validate([
    //             'email' => ['required', 'string', 'email', 'max:255','unique:users']
    //         ]);
    //     $famille->firstName = $request->firstName;
    //     $famille->lastName = $request->lastName;
    //     $famille->email = $request->email;
    //     $famille->password = Hash::make($request->password);
    //     $famille->address = $request->address;
    //     $famille->country = $request->country;
    //     $famille->phone = $request->phone;
    //     $famille->religion = $request->religion;
    //     $famille->domain = $request->domain;
    //     $famille->child = $request->child;
    //     $famille->social_status = $request->social_status;
    //     $famille->type='famille';
    //     }   


    //     $famille->save();

    //     return redirect()->route('admin.famille')->with('success', 'famille  a été bien modifié !!');
    // }
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->back()->with('success', 'famille  a été bien supremer !!');
    }



    /////// complete registring ////////////////////////
    public function addAnnonce(){
        // dd('rfrjhfjrjh');
        return view('familles.add_annonce');
    }
    public function rederectToFamille(){
        return view('front.dashboard-account');
    }

    public function editAnnonce(Request $request){
        $id_annonce = $request->query('annonce');
       session()->put('id_annonce', $id_annonce);
        
        // dd($id_annonce);
        return view('familles.edit_annonce');
    }

    public function activeAnnonce(Request $request){
        $status = $request->query('status');
        $id_annonce = $request->query('id_annonce');
         $annoce=Annonce::find( $id_annonce);
        // dd( $annoce );
        if ($status =='Active'){
            $annoce->status='Paused';
        }else{
            $annoce->status='Active';
        }
        $annoce->save();
        return back();
    }

   public function likedCandidat(){

    $likeds = DB::table('users')
    ->join('likeds', 'users.id', '=', 'likeds.id_candidat')
    ->where('likeds.id_famille',auth()->user()->id)
    ->select('users.*', 'likeds.id_candidat as id_candidat')
    ->get();
    // dd(count($likeds));
    //  $likeds=User::whereRoleIs('candidat')
    //                ->where('liked','liked')
    //                ->orderBy('id', 'desc')->paginate("");
    //  dd($likeds);
    return view('front.liked',compact('likeds'));
   
   }

   public function liked(Request $request){
    $id_candidat = $request->query('id_candidat');
    $liked=Liked::where('id_candidat',$id_candidat)->first();
    if($liked){
        // dd('delete');
        $liked->delete();
    }else{
        $liked= new Liked();
        $liked->id_famille=auth()->user()->id;
        $liked->id_candidat= $id_candidat;
        $liked->save();
    }
    return back();
   
    // dd( $liked );
   }

    public function destroyAnnonce(Annonce $annonce)
    {
        // dd($annonce);
        $annonce->delete();
        return redirect()->back()->with('success', 'famille  a été bien supremer !!');
    }
    //update profile famille
    public function edit(User $famille)
    {
        // dd('famille');
        return view('familles.profile',compact('famille'));
    }

    public function update(Request $request, User $famille)
    {
        
        $request->validate([
            'phone' => 'required',
            'address' => 'required',
            'country' => 'required',
        ]);

     // Verify the current password
     

      // Update the password
         $famille = User::find($famille->id);
         if($request->current_password && $request->password){
            $request->validate([
                'current_password' => 'required',
                'password' => 'required|min:6|confirmed',
            ]);
            if (!Hash::check($request->current_password, $famille->password)) {
                return back()->withErrors(['current_password' => 'Le mot de passe actuel est incorrect.']);
            }
            $famille->password = Hash::make($request->password);
        }
            if($request->image){
                $request->validate([
                    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
                ]);
                $imagePath =$request->image->store('images', 'public');
                // $candidat->image = $request->image;
                $famille->image = $imagePath;
            }

            $famille->address = $request->address;
            $famille->country = $request->country;
            $famille->phone = $request->phone;
            $famille->save();
        return redirect()->route('famille.index')->with('success', 'your profile is update !!');
    }
    /************************ famille index candidat **************************************************************/
    public function indexcandidat(){
        $users=User::whereRoleIs('candidat')
                    ->where('country','<>',null)
                    ->orderby('created_at','desc')->get();
        return view('familles.famille-find-candidat',compact('users'));
    }
      /************************ famille find candidat **************************************************************/
    public function searchfindcandidat( Request $request) {  
        $users=User::where('maid',1)->get();
    if ( $request->location || $request->category){
        if($request->category == null){
         $users = User::whereRoleIs('candidat')
                ->Where('country', $request->location)
                ->paginate();
        }else{
            switch ($request->category) {
                case 'childminder':
                    // dd('childminder');
                    $users = User::whereRoleIs('candidat')
                    ->where(function ($query) use ($request) {
                        $query
                              ->where('childminder', $request->category)
                              ->orWhere('country', $request->location);
                    })->where('country','<>',null)
                    ->paginate();
                    break;
                case 'nanny':
                    // dd('nanny');
                    $users = User::whereRoleIs('candidat')
                    ->where(function ($query) use ($request) {
                        $query->where('nanny', $request->category)
                              ->orWhere('country', $request->location);
                    })->where('country','<>',null)
                    ->paginate();
                   
                    break;
                case 'maid':
                    // dd('maid');
                    $users = User::whereRoleIs('candidat')
                    ->where(function ($query) use ($request) {
                        $query->where('maid', $request->category)
                              ->orWhere('country', $request->location);
                    })->where('country','<>',null)
                    ->paginate();
                    break;
                default:
                // dd('babysitter');
                $users = User::whereRoleIs('candidat')
                ->where(function ($query) use ($request) {
                    $query->where('babysitter', $request->category)
                          ->orWhere('country', $request->location);
                })->where('country','<>',null)
                ->paginate();
            }
        }
        
    }elseif($request->username){
        $users = User::whereRoleIs('candidat')
                ->where('username', $request->username)
                ->where('country','<>',null)
                ->paginate();
    }
    
    return view('familles.famille-find-candidat',compact('users'));
        }
}
