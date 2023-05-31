<?php

namespace App\Http\Controllers;

use App\Models\Appliedjobs;
use Illuminate\Http\Request;

class AppliedjobsController extends Controller
{
  
public function contact(Request $requist){
$appliedjobs=Appliedjobs::where('annonce_id',$requist->annonce_id)->first();
if($appliedjobs){
    if($appliedjobs->apply_decline == 'null'|| $appliedjobs->apply_decline == 'decline'){
        $appliedjobs->apply_decline='apply';
     }else{$appliedjobs->apply_decline='null';}

}else{
    $appliedjobs= new Appliedjobs();
    $appliedjobs->user_id=$requist->user_id ;
    $appliedjobs->annonce_id=$requist->annonce_id ;
    $appliedjobs->apply_decline='apply';
}
$appliedjobs->save();
    return redirect()->route('dashboard');
}
public function decline(Request $requist){
    $appliedjobs=Appliedjobs::where('annonce_id',$requist->annonce_id)->first();
    if($appliedjobs){
        if($appliedjobs->apply_decline == 'null' || $appliedjobs->apply_decline == 'apply'){
           $appliedjobs->apply_decline='decline';
        }else{$appliedjobs->apply_decline='null';}
    }else{
        $appliedjobs= new Appliedjobs();
        $appliedjobs->user_id=$requist->user_id ;
        $appliedjobs->annonce_id=$requist->annonce_id ;
        $appliedjobs->apply_decline='decline';
    }
    $appliedjobs->save();
        return redirect()->route('dashboard');

}
}
