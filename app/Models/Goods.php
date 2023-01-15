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
    
}
