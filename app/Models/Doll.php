<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Goods;

class Doll extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'category',
        'name',
        'goods_id',
    ];
    
    public function good()
    {
        return $this->belongsTo(Goods::class);
    }
    
}
