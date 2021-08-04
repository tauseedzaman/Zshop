<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_option extends Model
{
    use HasFactory;
    protected $fillable = [
        'option_id',
        'product_id',
    ];

    public function option(){
        return $this->belongsTo(option::class);
    }

    public function products(){
        return $this->hasMany(product::class);
    }
}
