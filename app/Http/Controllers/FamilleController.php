<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class FamilleController extends Controller
{
    public function index()
    {
        $familles = User::where("type","famille")->orderBy('id','desc')->paginate("");
        return view('familles.familleHome', compact('familles'));
    }


    public function create()
    {
        return view('familles.add-famille');
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
            'child' => 'required',
            'social_status' => 'required',

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
        $user->child = $request->child;
        $user->social_status = $request->social_status;
        $user->type='famille';

        $user->save();
        return redirect()->route('familles.familleHome')->with('success','famille  Ajouter ');
    }

    public function edit(User $famille)
    {
        return view('familles.edit-famille',compact('famille'));
    }

    public function update(Request $request, User $famille)
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
            $famille->type='famille';

        }else{
            $request->validate([
                'email' => ['required', 'string', 'email', 'max:255','unique:users']
            ]);
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
        $famille->type='famille';
        }   


        $famille->save();

        return redirect()->route('admin.famille')->with('success', 'famille  a été bien modifié !!');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->back()->with('success', 'famille  a été bien supremer !!');
    }



    /////// complete registring ////////////////////////
    public function regesterFamille(){
        // dd('rfrjhfjrjh');
        return view('familles.regester-famille');
    }

    public function rederectToFamille(){
        return view('front.dashboard-account');
    }

}
