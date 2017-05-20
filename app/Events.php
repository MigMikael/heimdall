<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    public $timestamps = true;
    protected $table = 'events';
    protected $fillable = [
        'name', 'address', 'lat', 'long', 'start_time', 'end_time'
    ];
}
