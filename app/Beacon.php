<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beacon extends Model
{
    public $timestamps = true;
    protected $table = 'beacon';
    protected $fillable = [
        'name', 'type'
    ];
}
