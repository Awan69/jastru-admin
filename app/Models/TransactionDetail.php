<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;

    protected $table = 'transaction_detail';

    protected $guarded = [];


    public function balance()
    {
        return $this->belongsTo(Balance::class, 'balace_id');
    }

    public function missionTransaction()
    {
        return $this->belongsTo(ExcitingMisionTransaction::class, 'mision_transaction_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

/**
 * Get the product transaction associated with the transaction detail.
 */
    // public function productTransaction()
    // {
    //     return $this->belongsTo(ProductTransaction::class, 'product_transaction_id');
    // }

    // /**
    //  * Get the service transaction associated with the transaction detail.
    //  */
    // public function serviceTransaction()
    // {
    //     return $this->belongsTo(ServiceTransaction::class, 'service_transaction_id');
    // }
