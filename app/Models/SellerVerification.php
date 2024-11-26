<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellerVerification extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'seller_verifications';

    // Define the relationship with Seller
    public function sellers()
    {
        return $this->hasMany(Seller::class, 'seller_verification_id');
    }

    // Define the relationship with User (if applicable)
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
