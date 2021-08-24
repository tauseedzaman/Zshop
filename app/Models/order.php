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
        return $this->belongsTo(user::class);
    }
    public function product()
    {
        return $this->belongsTo(order_details::class);
    }

    /**
     * get the order_details of this order
     */
    // public function details()
    // {
    //     return $this->belongsTo(order_details::class, 'order_id', 'id');
    // }
    public function details()
    {
        return $this->hasMany(order_details::class);
    }
}
