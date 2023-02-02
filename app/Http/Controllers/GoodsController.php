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
    
    
<<<<<<< HEAD
    public function store(Request $request, Goods $goods, Doll $dolls)
    {
        $input = $request['dolls'];
        $dolls->fill($input)->save();
        return redirect('/varif/'.$dolls->good->id);
    }
    
    public function BoardStore(GoodsRequest $request, Goods $goods)
=======
    public function store(Request $request, Goods $goods)
>>>>>>> origin/dev_basis10
    {
        $input = $request['goods'];
        $goods->fill($input)->save();
        return redirect('/boardDolls1/'.$goods->id);
    }

    
    public function varif()
    {
        $basisName = $goods->basis_name;
        $basisPrice = 0;
        
        
<<<<<<< HEAD
        return view('goods/varif', compact('basisPrice'))->with(['goods'=>$goods]);
=======
        
        
        return view('goods/varif', compact('basisPrice'))->with(['goods'=>$goods,
                                                                    'doll_category1'=>$request->input('doll_category1'),
                                                                    'doll_name1'=>$request->input('doll_name1'),
                                                                    'doll_category2'=>$request->input('doll_category2'),
                                                                    'doll_name2'=>$request->input('doll_name2')
                                                                ]);
>>>>>>> origin/dev_basis10
    }
    
    
    public function board(Request $request)
    {
<<<<<<< HEAD
        return view('goods/board/board');
=======
        return view('goods/board/board')->with(['doll_category1'=>$request->input('doll_category1'),
                                            'doll_name1'=>$request->input('doll_name1'),
                                            'doll_category2'=>$request->input('doll_category2'),
                                            'doll_name2'=>$request->input('doll_name2'),
                                            'basisname'=>$request->input('basisname')
                                        ]);
>>>>>>> origin/dev_basis10
    }
    
    
    public function boardDolls1(Goods $goods)
    {
<<<<<<< HEAD
        return view('goods/board/boardDolls1')->with(['goods'=>$goods]);
=======
        return view('goods/board/boardDolls1')->with([
                                            'doll_category1'=>$request->input('doll_category1'),
                                            'doll_name1'=>$request->input('doll_name1'),
                                            'doll_category2'=>$request->input('doll_category2'),
                                            'doll_name2'=>$request->input('doll_name2'),
                                            'basisname'=>$request->input('basisname')
                                        ]);
>>>>>>> origin/dev_basis10
    }
    
    public function boardDolls2(Request $request)
    {
<<<<<<< HEAD
        return view('goods/board/boardDolls2');
=======
        return view('goods/board/boardDolls2')->with([
                                            'doll_category1'=>$request->input('doll_category1'),
                                            'doll_name1'=>$request->input('doll_name1'),
                                            'doll_category2'=>$request->input('doll_category2'),
                                            'doll_name2'=>$request->input('doll_name2'),
                                            'basisname'=>$request->input('basisname')
                                        ]);
>>>>>>> origin/dev_basis10
    }
    
     public function shikishi(){
        return view('goods/shikishi');
    }
    
    public function shikishiDolls(){
        return view('goods/shikishiDolls');
    }
    
    
}
