<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Event extends Model
{
    protected $fillable = [
        'competition_id', 'title', 'summary', 'start_time', 'end_time', 'user_id', 'number_of_awards', 'number_of_participants'
    ];
    protected $dates = [
        'start_time', 'end_time'
    ];

    public function setStartTimeAttribute($value)
    {
        $this->attributes['start_time'] = Carbon::parse($value);
    }
    public function setEndTimeAttribute($value)
    {
        $this->attributes['end_time'] = Carbon::parse($value);
    }

    public function getStatus()
    {
        $start = $this->attributes['start_time'];
        $end = $this->attributes['end_time'];
        if($start>Carbon::now()) return 'Upcoming';
        if($end<Carbon::now()) return 'End';
        return 'Running';
    }
}
