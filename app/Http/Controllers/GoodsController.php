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
    
    
    public function store1(Request $request, Goods $goods)
    {
        $input = $request['goods'];
        $goods->fill($input)->save();
        return redirect('/varif/'.$goods->id);
    }

    
    public function varif(Request $request, Goods $goods)
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
        
        
        
        return view('goods/varif', compact('basisPrice'))->with(['goods'=>$goods,
                                                                    'input1'=>$request->input('input1'),
                                                                    'input2'=>$request->input('input2'),
                                                                    'input3'=>$request->input('input3'),
                                                                    'input4'=>$request->input('input4')
                                                                ]);
    }
    
    
    public function board(Request $request)
    {
        return view('goods/board/board')->with(['input1'=>$request->input('input1'),
                                            'input2'=>$request->input('input2'),
                                            'input3'=>$request->input('input3'),
                                            'input4'=>$request->input('input4'),
                                            'basisname'=>$request->input('basisname')
                                        ]);
    }
    
    
    public function boardDolls1(Request $request)
    {
        return view('goods/board/boardDolls1')->with([
                                            'input1'=>$request->input('input1'),
                                            'input2'=>$request->input('input2'),
                                            'input3'=>$request->input('input3'),
                                            'input4'=>$request->input('input4'),
                                            'basisname'=>$request->input('basisname')
                                        ]);
    }
    
    public function boardDolls2(Request $request)
    {
        return view('goods/board/boardDolls2')->with([
                                            'input1'=>$request->input('input1'),
                                            'input2'=>$request->input('input2'),
                                            'input3'=>$request->input('input3'),
                                            'input4'=>$request->input('input4'),
                                            'basisname'=>$request->input('basisname')
                                        ]);
    }
    
     public function shikishi(){
        return view('goods/shikishi');
    }
    
    public function shikishiDolls(){
        return view('goods/shikishiDolls');
    }
    
    
}
