<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Subscribe;
use App\Models\Subscription;
use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function paymentstripe(Request $request){
        $price = $request->query('price');
             session()->put('amount',$price);
            //  dd(session()->get('amount'));
        $user=auth()->user();
        return view('peymant',['intent' => $user->createSetupIntent(),
    ]);
    }

    public function singleCharge(Request $request){
        
        $amountt=session()->get('amount'); 
         session()->forget('amount');
        $amount=$amountt*100; 
        $paymentMethod=$request->payment_method;

        $user=auth()->user();
        $user->createOrGetStripeCustomer();
        $paymentMethod=$user->addPaymentMethod($paymentMethod);

        $user->charge($amount,$paymentMethod->id);
        
    //    dd ($request->all());
   if ($amountt){
    $subscribe=Subscribe::where('user_id',auth()->user()->id)->first();
    // $userauth=User::find(auth()->user->id);
    // dd($userauth);
    if($subscribe== null){
        $subscribe = new Subscribe();
    }
   
    $subscribe->email =$user->email;
    $subscribe->payerstatus = 'verified';
    $subscribe->currencycode = 'USD';
    $subscribe->stripe_id =$user->stripe_id ;
    $subscribe->amt = $amountt;
    $subscribe->user_id = $user->id ;

    switch ($amountt) {
        case 8:
            $subscribe->enddate=Carbon::now()->addDays(30);
            break;
        case 20:
            $subscribe->enddate=Carbon::now()->addDays(180);
            break;
        case 40:
            $subscribe->enddate=Carbon::now()->addDays(356);
            break;
        default:
        $subscribe->enddate=Carbon::now();
    }
     
    $subscribe->save();
    $user->trial_ends_at = $subscribe->enddate;
     $user->save();
    return redirect()->route('famille.index');
   }else {
    dd('try again');
   }
     
    }
}
