<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doll;
use App\Models\Goods;
use App\Http\Requests\DollRequest;

class DollController extends Controller
{
    public function store(DollRequest $request, Goods $goods, Doll $doll)
    {
        $input = $request['doll'];
        $doll->fill($input)->save();
        return redirect('/varif/'.$doll->id);
    }
    
    public function varif()
    {
        
        return view('goods/varif')->with(['goods'=>$goods]);
    }
}
