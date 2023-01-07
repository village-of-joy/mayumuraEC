<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Goods;

class GoodsController extends Controller
{
    
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
}
