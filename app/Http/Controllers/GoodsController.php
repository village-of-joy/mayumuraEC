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

    
    public function dolls()
    {
        return view('goods/dolls');
    }
    
    public function varif(Goods $goods)
    {
        return view('goods/varif')->with(['goods' => $goods]);
    }
    
    
}
