<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceImg extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'service_img';


    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id', 'id');
    }
}
