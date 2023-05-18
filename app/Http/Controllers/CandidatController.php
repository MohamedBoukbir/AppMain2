<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CandidatController extends Controller
{
 


    public function index()
    {
        $candidats = User::where("username","candidat")->orderBy('id','desc')->paginate("");
        return view('utilisateurs', compact('candidats'));
    }


    public function create()
    {
        return view('candidats.add-candidat');
    }

public function store(Request $request)
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
        $user->type='candidat';


     
        $user->save();

        return redirect()->route('admin.candidat')->with('success','candidat  Ajouter ');
    }

    public function edit(User $candidat)
    {
        return view('candidats.edit-candidats',compact('candidat'));
    }

    public function update(Request $request, User $candidat)
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
            $candidat->type='candidat';

        }else{
            $request->validate([
                'email' => ['required', 'string', 'email', 'max:255','unique:users']
            ]);
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
            $candidat->type='candidat';
        }   


        $candidat->save();
        return redirect()->route('admin.candidat')->with('success', 'candidat  a été bien modifié !!');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->back()->with('success', 'candidat  a été bien supremer !!');
    }



}
