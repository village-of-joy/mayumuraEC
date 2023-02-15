<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Goods;
use App\Models\Price;
use App\Models\User;
use App\Mail\SendTestMail;
use App\Http\Requests\GoodsRequest;
use Illuminate\Support\Facades\Mail;


class GoodsController extends Controller
{
    public function index()
    {
        return view('goods/index');
    }
    
    
    public function store(GoodsRequest $request, Goods $goods)
    {
        $input = $request['goods'];
        $goods->fill($input)->save();
        return redirect('/varif/'.$goods->id);
    }

    
    public function varif(Request $request, Goods $goods)
    {
        $basisName = $goods->basis_name;
        $basisPrice = 0;
        $doll2 = $goods->doll_name2;
        $dollPrice = 800;
        $goodsPrice = 0;
        
        if($basisName == '竹立'){
            $basisPrice += 400;
        }elseif($basisName == '竹三角'){
            $basisPrice += 600;
        }elseif($basisName == '竹ばさみ'){
            $basisPrice += 650;
        }elseif($basisName == '扇面'){
            $basisPrice += 700;
        }elseif($basisName == 'ブランコ'){
            $basisPrice += 50;
            if(empty('$doll2')){
                $basisPrice -= 50;
            }
        }
        
        if($doll2 != null){
            $dollPrice += 700;
            if($basisName == 'ブランコ'){
                $dollPrice += 50;
            }
        }
        
        $goodsPrice = $basisPrice + $dollPrice;
        
        return view('goods/varif', compact('basisPrice', 'dollPrice', 'goodsPrice'))->with(['goods'=>$goods,
                                                                    'doll_category1'=>$request->input('doll_category1'),
                                                                    'doll_name1'=>$request->input('doll_name1'),
                                                                    'doll_category2'=>$request->input('doll_category2'),
                                                                    'doll_name2'=>$request->input('doll_name2')
                                                                ]);
    }
    
    
    public function board(Request $request)
    {
        return view('goods/board/board')->with(['doll_category1'=>$request->input('doll_category1'),
                                            'doll_name1'=>$request->input('doll_name1'),
                                            'doll_category2'=>$request->input('doll_category2'),
                                            'doll_name2'=>$request->input('doll_name2'),
                                            'basisname'=>$request->input('basisname')
                                        ]);
    }
    
    
    public function boardDolls1(Request $request)
    {
        return view('goods/board/boardDolls1')->with([
                                            'doll_category1'=>$request->input('doll_category1'),
                                            'doll_name1'=>$request->input('doll_name1'),
                                            'doll_category2'=>$request->input('doll_category2'),
                                            'doll_name2'=>$request->input('doll_name2'),
                                            'basisname'=>$request->input('basisname')
                                        ]);
    }
    
    public function boardDolls2(Request $request)
    {
        return view('goods/board/boardDolls2')->with([
                                            'doll_category1'=>$request->input('doll_category1'),
                                            'doll_name1'=>$request->input('doll_name1'),
                                            'doll_category2'=>$request->input('doll_category2'),
                                            'doll_name2'=>$request->input('doll_name2'),
                                            'basisname'=>$request->input('basisname')
                                        ]);
    }
    
    public function shikishi(Request $request)
    {
        return view('goods/shikishi/shikishi')->with(['doll_category1'=>$request->input('doll_category1'),
                                            'doll_name1'=>$request->input('doll_name1'),
                                            'doll_category2'=>$request->input('doll_category2'),
                                            'doll_name2'=>$request->input('doll_name2'),
                                            'basisname'=>$request->input('basisname')
                                        ]);
    }
    
    
    public function shikishiDolls1(Request $request)
    {
        return view('goods/shikishi/shikishiDolls1')->with([
                                            'doll_category1'=>$request->input('doll_category1'),
                                            'doll_name1'=>$request->input('doll_name1'),
                                            'doll_category2'=>$request->input('doll_category2'),
                                            'doll_name2'=>$request->input('doll_name2'),
                                            'basisname'=>$request->input('basisname')
                                        ]);
    }
    
    public function shikishiDolls2(Request $request)
    {
        return view('goods/shikishi/shikishiDolls2')->with([
                                            'doll_category1'=>$request->input('doll_category1'),
                                            'doll_name1'=>$request->input('doll_name1'),
                                            'doll_category2'=>$request->input('doll_category2'),
                                            'doll_name2'=>$request->input('doll_name2'),
                                            'basisname'=>$request->input('basisname')
                                        ]);
    }
    
    
    public function cartStore(Request $request, Price $price)
    {
        $input = $request['price'];
        $price->fill($input)->save();
        return redirect('/cart/show');
    }
    
    public function cart(User $user, Goods $goods)
    {
        $user = auth()->user()->id;
        $goods = Goods::where('user_id', $user)->get();
        return view('goods/cart', compact('goods'));
    }
    
    public function show(Goods $goods)
    {
        return view('goods/show')->with(['goods'=>$goods]);
    }
    
    public function deleteVarif(Goods $goods)
    {
        $goods->delete();
        return redirect('/');
    }
    
    public function deleteCart(Goods $goods)
    {
        $goods->price()->delete();
        $goods->delete();
        return redirect('/cart/show');
    }
    
    
    
}
