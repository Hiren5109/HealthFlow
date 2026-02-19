<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = ['user_id','specialization','experience','bio','consultant_fee','is_available'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function appointments(){
        return $this->hasMany(Appointment::class);
    }

    public function timeslots(){
        return $this->belongsTo(TimeSlot::class);
    }
}
