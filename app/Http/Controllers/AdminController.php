<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /////show add edit familles/////////////////////////


    //// afficher familles
    public function indexfamille()
    {
        $familles = User::whereRoleIs('famille')->orderBy('id','desc')->paginate("");
        return view('admin.indexfamille', compact('familles'));
    }


//// add familles
    public function createfamille()
    {
        return view('familles.add-famille');
    }

    public function storefamille(Request $request)
    {
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'password' => 'required',
            'address' => 'required',
            'country' => 'required',
            'phone' => 'required',
            'religion' => 'required',
            'domain' => 'required',
            'child' => 'required',
            'social_status' => 'required',

        ]);

        $user = new User();
        $user->username = $request->firstName ." ".$request->lastName;
        $user->firstName = $request->firstName;
        $user->lastName = $request->lastName;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->address = $request->address;
        $user->country = $request->country;
        $user->phone = $request->phone;
        $user->religion = $request->religion;
        $user->domain = $request->domain;
        $user->child = $request->child;
        $user->social_status = $request->social_status;
        $user->save();
        $user->attachRole('famille');
        return redirect()->route('admin.famille')->with('success','famille  Ajouter ');
    }

    ////edit famille

    public function editfamille(User $famille)
    {
        return view('familles.edit-famille',compact('famille'));
    }


    public function updatefamille(Request $request, User $famille)
    {
        
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'password' => 'required',
            'address' => 'required',
            'country' => 'required',
            'phone' => 'required',
            'religion' => 'required',
            'domain' => 'required',
            'child' => 'required',
            'social_status' => 'required', 
        ]);
        $famille = User::find($famille->id);

        if($famille->email == $request->email){
            $famille->username = $request->firstName ." ".$request->lastName;
            $famille->firstName = $request->firstName;
            $famille->lastName = $request->lastName;
            // $famille->email = $request->email;
            $famille->password = Hash::make($request->password);
            $famille->address = $request->address;
            $famille->country = $request->country;
            $famille->phone = $request->phone;
            $famille->religion = $request->religion;
            $famille->domain = $request->domain;
            $famille->child = $request->child;
            $famille->social_status = $request->social_status;
          

        }else{
            $request->validate([
                'email' => ['required', 'string', 'email', 'max:255','unique:users']
            ]);
         $famille->username = $request->firstName ." ".$request->lastName;
        $famille->firstName = $request->firstName;
        $famille->lastName = $request->lastName;
        $famille->email = $request->email;
        $famille->password = Hash::make($request->password);
        $famille->address = $request->address;
        $famille->country = $request->country;
        $famille->phone = $request->phone;
        $famille->religion = $request->religion;
        $famille->domain = $request->domain;
        $famille->child = $request->child;
        $famille->social_status = $request->social_status;
        }   


        $famille->save();

        return redirect()->route('admin.famille')->with('success', 'famille  a été bien modifié !!');
    }

///////////////// end show add edit familles//////////////

    public function indexcandidat()
    {
        $candidats = User::whereRoleIs('candidat')->orderBy('id','desc')->paginate("");
        return view('admin.indexcandidat', compact('candidats'));

    }


    ///////////add candidat 

    public function createcandidat()
    {
        return view('candidats.add-candidat');
    }



    public function storecandidat(Request $request)
    {
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'password' => 'required',
            'address' => 'required',
            'country' => 'required',
            'phone' => 'required',
            'religion' => 'required',
            'domain' => 'required',
            'years_experience' => 'required',

            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $user = new User();
        
        $user->username = $request->firstName ." ".$request->lastName;
        $user->firstName = $request->firstName;
        $user->lastName = $request->lastName;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->address = $request->address;
        $user->country = $request->country;
        $user->phone = $request->phone;
        $user->religion = $request->religion;
        $user->domain = $request->domain;
        $user->years_experience = $request->years_experience;
        $user->save();
        $user->attachRole('candidat');
        return redirect()->route('admin.candidat')->with('success','candidat  Ajouter ');
    }
    // edit candidat
    public function editcandidat(User $candidat)
    {
        return view('candidats.edit-candidat',compact('candidat'));
    }

    public function updatecandidat(Request $request, User $candidat)
    {
        
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'password' => 'required',
            'address' => 'required',
            'country' => 'required',
            'phone' => 'required',
            'religion' => 'required',
            'domain' => 'required',
            'years_experience' => 'required',
        ]);

        $candidat = User::find($candidat->id);

        if($candidat->email == $request->email){
            $candidat->username = $request->firstName ." ".$request->lastName;
            $candidat->firstName = $request->firstName;
            $candidat->lastName = $request->lastName;
            // $candidat->email = $request->email;
            $candidat->password = Hash::make($request->password);
            $candidat->address = $request->address;
            $candidat->country = $request->country;
            $candidat->phone = $request->phone;
            $candidat->religion = $request->religion;
            $candidat->domain = $request->domain;
            $candidat->years_experience = $request->years_experience;

        }else{
            $request->validate([
                'email' => ['required', 'string', 'email', 'max:255','unique:users']
            ]);
            $candidat->username = $request->firstName ." ".$request->lastName;
            $candidat->firstName = $request->firstName;
            $candidat->lastName = $request->lastName;
            $candidat->email = $request->email;
            $candidat->password = Hash::make($request->password);
            $candidat->address = $request->address;
            $candidat->country = $request->country;
            $candidat->phone = $request->phone;
            $candidat->religion = $request->religion;
            $candidat->domain = $request->domain;
            $candidat->years_experience = $request->years_experience;

        }   


        $candidat->save();
        return redirect()->route('admin.candidat')->with('success', 'candidat  a été bien modifié !!');
    }

   

    
  
    // public function indexfamille()
    // {
    //     // Utilisateur::where("nom","like","%{$searshbyname}%")->orderby("id","ASC")->paginate("");
    //     $famille = User::where("type","famille")->orderBy('id','desc')->paginate("");
    //     return view('adminHome', compact('famille'));
    // }

    public function edituser(User $user)
    {

        if ($user->hasRole('famille')) {
            return redirect()->route('admin.edit.famille',$user);
        }
        else{
            return redirect()->route('admin.edit.candidat',$user);
        }
    }


     /// delete 
     public function destroy(User $user)
     {
        // dd($user);
        // $user =User::find($id);
    //    dd( $user);
         $user->delete();
         if($user->hasRole('famille')){
            return redirect()->back()->with('success', 'famille  a été bien supremer !!');

        }else{
            return redirect()->back()->with('success', 'candidat  a été bien supremer !!');
        }   

     }
 

}
