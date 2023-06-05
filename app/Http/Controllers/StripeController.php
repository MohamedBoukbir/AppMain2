<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
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
  
    if($subscribe== null){
        $subscribe = new Subscribe();
    }
   
    $subscribe->email =auth()->user()->email;
    $subscribe->payerstatus = 'verified';
    $subscribe->currencycode = 'USD';
    $subscribe->stripe_id =auth()->user()->stripe_id ;
    $subscribe->amt = $amountt;
    $subscribe->user_id =auth()->user()->id ;

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
    return redirect()->route('dashboard');
   }else {
    dd('try again');
   }
     
    }
}
