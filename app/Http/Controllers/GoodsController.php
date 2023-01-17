<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Goods;

class GoodsController extends Controller
{
    public function index()
    {
        return view('goods/index');
    }
    
    public function goods(Goods $goods)
    {
        return view('goods/goods')->with(['goods' => $goods]);
    }
    
    
    public function store(Request $request, Goods $goods)
    {
        $input = $request['goods'];
        $goods->fill($input)->save();
        return redirect('goods/varif/' . $goods->id);
    }

    
    public function dolls(Goods $goods)
    {
        return view('goods/dolls');
    }
    
    public function varif(Goods $goods)
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
    
    public function calc(){
        $Goods = new Goods;
        $basisPrice = $Goods->basePriceCalc();
        
        return view('goods/varif', compact('basisPrice'));
    }
}
