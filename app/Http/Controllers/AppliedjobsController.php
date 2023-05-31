<?php

namespace App\Http\Controllers;

use App\Models\Appliedjobs;
use Illuminate\Http\Request;

class AppliedjobsController extends Controller
{
  
public function contact(Request $requist){
$appliedjobs=Appliedjobs::where('annonce_id',$requist->annonce_id)->first();
if($appliedjobs){
    $appliedjobs->apply=0;

}else{
    $appliedjobs= new Appliedjobs();
    $appliedjobs->user_id=$requist->user_id ;
    $appliedjobs->annonce_id=$requist->annonce_id ;
    $appliedjobs->apply=1;
}
$appliedjobs->save();
    return redirect()->route('dashboard');
}
public function decline(Request $requist){
    $appliedjobs=Appliedjobs::where('annonce_id',$requist->annonce_id)->first();
    if($appliedjobs){
        $appliedjobs->decline=0;
    }else{
        $appliedjobs= new Appliedjobs();
        $appliedjobs->user_id=$requist->user_id ;
        $appliedjobs->annonce_id=$requist->annonce_id ;
        $appliedjobs->decline=1;
    }
    $appliedjobs->save();
        return redirect()->route('dashboard');

}
}
