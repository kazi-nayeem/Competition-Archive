<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'rank', 'name', 'institution', 'event_id'
    ];
}
