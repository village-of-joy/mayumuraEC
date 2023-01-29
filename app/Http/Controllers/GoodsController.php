<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Goods;
use App\Models\Dolls;

class GoodsController extends Controller
{
    public function index()
    {
        return view('goods/index');
    }
    
    
    public function store1(Request $request, Goods $goods, Dolls $dolls)
    {
        $input = $request['dolls'];
        $dolls->fill($input)->save();
        return redirect('/varif/'.$goods->id);
    }
    
    public function storeb(Request $request, Goods $goods, Dolls $dolls)
    {
        $input = $request['goods'];
        $goods->fill($input)->save();
        return redirect('/boardDolls1/'.$goods->id);
    }

    
    public function varif(Goods $goods, Dolls $dolls)
    {
        $basisName = $goods->basis_name;
        $basisPrice = 0;
        
        if($basisName == '竹立'){
            $basisPrice += 400;
        }elseif($basisName == '竹三角'){
            $basisPrice += 600;
        }elseif($basisName == '竹ばさみ'){
            $basisPrice += 650;
        }elseif($basisName == '扇面'){
            $basisPrice += 700;
        }
        
        return view('goods/varif', compact('basisPrice'))->with(['goods'=>$goods]);
    }
    
    
    public function board(Request $request)
    {
        return view('goods/board/board');
    }
    
    
    public function boardDolls1(Goods $goods)
    {
        return view('goods/board/boardDolls1')->with(['goods'=>$goods]);
    }
    
    public function boardDolls2(Request $request)
    {
        return view('goods/board/boardDolls2');
    }
    
     public function shikishi(){
        return view('goods/shikishi');
    }
    
    public function shikishiDolls(){
        return view('goods/shikishiDolls');
    }
    
    
}
