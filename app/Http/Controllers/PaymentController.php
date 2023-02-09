<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;

class PaymentController extends Controller
{
    public function pay(Request $request){
        $total = $request->data-amount;
        try{
            Stripe::setApikey(env('STRIPE_SECRET'));
            
            //ここで顧客情報を登録
            $customer = Customer::create(array('email' => $request->stripeEmail,
                                                'source' => $request->stripeToken
                                            )
                                        );
                                        
            dump($customer);
            dump($customer->id);
            //お支払処理
            $charge = Charge::create(array('customer' => $customer->id,
                                            'amount' => $total,
                                            'currency' => 'jpy'
                                        )
                                    );
            
            dump($charge);
            dump($charge->source->id);
            dump($charge->source->brand);
            dump($charge->source->last4);
            dump($charge->source->exp_month);
            dump($charge->source->exp_year);
            
            return redirect('/completed');
            
        }catch(Exception $e){
            return $e->getMessage();
        }
    }
    
    public function completed()
    {
        return view('goods/completed');
    }
}
