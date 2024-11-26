<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'service';

    public function images()
    {
        return $this->hasMany(ServiceImg::class, 'service_id', 'id');
    }
}
