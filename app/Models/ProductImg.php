<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImg extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'product_img';


    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
