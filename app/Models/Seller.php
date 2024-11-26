<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'seller';

    // Define the relationship with SellerVerification
    public function sellerVerification()
    {
        return $this->belongsTo(SellerVerification::class, 'seller_verification_id');
    }

    // Define the relationship with User (if applicable)
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Define the relationship with Product (if applicable)
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    // Define the relationship with Order (if applicable)
    // public function order()
    // {
    //     return $this->belongsTo(Order::class, 'order_id');
    // }
}
