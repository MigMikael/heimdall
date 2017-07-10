<?php

namespace App\Http\Controllers;

use App\BeaconData;
use Illuminate\Http\Request;
use Log;

class BeaconController extends Controller
{
    public function index()
    {
        $mac_address = getenv("MAC");
        $beacons = BeaconData::where('mac_address', $mac_address)->get();

        //return $beacons;
        return view('beacon.index', ['beacons' => $beacons]);
    }

    public function take($record)
    {
        $mac_address = getenv("MAC");
        $beacons = BeaconData::where('mac_address', $mac_address)
            ->take($record)->get();

        $data = [];

        $last_beacon = $beacons[sizeof($beacons) - 1];

        foreach ($beacons as $beacon){
            $data[$beacon->time_delta] = $beacon;
        }
        for ($i = 0; $i <= $last_beacon->time_delta; $i++){
            if(!isset($data[$i])){
                $data[$i] = $data[$i - 1];
            }
        }

        /*$c = 0;
        foreach ($data as $datum){
            echo "<b>".$c."</b><br>";
            if($datum == null){
                echo 'null<br>';
            }else{
                echo $datum->id." ".$datum->time_delta.'<br>';
            }
            echo '___________________________________________________________<br>';
            $c++;
        }*/

        //return $data;
        return view('beacon.index', [
            'data' => $data,
            'beacons' => $beacons,
            'record' => $record
        ]);
    }

    public function takeRange($start, $end){
        $mac_address = getenv("MAC");
        $beacons = BeaconData::where('mac_address', $mac_address)
            ->skip($start)
            ->take($end - $start)
            ->get();

        return view('beacon.index', [
            'beacons' => $beacons,
            'start' => $start,
            'end' => $end
        ]);
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
