<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class option extends Model
{
    use HasFactory;
    protected $fillable=[
        'option_name'
    ];

    public function product_option(){
        return $this->hasMany(product_option::class);
    }
}
