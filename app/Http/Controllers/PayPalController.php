<?php

namespace App\Http\Controllers;
// use Srmklive\PayPal\Services\ExpressCheckout;
use Carbon\Carbon;
use App\Models\Subscribe;
use Illuminate\Http\Request;
use App\Models\SubscribePaypal;
use Srmklive\PayPal\Services\ExpressCheckout;

class PayPalController extends Controller
{
    public function payment(Request $request){
        $price = $request->query('price');
        // dd($price);
        $data = [];
        $data['items'] = [
            [
                'name' => auth()->user()->id,
                'price' => $price,
                // 'desc'  => 'Macbook pro 14 inch',
                // 'qty' => 1
            ]
        ];

        $data['invoice_id'] = 1;
        $data['invoice_description'] = "Order #{$data['invoice_id']} Invoice";
        $data['return_url'] = route('payment.success');
        $data['cancel_url'] = route('payment.cancel');
        $data['total'] =$price;

        $provider = new ExpressCheckout;

        $response = $provider->setExpressCheckout($data);

        $response = $provider->setExpressCheckout($data, true);

        return redirect($response['paypal_link']);
    }
    public function cancel(){
        dd('Your payment is canceled.');
    }
    public function success(Request $request){
        $provider = new ExpressCheckout;
        $response = $provider->getExpressCheckoutDetails($request->token);

        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
            // dd($response); 
            $subscribe= Subscribe::where('user_id',auth()->user()->id)->first();
        if( $subscribe=null){
            $subscribe = new Subscribe();
            }
            $subscribe->email =$response['EMAIL'];
            $subscribe->payerstatus = $response['PAYERSTATUS'];
            $subscribe->firstName = $response['FIRSTNAME'];
            $subscribe->lastName = $response['LASTNAME'];
            $subscribe->countrycode = $response['COUNTRYCODE'];
            $subscribe->currencycode =$response['CURRENCYCODE'];
            $subscribe->amt =$response['AMT'];
            $subscribe->user_id =auth()->user()->id;
    
            switch ( $response['AMT']) {
                case 8:
                    $subscribe->enddate=  Carbon::now()->addDays(30);
                    break;
                case 20:
                    $subscribe->enddate=Carbon::now()->addDays(180);
                    break;
                case 40:
                    $subscribe->enddate= Carbon::now()->addDays(356);
                    break;
                default:
                $subscribe->enddate=Carbon::now();
            }
      
      
       
        $subscribe->save();
        return redirect()->route('dashboard');
        }
        dd('Please try again later.');
    }

}