<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dolls;
use App\Models\Goods;

class DollsController extends Controller
{
    public function store(Request $request, Dolls $dolls)
    {
        $input = $request['dolls'];
        $dolls->fill($input)->save();
        return redirect('/varif/'.$dolls->goods_id);
    }
    
    public function varif(Request $request, Goods $goods, Dolls $dolls)
    {
        $basisName = $goods->basis_name;
        $basisPrice = 0;
        
        $input3 = $request->input('input3');
        
        
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
    
}
