<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Doll;

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
    
    public function dolls()
    {
        return $this->hasMany(Doll::class);
    }
    
}
