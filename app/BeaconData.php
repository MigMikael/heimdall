<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BeaconData extends Model
{
    public $timestamps = true;
    protected $table = 'beacon_data';
    protected $fillable = [
        'beacon_id', 'mac_address', 'RSSI',
    ];
}
