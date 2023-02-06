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
        'doll_category1',
        'doll_name1',
        'doll_category2',
        'doll_name2',
        'message',
        'comment',
    ];
    
    
    public function price()
    {
        return $this->hasOne(Price::class);
    }
}
