<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    protected $fillable = [
        'title', 'description', 'start_time', 'end_time', 'user_id', 'department_id', 'type'
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
