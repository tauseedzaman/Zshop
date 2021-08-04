<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'thumbnail',
    ];

    public function product_category(){
        return $this->hasMany(product_category::class);
    }

}
