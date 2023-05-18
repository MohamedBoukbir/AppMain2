<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Annonce;

class AnnonceController extends Controller
{
    
    public function index()
    {
        $annonces = User::where("type","candidat")->orderBy('id','desc')->paginate("");
        return view('candidats.candidatHome', compact('annonces'));
    }


    public function create()
    {
        return view('familles.add-annonce');
    }

public function store(Request $request)
    {
       
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'domain' => 'required',
            'location' => 'required',
            'timeLimit' => 'required',
            'language' => 'required',
            'religion' => 'required',
            'salary' => 'required',
            'numberChildren' => 'required',
            'skillsRequired' => 'required',
            'experience' => 'required',

            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $annonce = new Annonce();
        

        $annonce->title = $request->title;
        $annonce->description = $request->description;
        $annonce->domain = $request->domain;
        $annonce->location = $request->location;
        $annonce->timeLimit = $request->timeLimit;
        $annonce->language = $request->language;
        $annonce->religion = $request->religion;
        $annonce->salary = $request->salary;
        $annonce->numberChildren = $request->numberChildren;
        $annonce->skillsRequired = $request->skillsRequired;
        $annonce->experience = $request->experience;

     
        $user->save();

        return redirect()->route('famille.home')->with('success','annonce  Ajouter ');
    }

    public function edit(Annonce $annonce)
    {
        return view('familles.edit-annonce',compact('annonce'));
    }

    public function update(Request $request, Annonce $annonce)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'domain' => 'required',
            'location' => 'required',
            'timeLimit' => 'required',
            'language' => 'required',
            'religion' => 'required',
            'salary' => 'required',
            'numberChildren' => 'required',
            'skillsRequired' => 'required',
            'experience' => 'required',
        ]);

        $annonce->title = $request->title;
        $annonce->description = $request->description;
        $annonce->domain = $request->domain;
        $annonce->location = $request->location;
        $annonce->timeLimit = $request->timeLimit;
        $annonce->language = $request->language;
        $annonce->religion = $request->religion;
        $annonce->salary = $request->salary;
        $annonce->numberChildren = $request->numberChildren;
        $annonce->skillsRequired = $request->skillsRequired;
        $annonce->experience = $request->experience;


        $annonce->save();
        return redirect()->route('famille.home')->with('success', 'annonce  a été bien modifié !!');
    }

    public function destroy(Annonce $annonce)
    {
        $annonce->delete();
        return redirect()->back()->with('success', 'annonce  a été bien supremer !!');
    }


}
