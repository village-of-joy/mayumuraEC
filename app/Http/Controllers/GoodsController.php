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
    
    public function goods()
    {
        return view('goods/goods');
    }
    
    /*public function store(Request $request, Goods $goods)
    {
        $input = $request['goods'];
        $post->fill($input)->save();
        return redirect('/goods/' . $goods->id);
    }
    */
    
    public function dolls()
    {
        return view('goods/dolls');
    }
}
