<?php

namespace App\Http\Controllers;

use App\BeaconData;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TestController extends Controller
{
    public function testTimeDiff()
    {
        $beacon_data1 = BeaconData::find(1);
        $beacon_data2 = BeaconData::find(3);
        $st = new Carbon($beacon_data1->created_at);
        $en = new Carbon($beacon_data2->created_at);
        echo $en->diffInSeconds($st);
    }
}
