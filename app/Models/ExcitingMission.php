<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class ExcitingMission extends Model
{
    use HasFactory;

    protected $table = 'exciting_mission';

    protected $guarded = [];

    protected static function booted()
    {
        static::creating(function ($excitingMission) {
            $excitingMission->remaining_ticket = $excitingMission->amount_ticket;
            $excitingMission->create_by = Auth::user()->id;
        });
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'create_by');
    }

    public function partner()
    {
        return $this->belongsTo(Partner::class, 'partner_id');
    }

    public function tickets()
    {
        return $this->hasMany(ExcitingMissionTicket::class, 'exciting_mission_id');
    }
}
