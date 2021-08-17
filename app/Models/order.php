<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $fillable =[
        'user_id',
        'amount',
        'shipping_address',
        'order_address',
        'order_email',
        'order_status',
    ];
    public function user()
    {
        return $this->belongsTo( user::class);
    }
    public function details()
    {
        return $this->hasMany( order_details::class);
    }
}
