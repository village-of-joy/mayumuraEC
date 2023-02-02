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
        'doll_category1',
        'doll_name1',
        'doll_category2',
        'doll_name2',
        'message',
        'comment',
    ];
    
<<<<<<< HEAD
    public function dolls()
    {
        return $this->hasMany(Doll::class);
    }
=======
    
>>>>>>> origin/dev_basis10
    
}
