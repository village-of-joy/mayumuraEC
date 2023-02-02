<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doll;
use App\Models\Goods;
use App\Http\Requests\DollRequest;

class DollController extends Controller
{
    public function store(DollRequest $request, Goods $goods, Doll $dolls)
    {
        $input = $request['doll'];
        $dolls->fill($input)->save();
        return redirect('/varif/'.$dolls->goods_id);
    }
    
    public function varif(Goods $goods, doll $dolls)
    {
        $basisName = $goods->basis_name;
        $basisPrice = 0;
        $dolls->good;
        $goods->dolls;
        
        return view('goods/varif', compact('basisPrice'))->with(['dolls'=>$dolls]);
    }
}
