<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Goods;
use App\Models\Doll;
use App\Http\Requests\GoodsRequest;

class GoodsController extends Controller
{
    public function index()
    {
        return view('goods/index');
    }
    
    
    public function store(Request $request, Goods $goods, Doll $dolls)
    {
        $input = $request['dolls'];
        $dolls->fill($input)->save();
        return redirect('/varif/'.$dolls->good->id);
    }
    
    public function BoardStore(GoodsRequest $request, Goods $goods)
    {
        $input = $request['goods'];
        $goods->fill($input)->save();
        return redirect('/boardDolls1/'.$goods->id);
    }

    
    public function varif(Goods $goods, Doll $doll)
    {
        $basisName = $goods->basis_name;
        $basisPrice = 0;
        
        
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
