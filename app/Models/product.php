<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'thumbnail',
        'image',
        'description',
        'stock',
        'category',
        'sku',
    ];

    public function product_option(){
        return $this->belongsTo(product_option::class);
    }

    public function order_details(){
        return $this->hasMany(order_details::class);
    }
}
