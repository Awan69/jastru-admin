<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExcitingMisionTransaction extends Model
{
    use HasFactory;

    protected $table = 'exciting_mision_transaction';

    protected $guarded = [];



    public function balance()
    {
        return $this->belongsTo(Balance::class, 'balance_id');
    }


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function excitingMissionTicket()
    {
        return $this->belongsTo(ExcitingMissionTicket::class, 'exciting_mission_tickets_id');
    }
}
