<?php

namespace App\Http\Controllers;

use App\BeaconData;
use Illuminate\Http\Request;
use Log;

class BeaconController extends Controller
{
    public function index()
    {
        //$mac_list = BeaconData::groupBy('mac_address')->pluck('mac_address');
        //$data = BeaconData::orderBy('created_at')->get();
        //$data = BeaconData::groupBy('mac_address')->pluck('mac_address');
        //$d = BeaconData::where('created_at', $data[6])->get();

        //$first_mac = $mac_list[0];
        $beacons = BeaconData::where('mac_address', "cd:18:e2:48:d6:53")->orderBy('created_at')->get();

        //return $beacons;
        return view('beacon.index', ['beacons' => $beacons/*, 'mac_list' => $mac_list*/]);
    }

    public function store(Request $request)
    {
        //$data = $request->all();
        $sentry_id = $request->get('sentry_id');
        $mac_address = $request->get('mac_address');
        $rssi = $request->get('rssi');
        $time_delta = $request->get('time_delta');
        $beacon_data = [
            'beacon_id' => $sentry_id,
            'mac_address' => $mac_address,
            'RSSI' => (int)($rssi),
            'time_delta' => $time_delta,
        ];

        $beacon_data = BeaconData::create($beacon_data);
        Log::info($beacon_data);
        return response()->json(['msg' => 'success']);
    }
}
