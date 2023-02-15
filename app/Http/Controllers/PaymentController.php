<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;
use Stripe\Customer;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendTestMail;
use App\Models\Goods;
use App\Models\User;


class PaymentController extends Controller
{
    public function pay(Request $request){
        
        $price = $request->input('total');
        
        try{
            Stripe::setApikey(env('STRIPE_SECRET'));
            
            $user = auth()->user()->name;
            
            //ここで顧客情報を登録
            $customer = Customer::create(array('email' => $request->stripeEmail,
                                                'name' => $request->stripeName,
                                                'source' => $request->stripeToken
                                            )
                                        );
                                        
            dump($customer);
            dump($customer->id);
            dump($customer->name);
            //お支払処理
            $charge = Charge::create(array('customer' => $customer->id,
                                            'amount' => $price,
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
    
    
    public function completed(User $user)
    {
        
        $user = auth()->user()->id;
        $goods = Goods::where('user_id', $user)->get();
        
        
        Mail::send(new SendTestMail($goods));
        
        return view('goods/completed');
    }
    
}
