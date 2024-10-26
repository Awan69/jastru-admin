<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExcitingMissionTicket extends Model
{
    use HasFactory;

    protected $table = 'exciting_mission_tickets';

    protected $guarded = [];

    public function excitingMission()
    {
        return $this->belongsTo(ExcitingMission::class, 'exciting_mission_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
