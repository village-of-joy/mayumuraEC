<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    use HasFactory;
    
    
    protected $fillable = [
        'basis_category',
        'basis_name',
        'basis_option',
        'message',
        'comment',
    ];
    
    public function basePriceCalc(){
        $basePrice = 0;
        $baseName = Goods::select('basis_name')->get();
        
        echo $baseName;
        
        if($baseName == '竹立'){
            $basePrice += 400;
        }elseif($baseName == '竹三角'){
            $basePrice += 600;
        }elseif($baseName == '竹ばさみ'){
            $basePrice += 650;
        }elseif($baseName == '扇面'){
            $basePrice += 700;
        }
        
        return $baseName;
    }
    
   /* public function getId(){
        $all = Goods::all();
        $All = array();
        return $all;
    }*/
    
}
