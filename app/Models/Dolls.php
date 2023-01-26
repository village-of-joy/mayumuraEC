<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dolls extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'dolls_category',
        'dolls_name',
        'goods_id',
    ];
    
    public function good()
    {
        return $this->belongsTo(Goods::class);
    }
}
