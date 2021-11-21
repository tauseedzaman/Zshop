<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class likes extends Model
{
    use HasFactory;
    protected $fillable =[
        'user_id',
        'product_id',
    ];

    /**
     * Get the product that owns the likes
     *
     */
    public function product()
    {
        return $this->belongsTo(product::class,'product_id','id');
    }
}
