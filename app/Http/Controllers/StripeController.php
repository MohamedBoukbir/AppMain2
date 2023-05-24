<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
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
    $subscribe=Subscription::where('stripe_id',auth()->user()->stripe_id)->first();
    // dd($subscribe);
    if($subscribe == null){
        $subscribe = new Subscription();
    }
// $subscribe->email =auth()->user()->email;
    $subscribe->name = auth()->user()->username;
    $subscribe->stripe_id =auth()->user()->stripe_id ;
    $subscribe->stripe_price = $amountt;
    // $subscribe->countrycode = $response['COUNTRYCODE'];
    // $subscribe->currencycode =$response['CURRENCYCODE'];
    // $subscribe->amt = $response['AMT'];
    $subscribe->user_id =auth()->user()->id ;

    switch ($amountt) {
        case 8:
            $subscribe->ends_at=Carbon::now()->addDays(30);
            break;
        case 20:
            $subscribe->ends_at=Carbon::now()->addDays(180);
            break;
        case 40:
            $subscribe->ends_at=Carbon::now()->addDays(356);
            break;
        default:
        $subscribe->ends_at=Carbon::now();
    }
    $subscribe->save();
    return redirect()->route('dashboard');
   }else {
    dd('try again');
   }
     
    }
}
