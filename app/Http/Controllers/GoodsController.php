<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Goods;
use App\Models\Dolls;
use App\Http\Requests\GoodsRequest;

class GoodsController extends Controller
{
    public function index()
    {
        return view('goods/index');
    }
    
    
    public function store(GoodsRequest $request, Goods $goods)
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
                                                                    'doll_category1'=>$request->input('doll_category1'),
                                                                    'doll_name1'=>$request->input('doll_name1'),
                                                                    'doll_category2'=>$request->input('doll_category2'),
                                                                    'doll_name2'=>$request->input('doll_name2')
                                                                ]);
    }
    
    
    public function board(Request $request)
    {
        return view('goods/board/board')->with(['doll_category1'=>$request->input('doll_category1'),
                                            'doll_name1'=>$request->input('doll_name1'),
                                            'doll_category2'=>$request->input('doll_category2'),
                                            'doll_name2'=>$request->input('doll_name2'),
                                            'basisname'=>$request->input('basisname')
                                        ]);
    }
    
    
    public function boardDolls1(Request $request)
    {
        return view('goods/board/boardDolls1')->with([
                                            'doll_category1'=>$request->input('doll_category1'),
                                            'doll_name1'=>$request->input('doll_name1'),
                                            'doll_category2'=>$request->input('doll_category2'),
                                            'doll_name2'=>$request->input('doll_name2'),
                                            'basisname'=>$request->input('basisname')
                                        ]);
    }
    
    public function boardDolls2(Request $request)
    {
        return view('goods/board/boardDolls2')->with([
                                            'doll_category1'=>$request->input('doll_category1'),
                                            'doll_name1'=>$request->input('doll_name1'),
                                            'doll_category2'=>$request->input('doll_category2'),
                                            'doll_name2'=>$request->input('doll_name2'),
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
