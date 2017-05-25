<?php

use Illuminate\Database\Seeder;
use App\BeaconData;
use Carbon\Carbon;

class BeaconDataTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('beacon_data')->delete();
        
        \DB::table('beacon_data')->insert(array (
            0 => 
            array (
                'id' => 1,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -92,
                'created_at' => '2017-05-24 20:26:11',
                'updated_at' => '2017-05-24 20:26:11',
            ),
            1 => 
            array (
                'id' => 2,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -88,
                'created_at' => '2017-05-24 20:26:13',
                'updated_at' => '2017-05-24 20:26:13',
            ),
            2 => 
            array (
                'id' => 3,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -89,
                'created_at' => '2017-05-24 20:26:14',
                'updated_at' => '2017-05-24 20:26:14',
            ),
            3 => 
            array (
                'id' => 4,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -74,
                'created_at' => '2017-05-24 20:26:17',
                'updated_at' => '2017-05-24 20:26:17',
            ),
            4 => 
            array (
                'id' => 5,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -74,
                'created_at' => '2017-05-24 20:26:21',
                'updated_at' => '2017-05-24 20:26:21',
            ),
            5 => 
            array (
                'id' => 6,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -71,
                'created_at' => '2017-05-24 20:26:23',
                'updated_at' => '2017-05-24 20:26:23',
            ),
            6 => 
            array (
                'id' => 7,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -68,
                'created_at' => '2017-05-24 20:26:25',
                'updated_at' => '2017-05-24 20:26:25',
            ),
            7 => 
            array (
                'id' => 8,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -86,
                'created_at' => '2017-05-24 20:26:26',
                'updated_at' => '2017-05-24 20:26:26',
            ),
            8 => 
            array (
                'id' => 9,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -94,
                'created_at' => '2017-05-24 20:26:27',
                'updated_at' => '2017-05-24 20:26:27',
            ),
            9 => 
            array (
                'id' => 10,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -77,
                'created_at' => '2017-05-24 20:26:29',
                'updated_at' => '2017-05-24 20:26:29',
            ),
            10 => 
            array (
                'id' => 11,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -58,
                'created_at' => '2017-05-24 20:26:30',
                'updated_at' => '2017-05-24 20:26:30',
            ),
            11 => 
            array (
                'id' => 12,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -59,
                'created_at' => '2017-05-24 20:26:31',
                'updated_at' => '2017-05-24 20:26:31',
            ),
            12 => 
            array (
                'id' => 13,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -61,
                'created_at' => '2017-05-24 20:26:33',
                'updated_at' => '2017-05-24 20:26:33',
            ),
            13 => 
            array (
                'id' => 14,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -56,
                'created_at' => '2017-05-24 20:26:34',
                'updated_at' => '2017-05-24 20:26:34',
            ),
            14 => 
            array (
                'id' => 15,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -46,
                'created_at' => '2017-05-24 20:26:34',
                'updated_at' => '2017-05-24 20:26:34',
            ),
            15 => 
            array (
                'id' => 16,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -49,
                'created_at' => '2017-05-24 20:26:35',
                'updated_at' => '2017-05-24 20:26:35',
            ),
            16 => 
            array (
                'id' => 17,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -55,
                'created_at' => '2017-05-24 20:26:38',
                'updated_at' => '2017-05-24 20:26:38',
            ),
            17 => 
            array (
                'id' => 18,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -56,
                'created_at' => '2017-05-24 20:26:39',
                'updated_at' => '2017-05-24 20:26:39',
            ),
            18 => 
            array (
                'id' => 19,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -71,
                'created_at' => '2017-05-24 20:26:40',
                'updated_at' => '2017-05-24 20:26:40',
            ),
            19 => 
            array (
                'id' => 20,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -53,
                'created_at' => '2017-05-24 20:26:42',
                'updated_at' => '2017-05-24 20:26:42',
            ),
            20 => 
            array (
                'id' => 21,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -49,
                'created_at' => '2017-05-24 20:26:43',
                'updated_at' => '2017-05-24 20:26:43',
            ),
            21 => 
            array (
                'id' => 22,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -49,
                'created_at' => '2017-05-24 20:26:44',
                'updated_at' => '2017-05-24 20:26:44',
            ),
            22 => 
            array (
                'id' => 23,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -61,
                'created_at' => '2017-05-24 20:26:45',
                'updated_at' => '2017-05-24 20:26:45',
            ),
            23 => 
            array (
                'id' => 24,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -64,
                'created_at' => '2017-05-24 20:26:47',
                'updated_at' => '2017-05-24 20:26:47',
            ),
            24 => 
            array (
                'id' => 25,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -58,
                'created_at' => '2017-05-24 20:26:48',
                'updated_at' => '2017-05-24 20:26:48',
            ),
            25 => 
            array (
                'id' => 26,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -48,
                'created_at' => '2017-05-24 20:26:49',
                'updated_at' => '2017-05-24 20:26:49',
            ),
            26 => 
            array (
                'id' => 27,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -46,
                'created_at' => '2017-05-24 20:26:51',
                'updated_at' => '2017-05-24 20:26:51',
            ),
            27 => 
            array (
                'id' => 28,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -55,
                'created_at' => '2017-05-24 20:26:53',
                'updated_at' => '2017-05-24 20:26:53',
            ),
            28 => 
            array (
                'id' => 29,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -50,
                'created_at' => '2017-05-24 20:26:54',
                'updated_at' => '2017-05-24 20:26:54',
            ),
            29 => 
            array (
                'id' => 30,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -57,
                'created_at' => '2017-05-24 20:26:56',
                'updated_at' => '2017-05-24 20:26:56',
            ),
            30 => 
            array (
                'id' => 31,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -66,
                'created_at' => '2017-05-24 20:26:57',
                'updated_at' => '2017-05-24 20:26:57',
            ),
            31 => 
            array (
                'id' => 32,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -59,
                'created_at' => '2017-05-24 20:26:58',
                'updated_at' => '2017-05-24 20:26:58',
            ),
            32 => 
            array (
                'id' => 33,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -73,
                'created_at' => '2017-05-24 20:27:00',
                'updated_at' => '2017-05-24 20:27:00',
            ),
            33 => 
            array (
                'id' => 34,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -67,
                'created_at' => '2017-05-24 20:27:01',
                'updated_at' => '2017-05-24 20:27:01',
            ),
            34 => 
            array (
                'id' => 35,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -60,
                'created_at' => '2017-05-24 20:27:02',
                'updated_at' => '2017-05-24 20:27:02',
            ),
            35 => 
            array (
                'id' => 36,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -63,
                'created_at' => '2017-05-24 20:27:03',
                'updated_at' => '2017-05-24 20:27:03',
            ),
            36 => 
            array (
                'id' => 37,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -62,
                'created_at' => '2017-05-24 20:27:05',
                'updated_at' => '2017-05-24 20:27:05',
            ),
            37 => 
            array (
                'id' => 38,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -62,
                'created_at' => '2017-05-24 20:27:06',
                'updated_at' => '2017-05-24 20:27:06',
            ),
            38 => 
            array (
                'id' => 39,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -74,
                'created_at' => '2017-05-24 20:27:07',
                'updated_at' => '2017-05-24 20:27:07',
            ),
            39 => 
            array (
                'id' => 40,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -59,
                'created_at' => '2017-05-24 20:27:09',
                'updated_at' => '2017-05-24 20:27:09',
            ),
            40 => 
            array (
                'id' => 41,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -71,
                'created_at' => '2017-05-24 20:27:09',
                'updated_at' => '2017-05-24 20:27:09',
            ),
            41 => 
            array (
                'id' => 42,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -59,
                'created_at' => '2017-05-24 20:27:10',
                'updated_at' => '2017-05-24 20:27:10',
            ),
            42 => 
            array (
                'id' => 43,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -71,
                'created_at' => '2017-05-24 20:27:11',
                'updated_at' => '2017-05-24 20:27:11',
            ),
            43 => 
            array (
                'id' => 44,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -66,
                'created_at' => '2017-05-24 20:27:13',
                'updated_at' => '2017-05-24 20:27:13',
            ),
            44 => 
            array (
                'id' => 45,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -75,
                'created_at' => '2017-05-24 20:27:14',
                'updated_at' => '2017-05-24 20:27:14',
            ),
            45 => 
            array (
                'id' => 46,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -76,
                'created_at' => '2017-05-24 20:27:15',
                'updated_at' => '2017-05-24 20:27:15',
            ),
            46 => 
            array (
                'id' => 47,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -71,
                'created_at' => '2017-05-24 20:27:16',
                'updated_at' => '2017-05-24 20:27:16',
            ),
            47 => 
            array (
                'id' => 48,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -54,
                'created_at' => '2017-05-24 20:27:18',
                'updated_at' => '2017-05-24 20:27:18',
            ),
            48 => 
            array (
                'id' => 49,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -69,
                'created_at' => '2017-05-24 20:27:19',
                'updated_at' => '2017-05-24 20:27:19',
            ),
            49 => 
            array (
                'id' => 50,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -58,
                'created_at' => '2017-05-24 20:27:20',
                'updated_at' => '2017-05-24 20:27:20',
            ),
            50 => 
            array (
                'id' => 51,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -57,
                'created_at' => '2017-05-24 20:27:22',
                'updated_at' => '2017-05-24 20:27:22',
            ),
            51 => 
            array (
                'id' => 52,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -74,
                'created_at' => '2017-05-24 20:27:23',
                'updated_at' => '2017-05-24 20:27:23',
            ),
            52 => 
            array (
                'id' => 53,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -80,
                'created_at' => '2017-05-24 20:27:24',
                'updated_at' => '2017-05-24 20:27:24',
            ),
            53 => 
            array (
                'id' => 54,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -77,
                'created_at' => '2017-05-24 20:27:25',
                'updated_at' => '2017-05-24 20:27:25',
            ),
            54 => 
            array (
                'id' => 55,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -88,
                'created_at' => '2017-05-24 20:27:27',
                'updated_at' => '2017-05-24 20:27:27',
            ),
            55 => 
            array (
                'id' => 56,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -69,
                'created_at' => '2017-05-24 20:27:28',
                'updated_at' => '2017-05-24 20:27:28',
            ),
            56 => 
            array (
                'id' => 57,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -67,
                'created_at' => '2017-05-24 20:27:29',
                'updated_at' => '2017-05-24 20:27:29',
            ),
            57 => 
            array (
                'id' => 58,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -70,
                'created_at' => '2017-05-24 20:27:31',
                'updated_at' => '2017-05-24 20:27:31',
            ),
            58 => 
            array (
                'id' => 59,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -64,
                'created_at' => '2017-05-24 20:27:32',
                'updated_at' => '2017-05-24 20:27:32',
            ),
            59 => 
            array (
                'id' => 60,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -70,
                'created_at' => '2017-05-24 20:27:33',
                'updated_at' => '2017-05-24 20:27:33',
            ),
            60 => 
            array (
                'id' => 61,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -75,
                'created_at' => '2017-05-24 20:27:34',
                'updated_at' => '2017-05-24 20:27:34',
            ),
            61 => 
            array (
                'id' => 62,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -74,
                'created_at' => '2017-05-24 20:27:36',
                'updated_at' => '2017-05-24 20:27:36',
            ),
            62 => 
            array (
                'id' => 63,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -63,
                'created_at' => '2017-05-24 20:27:37',
                'updated_at' => '2017-05-24 20:27:37',
            ),
            63 => 
            array (
                'id' => 64,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -63,
                'created_at' => '2017-05-24 20:27:38',
                'updated_at' => '2017-05-24 20:27:38',
            ),
            64 => 
            array (
                'id' => 65,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -53,
                'created_at' => '2017-05-24 20:27:40',
                'updated_at' => '2017-05-24 20:27:40',
            ),
            65 => 
            array (
                'id' => 66,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -55,
                'created_at' => '2017-05-24 20:27:41',
                'updated_at' => '2017-05-24 20:27:41',
            ),
            66 => 
            array (
                'id' => 67,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -58,
                'created_at' => '2017-05-24 20:27:42',
                'updated_at' => '2017-05-24 20:27:42',
            ),
            67 => 
            array (
                'id' => 68,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -61,
                'created_at' => '2017-05-24 20:27:43',
                'updated_at' => '2017-05-24 20:27:43',
            ),
            68 => 
            array (
                'id' => 69,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -59,
                'created_at' => '2017-05-24 20:27:46',
                'updated_at' => '2017-05-24 20:27:46',
            ),
            69 => 
            array (
                'id' => 70,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -61,
                'created_at' => '2017-05-24 20:27:47',
                'updated_at' => '2017-05-24 20:27:47',
            ),
            70 => 
            array (
                'id' => 71,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -61,
                'created_at' => '2017-05-24 20:27:49',
                'updated_at' => '2017-05-24 20:27:49',
            ),
            71 => 
            array (
                'id' => 72,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -68,
                'created_at' => '2017-05-24 20:27:50',
                'updated_at' => '2017-05-24 20:27:50',
            ),
            72 => 
            array (
                'id' => 73,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -83,
                'created_at' => '2017-05-24 20:27:51',
                'updated_at' => '2017-05-24 20:27:51',
            ),
            73 => 
            array (
                'id' => 74,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -51,
                'created_at' => '2017-05-24 20:27:53',
                'updated_at' => '2017-05-24 20:27:53',
            ),
            74 => 
            array (
                'id' => 75,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -55,
                'created_at' => '2017-05-24 20:27:54',
                'updated_at' => '2017-05-24 20:27:54',
            ),
            75 => 
            array (
                'id' => 76,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -57,
                'created_at' => '2017-05-24 20:27:55',
                'updated_at' => '2017-05-24 20:27:55',
            ),
            76 => 
            array (
                'id' => 77,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -72,
                'created_at' => '2017-05-24 20:27:56',
                'updated_at' => '2017-05-24 20:27:56',
            ),
            77 => 
            array (
                'id' => 78,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -62,
                'created_at' => '2017-05-24 20:27:58',
                'updated_at' => '2017-05-24 20:27:58',
            ),
            78 => 
            array (
                'id' => 79,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -74,
                'created_at' => '2017-05-24 20:27:59',
                'updated_at' => '2017-05-24 20:27:59',
            ),
            79 => 
            array (
                'id' => 80,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -50,
                'created_at' => '2017-05-24 20:28:00',
                'updated_at' => '2017-05-24 20:28:00',
            ),
            80 => 
            array (
                'id' => 81,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -72,
                'created_at' => '2017-05-24 20:28:02',
                'updated_at' => '2017-05-24 20:28:02',
            ),
            81 => 
            array (
                'id' => 82,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -53,
                'created_at' => '2017-05-24 20:28:03',
                'updated_at' => '2017-05-24 20:28:03',
            ),
            82 => 
            array (
                'id' => 83,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -56,
                'created_at' => '2017-05-24 20:28:06',
                'updated_at' => '2017-05-24 20:28:06',
            ),
            83 => 
            array (
                'id' => 84,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -59,
                'created_at' => '2017-05-24 20:28:07',
                'updated_at' => '2017-05-24 20:28:07',
            ),
            84 => 
            array (
                'id' => 85,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -78,
                'created_at' => '2017-05-24 20:28:08',
                'updated_at' => '2017-05-24 20:28:08',
            ),
            85 => 
            array (
                'id' => 86,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -72,
                'created_at' => '2017-05-24 20:28:09',
                'updated_at' => '2017-05-24 20:28:09',
            ),
            86 => 
            array (
                'id' => 87,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -85,
                'created_at' => '2017-05-24 20:28:10',
                'updated_at' => '2017-05-24 20:28:10',
            ),
            87 => 
            array (
                'id' => 88,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -54,
                'created_at' => '2017-05-24 20:28:12',
                'updated_at' => '2017-05-24 20:28:12',
            ),
            88 => 
            array (
                'id' => 89,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -62,
                'created_at' => '2017-05-24 20:28:13',
                'updated_at' => '2017-05-24 20:28:13',
            ),
            89 => 
            array (
                'id' => 90,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -55,
                'created_at' => '2017-05-24 20:28:14',
                'updated_at' => '2017-05-24 20:28:14',
            ),
            90 => 
            array (
                'id' => 91,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -58,
                'created_at' => '2017-05-24 20:28:16',
                'updated_at' => '2017-05-24 20:28:16',
            ),
            91 => 
            array (
                'id' => 92,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -64,
                'created_at' => '2017-05-24 20:28:18',
                'updated_at' => '2017-05-24 20:28:18',
            ),
            92 => 
            array (
                'id' => 93,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -48,
                'created_at' => '2017-05-24 20:28:20',
                'updated_at' => '2017-05-24 20:28:20',
            ),
            93 => 
            array (
                'id' => 94,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -55,
                'created_at' => '2017-05-24 20:28:21',
                'updated_at' => '2017-05-24 20:28:21',
            ),
            94 => 
            array (
                'id' => 95,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -51,
                'created_at' => '2017-05-24 20:28:22',
                'updated_at' => '2017-05-24 20:28:22',
            ),
            95 => 
            array (
                'id' => 96,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -52,
                'created_at' => '2017-05-24 20:28:23',
                'updated_at' => '2017-05-24 20:28:23',
            ),
            96 => 
            array (
                'id' => 97,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -77,
                'created_at' => '2017-05-24 20:28:25',
                'updated_at' => '2017-05-24 20:28:25',
            ),
            97 => 
            array (
                'id' => 98,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -74,
                'created_at' => '2017-05-24 20:28:26',
                'updated_at' => '2017-05-24 20:28:26',
            ),
            98 => 
            array (
                'id' => 99,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -61,
                'created_at' => '2017-05-24 20:28:27',
                'updated_at' => '2017-05-24 20:28:27',
            ),
            99 => 
            array (
                'id' => 100,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -61,
                'created_at' => '2017-05-24 20:28:30',
                'updated_at' => '2017-05-24 20:28:30',
            ),
            100 => 
            array (
                'id' => 101,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -59,
                'created_at' => '2017-05-24 20:28:31',
                'updated_at' => '2017-05-24 20:28:31',
            ),
            101 => 
            array (
                'id' => 102,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -55,
                'created_at' => '2017-05-24 20:28:34',
                'updated_at' => '2017-05-24 20:28:34',
            ),
            102 => 
            array (
                'id' => 103,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -56,
                'created_at' => '2017-05-24 20:28:35',
                'updated_at' => '2017-05-24 20:28:35',
            ),
            103 => 
            array (
                'id' => 104,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -82,
                'created_at' => '2017-05-24 20:28:36',
                'updated_at' => '2017-05-24 20:28:36',
            ),
            104 => 
            array (
                'id' => 105,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -59,
                'created_at' => '2017-05-24 20:28:38',
                'updated_at' => '2017-05-24 20:28:38',
            ),
            105 => 
            array (
                'id' => 106,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -59,
                'created_at' => '2017-05-24 20:28:39',
                'updated_at' => '2017-05-24 20:28:39',
            ),
            106 => 
            array (
                'id' => 107,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -69,
                'created_at' => '2017-05-24 20:28:40',
                'updated_at' => '2017-05-24 20:28:40',
            ),
            107 => 
            array (
                'id' => 108,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -69,
                'created_at' => '2017-05-24 20:28:43',
                'updated_at' => '2017-05-24 20:28:43',
            ),
            108 => 
            array (
                'id' => 109,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -70,
                'created_at' => '2017-05-24 20:28:44',
                'updated_at' => '2017-05-24 20:28:44',
            ),
            109 => 
            array (
                'id' => 110,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -69,
                'created_at' => '2017-05-24 20:28:45',
                'updated_at' => '2017-05-24 20:28:45',
            ),
            110 => 
            array (
                'id' => 111,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -72,
                'created_at' => '2017-05-24 20:28:47',
                'updated_at' => '2017-05-24 20:28:47',
            ),
            111 => 
            array (
                'id' => 112,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -66,
                'created_at' => '2017-05-24 20:28:48',
                'updated_at' => '2017-05-24 20:28:48',
            ),
            112 => 
            array (
                'id' => 113,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -55,
                'created_at' => '2017-05-24 20:28:49',
                'updated_at' => '2017-05-24 20:28:49',
            ),
            113 => 
            array (
                'id' => 114,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -56,
                'created_at' => '2017-05-24 20:28:51',
                'updated_at' => '2017-05-24 20:28:51',
            ),
            114 => 
            array (
                'id' => 115,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -69,
                'created_at' => '2017-05-24 20:28:52',
                'updated_at' => '2017-05-24 20:28:52',
            ),
            115 => 
            array (
                'id' => 116,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -72,
                'created_at' => '2017-05-24 20:28:53',
                'updated_at' => '2017-05-24 20:28:53',
            ),
            116 => 
            array (
                'id' => 117,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -71,
                'created_at' => '2017-05-24 20:28:54',
                'updated_at' => '2017-05-24 20:28:54',
            ),
            117 => 
            array (
                'id' => 118,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -67,
                'created_at' => '2017-05-24 20:28:56',
                'updated_at' => '2017-05-24 20:28:56',
            ),
            118 => 
            array (
                'id' => 119,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -68,
                'created_at' => '2017-05-24 20:28:57',
                'updated_at' => '2017-05-24 20:28:57',
            ),
            119 => 
            array (
                'id' => 120,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -70,
                'created_at' => '2017-05-24 20:28:58',
                'updated_at' => '2017-05-24 20:28:58',
            ),
            120 => 
            array (
                'id' => 121,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -70,
                'created_at' => '2017-05-24 20:29:00',
                'updated_at' => '2017-05-24 20:29:00',
            ),
            121 => 
            array (
                'id' => 122,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -71,
                'created_at' => '2017-05-24 20:29:01',
                'updated_at' => '2017-05-24 20:29:01',
            ),
            122 => 
            array (
                'id' => 123,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -70,
                'created_at' => '2017-05-24 20:29:02',
                'updated_at' => '2017-05-24 20:29:02',
            ),
            123 => 
            array (
                'id' => 124,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -87,
                'created_at' => '2017-05-24 20:29:03',
                'updated_at' => '2017-05-24 20:29:03',
            ),
            124 => 
            array (
                'id' => 125,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -75,
                'created_at' => '2017-05-24 20:29:05',
                'updated_at' => '2017-05-24 20:29:05',
            ),
            125 => 
            array (
                'id' => 126,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -79,
                'created_at' => '2017-05-24 20:29:06',
                'updated_at' => '2017-05-24 20:29:06',
            ),
            126 => 
            array (
                'id' => 127,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -75,
                'created_at' => '2017-05-24 20:29:07',
                'updated_at' => '2017-05-24 20:29:07',
            ),
            127 => 
            array (
                'id' => 128,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -72,
                'created_at' => '2017-05-24 20:29:09',
                'updated_at' => '2017-05-24 20:29:09',
            ),
            128 => 
            array (
                'id' => 129,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -66,
                'created_at' => '2017-05-24 20:29:11',
                'updated_at' => '2017-05-24 20:29:11',
            ),
            129 => 
            array (
                'id' => 130,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -65,
                'created_at' => '2017-05-24 20:29:12',
                'updated_at' => '2017-05-24 20:29:12',
            ),
            130 => 
            array (
                'id' => 131,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -73,
                'created_at' => '2017-05-24 20:29:14',
                'updated_at' => '2017-05-24 20:29:14',
            ),
            131 => 
            array (
                'id' => 132,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -75,
                'created_at' => '2017-05-24 20:29:15',
                'updated_at' => '2017-05-24 20:29:15',
            ),
            132 => 
            array (
                'id' => 133,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -85,
                'created_at' => '2017-05-24 20:29:16',
                'updated_at' => '2017-05-24 20:29:16',
            ),
            133 => 
            array (
                'id' => 134,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -73,
                'created_at' => '2017-05-24 20:29:18',
                'updated_at' => '2017-05-24 20:29:18',
            ),
            134 => 
            array (
                'id' => 135,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -61,
                'created_at' => '2017-05-24 20:29:19',
                'updated_at' => '2017-05-24 20:29:19',
            ),
            135 => 
            array (
                'id' => 136,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -71,
                'created_at' => '2017-05-24 20:29:20',
                'updated_at' => '2017-05-24 20:29:20',
            ),
            136 => 
            array (
                'id' => 137,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -69,
                'created_at' => '2017-05-24 20:29:22',
                'updated_at' => '2017-05-24 20:29:22',
            ),
            137 => 
            array (
                'id' => 138,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -75,
                'created_at' => '2017-05-24 20:29:23',
                'updated_at' => '2017-05-24 20:29:23',
            ),
            138 => 
            array (
                'id' => 139,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -76,
                'created_at' => '2017-05-24 20:29:24',
                'updated_at' => '2017-05-24 20:29:24',
            ),
            139 => 
            array (
                'id' => 140,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -82,
                'created_at' => '2017-05-24 20:29:25',
                'updated_at' => '2017-05-24 20:29:25',
            ),
            140 => 
            array (
                'id' => 141,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -73,
                'created_at' => '2017-05-24 20:29:27',
                'updated_at' => '2017-05-24 20:29:27',
            ),
            141 => 
            array (
                'id' => 142,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -69,
                'created_at' => '2017-05-24 20:29:28',
                'updated_at' => '2017-05-24 20:29:28',
            ),
            142 => 
            array (
                'id' => 143,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -67,
                'created_at' => '2017-05-24 20:29:29',
                'updated_at' => '2017-05-24 20:29:29',
            ),
            143 => 
            array (
                'id' => 144,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -94,
                'created_at' => '2017-05-24 20:29:31',
                'updated_at' => '2017-05-24 20:29:31',
            ),
            144 => 
            array (
                'id' => 145,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -78,
                'created_at' => '2017-05-24 20:29:32',
                'updated_at' => '2017-05-24 20:29:32',
            ),
            145 => 
            array (
                'id' => 146,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -69,
                'created_at' => '2017-05-24 20:29:33',
                'updated_at' => '2017-05-24 20:29:33',
            ),
            146 => 
            array (
                'id' => 147,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -66,
                'created_at' => '2017-05-24 20:29:34',
                'updated_at' => '2017-05-24 20:29:34',
            ),
            147 => 
            array (
                'id' => 148,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -83,
                'created_at' => '2017-05-24 20:29:36',
                'updated_at' => '2017-05-24 20:29:36',
            ),
            148 => 
            array (
                'id' => 149,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -81,
                'created_at' => '2017-05-24 20:29:37',
                'updated_at' => '2017-05-24 20:29:37',
            ),
            149 => 
            array (
                'id' => 150,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -84,
                'created_at' => '2017-05-24 20:29:38',
                'updated_at' => '2017-05-24 20:29:38',
            ),
            150 => 
            array (
                'id' => 151,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -79,
                'created_at' => '2017-05-24 20:29:40',
                'updated_at' => '2017-05-24 20:29:40',
            ),
            151 => 
            array (
                'id' => 152,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -86,
                'created_at' => '2017-05-24 20:29:41',
                'updated_at' => '2017-05-24 20:29:41',
            ),
            152 => 
            array (
                'id' => 153,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -64,
                'created_at' => '2017-05-24 20:29:42',
                'updated_at' => '2017-05-24 20:29:42',
            ),
            153 => 
            array (
                'id' => 154,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -58,
                'created_at' => '2017-05-24 20:29:45',
                'updated_at' => '2017-05-24 20:29:45',
            ),
            154 => 
            array (
                'id' => 155,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -61,
                'created_at' => '2017-05-24 20:29:45',
                'updated_at' => '2017-05-24 20:29:45',
            ),
            155 => 
            array (
                'id' => 156,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -67,
                'created_at' => '2017-05-24 20:29:46',
                'updated_at' => '2017-05-24 20:29:46',
            ),
            156 => 
            array (
                'id' => 157,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -62,
                'created_at' => '2017-05-24 20:29:47',
                'updated_at' => '2017-05-24 20:29:47',
            ),
            157 => 
            array (
                'id' => 158,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -85,
                'created_at' => '2017-05-24 20:29:49',
                'updated_at' => '2017-05-24 20:29:49',
            ),
            158 => 
            array (
                'id' => 159,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -77,
                'created_at' => '2017-05-24 20:29:50',
                'updated_at' => '2017-05-24 20:29:50',
            ),
            159 => 
            array (
                'id' => 160,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -79,
                'created_at' => '2017-05-24 20:29:52',
                'updated_at' => '2017-05-24 20:29:52',
            ),
            160 => 
            array (
                'id' => 161,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -79,
                'created_at' => '2017-05-24 20:29:54',
                'updated_at' => '2017-05-24 20:29:54',
            ),
            161 => 
            array (
                'id' => 162,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -62,
                'created_at' => '2017-05-24 20:29:55',
                'updated_at' => '2017-05-24 20:29:55',
            ),
            162 => 
            array (
                'id' => 163,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -72,
                'created_at' => '2017-05-24 20:29:56',
                'updated_at' => '2017-05-24 20:29:56',
            ),
            163 => 
            array (
                'id' => 164,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -68,
                'created_at' => '2017-05-24 20:29:57',
                'updated_at' => '2017-05-24 20:29:57',
            ),
            164 => 
            array (
                'id' => 165,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -68,
                'created_at' => '2017-05-24 20:29:58',
                'updated_at' => '2017-05-24 20:29:58',
            ),
            165 => 
            array (
                'id' => 166,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -68,
                'created_at' => '2017-05-24 20:29:59',
                'updated_at' => '2017-05-24 20:29:59',
            ),
            166 => 
            array (
                'id' => 167,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -70,
                'created_at' => '2017-05-24 20:29:59',
                'updated_at' => '2017-05-24 20:29:59',
            ),
            167 => 
            array (
                'id' => 168,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -70,
                'created_at' => '2017-05-24 20:30:00',
                'updated_at' => '2017-05-24 20:30:00',
            ),
            168 => 
            array (
                'id' => 169,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -71,
                'created_at' => '2017-05-24 20:30:02',
                'updated_at' => '2017-05-24 20:30:02',
            ),
            169 => 
            array (
                'id' => 170,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -69,
                'created_at' => '2017-05-24 20:30:03',
                'updated_at' => '2017-05-24 20:30:03',
            ),
            170 => 
            array (
                'id' => 171,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -68,
                'created_at' => '2017-05-24 20:30:04',
                'updated_at' => '2017-05-24 20:30:04',
            ),
            171 => 
            array (
                'id' => 172,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -80,
                'created_at' => '2017-05-24 20:30:04',
                'updated_at' => '2017-05-24 20:30:04',
            ),
            172 => 
            array (
                'id' => 173,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -79,
                'created_at' => '2017-05-24 20:30:05',
                'updated_at' => '2017-05-24 20:30:05',
            ),
            173 => 
            array (
                'id' => 174,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -78,
                'created_at' => '2017-05-24 20:30:07',
                'updated_at' => '2017-05-24 20:30:07',
            ),
            174 => 
            array (
                'id' => 175,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -79,
                'created_at' => '2017-05-24 20:30:08',
                'updated_at' => '2017-05-24 20:30:08',
            ),
            175 => 
            array (
                'id' => 176,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -74,
                'created_at' => '2017-05-24 20:30:09',
                'updated_at' => '2017-05-24 20:30:09',
            ),
            176 => 
            array (
                'id' => 177,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -67,
                'created_at' => '2017-05-24 20:30:10',
                'updated_at' => '2017-05-24 20:30:10',
            ),
            177 => 
            array (
                'id' => 178,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -70,
                'created_at' => '2017-05-24 20:30:12',
                'updated_at' => '2017-05-24 20:30:12',
            ),
            178 => 
            array (
                'id' => 179,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -70,
                'created_at' => '2017-05-24 20:30:13',
                'updated_at' => '2017-05-24 20:30:13',
            ),
            179 => 
            array (
                'id' => 180,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -72,
                'created_at' => '2017-05-24 20:30:14',
                'updated_at' => '2017-05-24 20:30:14',
            ),
            180 => 
            array (
                'id' => 181,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -81,
                'created_at' => '2017-05-24 20:30:16',
                'updated_at' => '2017-05-24 20:30:16',
            ),
            181 => 
            array (
                'id' => 182,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -80,
                'created_at' => '2017-05-24 20:30:17',
                'updated_at' => '2017-05-24 20:30:17',
            ),
            182 => 
            array (
                'id' => 183,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -79,
                'created_at' => '2017-05-24 20:30:18',
                'updated_at' => '2017-05-24 20:30:18',
            ),
            183 => 
            array (
                'id' => 184,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -61,
                'created_at' => '2017-05-24 20:30:20',
                'updated_at' => '2017-05-24 20:30:20',
            ),
            184 => 
            array (
                'id' => 185,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -61,
                'created_at' => '2017-05-24 20:30:21',
                'updated_at' => '2017-05-24 20:30:21',
            ),
            185 => 
            array (
                'id' => 186,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -61,
                'created_at' => '2017-05-24 20:30:22',
                'updated_at' => '2017-05-24 20:30:22',
            ),
            186 => 
            array (
                'id' => 187,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -67,
                'created_at' => '2017-05-24 20:30:23',
                'updated_at' => '2017-05-24 20:30:23',
            ),
            187 => 
            array (
                'id' => 188,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -74,
                'created_at' => '2017-05-24 20:30:25',
                'updated_at' => '2017-05-24 20:30:25',
            ),
            188 => 
            array (
                'id' => 189,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -79,
                'created_at' => '2017-05-24 20:30:27',
                'updated_at' => '2017-05-24 20:30:27',
            ),
            189 => 
            array (
                'id' => 190,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -70,
                'created_at' => '2017-05-24 20:30:29',
                'updated_at' => '2017-05-24 20:30:29',
            ),
            190 => 
            array (
                'id' => 191,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -67,
                'created_at' => '2017-05-24 20:30:30',
                'updated_at' => '2017-05-24 20:30:30',
            ),
            191 => 
            array (
                'id' => 192,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -71,
                'created_at' => '2017-05-24 20:30:31',
                'updated_at' => '2017-05-24 20:30:31',
            ),
            192 => 
            array (
                'id' => 193,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -75,
                'created_at' => '2017-05-24 20:30:35',
                'updated_at' => '2017-05-24 20:30:35',
            ),
            193 => 
            array (
                'id' => 194,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -61,
                'created_at' => '2017-05-24 20:30:36',
                'updated_at' => '2017-05-24 20:30:36',
            ),
            194 => 
            array (
                'id' => 195,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -84,
                'created_at' => '2017-05-24 20:30:38',
                'updated_at' => '2017-05-24 20:30:38',
            ),
            195 => 
            array (
                'id' => 196,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -60,
                'created_at' => '2017-05-24 20:30:39',
                'updated_at' => '2017-05-24 20:30:39',
            ),
            196 => 
            array (
                'id' => 197,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -74,
                'created_at' => '2017-05-24 20:30:40',
                'updated_at' => '2017-05-24 20:30:40',
            ),
            197 => 
            array (
                'id' => 198,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -76,
                'created_at' => '2017-05-24 20:30:41',
                'updated_at' => '2017-05-24 20:30:41',
            ),
            198 => 
            array (
                'id' => 199,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -77,
                'created_at' => '2017-05-24 20:30:43',
                'updated_at' => '2017-05-24 20:30:43',
            ),
            199 => 
            array (
                'id' => 200,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -68,
                'created_at' => '2017-05-24 20:30:44',
                'updated_at' => '2017-05-24 20:30:44',
            ),
            200 => 
            array (
                'id' => 201,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -76,
                'created_at' => '2017-05-24 20:30:45',
                'updated_at' => '2017-05-24 20:30:45',
            ),
            201 => 
            array (
                'id' => 202,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -61,
                'created_at' => '2017-05-24 20:30:47',
                'updated_at' => '2017-05-24 20:30:47',
            ),
            202 => 
            array (
                'id' => 203,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -77,
                'created_at' => '2017-05-24 20:30:48',
                'updated_at' => '2017-05-24 20:30:48',
            ),
            203 => 
            array (
                'id' => 204,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -73,
                'created_at' => '2017-05-24 20:30:49',
                'updated_at' => '2017-05-24 20:30:49',
            ),
            204 => 
            array (
                'id' => 205,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -78,
                'created_at' => '2017-05-24 20:30:51',
                'updated_at' => '2017-05-24 20:30:51',
            ),
            205 => 
            array (
                'id' => 206,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -58,
                'created_at' => '2017-05-24 20:30:52',
                'updated_at' => '2017-05-24 20:30:52',
            ),
            206 => 
            array (
                'id' => 207,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -51,
                'created_at' => '2017-05-24 20:30:54',
                'updated_at' => '2017-05-24 20:30:54',
            ),
            207 => 
            array (
                'id' => 208,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -58,
                'created_at' => '2017-05-24 20:30:55',
                'updated_at' => '2017-05-24 20:30:55',
            ),
            208 => 
            array (
                'id' => 209,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -57,
                'created_at' => '2017-05-24 20:30:56',
                'updated_at' => '2017-05-24 20:30:56',
            ),
            209 => 
            array (
                'id' => 210,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -62,
                'created_at' => '2017-05-24 20:30:56',
                'updated_at' => '2017-05-24 20:30:56',
            ),
            210 => 
            array (
                'id' => 211,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -77,
                'created_at' => '2017-05-24 20:30:57',
                'updated_at' => '2017-05-24 20:30:57',
            ),
            211 => 
            array (
                'id' => 212,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -64,
                'created_at' => '2017-05-24 20:30:57',
                'updated_at' => '2017-05-24 20:30:57',
            ),
            212 => 
            array (
                'id' => 213,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -77,
                'created_at' => '2017-05-24 20:30:58',
                'updated_at' => '2017-05-24 20:30:58',
            ),
            213 => 
            array (
                'id' => 214,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -68,
                'created_at' => '2017-05-24 20:31:00',
                'updated_at' => '2017-05-24 20:31:00',
            ),
            214 => 
            array (
                'id' => 215,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -65,
                'created_at' => '2017-05-24 20:31:00',
                'updated_at' => '2017-05-24 20:31:00',
            ),
            215 => 
            array (
                'id' => 216,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -81,
                'created_at' => '2017-05-24 20:31:01',
                'updated_at' => '2017-05-24 20:31:01',
            ),
            216 => 
            array (
                'id' => 217,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -85,
                'created_at' => '2017-05-24 20:31:02',
                'updated_at' => '2017-05-24 20:31:02',
            ),
            217 => 
            array (
                'id' => 218,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -76,
                'created_at' => '2017-05-24 20:31:03',
                'updated_at' => '2017-05-24 20:31:03',
            ),
            218 => 
            array (
                'id' => 219,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -74,
                'created_at' => '2017-05-24 20:31:05',
                'updated_at' => '2017-05-24 20:31:05',
            ),
            219 => 
            array (
                'id' => 220,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -74,
                'created_at' => '2017-05-24 20:31:06',
                'updated_at' => '2017-05-24 20:31:06',
            ),
            220 => 
            array (
                'id' => 221,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -67,
                'created_at' => '2017-05-24 20:31:10',
                'updated_at' => '2017-05-24 20:31:10',
            ),
            221 => 
            array (
                'id' => 222,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -69,
                'created_at' => '2017-05-24 20:31:11',
                'updated_at' => '2017-05-24 20:31:11',
            ),
            222 => 
            array (
                'id' => 223,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -66,
                'created_at' => '2017-05-24 20:31:12',
                'updated_at' => '2017-05-24 20:31:12',
            ),
            223 => 
            array (
                'id' => 224,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -87,
                'created_at' => '2017-05-24 20:31:14',
                'updated_at' => '2017-05-24 20:31:14',
            ),
            224 => 
            array (
                'id' => 225,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -75,
                'created_at' => '2017-05-24 20:31:16',
                'updated_at' => '2017-05-24 20:31:16',
            ),
            225 => 
            array (
                'id' => 226,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -63,
                'created_at' => '2017-05-24 20:31:18',
                'updated_at' => '2017-05-24 20:31:18',
            ),
            226 => 
            array (
                'id' => 227,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -70,
                'created_at' => '2017-05-24 20:31:19',
                'updated_at' => '2017-05-24 20:31:19',
            ),
            227 => 
            array (
                'id' => 228,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -67,
                'created_at' => '2017-05-24 20:31:20',
                'updated_at' => '2017-05-24 20:31:20',
            ),
            228 => 
            array (
                'id' => 229,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -70,
                'created_at' => '2017-05-24 20:31:23',
                'updated_at' => '2017-05-24 20:31:23',
            ),
            229 => 
            array (
                'id' => 230,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -71,
                'created_at' => '2017-05-24 20:31:24',
                'updated_at' => '2017-05-24 20:31:24',
            ),
            230 => 
            array (
                'id' => 231,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -57,
                'created_at' => '2017-05-24 20:31:25',
                'updated_at' => '2017-05-24 20:31:25',
            ),
            231 => 
            array (
                'id' => 232,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -55,
                'created_at' => '2017-05-24 20:31:27',
                'updated_at' => '2017-05-24 20:31:27',
            ),
            232 => 
            array (
                'id' => 233,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -67,
                'created_at' => '2017-05-24 20:31:28',
                'updated_at' => '2017-05-24 20:31:28',
            ),
            233 => 
            array (
                'id' => 234,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -69,
                'created_at' => '2017-05-24 20:31:29',
                'updated_at' => '2017-05-24 20:31:29',
            ),
            234 => 
            array (
                'id' => 235,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -55,
                'created_at' => '2017-05-24 20:31:31',
                'updated_at' => '2017-05-24 20:31:31',
            ),
            235 => 
            array (
                'id' => 236,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -69,
                'created_at' => '2017-05-24 20:31:32',
                'updated_at' => '2017-05-24 20:31:32',
            ),
            236 => 
            array (
                'id' => 237,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -69,
                'created_at' => '2017-05-24 20:31:33',
                'updated_at' => '2017-05-24 20:31:33',
            ),
            237 => 
            array (
                'id' => 238,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -55,
                'created_at' => '2017-05-24 20:31:34',
                'updated_at' => '2017-05-24 20:31:34',
            ),
            238 => 
            array (
                'id' => 239,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -61,
                'created_at' => '2017-05-24 20:31:36',
                'updated_at' => '2017-05-24 20:31:36',
            ),
            239 => 
            array (
                'id' => 240,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -67,
                'created_at' => '2017-05-24 20:31:37',
                'updated_at' => '2017-05-24 20:31:37',
            ),
            240 => 
            array (
                'id' => 241,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -63,
                'created_at' => '2017-05-24 20:31:38',
                'updated_at' => '2017-05-24 20:31:38',
            ),
            241 => 
            array (
                'id' => 242,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -55,
                'created_at' => '2017-05-24 20:31:40',
                'updated_at' => '2017-05-24 20:31:40',
            ),
            242 => 
            array (
                'id' => 243,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -70,
                'created_at' => '2017-05-24 20:31:41',
                'updated_at' => '2017-05-24 20:31:41',
            ),
            243 => 
            array (
                'id' => 244,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -70,
                'created_at' => '2017-05-24 20:31:42',
                'updated_at' => '2017-05-24 20:31:42',
            ),
            244 => 
            array (
                'id' => 245,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -54,
                'created_at' => '2017-05-24 20:31:43',
                'updated_at' => '2017-05-24 20:31:43',
            ),
            245 => 
            array (
                'id' => 246,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -55,
                'created_at' => '2017-05-24 20:31:45',
                'updated_at' => '2017-05-24 20:31:45',
            ),
            246 => 
            array (
                'id' => 247,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -52,
                'created_at' => '2017-05-24 20:31:46',
                'updated_at' => '2017-05-24 20:31:46',
            ),
            247 => 
            array (
                'id' => 248,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -53,
                'created_at' => '2017-05-24 20:31:47',
                'updated_at' => '2017-05-24 20:31:47',
            ),
            248 => 
            array (
                'id' => 249,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -61,
                'created_at' => '2017-05-24 20:31:51',
                'updated_at' => '2017-05-24 20:31:51',
            ),
            249 => 
            array (
                'id' => 250,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -56,
                'created_at' => '2017-05-24 20:31:52',
                'updated_at' => '2017-05-24 20:31:52',
            ),
            250 => 
            array (
                'id' => 251,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -62,
                'created_at' => '2017-05-24 20:31:55',
                'updated_at' => '2017-05-24 20:31:55',
            ),
            251 => 
            array (
                'id' => 252,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -77,
                'created_at' => '2017-05-24 20:31:58',
                'updated_at' => '2017-05-24 20:31:58',
            ),
            252 => 
            array (
                'id' => 253,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -87,
                'created_at' => '2017-05-24 20:31:59',
                'updated_at' => '2017-05-24 20:31:59',
            ),
            253 => 
            array (
                'id' => 254,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -83,
                'created_at' => '2017-05-24 20:32:00',
                'updated_at' => '2017-05-24 20:32:00',
            ),
            254 => 
            array (
                'id' => 255,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -82,
                'created_at' => '2017-05-24 20:32:01',
                'updated_at' => '2017-05-24 20:32:01',
            ),
            255 => 
            array (
                'id' => 256,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -79,
                'created_at' => '2017-05-24 20:32:04',
                'updated_at' => '2017-05-24 20:32:04',
            ),
            256 => 
            array (
                'id' => 257,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -82,
                'created_at' => '2017-05-24 20:32:05',
                'updated_at' => '2017-05-24 20:32:05',
            ),
            257 => 
            array (
                'id' => 258,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -92,
                'created_at' => '2017-05-24 20:32:53',
                'updated_at' => '2017-05-24 20:32:53',
            ),
            258 => 
            array (
                'id' => 259,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -80,
                'created_at' => '2017-05-24 20:33:02',
                'updated_at' => '2017-05-24 20:33:02',
            ),
            259 => 
            array (
                'id' => 260,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -78,
                'created_at' => '2017-05-24 20:33:07',
                'updated_at' => '2017-05-24 20:33:07',
            ),
            260 => 
            array (
                'id' => 261,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -70,
                'created_at' => '2017-05-24 20:33:11',
                'updated_at' => '2017-05-24 20:33:11',
            ),
            261 => 
            array (
                'id' => 262,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -73,
                'created_at' => '2017-05-24 20:33:14',
                'updated_at' => '2017-05-24 20:33:14',
            ),
            262 => 
            array (
                'id' => 263,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -79,
                'created_at' => '2017-05-24 20:33:18',
                'updated_at' => '2017-05-24 20:33:18',
            ),
            263 => 
            array (
                'id' => 264,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -82,
                'created_at' => '2017-05-24 20:33:19',
                'updated_at' => '2017-05-24 20:33:19',
            ),
            264 => 
            array (
                'id' => 265,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -78,
                'created_at' => '2017-05-24 20:33:20',
                'updated_at' => '2017-05-24 20:33:20',
            ),
            265 => 
            array (
                'id' => 266,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -74,
                'created_at' => '2017-05-24 20:33:21',
                'updated_at' => '2017-05-24 20:33:21',
            ),
            266 => 
            array (
                'id' => 267,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -81,
                'created_at' => '2017-05-24 20:33:23',
                'updated_at' => '2017-05-24 20:33:23',
            ),
            267 => 
            array (
                'id' => 268,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -60,
                'created_at' => '2017-05-24 20:33:24',
                'updated_at' => '2017-05-24 20:33:24',
            ),
            268 => 
            array (
                'id' => 269,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -63,
                'created_at' => '2017-05-24 20:33:25',
                'updated_at' => '2017-05-24 20:33:25',
            ),
            269 => 
            array (
                'id' => 270,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -61,
                'created_at' => '2017-05-24 20:33:27',
                'updated_at' => '2017-05-24 20:33:27',
            ),
            270 => 
            array (
                'id' => 271,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -76,
                'created_at' => '2017-05-24 20:33:28',
                'updated_at' => '2017-05-24 20:33:28',
            ),
            271 => 
            array (
                'id' => 272,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -80,
                'created_at' => '2017-05-24 20:33:29',
                'updated_at' => '2017-05-24 20:33:29',
            ),
            272 => 
            array (
                'id' => 273,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -72,
                'created_at' => '2017-05-24 20:33:31',
                'updated_at' => '2017-05-24 20:33:31',
            ),
            273 => 
            array (
                'id' => 274,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -72,
                'created_at' => '2017-05-24 20:33:32',
                'updated_at' => '2017-05-24 20:33:32',
            ),
            274 => 
            array (
                'id' => 275,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -84,
                'created_at' => '2017-05-24 20:33:33',
                'updated_at' => '2017-05-24 20:33:33',
            ),
            275 => 
            array (
                'id' => 276,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -81,
                'created_at' => '2017-05-24 20:33:34',
                'updated_at' => '2017-05-24 20:33:34',
            ),
            276 => 
            array (
                'id' => 277,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -67,
                'created_at' => '2017-05-24 20:33:36',
                'updated_at' => '2017-05-24 20:33:36',
            ),
            277 => 
            array (
                'id' => 278,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -72,
                'created_at' => '2017-05-24 20:33:37',
                'updated_at' => '2017-05-24 20:33:37',
            ),
            278 => 
            array (
                'id' => 279,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -69,
                'created_at' => '2017-05-24 20:33:38',
                'updated_at' => '2017-05-24 20:33:38',
            ),
            279 => 
            array (
                'id' => 280,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -70,
                'created_at' => '2017-05-24 20:33:39',
                'updated_at' => '2017-05-24 20:33:39',
            ),
            280 => 
            array (
                'id' => 281,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -82,
                'created_at' => '2017-05-24 20:33:41',
                'updated_at' => '2017-05-24 20:33:41',
            ),
            281 => 
            array (
                'id' => 282,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -73,
                'created_at' => '2017-05-24 20:33:42',
                'updated_at' => '2017-05-24 20:33:42',
            ),
            282 => 
            array (
                'id' => 283,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -75,
                'created_at' => '2017-05-24 20:33:43',
                'updated_at' => '2017-05-24 20:33:43',
            ),
            283 => 
            array (
                'id' => 284,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -59,
                'created_at' => '2017-05-24 20:33:44',
                'updated_at' => '2017-05-24 20:33:44',
            ),
            284 => 
            array (
                'id' => 285,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -75,
                'created_at' => '2017-05-24 20:33:45',
                'updated_at' => '2017-05-24 20:33:45',
            ),
            285 => 
            array (
                'id' => 286,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -74,
                'created_at' => '2017-05-24 20:33:46',
                'updated_at' => '2017-05-24 20:33:46',
            ),
            286 => 
            array (
                'id' => 287,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -58,
                'created_at' => '2017-05-24 20:33:46',
                'updated_at' => '2017-05-24 20:33:46',
            ),
            287 => 
            array (
                'id' => 288,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -72,
                'created_at' => '2017-05-24 20:33:47',
                'updated_at' => '2017-05-24 20:33:47',
            ),
            288 => 
            array (
                'id' => 289,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -70,
                'created_at' => '2017-05-24 20:33:49',
                'updated_at' => '2017-05-24 20:33:49',
            ),
            289 => 
            array (
                'id' => 290,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -77,
                'created_at' => '2017-05-24 20:33:52',
                'updated_at' => '2017-05-24 20:33:52',
            ),
            290 => 
            array (
                'id' => 291,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -80,
                'created_at' => '2017-05-24 20:33:54',
                'updated_at' => '2017-05-24 20:33:54',
            ),
            291 => 
            array (
                'id' => 292,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -66,
                'created_at' => '2017-05-24 20:33:59',
                'updated_at' => '2017-05-24 20:33:59',
            ),
            292 => 
            array (
                'id' => 293,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -80,
                'created_at' => '2017-05-24 20:34:00',
                'updated_at' => '2017-05-24 20:34:00',
            ),
            293 => 
            array (
                'id' => 294,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -75,
                'created_at' => '2017-05-24 20:34:03',
                'updated_at' => '2017-05-24 20:34:03',
            ),
            294 => 
            array (
                'id' => 295,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -82,
                'created_at' => '2017-05-24 20:34:04',
                'updated_at' => '2017-05-24 20:34:04',
            ),
            295 => 
            array (
                'id' => 296,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -53,
                'created_at' => '2017-05-24 20:34:07',
                'updated_at' => '2017-05-24 20:34:07',
            ),
            296 => 
            array (
                'id' => 297,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -63,
                'created_at' => '2017-05-24 20:34:08',
                'updated_at' => '2017-05-24 20:34:08',
            ),
            297 => 
            array (
                'id' => 298,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -59,
                'created_at' => '2017-05-24 20:34:09',
                'updated_at' => '2017-05-24 20:34:09',
            ),
            298 => 
            array (
                'id' => 299,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -74,
                'created_at' => '2017-05-24 20:34:10',
                'updated_at' => '2017-05-24 20:34:10',
            ),
            299 => 
            array (
                'id' => 300,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -55,
                'created_at' => '2017-05-24 20:34:12',
                'updated_at' => '2017-05-24 20:34:12',
            ),
            300 => 
            array (
                'id' => 301,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -55,
                'created_at' => '2017-05-24 20:34:13',
                'updated_at' => '2017-05-24 20:34:13',
            ),
            301 => 
            array (
                'id' => 302,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -52,
                'created_at' => '2017-05-24 20:34:14',
                'updated_at' => '2017-05-24 20:34:14',
            ),
            302 => 
            array (
                'id' => 303,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -53,
                'created_at' => '2017-05-24 20:34:16',
                'updated_at' => '2017-05-24 20:34:16',
            ),
            303 => 
            array (
                'id' => 304,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -55,
                'created_at' => '2017-05-24 20:34:17',
                'updated_at' => '2017-05-24 20:34:17',
            ),
            304 => 
            array (
                'id' => 305,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -55,
                'created_at' => '2017-05-24 20:34:18',
                'updated_at' => '2017-05-24 20:34:18',
            ),
            305 => 
            array (
                'id' => 306,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -56,
                'created_at' => '2017-05-24 20:34:20',
                'updated_at' => '2017-05-24 20:34:20',
            ),
            306 => 
            array (
                'id' => 307,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -85,
                'created_at' => '2017-05-24 20:34:22',
                'updated_at' => '2017-05-24 20:34:22',
            ),
            307 => 
            array (
                'id' => 308,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -89,
                'created_at' => '2017-05-24 20:34:23',
                'updated_at' => '2017-05-24 20:34:23',
            ),
            308 => 
            array (
                'id' => 309,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -82,
                'created_at' => '2017-05-24 20:34:25',
                'updated_at' => '2017-05-24 20:34:25',
            ),
            309 => 
            array (
                'id' => 310,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -83,
                'created_at' => '2017-05-24 20:34:26',
                'updated_at' => '2017-05-24 20:34:26',
            ),
            310 => 
            array (
                'id' => 311,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -72,
                'created_at' => '2017-05-24 20:34:27',
                'updated_at' => '2017-05-24 20:34:27',
            ),
            311 => 
            array (
                'id' => 312,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -61,
                'created_at' => '2017-05-24 20:34:28',
                'updated_at' => '2017-05-24 20:34:28',
            ),
            312 => 
            array (
                'id' => 313,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -72,
                'created_at' => '2017-05-24 20:34:30',
                'updated_at' => '2017-05-24 20:34:30',
            ),
            313 => 
            array (
                'id' => 314,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -52,
                'created_at' => '2017-05-24 20:34:34',
                'updated_at' => '2017-05-24 20:34:34',
            ),
            314 => 
            array (
                'id' => 315,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -52,
                'created_at' => '2017-05-24 20:34:35',
                'updated_at' => '2017-05-24 20:34:35',
            ),
            315 => 
            array (
                'id' => 316,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -53,
                'created_at' => '2017-05-24 20:34:40',
                'updated_at' => '2017-05-24 20:34:40',
            ),
            316 => 
            array (
                'id' => 317,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -53,
                'created_at' => '2017-05-24 20:34:41',
                'updated_at' => '2017-05-24 20:34:41',
            ),
            317 => 
            array (
                'id' => 318,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -73,
                'created_at' => '2017-05-24 20:34:44',
                'updated_at' => '2017-05-24 20:34:44',
            ),
            318 => 
            array (
                'id' => 319,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -72,
                'created_at' => '2017-05-24 20:34:45',
                'updated_at' => '2017-05-24 20:34:45',
            ),
            319 => 
            array (
                'id' => 320,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -57,
                'created_at' => '2017-05-24 20:34:47',
                'updated_at' => '2017-05-24 20:34:47',
            ),
            320 => 
            array (
                'id' => 321,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -55,
                'created_at' => '2017-05-24 20:34:48',
                'updated_at' => '2017-05-24 20:34:48',
            ),
            321 => 
            array (
                'id' => 322,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -53,
                'created_at' => '2017-05-24 20:34:49',
                'updated_at' => '2017-05-24 20:34:49',
            ),
            322 => 
            array (
                'id' => 323,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -53,
                'created_at' => '2017-05-24 20:34:50',
                'updated_at' => '2017-05-24 20:34:50',
            ),
            323 => 
            array (
                'id' => 324,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -53,
                'created_at' => '2017-05-24 20:34:52',
                'updated_at' => '2017-05-24 20:34:52',
            ),
            324 => 
            array (
                'id' => 325,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -56,
                'created_at' => '2017-05-24 20:34:53',
                'updated_at' => '2017-05-24 20:34:53',
            ),
            325 => 
            array (
                'id' => 326,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -67,
                'created_at' => '2017-05-24 20:34:55',
                'updated_at' => '2017-05-24 20:34:55',
            ),
            326 => 
            array (
                'id' => 327,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -68,
                'created_at' => '2017-05-24 20:34:56',
                'updated_at' => '2017-05-24 20:34:56',
            ),
            327 => 
            array (
                'id' => 328,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -71,
                'created_at' => '2017-05-24 20:34:57',
                'updated_at' => '2017-05-24 20:34:57',
            ),
            328 => 
            array (
                'id' => 329,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -76,
                'created_at' => '2017-05-24 20:34:58',
                'updated_at' => '2017-05-24 20:34:58',
            ),
            329 => 
            array (
                'id' => 330,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -72,
                'created_at' => '2017-05-24 20:35:00',
                'updated_at' => '2017-05-24 20:35:00',
            ),
            330 => 
            array (
                'id' => 331,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -56,
                'created_at' => '2017-05-24 20:35:01',
                'updated_at' => '2017-05-24 20:35:01',
            ),
            331 => 
            array (
                'id' => 332,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -61,
                'created_at' => '2017-05-24 20:35:02',
                'updated_at' => '2017-05-24 20:35:02',
            ),
            332 => 
            array (
                'id' => 333,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -59,
                'created_at' => '2017-05-24 20:35:03',
                'updated_at' => '2017-05-24 20:35:03',
            ),
            333 => 
            array (
                'id' => 334,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -57,
                'created_at' => '2017-05-24 20:35:05',
                'updated_at' => '2017-05-24 20:35:05',
            ),
            334 => 
            array (
                'id' => 335,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -61,
                'created_at' => '2017-05-24 20:35:06',
                'updated_at' => '2017-05-24 20:35:06',
            ),
            335 => 
            array (
                'id' => 336,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -46,
                'created_at' => '2017-05-24 20:35:07',
                'updated_at' => '2017-05-24 20:35:07',
            ),
            336 => 
            array (
                'id' => 337,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -55,
                'created_at' => '2017-05-24 20:35:09',
                'updated_at' => '2017-05-24 20:35:09',
            ),
            337 => 
            array (
                'id' => 338,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -57,
                'created_at' => '2017-05-24 20:35:10',
                'updated_at' => '2017-05-24 20:35:10',
            ),
            338 => 
            array (
                'id' => 339,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -67,
                'created_at' => '2017-05-24 20:35:14',
                'updated_at' => '2017-05-24 20:35:14',
            ),
            339 => 
            array (
                'id' => 340,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -62,
                'created_at' => '2017-05-24 20:35:15',
                'updated_at' => '2017-05-24 20:35:15',
            ),
            340 => 
            array (
                'id' => 341,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -66,
                'created_at' => '2017-05-24 20:35:16',
                'updated_at' => '2017-05-24 20:35:16',
            ),
            341 => 
            array (
                'id' => 342,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -76,
                'created_at' => '2017-05-24 20:35:20',
                'updated_at' => '2017-05-24 20:35:20',
            ),
            342 => 
            array (
                'id' => 343,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -88,
                'created_at' => '2017-05-24 20:35:22',
                'updated_at' => '2017-05-24 20:35:22',
            ),
            343 => 
            array (
                'id' => 344,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -61,
                'created_at' => '2017-05-24 20:35:23',
                'updated_at' => '2017-05-24 20:35:23',
            ),
            344 => 
            array (
                'id' => 345,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -73,
                'created_at' => '2017-05-24 20:35:25',
                'updated_at' => '2017-05-24 20:35:25',
            ),
            345 => 
            array (
                'id' => 346,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -69,
                'created_at' => '2017-05-24 20:35:28',
                'updated_at' => '2017-05-24 20:35:28',
            ),
            346 => 
            array (
                'id' => 347,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -75,
                'created_at' => '2017-05-24 20:35:29',
                'updated_at' => '2017-05-24 20:35:29',
            ),
            347 => 
            array (
                'id' => 348,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -69,
                'created_at' => '2017-05-24 20:35:32',
                'updated_at' => '2017-05-24 20:35:32',
            ),
            348 => 
            array (
                'id' => 349,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -61,
                'created_at' => '2017-05-24 20:35:34',
                'updated_at' => '2017-05-24 20:35:34',
            ),
            349 => 
            array (
                'id' => 350,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -77,
                'created_at' => '2017-05-24 20:35:36',
                'updated_at' => '2017-05-24 20:35:36',
            ),
            350 => 
            array (
                'id' => 351,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -70,
                'created_at' => '2017-05-24 20:35:37',
                'updated_at' => '2017-05-24 20:35:37',
            ),
            351 => 
            array (
                'id' => 352,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -67,
                'created_at' => '2017-05-24 20:35:37',
                'updated_at' => '2017-05-24 20:35:37',
            ),
            352 => 
            array (
                'id' => 353,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -66,
                'created_at' => '2017-05-24 20:35:38',
                'updated_at' => '2017-05-24 20:35:38',
            ),
            353 => 
            array (
                'id' => 354,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -70,
                'created_at' => '2017-05-24 20:35:39',
                'updated_at' => '2017-05-24 20:35:39',
            ),
            354 => 
            array (
                'id' => 355,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -73,
                'created_at' => '2017-05-24 20:35:41',
                'updated_at' => '2017-05-24 20:35:41',
            ),
            355 => 
            array (
                'id' => 356,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -75,
                'created_at' => '2017-05-24 20:35:42',
                'updated_at' => '2017-05-24 20:35:42',
            ),
            356 => 
            array (
                'id' => 357,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -69,
                'created_at' => '2017-05-24 20:35:43',
                'updated_at' => '2017-05-24 20:35:43',
            ),
            357 => 
            array (
                'id' => 358,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -79,
                'created_at' => '2017-05-24 20:35:46',
                'updated_at' => '2017-05-24 20:35:46',
            ),
            358 => 
            array (
                'id' => 359,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -67,
                'created_at' => '2017-05-24 20:35:47',
                'updated_at' => '2017-05-24 20:35:47',
            ),
            359 => 
            array (
                'id' => 360,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -62,
                'created_at' => '2017-05-24 20:35:49',
                'updated_at' => '2017-05-24 20:35:49',
            ),
            360 => 
            array (
                'id' => 361,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -45,
                'created_at' => '2017-05-24 20:35:50',
                'updated_at' => '2017-05-24 20:35:50',
            ),
            361 => 
            array (
                'id' => 362,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -72,
                'created_at' => '2017-05-24 20:35:51',
                'updated_at' => '2017-05-24 20:35:51',
            ),
            362 => 
            array (
                'id' => 363,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -67,
                'created_at' => '2017-05-24 20:35:52',
                'updated_at' => '2017-05-24 20:35:52',
            ),
            363 => 
            array (
                'id' => 364,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -71,
                'created_at' => '2017-05-24 20:35:55',
                'updated_at' => '2017-05-24 20:35:55',
            ),
            364 => 
            array (
                'id' => 365,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -69,
                'created_at' => '2017-05-24 20:35:56',
                'updated_at' => '2017-05-24 20:35:56',
            ),
            365 => 
            array (
                'id' => 366,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -68,
                'created_at' => '2017-05-24 20:35:58',
                'updated_at' => '2017-05-24 20:35:58',
            ),
            366 => 
            array (
                'id' => 367,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -78,
                'created_at' => '2017-05-24 20:36:01',
                'updated_at' => '2017-05-24 20:36:01',
            ),
            367 => 
            array (
                'id' => 368,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -74,
                'created_at' => '2017-05-24 20:36:03',
                'updated_at' => '2017-05-24 20:36:03',
            ),
            368 => 
            array (
                'id' => 369,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -74,
                'created_at' => '2017-05-24 20:36:04',
                'updated_at' => '2017-05-24 20:36:04',
            ),
            369 => 
            array (
                'id' => 370,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -72,
                'created_at' => '2017-05-24 20:36:08',
                'updated_at' => '2017-05-24 20:36:08',
            ),
            370 => 
            array (
                'id' => 371,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -78,
                'created_at' => '2017-05-24 20:36:09',
                'updated_at' => '2017-05-24 20:36:09',
            ),
            371 => 
            array (
                'id' => 372,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -71,
                'created_at' => '2017-05-24 20:36:10',
                'updated_at' => '2017-05-24 20:36:10',
            ),
            372 => 
            array (
                'id' => 373,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -71,
                'created_at' => '2017-05-24 20:36:12',
                'updated_at' => '2017-05-24 20:36:12',
            ),
            373 => 
            array (
                'id' => 374,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -79,
                'created_at' => '2017-05-24 20:36:13',
                'updated_at' => '2017-05-24 20:36:13',
            ),
            374 => 
            array (
                'id' => 375,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -79,
                'created_at' => '2017-05-24 20:36:14',
                'updated_at' => '2017-05-24 20:36:14',
            ),
            375 => 
            array (
                'id' => 376,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -69,
                'created_at' => '2017-05-24 20:36:16',
                'updated_at' => '2017-05-24 20:36:16',
            ),
            376 => 
            array (
                'id' => 377,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -70,
                'created_at' => '2017-05-24 20:36:17',
                'updated_at' => '2017-05-24 20:36:17',
            ),
            377 => 
            array (
                'id' => 378,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -70,
                'created_at' => '2017-05-24 20:36:19',
                'updated_at' => '2017-05-24 20:36:19',
            ),
            378 => 
            array (
                'id' => 379,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -78,
                'created_at' => '2017-05-24 20:36:21',
                'updated_at' => '2017-05-24 20:36:21',
            ),
            379 => 
            array (
                'id' => 380,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -70,
                'created_at' => '2017-05-24 20:36:22',
                'updated_at' => '2017-05-24 20:36:22',
            ),
            380 => 
            array (
                'id' => 381,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -79,
                'created_at' => '2017-05-24 20:36:25',
                'updated_at' => '2017-05-24 20:36:25',
            ),
            381 => 
            array (
                'id' => 382,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -83,
                'created_at' => '2017-05-24 20:36:26',
                'updated_at' => '2017-05-24 20:36:26',
            ),
            382 => 
            array (
                'id' => 383,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -81,
                'created_at' => '2017-05-24 20:36:27',
                'updated_at' => '2017-05-24 20:36:27',
            ),
            383 => 
            array (
                'id' => 384,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -81,
                'created_at' => '2017-05-24 20:36:28',
                'updated_at' => '2017-05-24 20:36:28',
            ),
            384 => 
            array (
                'id' => 385,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -78,
                'created_at' => '2017-05-24 20:36:30',
                'updated_at' => '2017-05-24 20:36:30',
            ),
            385 => 
            array (
                'id' => 386,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -79,
                'created_at' => '2017-05-24 20:36:31',
                'updated_at' => '2017-05-24 20:36:31',
            ),
            386 => 
            array (
                'id' => 387,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -79,
                'created_at' => '2017-05-24 20:36:32',
                'updated_at' => '2017-05-24 20:36:32',
            ),
            387 => 
            array (
                'id' => 388,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -78,
                'created_at' => '2017-05-24 20:36:34',
                'updated_at' => '2017-05-24 20:36:34',
            ),
            388 => 
            array (
                'id' => 389,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -78,
                'created_at' => '2017-05-24 20:36:36',
                'updated_at' => '2017-05-24 20:36:36',
            ),
            389 => 
            array (
                'id' => 390,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -77,
                'created_at' => '2017-05-24 20:36:37',
                'updated_at' => '2017-05-24 20:36:37',
            ),
            390 => 
            array (
                'id' => 391,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -61,
                'created_at' => '2017-05-24 20:36:39',
                'updated_at' => '2017-05-24 20:36:39',
            ),
            391 => 
            array (
                'id' => 392,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -54,
                'created_at' => '2017-05-24 20:36:40',
                'updated_at' => '2017-05-24 20:36:40',
            ),
            392 => 
            array (
                'id' => 393,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -82,
                'created_at' => '2017-05-24 20:36:43',
                'updated_at' => '2017-05-24 20:36:43',
            ),
            393 => 
            array (
                'id' => 394,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -62,
                'created_at' => '2017-05-24 20:36:44',
                'updated_at' => '2017-05-24 20:36:44',
            ),
            394 => 
            array (
                'id' => 395,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -61,
                'created_at' => '2017-05-24 20:36:45',
                'updated_at' => '2017-05-24 20:36:45',
            ),
            395 => 
            array (
                'id' => 396,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -79,
                'created_at' => '2017-05-24 20:36:47',
                'updated_at' => '2017-05-24 20:36:47',
            ),
            396 => 
            array (
                'id' => 397,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -81,
                'created_at' => '2017-05-24 20:36:48',
                'updated_at' => '2017-05-24 20:36:48',
            ),
            397 => 
            array (
                'id' => 398,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -71,
                'created_at' => '2017-05-24 20:36:50',
                'updated_at' => '2017-05-24 20:36:50',
            ),
            398 => 
            array (
                'id' => 399,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -77,
                'created_at' => '2017-05-24 20:36:54',
                'updated_at' => '2017-05-24 20:36:54',
            ),
            399 => 
            array (
                'id' => 400,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -73,
                'created_at' => '2017-05-24 20:36:56',
                'updated_at' => '2017-05-24 20:36:56',
            ),
            400 => 
            array (
                'id' => 401,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -78,
                'created_at' => '2017-05-24 20:36:59',
                'updated_at' => '2017-05-24 20:36:59',
            ),
            401 => 
            array (
                'id' => 402,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -81,
                'created_at' => '2017-05-24 20:37:01',
                'updated_at' => '2017-05-24 20:37:01',
            ),
            402 => 
            array (
                'id' => 403,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -76,
                'created_at' => '2017-05-24 20:37:02',
                'updated_at' => '2017-05-24 20:37:02',
            ),
            403 => 
            array (
                'id' => 404,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -63,
                'created_at' => '2017-05-24 20:37:03',
                'updated_at' => '2017-05-24 20:37:03',
            ),
            404 => 
            array (
                'id' => 405,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -73,
                'created_at' => '2017-05-24 20:37:05',
                'updated_at' => '2017-05-24 20:37:05',
            ),
            405 => 
            array (
                'id' => 406,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -61,
                'created_at' => '2017-05-24 20:37:06',
                'updated_at' => '2017-05-24 20:37:06',
            ),
            406 => 
            array (
                'id' => 407,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -62,
                'created_at' => '2017-05-24 20:37:07',
                'updated_at' => '2017-05-24 20:37:07',
            ),
            407 => 
            array (
                'id' => 408,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -73,
                'created_at' => '2017-05-24 20:37:08',
                'updated_at' => '2017-05-24 20:37:08',
            ),
            408 => 
            array (
                'id' => 409,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -65,
                'created_at' => '2017-05-24 20:37:10',
                'updated_at' => '2017-05-24 20:37:10',
            ),
            409 => 
            array (
                'id' => 410,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -79,
                'created_at' => '2017-05-24 20:37:11',
                'updated_at' => '2017-05-24 20:37:11',
            ),
            410 => 
            array (
                'id' => 411,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -77,
                'created_at' => '2017-05-24 20:37:12',
                'updated_at' => '2017-05-24 20:37:12',
            ),
            411 => 
            array (
                'id' => 412,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -79,
                'created_at' => '2017-05-24 20:37:14',
                'updated_at' => '2017-05-24 20:37:14',
            ),
            412 => 
            array (
                'id' => 413,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -78,
                'created_at' => '2017-05-24 20:37:15',
                'updated_at' => '2017-05-24 20:37:15',
            ),
            413 => 
            array (
                'id' => 414,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -77,
                'created_at' => '2017-05-24 20:37:16',
                'updated_at' => '2017-05-24 20:37:16',
            ),
            414 => 
            array (
                'id' => 415,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -68,
                'created_at' => '2017-05-24 20:37:17',
                'updated_at' => '2017-05-24 20:37:17',
            ),
            415 => 
            array (
                'id' => 416,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -59,
                'created_at' => '2017-05-24 20:37:19',
                'updated_at' => '2017-05-24 20:37:19',
            ),
            416 => 
            array (
                'id' => 417,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -69,
                'created_at' => '2017-05-24 20:37:20',
                'updated_at' => '2017-05-24 20:37:20',
            ),
            417 => 
            array (
                'id' => 418,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -60,
                'created_at' => '2017-05-24 20:37:21',
                'updated_at' => '2017-05-24 20:37:21',
            ),
            418 => 
            array (
                'id' => 419,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -58,
                'created_at' => '2017-05-24 20:37:24',
                'updated_at' => '2017-05-24 20:37:24',
            ),
            419 => 
            array (
                'id' => 420,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -70,
                'created_at' => '2017-05-24 20:37:25',
                'updated_at' => '2017-05-24 20:37:25',
            ),
            420 => 
            array (
                'id' => 421,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -59,
                'created_at' => '2017-05-24 20:37:25',
                'updated_at' => '2017-05-24 20:37:25',
            ),
            421 => 
            array (
                'id' => 422,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -58,
                'created_at' => '2017-05-24 20:37:27',
                'updated_at' => '2017-05-24 20:37:27',
            ),
            422 => 
            array (
                'id' => 423,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -57,
                'created_at' => '2017-05-24 20:37:28',
                'updated_at' => '2017-05-24 20:37:28',
            ),
            423 => 
            array (
                'id' => 424,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -47,
                'created_at' => '2017-05-24 20:37:34',
                'updated_at' => '2017-05-24 20:37:34',
            ),
            424 => 
            array (
                'id' => 425,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -56,
                'created_at' => '2017-05-24 20:37:36',
                'updated_at' => '2017-05-24 20:37:36',
            ),
            425 => 
            array (
                'id' => 426,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -50,
                'created_at' => '2017-05-24 20:37:37',
                'updated_at' => '2017-05-24 20:37:37',
            ),
            426 => 
            array (
                'id' => 427,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -54,
                'created_at' => '2017-05-24 20:37:38',
                'updated_at' => '2017-05-24 20:37:38',
            ),
            427 => 
            array (
                'id' => 428,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -55,
                'created_at' => '2017-05-24 20:37:39',
                'updated_at' => '2017-05-24 20:37:39',
            ),
            428 => 
            array (
                'id' => 429,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -74,
                'created_at' => '2017-05-24 20:37:41',
                'updated_at' => '2017-05-24 20:37:41',
            ),
            429 => 
            array (
                'id' => 430,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -46,
                'created_at' => '2017-05-24 20:37:42',
                'updated_at' => '2017-05-24 20:37:42',
            ),
            430 => 
            array (
                'id' => 431,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -70,
                'created_at' => '2017-05-24 20:37:43',
                'updated_at' => '2017-05-24 20:37:43',
            ),
            431 => 
            array (
                'id' => 432,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -55,
                'created_at' => '2017-05-24 20:37:45',
                'updated_at' => '2017-05-24 20:37:45',
            ),
            432 => 
            array (
                'id' => 433,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -68,
                'created_at' => '2017-05-24 20:37:46',
                'updated_at' => '2017-05-24 20:37:46',
            ),
            433 => 
            array (
                'id' => 434,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -70,
                'created_at' => '2017-05-24 20:37:51',
                'updated_at' => '2017-05-24 20:37:51',
            ),
            434 => 
            array (
                'id' => 435,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -70,
                'created_at' => '2017-05-24 20:37:54',
                'updated_at' => '2017-05-24 20:37:54',
            ),
            435 => 
            array (
                'id' => 436,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -68,
                'created_at' => '2017-05-24 20:37:55',
                'updated_at' => '2017-05-24 20:37:55',
            ),
            436 => 
            array (
                'id' => 437,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -49,
                'created_at' => '2017-05-24 20:37:57',
                'updated_at' => '2017-05-24 20:37:57',
            ),
            437 => 
            array (
                'id' => 438,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -48,
                'created_at' => '2017-05-24 20:37:59',
                'updated_at' => '2017-05-24 20:37:59',
            ),
            438 => 
            array (
                'id' => 439,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -47,
                'created_at' => '2017-05-24 20:38:00',
                'updated_at' => '2017-05-24 20:38:00',
            ),
            439 => 
            array (
                'id' => 440,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -49,
                'created_at' => '2017-05-24 20:38:01',
                'updated_at' => '2017-05-24 20:38:01',
            ),
            440 => 
            array (
                'id' => 441,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -64,
                'created_at' => '2017-05-24 20:38:03',
                'updated_at' => '2017-05-24 20:38:03',
            ),
            441 => 
            array (
                'id' => 442,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -47,
                'created_at' => '2017-05-24 20:38:04',
                'updated_at' => '2017-05-24 20:38:04',
            ),
            442 => 
            array (
                'id' => 443,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -49,
                'created_at' => '2017-05-24 20:38:05',
                'updated_at' => '2017-05-24 20:38:05',
            ),
            443 => 
            array (
                'id' => 444,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -58,
                'created_at' => '2017-05-24 20:38:07',
                'updated_at' => '2017-05-24 20:38:07',
            ),
            444 => 
            array (
                'id' => 445,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -51,
                'created_at' => '2017-05-24 20:38:08',
                'updated_at' => '2017-05-24 20:38:08',
            ),
            445 => 
            array (
                'id' => 446,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -64,
                'created_at' => '2017-05-24 20:38:09',
                'updated_at' => '2017-05-24 20:38:09',
            ),
            446 => 
            array (
                'id' => 447,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -82,
                'created_at' => '2017-05-24 20:38:16',
                'updated_at' => '2017-05-24 20:38:16',
            ),
            447 => 
            array (
                'id' => 448,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -72,
                'created_at' => '2017-05-24 20:38:17',
                'updated_at' => '2017-05-24 20:38:17',
            ),
            448 => 
            array (
                'id' => 449,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -73,
                'created_at' => '2017-05-24 20:38:18',
                'updated_at' => '2017-05-24 20:38:18',
            ),
            449 => 
            array (
                'id' => 450,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -73,
                'created_at' => '2017-05-24 20:38:19',
                'updated_at' => '2017-05-24 20:38:19',
            ),
            450 => 
            array (
                'id' => 451,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -71,
                'created_at' => '2017-05-24 20:38:21',
                'updated_at' => '2017-05-24 20:38:21',
            ),
            451 => 
            array (
                'id' => 452,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -86,
                'created_at' => '2017-05-24 20:38:22',
                'updated_at' => '2017-05-24 20:38:22',
            ),
            452 => 
            array (
                'id' => 453,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -67,
                'created_at' => '2017-05-24 20:38:23',
                'updated_at' => '2017-05-24 20:38:23',
            ),
            453 => 
            array (
                'id' => 454,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -76,
                'created_at' => '2017-05-24 20:38:26',
                'updated_at' => '2017-05-24 20:38:26',
            ),
            454 => 
            array (
                'id' => 455,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -75,
                'created_at' => '2017-05-24 20:38:27',
                'updated_at' => '2017-05-24 20:38:27',
            ),
            455 => 
            array (
                'id' => 456,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -68,
                'created_at' => '2017-05-24 20:38:32',
                'updated_at' => '2017-05-24 20:38:32',
            ),
            456 => 
            array (
                'id' => 457,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -56,
                'created_at' => '2017-05-24 20:38:35',
                'updated_at' => '2017-05-24 20:38:35',
            ),
            457 => 
            array (
                'id' => 458,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -55,
                'created_at' => '2017-05-24 20:38:36',
                'updated_at' => '2017-05-24 20:38:36',
            ),
            458 => 
            array (
                'id' => 459,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -67,
                'created_at' => '2017-05-24 20:38:39',
                'updated_at' => '2017-05-24 20:38:39',
            ),
            459 => 
            array (
                'id' => 460,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -81,
                'created_at' => '2017-05-24 20:38:40',
                'updated_at' => '2017-05-24 20:38:40',
            ),
            460 => 
            array (
                'id' => 461,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -56,
                'created_at' => '2017-05-24 20:38:41',
                'updated_at' => '2017-05-24 20:38:41',
            ),
            461 => 
            array (
                'id' => 462,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -46,
                'created_at' => '2017-05-24 20:38:43',
                'updated_at' => '2017-05-24 20:38:43',
            ),
            462 => 
            array (
                'id' => 463,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -71,
                'created_at' => '2017-05-24 20:38:44',
                'updated_at' => '2017-05-24 20:38:44',
            ),
            463 => 
            array (
                'id' => 464,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -53,
                'created_at' => '2017-05-24 20:38:45',
                'updated_at' => '2017-05-24 20:38:45',
            ),
            464 => 
            array (
                'id' => 465,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -44,
                'created_at' => '2017-05-24 20:38:47',
                'updated_at' => '2017-05-24 20:38:47',
            ),
            465 => 
            array (
                'id' => 466,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -52,
                'created_at' => '2017-05-24 20:38:48',
                'updated_at' => '2017-05-24 20:38:48',
            ),
            466 => 
            array (
                'id' => 467,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -52,
                'created_at' => '2017-05-24 20:38:49',
                'updated_at' => '2017-05-24 20:38:49',
            ),
            467 => 
            array (
                'id' => 468,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -53,
                'created_at' => '2017-05-24 20:38:50',
                'updated_at' => '2017-05-24 20:38:50',
            ),
            468 => 
            array (
                'id' => 469,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -69,
                'created_at' => '2017-05-24 20:38:57',
                'updated_at' => '2017-05-24 20:38:57',
            ),
            469 => 
            array (
                'id' => 470,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -71,
                'created_at' => '2017-05-24 20:39:01',
                'updated_at' => '2017-05-24 20:39:01',
            ),
            470 => 
            array (
                'id' => 471,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -74,
                'created_at' => '2017-05-24 20:39:02',
                'updated_at' => '2017-05-24 20:39:02',
            ),
            471 => 
            array (
                'id' => 472,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -60,
                'created_at' => '2017-05-24 20:39:03',
                'updated_at' => '2017-05-24 20:39:03',
            ),
            472 => 
            array (
                'id' => 473,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -60,
                'created_at' => '2017-05-24 20:39:05',
                'updated_at' => '2017-05-24 20:39:05',
            ),
            473 => 
            array (
                'id' => 474,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -66,
                'created_at' => '2017-05-24 20:39:07',
                'updated_at' => '2017-05-24 20:39:07',
            ),
            474 => 
            array (
                'id' => 475,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -68,
                'created_at' => '2017-05-24 20:39:08',
                'updated_at' => '2017-05-24 20:39:08',
            ),
            475 => 
            array (
                'id' => 476,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -76,
                'created_at' => '2017-05-24 20:39:14',
                'updated_at' => '2017-05-24 20:39:14',
            ),
            476 => 
            array (
                'id' => 477,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -81,
                'created_at' => '2017-05-24 20:39:16',
                'updated_at' => '2017-05-24 20:39:16',
            ),
            477 => 
            array (
                'id' => 478,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -54,
                'created_at' => '2017-05-24 20:39:20',
                'updated_at' => '2017-05-24 20:39:20',
            ),
            478 => 
            array (
                'id' => 479,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -72,
                'created_at' => '2017-05-24 20:39:21',
                'updated_at' => '2017-05-24 20:39:21',
            ),
            479 => 
            array (
                'id' => 480,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -73,
                'created_at' => '2017-05-24 20:39:23',
                'updated_at' => '2017-05-24 20:39:23',
            ),
            480 => 
            array (
                'id' => 481,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -59,
                'created_at' => '2017-05-24 20:39:23',
                'updated_at' => '2017-05-24 20:39:23',
            ),
            481 => 
            array (
                'id' => 482,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -68,
                'created_at' => '2017-05-24 20:39:24',
                'updated_at' => '2017-05-24 20:39:24',
            ),
            482 => 
            array (
                'id' => 483,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -61,
                'created_at' => '2017-05-24 20:39:25',
                'updated_at' => '2017-05-24 20:39:25',
            ),
            483 => 
            array (
                'id' => 484,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -59,
                'created_at' => '2017-05-24 20:39:26',
                'updated_at' => '2017-05-24 20:39:26',
            ),
            484 => 
            array (
                'id' => 485,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -81,
                'created_at' => '2017-05-24 20:39:29',
                'updated_at' => '2017-05-24 20:39:29',
            ),
            485 => 
            array (
                'id' => 486,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -58,
                'created_at' => '2017-05-24 20:39:30',
                'updated_at' => '2017-05-24 20:39:30',
            ),
            486 => 
            array (
                'id' => 487,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -76,
                'created_at' => '2017-05-24 20:39:31',
                'updated_at' => '2017-05-24 20:39:31',
            ),
            487 => 
            array (
                'id' => 488,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -57,
                'created_at' => '2017-05-24 20:39:32',
                'updated_at' => '2017-05-24 20:39:32',
            ),
            488 => 
            array (
                'id' => 489,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -68,
                'created_at' => '2017-05-24 20:39:34',
                'updated_at' => '2017-05-24 20:39:34',
            ),
            489 => 
            array (
                'id' => 490,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -56,
                'created_at' => '2017-05-24 20:39:37',
                'updated_at' => '2017-05-24 20:39:37',
            ),
            490 => 
            array (
                'id' => 491,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -61,
                'created_at' => '2017-05-24 20:39:39',
                'updated_at' => '2017-05-24 20:39:39',
            ),
            491 => 
            array (
                'id' => 492,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -80,
                'created_at' => '2017-05-24 20:39:42',
                'updated_at' => '2017-05-24 20:39:42',
            ),
            492 => 
            array (
                'id' => 493,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -63,
                'created_at' => '2017-05-24 20:39:45',
                'updated_at' => '2017-05-24 20:39:45',
            ),
            493 => 
            array (
                'id' => 494,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -78,
                'created_at' => '2017-05-24 20:39:45',
                'updated_at' => '2017-05-24 20:39:45',
            ),
            494 => 
            array (
                'id' => 495,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -73,
                'created_at' => '2017-05-24 20:39:46',
                'updated_at' => '2017-05-24 20:39:46',
            ),
            495 => 
            array (
                'id' => 496,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -74,
                'created_at' => '2017-05-24 20:39:55',
                'updated_at' => '2017-05-24 20:39:55',
            ),
            496 => 
            array (
                'id' => 497,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -60,
                'created_at' => '2017-05-24 20:39:57',
                'updated_at' => '2017-05-24 20:39:57',
            ),
            497 => 
            array (
                'id' => 498,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -71,
                'created_at' => '2017-05-24 20:40:01',
                'updated_at' => '2017-05-24 20:40:01',
            ),
            498 => 
            array (
                'id' => 499,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -59,
                'created_at' => '2017-05-24 20:40:03',
                'updated_at' => '2017-05-24 20:40:03',
            ),
            499 => 
            array (
                'id' => 500,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -59,
                'created_at' => '2017-05-24 20:40:04',
                'updated_at' => '2017-05-24 20:40:04',
            ),
        ));
        \DB::table('beacon_data')->insert(array (
            0 => 
            array (
                'id' => 501,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -63,
                'created_at' => '2017-05-24 20:40:05',
                'updated_at' => '2017-05-24 20:40:05',
            ),
            1 => 
            array (
                'id' => 502,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -78,
                'created_at' => '2017-05-24 20:40:06',
                'updated_at' => '2017-05-24 20:40:06',
            ),
            2 => 
            array (
                'id' => 503,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -67,
                'created_at' => '2017-05-24 20:40:08',
                'updated_at' => '2017-05-24 20:40:08',
            ),
            3 => 
            array (
                'id' => 504,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -67,
                'created_at' => '2017-05-24 20:40:09',
                'updated_at' => '2017-05-24 20:40:09',
            ),
            4 => 
            array (
                'id' => 505,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -71,
                'created_at' => '2017-05-24 20:40:10',
                'updated_at' => '2017-05-24 20:40:10',
            ),
            5 => 
            array (
                'id' => 506,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -81,
                'created_at' => '2017-05-24 20:40:12',
                'updated_at' => '2017-05-24 20:40:12',
            ),
            6 => 
            array (
                'id' => 507,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -79,
                'created_at' => '2017-05-24 20:40:13',
                'updated_at' => '2017-05-24 20:40:13',
            ),
            7 => 
            array (
                'id' => 508,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -76,
                'created_at' => '2017-05-24 20:40:16',
                'updated_at' => '2017-05-24 20:40:16',
            ),
            8 => 
            array (
                'id' => 509,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -60,
                'created_at' => '2017-05-24 20:40:18',
                'updated_at' => '2017-05-24 20:40:18',
            ),
            9 => 
            array (
                'id' => 510,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -61,
                'created_at' => '2017-05-24 20:40:21',
                'updated_at' => '2017-05-24 20:40:21',
            ),
            10 => 
            array (
                'id' => 511,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -74,
                'created_at' => '2017-05-24 20:40:22',
                'updated_at' => '2017-05-24 20:40:22',
            ),
            11 => 
            array (
                'id' => 512,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -74,
                'created_at' => '2017-05-24 20:40:23',
                'updated_at' => '2017-05-24 20:40:23',
            ),
            12 => 
            array (
                'id' => 513,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -62,
                'created_at' => '2017-05-24 20:40:25',
                'updated_at' => '2017-05-24 20:40:25',
            ),
            13 => 
            array (
                'id' => 514,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -63,
                'created_at' => '2017-05-24 20:40:26',
                'updated_at' => '2017-05-24 20:40:26',
            ),
            14 => 
            array (
                'id' => 515,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -61,
                'created_at' => '2017-05-24 20:40:27',
                'updated_at' => '2017-05-24 20:40:27',
            ),
            15 => 
            array (
                'id' => 516,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -61,
                'created_at' => '2017-05-24 20:40:32',
                'updated_at' => '2017-05-24 20:40:32',
            ),
            16 => 
            array (
                'id' => 517,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -67,
                'created_at' => '2017-05-24 20:40:34',
                'updated_at' => '2017-05-24 20:40:34',
            ),
            17 => 
            array (
                'id' => 518,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -61,
                'created_at' => '2017-05-24 20:40:35',
                'updated_at' => '2017-05-24 20:40:35',
            ),
            18 => 
            array (
                'id' => 519,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -76,
                'created_at' => '2017-05-24 20:40:37',
                'updated_at' => '2017-05-24 20:40:37',
            ),
            19 => 
            array (
                'id' => 520,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -55,
                'created_at' => '2017-05-24 20:40:41',
                'updated_at' => '2017-05-24 20:40:41',
            ),
            20 => 
            array (
                'id' => 521,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -54,
                'created_at' => '2017-05-24 20:40:43',
                'updated_at' => '2017-05-24 20:40:43',
            ),
            21 => 
            array (
                'id' => 522,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -71,
                'created_at' => '2017-05-24 20:40:44',
                'updated_at' => '2017-05-24 20:40:44',
            ),
            22 => 
            array (
                'id' => 523,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -53,
                'created_at' => '2017-05-24 20:40:45',
                'updated_at' => '2017-05-24 20:40:45',
            ),
            23 => 
            array (
                'id' => 524,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -53,
                'created_at' => '2017-05-24 20:40:46',
                'updated_at' => '2017-05-24 20:40:46',
            ),
            24 => 
            array (
                'id' => 525,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -54,
                'created_at' => '2017-05-24 20:40:48',
                'updated_at' => '2017-05-24 20:40:48',
            ),
            25 => 
            array (
                'id' => 526,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -70,
                'created_at' => '2017-05-24 20:40:50',
                'updated_at' => '2017-05-24 20:40:50',
            ),
            26 => 
            array (
                'id' => 527,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -53,
                'created_at' => '2017-05-24 20:40:52',
                'updated_at' => '2017-05-24 20:40:52',
            ),
            27 => 
            array (
                'id' => 528,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -54,
                'created_at' => '2017-05-24 20:40:53',
                'updated_at' => '2017-05-24 20:40:53',
            ),
            28 => 
            array (
                'id' => 529,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -55,
                'created_at' => '2017-05-24 20:40:54',
                'updated_at' => '2017-05-24 20:40:54',
            ),
            29 => 
            array (
                'id' => 530,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -55,
                'created_at' => '2017-05-24 20:40:56',
                'updated_at' => '2017-05-24 20:40:56',
            ),
            30 => 
            array (
                'id' => 531,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -73,
                'created_at' => '2017-05-24 20:40:57',
                'updated_at' => '2017-05-24 20:40:57',
            ),
            31 => 
            array (
                'id' => 532,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -57,
                'created_at' => '2017-05-24 20:40:58',
                'updated_at' => '2017-05-24 20:40:58',
            ),
            32 => 
            array (
                'id' => 533,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -52,
                'created_at' => '2017-05-24 20:40:59',
                'updated_at' => '2017-05-24 20:40:59',
            ),
            33 => 
            array (
                'id' => 534,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -64,
                'created_at' => '2017-05-24 20:41:02',
                'updated_at' => '2017-05-24 20:41:02',
            ),
            34 => 
            array (
                'id' => 535,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -74,
                'created_at' => '2017-05-24 20:41:05',
                'updated_at' => '2017-05-24 20:41:05',
            ),
            35 => 
            array (
                'id' => 536,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -63,
                'created_at' => '2017-05-24 20:41:06',
                'updated_at' => '2017-05-24 20:41:06',
            ),
            36 => 
            array (
                'id' => 537,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -57,
                'created_at' => '2017-05-24 20:41:07',
                'updated_at' => '2017-05-24 20:41:07',
            ),
            37 => 
            array (
                'id' => 538,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -53,
                'created_at' => '2017-05-24 20:41:14',
                'updated_at' => '2017-05-24 20:41:14',
            ),
            38 => 
            array (
                'id' => 539,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -53,
                'created_at' => '2017-05-24 20:41:15',
                'updated_at' => '2017-05-24 20:41:15',
            ),
            39 => 
            array (
                'id' => 540,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -50,
                'created_at' => '2017-05-24 20:41:16',
                'updated_at' => '2017-05-24 20:41:16',
            ),
            40 => 
            array (
                'id' => 541,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -53,
                'created_at' => '2017-05-24 20:41:19',
                'updated_at' => '2017-05-24 20:41:19',
            ),
            41 => 
            array (
                'id' => 542,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -77,
                'created_at' => '2017-05-24 20:41:23',
                'updated_at' => '2017-05-24 20:41:23',
            ),
            42 => 
            array (
                'id' => 543,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -53,
                'created_at' => '2017-05-24 20:41:24',
                'updated_at' => '2017-05-24 20:41:24',
            ),
            43 => 
            array (
                'id' => 544,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -56,
                'created_at' => '2017-05-24 20:41:25',
                'updated_at' => '2017-05-24 20:41:25',
            ),
            44 => 
            array (
                'id' => 545,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -54,
                'created_at' => '2017-05-24 20:41:26',
                'updated_at' => '2017-05-24 20:41:26',
            ),
            45 => 
            array (
                'id' => 546,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -67,
                'created_at' => '2017-05-24 20:41:28',
                'updated_at' => '2017-05-24 20:41:28',
            ),
            46 => 
            array (
                'id' => 547,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -72,
                'created_at' => '2017-05-24 20:41:29',
                'updated_at' => '2017-05-24 20:41:29',
            ),
            47 => 
            array (
                'id' => 548,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -52,
                'created_at' => '2017-05-24 20:41:30',
                'updated_at' => '2017-05-24 20:41:30',
            ),
            48 => 
            array (
                'id' => 549,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -67,
                'created_at' => '2017-05-24 20:41:32',
                'updated_at' => '2017-05-24 20:41:32',
            ),
            49 => 
            array (
                'id' => 550,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -75,
                'created_at' => '2017-05-24 20:41:33',
                'updated_at' => '2017-05-24 20:41:33',
            ),
            50 => 
            array (
                'id' => 551,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -71,
                'created_at' => '2017-05-24 20:41:34',
                'updated_at' => '2017-05-24 20:41:34',
            ),
            51 => 
            array (
                'id' => 552,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -56,
                'created_at' => '2017-05-24 20:41:36',
                'updated_at' => '2017-05-24 20:41:36',
            ),
            52 => 
            array (
                'id' => 553,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -68,
                'created_at' => '2017-05-24 20:41:37',
                'updated_at' => '2017-05-24 20:41:37',
            ),
            53 => 
            array (
                'id' => 554,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -58,
                'created_at' => '2017-05-24 20:41:38',
                'updated_at' => '2017-05-24 20:41:38',
            ),
            54 => 
            array (
                'id' => 555,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -60,
                'created_at' => '2017-05-24 20:41:39',
                'updated_at' => '2017-05-24 20:41:39',
            ),
            55 => 
            array (
                'id' => 556,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -66,
                'created_at' => '2017-05-24 20:41:41',
                'updated_at' => '2017-05-24 20:41:41',
            ),
            56 => 
            array (
                'id' => 557,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -65,
                'created_at' => '2017-05-24 20:41:46',
                'updated_at' => '2017-05-24 20:41:46',
            ),
            57 => 
            array (
                'id' => 558,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -59,
                'created_at' => '2017-05-24 20:41:47',
                'updated_at' => '2017-05-24 20:41:47',
            ),
            58 => 
            array (
                'id' => 559,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -59,
                'created_at' => '2017-05-24 20:41:48',
                'updated_at' => '2017-05-24 20:41:48',
            ),
            59 => 
            array (
                'id' => 560,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -74,
                'created_at' => '2017-05-24 20:41:51',
                'updated_at' => '2017-05-24 20:41:51',
            ),
            60 => 
            array (
                'id' => 561,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -60,
                'created_at' => '2017-05-24 20:41:55',
                'updated_at' => '2017-05-24 20:41:55',
            ),
            61 => 
            array (
                'id' => 562,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -52,
                'created_at' => '2017-05-24 20:41:56',
                'updated_at' => '2017-05-24 20:41:56',
            ),
            62 => 
            array (
                'id' => 563,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -57,
                'created_at' => '2017-05-24 20:42:00',
                'updated_at' => '2017-05-24 20:42:00',
            ),
            63 => 
            array (
                'id' => 564,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -73,
                'created_at' => '2017-05-24 20:42:04',
                'updated_at' => '2017-05-24 20:42:04',
            ),
            64 => 
            array (
                'id' => 565,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -59,
                'created_at' => '2017-05-24 20:42:05',
                'updated_at' => '2017-05-24 20:42:05',
            ),
            65 => 
            array (
                'id' => 566,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -67,
                'created_at' => '2017-05-24 20:42:06',
                'updated_at' => '2017-05-24 20:42:06',
            ),
            66 => 
            array (
                'id' => 567,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -60,
                'created_at' => '2017-05-24 20:42:08',
                'updated_at' => '2017-05-24 20:42:08',
            ),
            67 => 
            array (
                'id' => 568,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -62,
                'created_at' => '2017-05-24 20:42:09',
                'updated_at' => '2017-05-24 20:42:09',
            ),
            68 => 
            array (
                'id' => 569,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -57,
                'created_at' => '2017-05-24 20:42:10',
                'updated_at' => '2017-05-24 20:42:10',
            ),
            69 => 
            array (
                'id' => 570,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -59,
                'created_at' => '2017-05-24 20:42:13',
                'updated_at' => '2017-05-24 20:42:13',
            ),
            70 => 
            array (
                'id' => 571,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -76,
                'created_at' => '2017-05-24 20:42:14',
                'updated_at' => '2017-05-24 20:42:14',
            ),
            71 => 
            array (
                'id' => 572,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -72,
                'created_at' => '2017-05-24 20:42:15',
                'updated_at' => '2017-05-24 20:42:15',
            ),
            72 => 
            array (
                'id' => 573,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -55,
                'created_at' => '2017-05-24 20:42:17',
                'updated_at' => '2017-05-24 20:42:17',
            ),
            73 => 
            array (
                'id' => 574,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -56,
                'created_at' => '2017-05-24 20:42:18',
                'updated_at' => '2017-05-24 20:42:18',
            ),
            74 => 
            array (
                'id' => 575,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -52,
                'created_at' => '2017-05-24 20:42:19',
                'updated_at' => '2017-05-24 20:42:19',
            ),
            75 => 
            array (
                'id' => 576,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -54,
                'created_at' => '2017-05-24 20:42:21',
                'updated_at' => '2017-05-24 20:42:21',
            ),
            76 => 
            array (
                'id' => 577,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -60,
                'created_at' => '2017-05-24 20:42:22',
                'updated_at' => '2017-05-24 20:42:22',
            ),
            77 => 
            array (
                'id' => 578,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -65,
                'created_at' => '2017-05-24 20:42:23',
                'updated_at' => '2017-05-24 20:42:23',
            ),
            78 => 
            array (
                'id' => 579,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -61,
                'created_at' => '2017-05-24 20:42:28',
                'updated_at' => '2017-05-24 20:42:28',
            ),
            79 => 
            array (
                'id' => 580,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -66,
                'created_at' => '2017-05-24 20:42:32',
                'updated_at' => '2017-05-24 20:42:32',
            ),
            80 => 
            array (
                'id' => 581,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -86,
                'created_at' => '2017-05-24 20:42:34',
                'updated_at' => '2017-05-24 20:42:34',
            ),
            81 => 
            array (
                'id' => 582,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -81,
                'created_at' => '2017-05-24 20:42:35',
                'updated_at' => '2017-05-24 20:42:35',
            ),
            82 => 
            array (
                'id' => 583,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -71,
                'created_at' => '2017-05-24 20:42:36',
                'updated_at' => '2017-05-24 20:42:36',
            ),
            83 => 
            array (
                'id' => 584,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -56,
                'created_at' => '2017-05-24 20:42:37',
                'updated_at' => '2017-05-24 20:42:37',
            ),
            84 => 
            array (
                'id' => 585,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -53,
                'created_at' => '2017-05-24 20:42:39',
                'updated_at' => '2017-05-24 20:42:39',
            ),
            85 => 
            array (
                'id' => 586,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -67,
                'created_at' => '2017-05-24 20:42:41',
                'updated_at' => '2017-05-24 20:42:41',
            ),
            86 => 
            array (
                'id' => 587,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -62,
                'created_at' => '2017-05-24 20:42:44',
                'updated_at' => '2017-05-24 20:42:44',
            ),
            87 => 
            array (
                'id' => 588,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -77,
                'created_at' => '2017-05-24 20:42:45',
                'updated_at' => '2017-05-24 20:42:45',
            ),
            88 => 
            array (
                'id' => 589,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -84,
                'created_at' => '2017-05-24 20:42:46',
                'updated_at' => '2017-05-24 20:42:46',
            ),
            89 => 
            array (
                'id' => 590,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -67,
                'created_at' => '2017-05-24 20:42:48',
                'updated_at' => '2017-05-24 20:42:48',
            ),
            90 => 
            array (
                'id' => 591,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -55,
                'created_at' => '2017-05-24 20:42:49',
                'updated_at' => '2017-05-24 20:42:49',
            ),
            91 => 
            array (
                'id' => 592,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -58,
                'created_at' => '2017-05-24 20:42:50',
                'updated_at' => '2017-05-24 20:42:50',
            ),
            92 => 
            array (
                'id' => 593,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -52,
                'created_at' => '2017-05-24 20:42:52',
                'updated_at' => '2017-05-24 20:42:52',
            ),
            93 => 
            array (
                'id' => 594,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -55,
                'created_at' => '2017-05-24 20:42:53',
                'updated_at' => '2017-05-24 20:42:53',
            ),
            94 => 
            array (
                'id' => 595,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -72,
                'created_at' => '2017-05-24 20:42:54',
                'updated_at' => '2017-05-24 20:42:54',
            ),
            95 => 
            array (
                'id' => 596,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -76,
                'created_at' => '2017-05-24 20:42:55',
                'updated_at' => '2017-05-24 20:42:55',
            ),
            96 => 
            array (
                'id' => 597,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -62,
                'created_at' => '2017-05-24 20:42:57',
                'updated_at' => '2017-05-24 20:42:57',
            ),
            97 => 
            array (
                'id' => 598,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -53,
                'created_at' => '2017-05-24 20:42:58',
                'updated_at' => '2017-05-24 20:42:58',
            ),
            98 => 
            array (
                'id' => 599,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -50,
                'created_at' => '2017-05-24 20:42:58',
                'updated_at' => '2017-05-24 20:42:58',
            ),
            99 => 
            array (
                'id' => 600,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -50,
                'created_at' => '2017-05-24 20:42:59',
                'updated_at' => '2017-05-24 20:42:59',
            ),
            100 => 
            array (
                'id' => 601,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -57,
                'created_at' => '2017-05-24 20:43:01',
                'updated_at' => '2017-05-24 20:43:01',
            ),
            101 => 
            array (
                'id' => 602,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -72,
                'created_at' => '2017-05-24 20:43:02',
                'updated_at' => '2017-05-24 20:43:02',
            ),
            102 => 
            array (
                'id' => 603,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -73,
                'created_at' => '2017-05-24 20:43:03',
                'updated_at' => '2017-05-24 20:43:03',
            ),
            103 => 
            array (
                'id' => 604,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -71,
                'created_at' => '2017-05-24 20:43:04',
                'updated_at' => '2017-05-24 20:43:04',
            ),
            104 => 
            array (
                'id' => 605,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -83,
                'created_at' => '2017-05-24 20:43:15',
                'updated_at' => '2017-05-24 20:43:15',
            ),
            105 => 
            array (
                'id' => 606,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -70,
                'created_at' => '2017-05-24 20:43:16',
                'updated_at' => '2017-05-24 20:43:16',
            ),
            106 => 
            array (
                'id' => 607,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -67,
                'created_at' => '2017-05-24 20:43:17',
                'updated_at' => '2017-05-24 20:43:17',
            ),
            107 => 
            array (
                'id' => 608,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -67,
                'created_at' => '2017-05-24 20:43:19',
                'updated_at' => '2017-05-24 20:43:19',
            ),
            108 => 
            array (
                'id' => 609,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -61,
                'created_at' => '2017-05-24 20:43:20',
                'updated_at' => '2017-05-24 20:43:20',
            ),
            109 => 
            array (
                'id' => 610,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -57,
                'created_at' => '2017-05-24 20:43:21',
                'updated_at' => '2017-05-24 20:43:21',
            ),
            110 => 
            array (
                'id' => 611,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -76,
                'created_at' => '2017-05-24 20:43:23',
                'updated_at' => '2017-05-24 20:43:23',
            ),
            111 => 
            array (
                'id' => 612,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -74,
                'created_at' => '2017-05-24 20:43:24',
                'updated_at' => '2017-05-24 20:43:24',
            ),
            112 => 
            array (
                'id' => 613,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -83,
                'created_at' => '2017-05-24 20:43:25',
                'updated_at' => '2017-05-24 20:43:25',
            ),
            113 => 
            array (
                'id' => 614,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -62,
                'created_at' => '2017-05-24 20:43:26',
                'updated_at' => '2017-05-24 20:43:26',
            ),
            114 => 
            array (
                'id' => 615,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -74,
                'created_at' => '2017-05-24 20:43:29',
                'updated_at' => '2017-05-24 20:43:29',
            ),
            115 => 
            array (
                'id' => 616,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -67,
                'created_at' => '2017-05-24 20:43:30',
                'updated_at' => '2017-05-24 20:43:30',
            ),
            116 => 
            array (
                'id' => 617,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -41,
                'created_at' => '2017-05-24 20:43:32',
                'updated_at' => '2017-05-24 20:43:32',
            ),
            117 => 
            array (
                'id' => 618,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -68,
                'created_at' => '2017-05-24 20:43:33',
                'updated_at' => '2017-05-24 20:43:33',
            ),
            118 => 
            array (
                'id' => 619,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -59,
                'created_at' => '2017-05-24 20:43:34',
                'updated_at' => '2017-05-24 20:43:34',
            ),
            119 => 
            array (
                'id' => 620,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -57,
                'created_at' => '2017-05-24 20:43:35',
                'updated_at' => '2017-05-24 20:43:35',
            ),
            120 => 
            array (
                'id' => 621,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -66,
                'created_at' => '2017-05-24 20:43:37',
                'updated_at' => '2017-05-24 20:43:37',
            ),
            121 => 
            array (
                'id' => 622,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -62,
                'created_at' => '2017-05-24 20:43:38',
                'updated_at' => '2017-05-24 20:43:38',
            ),
            122 => 
            array (
                'id' => 623,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -62,
                'created_at' => '2017-05-24 20:43:39',
                'updated_at' => '2017-05-24 20:43:39',
            ),
            123 => 
            array (
                'id' => 624,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -85,
                'created_at' => '2017-05-24 20:43:41',
                'updated_at' => '2017-05-24 20:43:41',
            ),
            124 => 
            array (
                'id' => 625,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -57,
                'created_at' => '2017-05-24 20:43:42',
                'updated_at' => '2017-05-24 20:43:42',
            ),
            125 => 
            array (
                'id' => 626,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -82,
                'created_at' => '2017-05-24 20:43:43',
                'updated_at' => '2017-05-24 20:43:43',
            ),
            126 => 
            array (
                'id' => 627,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -57,
                'created_at' => '2017-05-24 20:43:44',
                'updated_at' => '2017-05-24 20:43:44',
            ),
            127 => 
            array (
                'id' => 628,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -71,
                'created_at' => '2017-05-24 20:43:46',
                'updated_at' => '2017-05-24 20:43:46',
            ),
            128 => 
            array (
                'id' => 629,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -69,
                'created_at' => '2017-05-24 20:43:51',
                'updated_at' => '2017-05-24 20:43:51',
            ),
            129 => 
            array (
                'id' => 630,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -57,
                'created_at' => '2017-05-24 20:43:55',
                'updated_at' => '2017-05-24 20:43:55',
            ),
            130 => 
            array (
                'id' => 631,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -55,
                'created_at' => '2017-05-24 20:43:56',
                'updated_at' => '2017-05-24 20:43:56',
            ),
            131 => 
            array (
                'id' => 632,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -73,
                'created_at' => '2017-05-24 20:43:57',
                'updated_at' => '2017-05-24 20:43:57',
            ),
            132 => 
            array (
                'id' => 633,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -69,
                'created_at' => '2017-05-24 20:43:59',
                'updated_at' => '2017-05-24 20:43:59',
            ),
            133 => 
            array (
                'id' => 634,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -57,
                'created_at' => '2017-05-24 20:44:00',
                'updated_at' => '2017-05-24 20:44:00',
            ),
            134 => 
            array (
                'id' => 635,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -58,
                'created_at' => '2017-05-24 20:44:01',
                'updated_at' => '2017-05-24 20:44:01',
            ),
            135 => 
            array (
                'id' => 636,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -57,
                'created_at' => '2017-05-24 20:44:03',
                'updated_at' => '2017-05-24 20:44:03',
            ),
            136 => 
            array (
                'id' => 637,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -59,
                'created_at' => '2017-05-24 20:44:04',
                'updated_at' => '2017-05-24 20:44:04',
            ),
            137 => 
            array (
                'id' => 638,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -78,
                'created_at' => '2017-05-24 20:44:05',
                'updated_at' => '2017-05-24 20:44:05',
            ),
            138 => 
            array (
                'id' => 639,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -58,
                'created_at' => '2017-05-24 20:44:06',
                'updated_at' => '2017-05-24 20:44:06',
            ),
            139 => 
            array (
                'id' => 640,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -68,
                'created_at' => '2017-05-24 20:44:08',
                'updated_at' => '2017-05-24 20:44:08',
            ),
            140 => 
            array (
                'id' => 641,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -68,
                'created_at' => '2017-05-24 20:44:09',
                'updated_at' => '2017-05-24 20:44:09',
            ),
            141 => 
            array (
                'id' => 642,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -74,
                'created_at' => '2017-05-24 20:44:10',
                'updated_at' => '2017-05-24 20:44:10',
            ),
            142 => 
            array (
                'id' => 643,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -76,
                'created_at' => '2017-05-24 20:44:12',
                'updated_at' => '2017-05-24 20:44:12',
            ),
            143 => 
            array (
                'id' => 644,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -62,
                'created_at' => '2017-05-24 20:44:13',
                'updated_at' => '2017-05-24 20:44:13',
            ),
            144 => 
            array (
                'id' => 645,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -60,
                'created_at' => '2017-05-24 20:44:14',
                'updated_at' => '2017-05-24 20:44:14',
            ),
            145 => 
            array (
                'id' => 646,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -68,
                'created_at' => '2017-05-24 20:44:15',
                'updated_at' => '2017-05-24 20:44:15',
            ),
            146 => 
            array (
                'id' => 647,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -59,
                'created_at' => '2017-05-24 20:44:17',
                'updated_at' => '2017-05-24 20:44:17',
            ),
            147 => 
            array (
                'id' => 648,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -59,
                'created_at' => '2017-05-24 20:44:18',
                'updated_at' => '2017-05-24 20:44:18',
            ),
            148 => 
            array (
                'id' => 649,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -61,
                'created_at' => '2017-05-24 20:44:19',
                'updated_at' => '2017-05-24 20:44:19',
            ),
            149 => 
            array (
                'id' => 650,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -59,
                'created_at' => '2017-05-24 20:44:21',
                'updated_at' => '2017-05-24 20:44:21',
            ),
            150 => 
            array (
                'id' => 651,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -67,
                'created_at' => '2017-05-24 20:44:22',
                'updated_at' => '2017-05-24 20:44:22',
            ),
            151 => 
            array (
                'id' => 652,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -61,
                'created_at' => '2017-05-24 20:44:23',
                'updated_at' => '2017-05-24 20:44:23',
            ),
            152 => 
            array (
                'id' => 653,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -80,
                'created_at' => '2017-05-24 20:44:24',
                'updated_at' => '2017-05-24 20:44:24',
            ),
            153 => 
            array (
                'id' => 654,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -74,
                'created_at' => '2017-05-24 20:44:26',
                'updated_at' => '2017-05-24 20:44:26',
            ),
            154 => 
            array (
                'id' => 655,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -58,
                'created_at' => '2017-05-24 20:44:27',
                'updated_at' => '2017-05-24 20:44:27',
            ),
            155 => 
            array (
                'id' => 656,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -76,
                'created_at' => '2017-05-24 20:44:28',
                'updated_at' => '2017-05-24 20:44:28',
            ),
            156 => 
            array (
                'id' => 657,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -76,
                'created_at' => '2017-05-24 20:44:30',
                'updated_at' => '2017-05-24 20:44:30',
            ),
            157 => 
            array (
                'id' => 658,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -66,
                'created_at' => '2017-05-24 20:44:32',
                'updated_at' => '2017-05-24 20:44:32',
            ),
            158 => 
            array (
                'id' => 659,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -72,
                'created_at' => '2017-05-24 20:44:35',
                'updated_at' => '2017-05-24 20:44:35',
            ),
            159 => 
            array (
                'id' => 660,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -71,
                'created_at' => '2017-05-24 20:44:36',
                'updated_at' => '2017-05-24 20:44:36',
            ),
            160 => 
            array (
                'id' => 661,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -70,
                'created_at' => '2017-05-24 20:44:37',
                'updated_at' => '2017-05-24 20:44:37',
            ),
            161 => 
            array (
                'id' => 662,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -76,
                'created_at' => '2017-05-24 20:44:39',
                'updated_at' => '2017-05-24 20:44:39',
            ),
            162 => 
            array (
                'id' => 663,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -62,
                'created_at' => '2017-05-24 20:44:40',
                'updated_at' => '2017-05-24 20:44:40',
            ),
            163 => 
            array (
                'id' => 664,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -56,
                'created_at' => '2017-05-24 20:44:41',
                'updated_at' => '2017-05-24 20:44:41',
            ),
            164 => 
            array (
                'id' => 665,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -58,
                'created_at' => '2017-05-24 20:44:43',
                'updated_at' => '2017-05-24 20:44:43',
            ),
            165 => 
            array (
                'id' => 666,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -74,
                'created_at' => '2017-05-24 20:44:45',
                'updated_at' => '2017-05-24 20:44:45',
            ),
            166 => 
            array (
                'id' => 667,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -73,
                'created_at' => '2017-05-24 20:44:45',
                'updated_at' => '2017-05-24 20:44:45',
            ),
            167 => 
            array (
                'id' => 668,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -76,
                'created_at' => '2017-05-24 20:44:46',
                'updated_at' => '2017-05-24 20:44:46',
            ),
            168 => 
            array (
                'id' => 669,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -75,
                'created_at' => '2017-05-24 20:44:48',
                'updated_at' => '2017-05-24 20:44:48',
            ),
            169 => 
            array (
                'id' => 670,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -73,
                'created_at' => '2017-05-24 20:44:49',
                'updated_at' => '2017-05-24 20:44:49',
            ),
            170 => 
            array (
                'id' => 671,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -85,
                'created_at' => '2017-05-24 20:44:50',
                'updated_at' => '2017-05-24 20:44:50',
            ),
            171 => 
            array (
                'id' => 672,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -86,
                'created_at' => '2017-05-24 20:44:52',
                'updated_at' => '2017-05-24 20:44:52',
            ),
            172 => 
            array (
                'id' => 673,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -79,
                'created_at' => '2017-05-24 20:44:53',
                'updated_at' => '2017-05-24 20:44:53',
            ),
            173 => 
            array (
                'id' => 674,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -74,
                'created_at' => '2017-05-24 20:44:54',
                'updated_at' => '2017-05-24 20:44:54',
            ),
            174 => 
            array (
                'id' => 675,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -70,
                'created_at' => '2017-05-24 20:44:55',
                'updated_at' => '2017-05-24 20:44:55',
            ),
            175 => 
            array (
                'id' => 676,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -71,
                'created_at' => '2017-05-24 20:44:57',
                'updated_at' => '2017-05-24 20:44:57',
            ),
            176 => 
            array (
                'id' => 677,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -71,
                'created_at' => '2017-05-24 20:44:58',
                'updated_at' => '2017-05-24 20:44:58',
            ),
            177 => 
            array (
                'id' => 678,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -68,
                'created_at' => '2017-05-24 20:44:59',
                'updated_at' => '2017-05-24 20:44:59',
            ),
            178 => 
            array (
                'id' => 679,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -76,
                'created_at' => '2017-05-24 20:45:01',
                'updated_at' => '2017-05-24 20:45:01',
            ),
            179 => 
            array (
                'id' => 680,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -81,
                'created_at' => '2017-05-24 20:45:02',
                'updated_at' => '2017-05-24 20:45:02',
            ),
            180 => 
            array (
                'id' => 681,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -74,
                'created_at' => '2017-05-24 20:45:03',
                'updated_at' => '2017-05-24 20:45:03',
            ),
            181 => 
            array (
                'id' => 682,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -70,
                'created_at' => '2017-05-24 20:45:04',
                'updated_at' => '2017-05-24 20:45:04',
            ),
            182 => 
            array (
                'id' => 683,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -62,
                'created_at' => '2017-05-24 20:45:06',
                'updated_at' => '2017-05-24 20:45:06',
            ),
            183 => 
            array (
                'id' => 684,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -57,
                'created_at' => '2017-05-24 20:45:07',
                'updated_at' => '2017-05-24 20:45:07',
            ),
            184 => 
            array (
                'id' => 685,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -86,
                'created_at' => '2017-05-24 20:45:08',
                'updated_at' => '2017-05-24 20:45:08',
            ),
            185 => 
            array (
                'id' => 686,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -67,
                'created_at' => '2017-05-24 20:45:10',
                'updated_at' => '2017-05-24 20:45:10',
            ),
            186 => 
            array (
                'id' => 687,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -61,
                'created_at' => '2017-05-24 20:45:11',
                'updated_at' => '2017-05-24 20:45:11',
            ),
            187 => 
            array (
                'id' => 688,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -71,
                'created_at' => '2017-05-24 20:45:15',
                'updated_at' => '2017-05-24 20:45:15',
            ),
            188 => 
            array (
                'id' => 689,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -66,
                'created_at' => '2017-05-24 20:45:16',
                'updated_at' => '2017-05-24 20:45:16',
            ),
            189 => 
            array (
                'id' => 690,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -60,
                'created_at' => '2017-05-24 20:45:17',
                'updated_at' => '2017-05-24 20:45:17',
            ),
            190 => 
            array (
                'id' => 691,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -68,
                'created_at' => '2017-05-24 20:45:19',
                'updated_at' => '2017-05-24 20:45:19',
            ),
            191 => 
            array (
                'id' => 692,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -59,
                'created_at' => '2017-05-24 20:45:20',
                'updated_at' => '2017-05-24 20:45:20',
            ),
            192 => 
            array (
                'id' => 693,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -56,
                'created_at' => '2017-05-24 20:45:21',
                'updated_at' => '2017-05-24 20:45:21',
            ),
            193 => 
            array (
                'id' => 694,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -70,
                'created_at' => '2017-05-24 20:45:23',
                'updated_at' => '2017-05-24 20:45:23',
            ),
            194 => 
            array (
                'id' => 695,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -62,
                'created_at' => '2017-05-24 20:45:25',
                'updated_at' => '2017-05-24 20:45:25',
            ),
            195 => 
            array (
                'id' => 696,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -69,
                'created_at' => '2017-05-24 20:45:26',
                'updated_at' => '2017-05-24 20:45:26',
            ),
            196 => 
            array (
                'id' => 697,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -70,
                'created_at' => '2017-05-24 20:45:28',
                'updated_at' => '2017-05-24 20:45:28',
            ),
            197 => 
            array (
                'id' => 698,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -71,
                'created_at' => '2017-05-24 20:45:29',
                'updated_at' => '2017-05-24 20:45:29',
            ),
            198 => 
            array (
                'id' => 699,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -47,
                'created_at' => '2017-05-24 20:45:30',
                'updated_at' => '2017-05-24 20:45:30',
            ),
            199 => 
            array (
                'id' => 700,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -66,
                'created_at' => '2017-05-24 20:45:32',
                'updated_at' => '2017-05-24 20:45:32',
            ),
            200 => 
            array (
                'id' => 701,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -52,
                'created_at' => '2017-05-24 20:45:33',
                'updated_at' => '2017-05-24 20:45:33',
            ),
            201 => 
            array (
                'id' => 702,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -71,
                'created_at' => '2017-05-24 20:45:34',
                'updated_at' => '2017-05-24 20:45:34',
            ),
            202 => 
            array (
                'id' => 703,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -74,
                'created_at' => '2017-05-24 20:45:35',
                'updated_at' => '2017-05-24 20:45:35',
            ),
            203 => 
            array (
                'id' => 704,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -50,
                'created_at' => '2017-05-24 20:45:37',
                'updated_at' => '2017-05-24 20:45:37',
            ),
            204 => 
            array (
                'id' => 705,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -81,
                'created_at' => '2017-05-24 20:45:38',
                'updated_at' => '2017-05-24 20:45:38',
            ),
            205 => 
            array (
                'id' => 706,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -79,
                'created_at' => '2017-05-24 20:45:39',
                'updated_at' => '2017-05-24 20:45:39',
            ),
            206 => 
            array (
                'id' => 707,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -75,
                'created_at' => '2017-05-24 20:45:41',
                'updated_at' => '2017-05-24 20:45:41',
            ),
            207 => 
            array (
                'id' => 708,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -77,
                'created_at' => '2017-05-24 20:45:42',
                'updated_at' => '2017-05-24 20:45:42',
            ),
            208 => 
            array (
                'id' => 709,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -91,
                'created_at' => '2017-05-24 20:45:43',
                'updated_at' => '2017-05-24 20:45:43',
            ),
            209 => 
            array (
                'id' => 710,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -76,
                'created_at' => '2017-05-24 20:45:44',
                'updated_at' => '2017-05-24 20:45:44',
            ),
            210 => 
            array (
                'id' => 711,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -64,
                'created_at' => '2017-05-24 20:45:46',
                'updated_at' => '2017-05-24 20:45:46',
            ),
            211 => 
            array (
                'id' => 712,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -65,
                'created_at' => '2017-05-24 20:45:46',
                'updated_at' => '2017-05-24 20:45:46',
            ),
            212 => 
            array (
                'id' => 713,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -47,
                'created_at' => '2017-05-24 20:45:47',
                'updated_at' => '2017-05-24 20:45:47',
            ),
            213 => 
            array (
                'id' => 714,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -47,
                'created_at' => '2017-05-24 20:45:48',
                'updated_at' => '2017-05-24 20:45:48',
            ),
            214 => 
            array (
                'id' => 715,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -51,
                'created_at' => '2017-05-24 20:45:49',
                'updated_at' => '2017-05-24 20:45:49',
            ),
            215 => 
            array (
                'id' => 716,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -59,
                'created_at' => '2017-05-24 20:45:50',
                'updated_at' => '2017-05-24 20:45:50',
            ),
            216 => 
            array (
                'id' => 717,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -60,
                'created_at' => '2017-05-24 20:45:51',
                'updated_at' => '2017-05-24 20:45:51',
            ),
            217 => 
            array (
                'id' => 718,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -59,
                'created_at' => '2017-05-24 20:45:52',
                'updated_at' => '2017-05-24 20:45:52',
            ),
            218 => 
            array (
                'id' => 719,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -74,
                'created_at' => '2017-05-24 20:45:56',
                'updated_at' => '2017-05-24 20:45:56',
            ),
            219 => 
            array (
                'id' => 720,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -49,
                'created_at' => '2017-05-24 20:45:59',
                'updated_at' => '2017-05-24 20:45:59',
            ),
            220 => 
            array (
                'id' => 721,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -56,
                'created_at' => '2017-05-24 20:46:00',
                'updated_at' => '2017-05-24 20:46:00',
            ),
            221 => 
            array (
                'id' => 722,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -53,
                'created_at' => '2017-05-24 20:46:01',
                'updated_at' => '2017-05-24 20:46:01',
            ),
            222 => 
            array (
                'id' => 723,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -52,
                'created_at' => '2017-05-24 20:46:03',
                'updated_at' => '2017-05-24 20:46:03',
            ),
            223 => 
            array (
                'id' => 724,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -54,
                'created_at' => '2017-05-24 20:46:04',
                'updated_at' => '2017-05-24 20:46:04',
            ),
            224 => 
            array (
                'id' => 725,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -69,
                'created_at' => '2017-05-24 20:46:05',
                'updated_at' => '2017-05-24 20:46:05',
            ),
            225 => 
            array (
                'id' => 726,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -70,
                'created_at' => '2017-05-24 20:46:06',
                'updated_at' => '2017-05-24 20:46:06',
            ),
            226 => 
            array (
                'id' => 727,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -72,
                'created_at' => '2017-05-24 20:46:08',
                'updated_at' => '2017-05-24 20:46:08',
            ),
            227 => 
            array (
                'id' => 728,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -55,
                'created_at' => '2017-05-24 20:46:09',
                'updated_at' => '2017-05-24 20:46:09',
            ),
            228 => 
            array (
                'id' => 729,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -56,
                'created_at' => '2017-05-24 20:46:10',
                'updated_at' => '2017-05-24 20:46:10',
            ),
            229 => 
            array (
                'id' => 730,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -57,
                'created_at' => '2017-05-24 20:46:12',
                'updated_at' => '2017-05-24 20:46:12',
            ),
            230 => 
            array (
                'id' => 731,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -71,
                'created_at' => '2017-05-24 20:46:13',
                'updated_at' => '2017-05-24 20:46:13',
            ),
            231 => 
            array (
                'id' => 732,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -59,
                'created_at' => '2017-05-24 20:46:14',
                'updated_at' => '2017-05-24 20:46:14',
            ),
            232 => 
            array (
                'id' => 733,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -71,
                'created_at' => '2017-05-24 20:46:15',
                'updated_at' => '2017-05-24 20:46:15',
            ),
            233 => 
            array (
                'id' => 734,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -85,
                'created_at' => '2017-05-24 20:46:17',
                'updated_at' => '2017-05-24 20:46:17',
            ),
            234 => 
            array (
                'id' => 735,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -77,
                'created_at' => '2017-05-24 20:46:18',
                'updated_at' => '2017-05-24 20:46:18',
            ),
            235 => 
            array (
                'id' => 736,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -76,
                'created_at' => '2017-05-24 20:46:19',
                'updated_at' => '2017-05-24 20:46:19',
            ),
            236 => 
            array (
                'id' => 737,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -63,
                'created_at' => '2017-05-24 20:46:21',
                'updated_at' => '2017-05-24 20:46:21',
            ),
            237 => 
            array (
                'id' => 738,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -73,
                'created_at' => '2017-05-24 20:46:22',
                'updated_at' => '2017-05-24 20:46:22',
            ),
            238 => 
            array (
                'id' => 739,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -58,
                'created_at' => '2017-05-24 20:46:23',
                'updated_at' => '2017-05-24 20:46:23',
            ),
            239 => 
            array (
                'id' => 740,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -68,
                'created_at' => '2017-05-24 20:46:24',
                'updated_at' => '2017-05-24 20:46:24',
            ),
            240 => 
            array (
                'id' => 741,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -67,
                'created_at' => '2017-05-24 20:46:26',
                'updated_at' => '2017-05-24 20:46:26',
            ),
            241 => 
            array (
                'id' => 742,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -66,
                'created_at' => '2017-05-24 20:46:27',
                'updated_at' => '2017-05-24 20:46:27',
            ),
            242 => 
            array (
                'id' => 743,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -81,
                'created_at' => '2017-05-24 20:46:28',
                'updated_at' => '2017-05-24 20:46:28',
            ),
            243 => 
            array (
                'id' => 744,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -66,
                'created_at' => '2017-05-24 20:46:30',
                'updated_at' => '2017-05-24 20:46:30',
            ),
            244 => 
            array (
                'id' => 745,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -68,
                'created_at' => '2017-05-24 20:46:31',
                'updated_at' => '2017-05-24 20:46:31',
            ),
            245 => 
            array (
                'id' => 746,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -74,
                'created_at' => '2017-05-24 20:46:33',
                'updated_at' => '2017-05-24 20:46:33',
            ),
            246 => 
            array (
                'id' => 747,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -87,
                'created_at' => '2017-05-24 20:46:35',
                'updated_at' => '2017-05-24 20:46:35',
            ),
            247 => 
            array (
                'id' => 748,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -82,
                'created_at' => '2017-05-24 20:46:37',
                'updated_at' => '2017-05-24 20:46:37',
            ),
            248 => 
            array (
                'id' => 749,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -83,
                'created_at' => '2017-05-24 20:46:39',
                'updated_at' => '2017-05-24 20:46:39',
            ),
            249 => 
            array (
                'id' => 750,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -62,
                'created_at' => '2017-05-24 20:46:40',
                'updated_at' => '2017-05-24 20:46:40',
            ),
            250 => 
            array (
                'id' => 751,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -61,
                'created_at' => '2017-05-24 20:46:43',
                'updated_at' => '2017-05-24 20:46:43',
            ),
            251 => 
            array (
                'id' => 752,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -76,
                'created_at' => '2017-05-24 20:46:44',
                'updated_at' => '2017-05-24 20:46:44',
            ),
            252 => 
            array (
                'id' => 753,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -56,
                'created_at' => '2017-05-24 20:46:44',
                'updated_at' => '2017-05-24 20:46:44',
            ),
            253 => 
            array (
                'id' => 754,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -77,
                'created_at' => '2017-05-24 20:46:45',
                'updated_at' => '2017-05-24 20:46:45',
            ),
            254 => 
            array (
                'id' => 755,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -68,
                'created_at' => '2017-05-24 20:46:45',
                'updated_at' => '2017-05-24 20:46:45',
            ),
            255 => 
            array (
                'id' => 756,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -79,
                'created_at' => '2017-05-24 20:46:46',
                'updated_at' => '2017-05-24 20:46:46',
            ),
            256 => 
            array (
                'id' => 757,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -89,
                'created_at' => '2017-05-24 20:46:47',
                'updated_at' => '2017-05-24 20:46:47',
            ),
            257 => 
            array (
                'id' => 758,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -95,
                'created_at' => '2017-05-24 20:46:48',
                'updated_at' => '2017-05-24 20:46:48',
            ),
            258 => 
            array (
                'id' => 759,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -86,
                'created_at' => '2017-05-24 20:46:49',
                'updated_at' => '2017-05-24 20:46:49',
            ),
            259 => 
            array (
                'id' => 760,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -89,
                'created_at' => '2017-05-24 20:46:49',
                'updated_at' => '2017-05-24 20:46:49',
            ),
            260 => 
            array (
                'id' => 761,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -90,
                'created_at' => '2017-05-24 20:46:50',
                'updated_at' => '2017-05-24 20:46:50',
            ),
            261 => 
            array (
                'id' => 762,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -76,
                'created_at' => '2017-05-24 20:46:52',
                'updated_at' => '2017-05-24 20:46:52',
            ),
            262 => 
            array (
                'id' => 763,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -72,
                'created_at' => '2017-05-24 20:46:53',
                'updated_at' => '2017-05-24 20:46:53',
            ),
            263 => 
            array (
                'id' => 764,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -62,
                'created_at' => '2017-05-24 20:46:53',
                'updated_at' => '2017-05-24 20:46:53',
            ),
            264 => 
            array (
                'id' => 765,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -73,
                'created_at' => '2017-05-24 20:46:54',
                'updated_at' => '2017-05-24 20:46:54',
            ),
            265 => 
            array (
                'id' => 766,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -72,
                'created_at' => '2017-05-24 20:46:55',
                'updated_at' => '2017-05-24 20:46:55',
            ),
            266 => 
            array (
                'id' => 767,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -65,
                'created_at' => '2017-05-24 20:46:58',
                'updated_at' => '2017-05-24 20:46:58',
            ),
            267 => 
            array (
                'id' => 768,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -81,
                'created_at' => '2017-05-24 20:47:00',
                'updated_at' => '2017-05-24 20:47:00',
            ),
            268 => 
            array (
                'id' => 769,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -79,
                'created_at' => '2017-05-24 20:47:02',
                'updated_at' => '2017-05-24 20:47:02',
            ),
            269 => 
            array (
                'id' => 770,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -61,
                'created_at' => '2017-05-24 20:47:03',
                'updated_at' => '2017-05-24 20:47:03',
            ),
            270 => 
            array (
                'id' => 771,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -75,
                'created_at' => '2017-05-24 20:47:04',
                'updated_at' => '2017-05-24 20:47:04',
            ),
            271 => 
            array (
                'id' => 772,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -77,
                'created_at' => '2017-05-24 20:47:07',
                'updated_at' => '2017-05-24 20:47:07',
            ),
            272 => 
            array (
                'id' => 773,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -75,
                'created_at' => '2017-05-24 20:47:08',
                'updated_at' => '2017-05-24 20:47:08',
            ),
            273 => 
            array (
                'id' => 774,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -76,
                'created_at' => '2017-05-24 20:47:10',
                'updated_at' => '2017-05-24 20:47:10',
            ),
            274 => 
            array (
                'id' => 775,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -78,
                'created_at' => '2017-05-24 20:47:11',
                'updated_at' => '2017-05-24 20:47:11',
            ),
            275 => 
            array (
                'id' => 776,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -62,
                'created_at' => '2017-05-24 20:47:12',
                'updated_at' => '2017-05-24 20:47:12',
            ),
            276 => 
            array (
                'id' => 777,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -61,
                'created_at' => '2017-05-24 20:47:13',
                'updated_at' => '2017-05-24 20:47:13',
            ),
            277 => 
            array (
                'id' => 778,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -78,
                'created_at' => '2017-05-24 20:47:15',
                'updated_at' => '2017-05-24 20:47:15',
            ),
            278 => 
            array (
                'id' => 779,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -78,
                'created_at' => '2017-05-24 20:47:16',
                'updated_at' => '2017-05-24 20:47:16',
            ),
            279 => 
            array (
                'id' => 780,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -78,
                'created_at' => '2017-05-24 20:47:19',
                'updated_at' => '2017-05-24 20:47:19',
            ),
            280 => 
            array (
                'id' => 781,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -79,
                'created_at' => '2017-05-24 20:47:20',
                'updated_at' => '2017-05-24 20:47:20',
            ),
            281 => 
            array (
                'id' => 782,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -79,
                'created_at' => '2017-05-24 20:47:21',
                'updated_at' => '2017-05-24 20:47:21',
            ),
            282 => 
            array (
                'id' => 783,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -66,
                'created_at' => '2017-05-24 20:47:22',
                'updated_at' => '2017-05-24 20:47:22',
            ),
            283 => 
            array (
                'id' => 784,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -62,
                'created_at' => '2017-05-24 20:47:24',
                'updated_at' => '2017-05-24 20:47:24',
            ),
            284 => 
            array (
                'id' => 785,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -71,
                'created_at' => '2017-05-24 20:47:25',
                'updated_at' => '2017-05-24 20:47:25',
            ),
            285 => 
            array (
                'id' => 786,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -70,
                'created_at' => '2017-05-24 20:47:26',
                'updated_at' => '2017-05-24 20:47:26',
            ),
            286 => 
            array (
                'id' => 787,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -69,
                'created_at' => '2017-05-24 20:47:28',
                'updated_at' => '2017-05-24 20:47:28',
            ),
            287 => 
            array (
                'id' => 788,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -78,
                'created_at' => '2017-05-24 20:47:29',
                'updated_at' => '2017-05-24 20:47:29',
            ),
            288 => 
            array (
                'id' => 789,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -70,
                'created_at' => '2017-05-24 20:47:30',
                'updated_at' => '2017-05-24 20:47:30',
            ),
            289 => 
            array (
                'id' => 790,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -67,
                'created_at' => '2017-05-24 20:47:31',
                'updated_at' => '2017-05-24 20:47:31',
            ),
            290 => 
            array (
                'id' => 791,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -73,
                'created_at' => '2017-05-24 20:47:34',
                'updated_at' => '2017-05-24 20:47:34',
            ),
            291 => 
            array (
                'id' => 792,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -71,
                'created_at' => '2017-05-24 20:47:35',
                'updated_at' => '2017-05-24 20:47:35',
            ),
            292 => 
            array (
                'id' => 793,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -72,
                'created_at' => '2017-05-24 20:47:37',
                'updated_at' => '2017-05-24 20:47:37',
            ),
            293 => 
            array (
                'id' => 794,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -73,
                'created_at' => '2017-05-24 20:47:37',
                'updated_at' => '2017-05-24 20:47:37',
            ),
            294 => 
            array (
                'id' => 795,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -78,
                'created_at' => '2017-05-24 20:47:39',
                'updated_at' => '2017-05-24 20:47:39',
            ),
            295 => 
            array (
                'id' => 796,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -69,
                'created_at' => '2017-05-24 20:47:40',
                'updated_at' => '2017-05-24 20:47:40',
            ),
            296 => 
            array (
                'id' => 797,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -86,
                'created_at' => '2017-05-24 20:47:42',
                'updated_at' => '2017-05-24 20:47:42',
            ),
            297 => 
            array (
                'id' => 798,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -75,
                'created_at' => '2017-05-24 20:47:43',
                'updated_at' => '2017-05-24 20:47:43',
            ),
            298 => 
            array (
                'id' => 799,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -80,
                'created_at' => '2017-05-24 20:47:43',
                'updated_at' => '2017-05-24 20:47:43',
            ),
            299 => 
            array (
                'id' => 800,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -68,
                'created_at' => '2017-05-24 20:47:44',
                'updated_at' => '2017-05-24 20:47:44',
            ),
            300 => 
            array (
                'id' => 801,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -63,
                'created_at' => '2017-05-24 20:47:46',
                'updated_at' => '2017-05-24 20:47:46',
            ),
            301 => 
            array (
                'id' => 802,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -75,
                'created_at' => '2017-05-24 20:47:47',
                'updated_at' => '2017-05-24 20:47:47',
            ),
            302 => 
            array (
                'id' => 803,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -61,
                'created_at' => '2017-05-24 20:47:48',
                'updated_at' => '2017-05-24 20:47:48',
            ),
            303 => 
            array (
                'id' => 804,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -50,
                'created_at' => '2017-05-24 20:47:50',
                'updated_at' => '2017-05-24 20:47:50',
            ),
            304 => 
            array (
                'id' => 805,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -43,
                'created_at' => '2017-05-24 20:47:51',
                'updated_at' => '2017-05-24 20:47:51',
            ),
            305 => 
            array (
                'id' => 806,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -51,
                'created_at' => '2017-05-24 20:47:52',
                'updated_at' => '2017-05-24 20:47:52',
            ),
            306 => 
            array (
                'id' => 807,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -62,
                'created_at' => '2017-05-24 20:47:53',
                'updated_at' => '2017-05-24 20:47:53',
            ),
            307 => 
            array (
                'id' => 808,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -63,
                'created_at' => '2017-05-24 20:47:55',
                'updated_at' => '2017-05-24 20:47:55',
            ),
            308 => 
            array (
                'id' => 809,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -47,
                'created_at' => '2017-05-24 20:47:56',
                'updated_at' => '2017-05-24 20:47:56',
            ),
            309 => 
            array (
                'id' => 810,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -49,
                'created_at' => '2017-05-24 20:47:57',
                'updated_at' => '2017-05-24 20:47:57',
            ),
            310 => 
            array (
                'id' => 811,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -49,
                'created_at' => '2017-05-24 20:47:59',
                'updated_at' => '2017-05-24 20:47:59',
            ),
            311 => 
            array (
                'id' => 812,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -51,
                'created_at' => '2017-05-24 20:48:00',
                'updated_at' => '2017-05-24 20:48:00',
            ),
            312 => 
            array (
                'id' => 813,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -55,
                'created_at' => '2017-05-24 20:48:01',
                'updated_at' => '2017-05-24 20:48:01',
            ),
            313 => 
            array (
                'id' => 814,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -57,
                'created_at' => '2017-05-24 20:48:02',
                'updated_at' => '2017-05-24 20:48:02',
            ),
            314 => 
            array (
                'id' => 815,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -69,
                'created_at' => '2017-05-24 20:48:04',
                'updated_at' => '2017-05-24 20:48:04',
            ),
            315 => 
            array (
                'id' => 816,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -75,
                'created_at' => '2017-05-24 20:48:05',
                'updated_at' => '2017-05-24 20:48:05',
            ),
            316 => 
            array (
                'id' => 817,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -71,
                'created_at' => '2017-05-24 20:48:06',
                'updated_at' => '2017-05-24 20:48:06',
            ),
            317 => 
            array (
                'id' => 818,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -56,
                'created_at' => '2017-05-24 20:48:08',
                'updated_at' => '2017-05-24 20:48:08',
            ),
            318 => 
            array (
                'id' => 819,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -53,
                'created_at' => '2017-05-24 20:48:09',
                'updated_at' => '2017-05-24 20:48:09',
            ),
            319 => 
            array (
                'id' => 820,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -52,
                'created_at' => '2017-05-24 20:48:10',
                'updated_at' => '2017-05-24 20:48:10',
            ),
            320 => 
            array (
                'id' => 821,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -66,
                'created_at' => '2017-05-24 20:48:12',
                'updated_at' => '2017-05-24 20:48:12',
            ),
            321 => 
            array (
                'id' => 822,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -69,
                'created_at' => '2017-05-24 20:48:13',
                'updated_at' => '2017-05-24 20:48:13',
            ),
            322 => 
            array (
                'id' => 823,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -70,
                'created_at' => '2017-05-24 20:48:14',
                'updated_at' => '2017-05-24 20:48:14',
            ),
            323 => 
            array (
                'id' => 824,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -69,
                'created_at' => '2017-05-24 20:48:15',
                'updated_at' => '2017-05-24 20:48:15',
            ),
            324 => 
            array (
                'id' => 825,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -67,
                'created_at' => '2017-05-24 20:48:17',
                'updated_at' => '2017-05-24 20:48:17',
            ),
            325 => 
            array (
                'id' => 826,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -56,
                'created_at' => '2017-05-24 20:48:18',
                'updated_at' => '2017-05-24 20:48:18',
            ),
            326 => 
            array (
                'id' => 827,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -68,
                'created_at' => '2017-05-24 20:48:19',
                'updated_at' => '2017-05-24 20:48:19',
            ),
            327 => 
            array (
                'id' => 828,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -55,
                'created_at' => '2017-05-24 20:48:21',
                'updated_at' => '2017-05-24 20:48:21',
            ),
            328 => 
            array (
                'id' => 829,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -52,
                'created_at' => '2017-05-24 20:48:22',
                'updated_at' => '2017-05-24 20:48:22',
            ),
            329 => 
            array (
                'id' => 830,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -49,
                'created_at' => '2017-05-24 20:48:23',
                'updated_at' => '2017-05-24 20:48:23',
            ),
            330 => 
            array (
                'id' => 831,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -43,
                'created_at' => '2017-05-24 20:48:24',
                'updated_at' => '2017-05-24 20:48:24',
            ),
            331 => 
            array (
                'id' => 832,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -57,
                'created_at' => '2017-05-24 20:48:27',
                'updated_at' => '2017-05-24 20:48:27',
            ),
            332 => 
            array (
                'id' => 833,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -43,
                'created_at' => '2017-05-24 20:48:28',
                'updated_at' => '2017-05-24 20:48:28',
            ),
            333 => 
            array (
                'id' => 834,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -44,
                'created_at' => '2017-05-24 20:48:30',
                'updated_at' => '2017-05-24 20:48:30',
            ),
            334 => 
            array (
                'id' => 835,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -44,
                'created_at' => '2017-05-24 20:48:31',
                'updated_at' => '2017-05-24 20:48:31',
            ),
            335 => 
            array (
                'id' => 836,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -42,
                'created_at' => '2017-05-24 20:48:33',
                'updated_at' => '2017-05-24 20:48:33',
            ),
            336 => 
            array (
                'id' => 837,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -41,
                'created_at' => '2017-05-24 20:48:35',
                'updated_at' => '2017-05-24 20:48:35',
            ),
            337 => 
            array (
                'id' => 838,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -43,
                'created_at' => '2017-05-24 20:48:35',
                'updated_at' => '2017-05-24 20:48:35',
            ),
            338 => 
            array (
                'id' => 839,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -43,
                'created_at' => '2017-05-24 20:48:36',
                'updated_at' => '2017-05-24 20:48:36',
            ),
            339 => 
            array (
                'id' => 840,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -59,
                'created_at' => '2017-05-24 20:48:37',
                'updated_at' => '2017-05-24 20:48:37',
            ),
            340 => 
            array (
                'id' => 841,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -59,
                'created_at' => '2017-05-24 20:48:39',
                'updated_at' => '2017-05-24 20:48:39',
            ),
            341 => 
            array (
                'id' => 842,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -61,
                'created_at' => '2017-05-24 20:48:40',
                'updated_at' => '2017-05-24 20:48:40',
            ),
            342 => 
            array (
                'id' => 843,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -45,
                'created_at' => '2017-05-24 20:48:41',
                'updated_at' => '2017-05-24 20:48:41',
            ),
            343 => 
            array (
                'id' => 844,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -45,
                'created_at' => '2017-05-24 20:48:43',
                'updated_at' => '2017-05-24 20:48:43',
            ),
            344 => 
            array (
                'id' => 845,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -43,
                'created_at' => '2017-05-24 20:48:44',
                'updated_at' => '2017-05-24 20:48:44',
            ),
            345 => 
            array (
                'id' => 846,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -76,
                'created_at' => '2017-05-24 20:48:45',
                'updated_at' => '2017-05-24 20:48:45',
            ),
            346 => 
            array (
                'id' => 847,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -81,
                'created_at' => '2017-05-24 20:48:45',
                'updated_at' => '2017-05-24 20:48:45',
            ),
            347 => 
            array (
                'id' => 848,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -67,
                'created_at' => '2017-05-24 20:48:46',
                'updated_at' => '2017-05-24 20:48:46',
            ),
            348 => 
            array (
                'id' => 849,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -71,
                'created_at' => '2017-05-24 20:48:47',
                'updated_at' => '2017-05-24 20:48:47',
            ),
            349 => 
            array (
                'id' => 850,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -78,
                'created_at' => '2017-05-24 20:48:48',
                'updated_at' => '2017-05-24 20:48:48',
            ),
            350 => 
            array (
                'id' => 851,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -78,
                'created_at' => '2017-05-24 20:48:49',
                'updated_at' => '2017-05-24 20:48:49',
            ),
            351 => 
            array (
                'id' => 852,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -81,
                'created_at' => '2017-05-24 20:48:50',
                'updated_at' => '2017-05-24 20:48:50',
            ),
            352 => 
            array (
                'id' => 853,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -70,
                'created_at' => '2017-05-24 20:48:51',
                'updated_at' => '2017-05-24 20:48:51',
            ),
            353 => 
            array (
                'id' => 854,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -85,
                'created_at' => '2017-05-24 20:48:53',
                'updated_at' => '2017-05-24 20:48:53',
            ),
            354 => 
            array (
                'id' => 855,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -47,
                'created_at' => '2017-05-24 20:48:54',
                'updated_at' => '2017-05-24 20:48:54',
            ),
            355 => 
            array (
                'id' => 856,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -58,
                'created_at' => '2017-05-24 20:48:55',
                'updated_at' => '2017-05-24 20:48:55',
            ),
            356 => 
            array (
                'id' => 857,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -67,
                'created_at' => '2017-05-24 20:48:57',
                'updated_at' => '2017-05-24 20:48:57',
            ),
            357 => 
            array (
                'id' => 858,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -49,
                'created_at' => '2017-05-24 20:48:58',
                'updated_at' => '2017-05-24 20:48:58',
            ),
            358 => 
            array (
                'id' => 859,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -67,
                'created_at' => '2017-05-24 20:48:59',
                'updated_at' => '2017-05-24 20:48:59',
            ),
            359 => 
            array (
                'id' => 860,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -61,
                'created_at' => '2017-05-24 20:49:01',
                'updated_at' => '2017-05-24 20:49:01',
            ),
            360 => 
            array (
                'id' => 861,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -76,
                'created_at' => '2017-05-24 20:49:02',
                'updated_at' => '2017-05-24 20:49:02',
            ),
            361 => 
            array (
                'id' => 862,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -80,
                'created_at' => '2017-05-24 20:49:03',
                'updated_at' => '2017-05-24 20:49:03',
            ),
            362 => 
            array (
                'id' => 863,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -68,
                'created_at' => '2017-05-24 20:49:04',
                'updated_at' => '2017-05-24 20:49:04',
            ),
            363 => 
            array (
                'id' => 864,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -78,
                'created_at' => '2017-05-24 20:49:06',
                'updated_at' => '2017-05-24 20:49:06',
            ),
            364 => 
            array (
                'id' => 865,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -69,
                'created_at' => '2017-05-24 20:49:07',
                'updated_at' => '2017-05-24 20:49:07',
            ),
            365 => 
            array (
                'id' => 866,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -67,
                'created_at' => '2017-05-24 20:49:08',
                'updated_at' => '2017-05-24 20:49:08',
            ),
            366 => 
            array (
                'id' => 867,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -67,
                'created_at' => '2017-05-24 20:49:10',
                'updated_at' => '2017-05-24 20:49:10',
            ),
            367 => 
            array (
                'id' => 868,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -82,
                'created_at' => '2017-05-24 20:49:11',
                'updated_at' => '2017-05-24 20:49:11',
            ),
            368 => 
            array (
                'id' => 869,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -62,
                'created_at' => '2017-05-24 20:49:12',
                'updated_at' => '2017-05-24 20:49:12',
            ),
            369 => 
            array (
                'id' => 870,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -67,
                'created_at' => '2017-05-24 20:49:13',
                'updated_at' => '2017-05-24 20:49:13',
            ),
            370 => 
            array (
                'id' => 871,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -55,
                'created_at' => '2017-05-24 20:49:15',
                'updated_at' => '2017-05-24 20:49:15',
            ),
            371 => 
            array (
                'id' => 872,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -52,
                'created_at' => '2017-05-24 20:49:16',
                'updated_at' => '2017-05-24 20:49:16',
            ),
            372 => 
            array (
                'id' => 873,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -79,
                'created_at' => '2017-05-24 20:49:17',
                'updated_at' => '2017-05-24 20:49:17',
            ),
            373 => 
            array (
                'id' => 874,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -55,
                'created_at' => '2017-05-24 20:49:19',
                'updated_at' => '2017-05-24 20:49:19',
            ),
            374 => 
            array (
                'id' => 875,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -49,
                'created_at' => '2017-05-24 20:49:20',
                'updated_at' => '2017-05-24 20:49:20',
            ),
            375 => 
            array (
                'id' => 876,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -57,
                'created_at' => '2017-05-24 20:49:21',
                'updated_at' => '2017-05-24 20:49:21',
            ),
            376 => 
            array (
                'id' => 877,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -54,
                'created_at' => '2017-05-24 20:49:22',
                'updated_at' => '2017-05-24 20:49:22',
            ),
            377 => 
            array (
                'id' => 878,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -61,
                'created_at' => '2017-05-24 20:49:24',
                'updated_at' => '2017-05-24 20:49:24',
            ),
            378 => 
            array (
                'id' => 879,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -53,
                'created_at' => '2017-05-24 20:49:25',
                'updated_at' => '2017-05-24 20:49:25',
            ),
            379 => 
            array (
                'id' => 880,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -57,
                'created_at' => '2017-05-24 20:49:26',
                'updated_at' => '2017-05-24 20:49:26',
            ),
            380 => 
            array (
                'id' => 881,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -57,
                'created_at' => '2017-05-24 20:49:28',
                'updated_at' => '2017-05-24 20:49:28',
            ),
            381 => 
            array (
                'id' => 882,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -78,
                'created_at' => '2017-05-24 20:49:30',
                'updated_at' => '2017-05-24 20:49:30',
            ),
            382 => 
            array (
                'id' => 883,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -83,
                'created_at' => '2017-05-24 20:49:32',
                'updated_at' => '2017-05-24 20:49:32',
            ),
            383 => 
            array (
                'id' => 884,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -81,
                'created_at' => '2017-05-24 20:49:33',
                'updated_at' => '2017-05-24 20:49:33',
            ),
            384 => 
            array (
                'id' => 885,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -71,
                'created_at' => '2017-05-24 20:49:33',
                'updated_at' => '2017-05-24 20:49:33',
            ),
            385 => 
            array (
                'id' => 886,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -73,
                'created_at' => '2017-05-24 20:49:34',
                'updated_at' => '2017-05-24 20:49:34',
            ),
            386 => 
            array (
                'id' => 887,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -76,
                'created_at' => '2017-05-24 20:49:35',
                'updated_at' => '2017-05-24 20:49:35',
            ),
            387 => 
            array (
                'id' => 888,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -58,
                'created_at' => '2017-05-24 20:49:37',
                'updated_at' => '2017-05-24 20:49:37',
            ),
            388 => 
            array (
                'id' => 889,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -69,
                'created_at' => '2017-05-24 20:49:38',
                'updated_at' => '2017-05-24 20:49:38',
            ),
            389 => 
            array (
                'id' => 890,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -61,
                'created_at' => '2017-05-24 20:49:39',
                'updated_at' => '2017-05-24 20:49:39',
            ),
            390 => 
            array (
                'id' => 891,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -57,
                'created_at' => '2017-05-24 20:49:41',
                'updated_at' => '2017-05-24 20:49:41',
            ),
            391 => 
            array (
                'id' => 892,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -61,
                'created_at' => '2017-05-24 20:49:42',
                'updated_at' => '2017-05-24 20:49:42',
            ),
            392 => 
            array (
                'id' => 893,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -67,
                'created_at' => '2017-05-24 20:49:45',
                'updated_at' => '2017-05-24 20:49:45',
            ),
            393 => 
            array (
                'id' => 894,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -56,
                'created_at' => '2017-05-24 20:49:45',
                'updated_at' => '2017-05-24 20:49:45',
            ),
            394 => 
            array (
                'id' => 895,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -58,
                'created_at' => '2017-05-24 20:49:46',
                'updated_at' => '2017-05-24 20:49:46',
            ),
            395 => 
            array (
                'id' => 896,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -69,
                'created_at' => '2017-05-24 20:49:47',
                'updated_at' => '2017-05-24 20:49:47',
            ),
            396 => 
            array (
                'id' => 897,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -62,
                'created_at' => '2017-05-24 20:49:48',
                'updated_at' => '2017-05-24 20:49:48',
            ),
            397 => 
            array (
                'id' => 898,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -74,
                'created_at' => '2017-05-24 20:49:50',
                'updated_at' => '2017-05-24 20:49:50',
            ),
            398 => 
            array (
                'id' => 899,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -66,
                'created_at' => '2017-05-24 20:49:51',
                'updated_at' => '2017-05-24 20:49:51',
            ),
            399 => 
            array (
                'id' => 900,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -73,
                'created_at' => '2017-05-24 20:49:54',
                'updated_at' => '2017-05-24 20:49:54',
            ),
            400 => 
            array (
                'id' => 901,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -59,
                'created_at' => '2017-05-24 20:49:55',
                'updated_at' => '2017-05-24 20:49:55',
            ),
            401 => 
            array (
                'id' => 902,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -69,
                'created_at' => '2017-05-24 20:49:56',
                'updated_at' => '2017-05-24 20:49:56',
            ),
            402 => 
            array (
                'id' => 903,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -77,
                'created_at' => '2017-05-24 20:49:57',
                'updated_at' => '2017-05-24 20:49:57',
            ),
            403 => 
            array (
                'id' => 904,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -60,
                'created_at' => '2017-05-24 20:49:59',
                'updated_at' => '2017-05-24 20:49:59',
            ),
            404 => 
            array (
                'id' => 905,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -59,
                'created_at' => '2017-05-24 20:50:00',
                'updated_at' => '2017-05-24 20:50:00',
            ),
            405 => 
            array (
                'id' => 906,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -70,
                'created_at' => '2017-05-24 20:50:01',
                'updated_at' => '2017-05-24 20:50:01',
            ),
            406 => 
            array (
                'id' => 907,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -68,
                'created_at' => '2017-05-24 20:50:02',
                'updated_at' => '2017-05-24 20:50:02',
            ),
            407 => 
            array (
                'id' => 908,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -61,
                'created_at' => '2017-05-24 20:50:04',
                'updated_at' => '2017-05-24 20:50:04',
            ),
            408 => 
            array (
                'id' => 909,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -56,
                'created_at' => '2017-05-24 20:50:05',
                'updated_at' => '2017-05-24 20:50:05',
            ),
            409 => 
            array (
                'id' => 910,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -61,
                'created_at' => '2017-05-24 20:50:06',
                'updated_at' => '2017-05-24 20:50:06',
            ),
            410 => 
            array (
                'id' => 911,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -62,
                'created_at' => '2017-05-24 20:50:08',
                'updated_at' => '2017-05-24 20:50:08',
            ),
            411 => 
            array (
                'id' => 912,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -62,
                'created_at' => '2017-05-24 20:50:09',
                'updated_at' => '2017-05-24 20:50:09',
            ),
            412 => 
            array (
                'id' => 913,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -81,
                'created_at' => '2017-05-24 20:50:10',
                'updated_at' => '2017-05-24 20:50:10',
            ),
            413 => 
            array (
                'id' => 914,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -84,
                'created_at' => '2017-05-24 20:50:11',
                'updated_at' => '2017-05-24 20:50:11',
            ),
            414 => 
            array (
                'id' => 915,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -73,
                'created_at' => '2017-05-24 20:50:13',
                'updated_at' => '2017-05-24 20:50:13',
            ),
            415 => 
            array (
                'id' => 916,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -58,
                'created_at' => '2017-05-24 20:50:14',
                'updated_at' => '2017-05-24 20:50:14',
            ),
            416 => 
            array (
                'id' => 917,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -68,
                'created_at' => '2017-05-24 20:50:15',
                'updated_at' => '2017-05-24 20:50:15',
            ),
            417 => 
            array (
                'id' => 918,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -75,
                'created_at' => '2017-05-24 20:50:17',
                'updated_at' => '2017-05-24 20:50:17',
            ),
            418 => 
            array (
                'id' => 919,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -72,
                'created_at' => '2017-05-24 20:50:19',
                'updated_at' => '2017-05-24 20:50:19',
            ),
            419 => 
            array (
                'id' => 920,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -80,
                'created_at' => '2017-05-24 20:50:20',
                'updated_at' => '2017-05-24 20:50:20',
            ),
            420 => 
            array (
                'id' => 921,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -61,
                'created_at' => '2017-05-24 20:50:22',
                'updated_at' => '2017-05-24 20:50:22',
            ),
            421 => 
            array (
                'id' => 922,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -63,
                'created_at' => '2017-05-24 20:50:23',
                'updated_at' => '2017-05-24 20:50:23',
            ),
            422 => 
            array (
                'id' => 923,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -66,
                'created_at' => '2017-05-24 20:50:26',
                'updated_at' => '2017-05-24 20:50:26',
            ),
            423 => 
            array (
                'id' => 924,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -57,
                'created_at' => '2017-05-24 20:50:27',
                'updated_at' => '2017-05-24 20:50:27',
            ),
            424 => 
            array (
                'id' => 925,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -69,
                'created_at' => '2017-05-24 20:50:27',
                'updated_at' => '2017-05-24 20:50:27',
            ),
            425 => 
            array (
                'id' => 926,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -80,
                'created_at' => '2017-05-24 20:50:28',
                'updated_at' => '2017-05-24 20:50:28',
            ),
            426 => 
            array (
                'id' => 927,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -73,
                'created_at' => '2017-05-24 20:50:31',
                'updated_at' => '2017-05-24 20:50:31',
            ),
            427 => 
            array (
                'id' => 928,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -74,
                'created_at' => '2017-05-24 20:50:32',
                'updated_at' => '2017-05-24 20:50:32',
            ),
            428 => 
            array (
                'id' => 929,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -54,
                'created_at' => '2017-05-24 20:50:33',
                'updated_at' => '2017-05-24 20:50:33',
            ),
            429 => 
            array (
                'id' => 930,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -58,
                'created_at' => '2017-05-24 20:50:35',
                'updated_at' => '2017-05-24 20:50:35',
            ),
            430 => 
            array (
                'id' => 931,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -56,
                'created_at' => '2017-05-24 20:50:36',
                'updated_at' => '2017-05-24 20:50:36',
            ),
            431 => 
            array (
                'id' => 932,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -56,
                'created_at' => '2017-05-24 20:50:37',
                'updated_at' => '2017-05-24 20:50:37',
            ),
            432 => 
            array (
                'id' => 933,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -48,
                'created_at' => '2017-05-24 20:50:39',
                'updated_at' => '2017-05-24 20:50:39',
            ),
            433 => 
            array (
                'id' => 934,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -63,
                'created_at' => '2017-05-24 20:50:40',
                'updated_at' => '2017-05-24 20:50:40',
            ),
            434 => 
            array (
                'id' => 935,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -69,
                'created_at' => '2017-05-24 20:50:40',
                'updated_at' => '2017-05-24 20:50:40',
            ),
            435 => 
            array (
                'id' => 936,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -57,
                'created_at' => '2017-05-24 20:50:41',
                'updated_at' => '2017-05-24 20:50:41',
            ),
            436 => 
            array (
                'id' => 937,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -59,
                'created_at' => '2017-05-24 20:50:41',
                'updated_at' => '2017-05-24 20:50:41',
            ),
            437 => 
            array (
                'id' => 938,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -75,
                'created_at' => '2017-05-24 20:50:42',
                'updated_at' => '2017-05-24 20:50:42',
            ),
            438 => 
            array (
                'id' => 939,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -64,
                'created_at' => '2017-05-24 20:50:44',
                'updated_at' => '2017-05-24 20:50:44',
            ),
            439 => 
            array (
                'id' => 940,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -54,
                'created_at' => '2017-05-24 20:50:45',
                'updated_at' => '2017-05-24 20:50:45',
            ),
            440 => 
            array (
                'id' => 941,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -76,
                'created_at' => '2017-05-24 20:50:46',
                'updated_at' => '2017-05-24 20:50:46',
            ),
            441 => 
            array (
                'id' => 942,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -72,
                'created_at' => '2017-05-24 20:50:48',
                'updated_at' => '2017-05-24 20:50:48',
            ),
            442 => 
            array (
                'id' => 943,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -73,
                'created_at' => '2017-05-24 20:50:49',
                'updated_at' => '2017-05-24 20:50:49',
            ),
            443 => 
            array (
                'id' => 944,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -73,
                'created_at' => '2017-05-24 20:50:50',
                'updated_at' => '2017-05-24 20:50:50',
            ),
            444 => 
            array (
                'id' => 945,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -59,
                'created_at' => '2017-05-24 20:50:51',
                'updated_at' => '2017-05-24 20:50:51',
            ),
            445 => 
            array (
                'id' => 946,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -59,
                'created_at' => '2017-05-24 20:50:53',
                'updated_at' => '2017-05-24 20:50:53',
            ),
            446 => 
            array (
                'id' => 947,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -73,
                'created_at' => '2017-05-24 20:50:54',
                'updated_at' => '2017-05-24 20:50:54',
            ),
            447 => 
            array (
                'id' => 948,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -57,
                'created_at' => '2017-05-24 20:50:55',
                'updated_at' => '2017-05-24 20:50:55',
            ),
            448 => 
            array (
                'id' => 949,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -59,
                'created_at' => '2017-05-24 20:50:57',
                'updated_at' => '2017-05-24 20:50:57',
            ),
            449 => 
            array (
                'id' => 950,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -67,
                'created_at' => '2017-05-24 20:50:58',
                'updated_at' => '2017-05-24 20:50:58',
            ),
            450 => 
            array (
                'id' => 951,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -74,
                'created_at' => '2017-05-24 20:50:59',
                'updated_at' => '2017-05-24 20:50:59',
            ),
            451 => 
            array (
                'id' => 952,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -59,
                'created_at' => '2017-05-24 20:51:00',
                'updated_at' => '2017-05-24 20:51:00',
            ),
            452 => 
            array (
                'id' => 953,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -60,
                'created_at' => '2017-05-24 20:51:02',
                'updated_at' => '2017-05-24 20:51:02',
            ),
            453 => 
            array (
                'id' => 954,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -56,
                'created_at' => '2017-05-24 20:51:03',
                'updated_at' => '2017-05-24 20:51:03',
            ),
            454 => 
            array (
                'id' => 955,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -55,
                'created_at' => '2017-05-24 20:51:04',
                'updated_at' => '2017-05-24 20:51:04',
            ),
            455 => 
            array (
                'id' => 956,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -53,
                'created_at' => '2017-05-24 20:51:06',
                'updated_at' => '2017-05-24 20:51:06',
            ),
            456 => 
            array (
                'id' => 957,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -48,
                'created_at' => '2017-05-24 20:51:07',
                'updated_at' => '2017-05-24 20:51:07',
            ),
            457 => 
            array (
                'id' => 958,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -57,
                'created_at' => '2017-05-24 20:51:08',
                'updated_at' => '2017-05-24 20:51:08',
            ),
            458 => 
            array (
                'id' => 959,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -69,
                'created_at' => '2017-05-24 20:51:10',
                'updated_at' => '2017-05-24 20:51:10',
            ),
            459 => 
            array (
                'id' => 960,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -67,
                'created_at' => '2017-05-24 20:51:12',
                'updated_at' => '2017-05-24 20:51:12',
            ),
            460 => 
            array (
                'id' => 961,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -70,
                'created_at' => '2017-05-24 20:51:13',
                'updated_at' => '2017-05-24 20:51:13',
            ),
            461 => 
            array (
                'id' => 962,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -58,
                'created_at' => '2017-05-24 20:51:15',
                'updated_at' => '2017-05-24 20:51:15',
            ),
            462 => 
            array (
                'id' => 963,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -71,
                'created_at' => '2017-05-24 20:51:16',
                'updated_at' => '2017-05-24 20:51:16',
            ),
            463 => 
            array (
                'id' => 964,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -67,
                'created_at' => '2017-05-24 20:51:17',
                'updated_at' => '2017-05-24 20:51:17',
            ),
            464 => 
            array (
                'id' => 965,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -57,
                'created_at' => '2017-05-24 20:51:18',
                'updated_at' => '2017-05-24 20:51:18',
            ),
            465 => 
            array (
                'id' => 966,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -45,
                'created_at' => '2017-05-24 20:51:20',
                'updated_at' => '2017-05-24 20:51:20',
            ),
            466 => 
            array (
                'id' => 967,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -52,
                'created_at' => '2017-05-24 20:51:21',
                'updated_at' => '2017-05-24 20:51:21',
            ),
            467 => 
            array (
                'id' => 968,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -47,
                'created_at' => '2017-05-24 20:51:22',
                'updated_at' => '2017-05-24 20:51:22',
            ),
            468 => 
            array (
                'id' => 969,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -43,
                'created_at' => '2017-05-24 20:51:24',
                'updated_at' => '2017-05-24 20:51:24',
            ),
            469 => 
            array (
                'id' => 970,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -64,
                'created_at' => '2017-05-24 20:51:25',
                'updated_at' => '2017-05-24 20:51:25',
            ),
            470 => 
            array (
                'id' => 971,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -69,
                'created_at' => '2017-05-24 20:51:26',
                'updated_at' => '2017-05-24 20:51:26',
            ),
            471 => 
            array (
                'id' => 972,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -67,
                'created_at' => '2017-05-24 20:51:26',
                'updated_at' => '2017-05-24 20:51:26',
            ),
            472 => 
            array (
                'id' => 973,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -77,
                'created_at' => '2017-05-24 20:51:28',
                'updated_at' => '2017-05-24 20:51:28',
            ),
            473 => 
            array (
                'id' => 974,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -55,
                'created_at' => '2017-05-24 20:51:29',
                'updated_at' => '2017-05-24 20:51:29',
            ),
            474 => 
            array (
                'id' => 975,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -57,
                'created_at' => '2017-05-24 20:51:30',
                'updated_at' => '2017-05-24 20:51:30',
            ),
            475 => 
            array (
                'id' => 976,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -64,
                'created_at' => '2017-05-24 20:51:32',
                'updated_at' => '2017-05-24 20:51:32',
            ),
            476 => 
            array (
                'id' => 977,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -50,
                'created_at' => '2017-05-24 20:51:33',
                'updated_at' => '2017-05-24 20:51:33',
            ),
            477 => 
            array (
                'id' => 978,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -68,
                'created_at' => '2017-05-24 20:51:35',
                'updated_at' => '2017-05-24 20:51:35',
            ),
            478 => 
            array (
                'id' => 979,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -65,
                'created_at' => '2017-05-24 20:51:37',
                'updated_at' => '2017-05-24 20:51:37',
            ),
            479 => 
            array (
                'id' => 980,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -63,
                'created_at' => '2017-05-24 20:51:38',
                'updated_at' => '2017-05-24 20:51:38',
            ),
            480 => 
            array (
                'id' => 981,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -62,
                'created_at' => '2017-05-24 20:51:39',
                'updated_at' => '2017-05-24 20:51:39',
            ),
            481 => 
            array (
                'id' => 982,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -71,
                'created_at' => '2017-05-24 20:51:40',
                'updated_at' => '2017-05-24 20:51:40',
            ),
            482 => 
            array (
                'id' => 983,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -62,
                'created_at' => '2017-05-24 20:51:42',
                'updated_at' => '2017-05-24 20:51:42',
            ),
            483 => 
            array (
                'id' => 984,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -69,
                'created_at' => '2017-05-24 20:51:43',
                'updated_at' => '2017-05-24 20:51:43',
            ),
            484 => 
            array (
                'id' => 985,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -48,
                'created_at' => '2017-05-24 20:51:44',
                'updated_at' => '2017-05-24 20:51:44',
            ),
            485 => 
            array (
                'id' => 986,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -62,
                'created_at' => '2017-05-24 20:51:46',
                'updated_at' => '2017-05-24 20:51:46',
            ),
            486 => 
            array (
                'id' => 987,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -60,
                'created_at' => '2017-05-24 20:51:47',
                'updated_at' => '2017-05-24 20:51:47',
            ),
            487 => 
            array (
                'id' => 988,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -72,
                'created_at' => '2017-05-24 20:51:48',
                'updated_at' => '2017-05-24 20:51:48',
            ),
            488 => 
            array (
                'id' => 989,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -59,
                'created_at' => '2017-05-24 20:51:49',
                'updated_at' => '2017-05-24 20:51:49',
            ),
            489 => 
            array (
                'id' => 990,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -73,
                'created_at' => '2017-05-24 20:51:51',
                'updated_at' => '2017-05-24 20:51:51',
            ),
            490 => 
            array (
                'id' => 991,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -61,
                'created_at' => '2017-05-24 20:51:53',
                'updated_at' => '2017-05-24 20:51:53',
            ),
            491 => 
            array (
                'id' => 992,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -60,
                'created_at' => '2017-05-24 20:51:55',
                'updated_at' => '2017-05-24 20:51:55',
            ),
            492 => 
            array (
                'id' => 993,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -71,
                'created_at' => '2017-05-24 20:51:57',
                'updated_at' => '2017-05-24 20:51:57',
            ),
            493 => 
            array (
                'id' => 994,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -74,
                'created_at' => '2017-05-24 20:51:58',
                'updated_at' => '2017-05-24 20:51:58',
            ),
            494 => 
            array (
                'id' => 995,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -78,
                'created_at' => '2017-05-24 20:52:00',
                'updated_at' => '2017-05-24 20:52:00',
            ),
            495 => 
            array (
                'id' => 996,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -59,
                'created_at' => '2017-05-24 20:52:01',
                'updated_at' => '2017-05-24 20:52:01',
            ),
            496 => 
            array (
                'id' => 997,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -57,
                'created_at' => '2017-05-24 20:52:02',
                'updated_at' => '2017-05-24 20:52:02',
            ),
            497 => 
            array (
                'id' => 998,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -67,
                'created_at' => '2017-05-24 20:52:04',
                'updated_at' => '2017-05-24 20:52:04',
            ),
            498 => 
            array (
                'id' => 999,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -60,
                'created_at' => '2017-05-24 20:52:05',
                'updated_at' => '2017-05-24 20:52:05',
            ),
            499 => 
            array (
                'id' => 1000,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -74,
                'created_at' => '2017-05-24 20:52:06',
                'updated_at' => '2017-05-24 20:52:06',
            ),
        ));
        \DB::table('beacon_data')->insert(array (
            0 => 
            array (
                'id' => 1001,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -79,
                'created_at' => '2017-05-24 20:52:08',
                'updated_at' => '2017-05-24 20:52:08',
            ),
            1 => 
            array (
                'id' => 1002,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -87,
                'created_at' => '2017-05-24 20:52:09',
                'updated_at' => '2017-05-24 20:52:09',
            ),
            2 => 
            array (
                'id' => 1003,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -58,
                'created_at' => '2017-05-24 20:52:10',
                'updated_at' => '2017-05-24 20:52:10',
            ),
            3 => 
            array (
                'id' => 1004,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -56,
                'created_at' => '2017-05-24 20:52:11',
                'updated_at' => '2017-05-24 20:52:11',
            ),
            4 => 
            array (
                'id' => 1005,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -57,
                'created_at' => '2017-05-24 20:52:13',
                'updated_at' => '2017-05-24 20:52:13',
            ),
            5 => 
            array (
                'id' => 1006,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -52,
                'created_at' => '2017-05-24 20:52:14',
                'updated_at' => '2017-05-24 20:52:14',
            ),
            6 => 
            array (
                'id' => 1007,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -59,
                'created_at' => '2017-05-24 20:52:15',
                'updated_at' => '2017-05-24 20:52:15',
            ),
            7 => 
            array (
                'id' => 1008,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -71,
                'created_at' => '2017-05-24 20:52:17',
                'updated_at' => '2017-05-24 20:52:17',
            ),
            8 => 
            array (
                'id' => 1009,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -55,
                'created_at' => '2017-05-24 20:52:18',
                'updated_at' => '2017-05-24 20:52:18',
            ),
            9 => 
            array (
                'id' => 1010,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -55,
                'created_at' => '2017-05-24 20:52:19',
                'updated_at' => '2017-05-24 20:52:19',
            ),
            10 => 
            array (
                'id' => 1011,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -55,
                'created_at' => '2017-05-24 20:52:21',
                'updated_at' => '2017-05-24 20:52:21',
            ),
            11 => 
            array (
                'id' => 1012,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -56,
                'created_at' => '2017-05-24 20:52:22',
                'updated_at' => '2017-05-24 20:52:22',
            ),
            12 => 
            array (
                'id' => 1013,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -56,
                'created_at' => '2017-05-24 20:52:23',
                'updated_at' => '2017-05-24 20:52:23',
            ),
            13 => 
            array (
                'id' => 1014,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -77,
                'created_at' => '2017-05-24 20:52:26',
                'updated_at' => '2017-05-24 20:52:26',
            ),
            14 => 
            array (
                'id' => 1015,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -74,
                'created_at' => '2017-05-24 20:52:28',
                'updated_at' => '2017-05-24 20:52:28',
            ),
            15 => 
            array (
                'id' => 1016,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -85,
                'created_at' => '2017-05-24 20:52:29',
                'updated_at' => '2017-05-24 20:52:29',
            ),
            16 => 
            array (
                'id' => 1017,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -70,
                'created_at' => '2017-05-24 20:52:31',
                'updated_at' => '2017-05-24 20:52:31',
            ),
            17 => 
            array (
                'id' => 1018,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -56,
                'created_at' => '2017-05-24 20:52:32',
                'updated_at' => '2017-05-24 20:52:32',
            ),
            18 => 
            array (
                'id' => 1019,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -72,
                'created_at' => '2017-05-24 20:52:36',
                'updated_at' => '2017-05-24 20:52:36',
            ),
            19 => 
            array (
                'id' => 1020,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -78,
                'created_at' => '2017-05-24 20:52:37',
                'updated_at' => '2017-05-24 20:52:37',
            ),
            20 => 
            array (
                'id' => 1021,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -76,
                'created_at' => '2017-05-24 20:52:39',
                'updated_at' => '2017-05-24 20:52:39',
            ),
            21 => 
            array (
                'id' => 1022,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -58,
                'created_at' => '2017-05-24 20:52:40',
                'updated_at' => '2017-05-24 20:52:40',
            ),
            22 => 
            array (
                'id' => 1023,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -58,
                'created_at' => '2017-05-24 20:52:41',
                'updated_at' => '2017-05-24 20:52:41',
            ),
            23 => 
            array (
                'id' => 1024,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -62,
                'created_at' => '2017-05-24 20:52:42',
                'updated_at' => '2017-05-24 20:52:42',
            ),
            24 => 
            array (
                'id' => 1025,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -62,
                'created_at' => '2017-05-24 20:52:44',
                'updated_at' => '2017-05-24 20:52:44',
            ),
            25 => 
            array (
                'id' => 1026,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -60,
                'created_at' => '2017-05-24 20:52:45',
                'updated_at' => '2017-05-24 20:52:45',
            ),
            26 => 
            array (
                'id' => 1027,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -77,
                'created_at' => '2017-05-24 20:52:46',
                'updated_at' => '2017-05-24 20:52:46',
            ),
            27 => 
            array (
                'id' => 1028,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -80,
                'created_at' => '2017-05-24 20:52:48',
                'updated_at' => '2017-05-24 20:52:48',
            ),
            28 => 
            array (
                'id' => 1029,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -74,
                'created_at' => '2017-05-24 20:52:49',
                'updated_at' => '2017-05-24 20:52:49',
            ),
            29 => 
            array (
                'id' => 1030,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -60,
                'created_at' => '2017-05-24 20:52:50',
                'updated_at' => '2017-05-24 20:52:50',
            ),
            30 => 
            array (
                'id' => 1031,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -60,
                'created_at' => '2017-05-24 20:52:51',
                'updated_at' => '2017-05-24 20:52:51',
            ),
            31 => 
            array (
                'id' => 1032,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -61,
                'created_at' => '2017-05-24 20:52:53',
                'updated_at' => '2017-05-24 20:52:53',
            ),
            32 => 
            array (
                'id' => 1033,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -62,
                'created_at' => '2017-05-24 20:52:54',
                'updated_at' => '2017-05-24 20:52:54',
            ),
            33 => 
            array (
                'id' => 1034,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -66,
                'created_at' => '2017-05-24 20:52:55',
                'updated_at' => '2017-05-24 20:52:55',
            ),
            34 => 
            array (
                'id' => 1035,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -86,
                'created_at' => '2017-05-24 20:52:57',
                'updated_at' => '2017-05-24 20:52:57',
            ),
            35 => 
            array (
                'id' => 1036,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -63,
                'created_at' => '2017-05-24 20:52:58',
                'updated_at' => '2017-05-24 20:52:58',
            ),
            36 => 
            array (
                'id' => 1037,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -67,
                'created_at' => '2017-05-24 20:52:59',
                'updated_at' => '2017-05-24 20:52:59',
            ),
            37 => 
            array (
                'id' => 1038,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -62,
                'created_at' => '2017-05-24 20:53:03',
                'updated_at' => '2017-05-24 20:53:03',
            ),
            38 => 
            array (
                'id' => 1039,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -61,
                'created_at' => '2017-05-24 20:53:04',
                'updated_at' => '2017-05-24 20:53:04',
            ),
            39 => 
            array (
                'id' => 1040,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -76,
                'created_at' => '2017-05-24 20:53:04',
                'updated_at' => '2017-05-24 20:53:04',
            ),
            40 => 
            array (
                'id' => 1041,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -57,
                'created_at' => '2017-05-24 20:53:04',
                'updated_at' => '2017-05-24 20:53:04',
            ),
            41 => 
            array (
                'id' => 1042,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -62,
                'created_at' => '2017-05-24 20:53:05',
                'updated_at' => '2017-05-24 20:53:05',
            ),
            42 => 
            array (
                'id' => 1043,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -61,
                'created_at' => '2017-05-24 20:53:06',
                'updated_at' => '2017-05-24 20:53:06',
            ),
            43 => 
            array (
                'id' => 1044,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -58,
                'created_at' => '2017-05-24 20:53:07',
                'updated_at' => '2017-05-24 20:53:07',
            ),
            44 => 
            array (
                'id' => 1045,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -60,
                'created_at' => '2017-05-24 20:53:09',
                'updated_at' => '2017-05-24 20:53:09',
            ),
            45 => 
            array (
                'id' => 1046,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -73,
                'created_at' => '2017-05-24 20:53:11',
                'updated_at' => '2017-05-24 20:53:11',
            ),
            46 => 
            array (
                'id' => 1047,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -81,
                'created_at' => '2017-05-24 20:53:12',
                'updated_at' => '2017-05-24 20:53:12',
            ),
            47 => 
            array (
                'id' => 1048,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -78,
                'created_at' => '2017-05-24 20:53:13',
                'updated_at' => '2017-05-24 20:53:13',
            ),
            48 => 
            array (
                'id' => 1049,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -81,
                'created_at' => '2017-05-24 20:53:17',
                'updated_at' => '2017-05-24 20:53:17',
            ),
            49 => 
            array (
                'id' => 1050,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -61,
                'created_at' => '2017-05-24 20:53:19',
                'updated_at' => '2017-05-24 20:53:19',
            ),
            50 => 
            array (
                'id' => 1051,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -57,
                'created_at' => '2017-05-24 20:53:19',
                'updated_at' => '2017-05-24 20:53:19',
            ),
            51 => 
            array (
                'id' => 1052,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -71,
                'created_at' => '2017-05-24 20:53:20',
                'updated_at' => '2017-05-24 20:53:20',
            ),
            52 => 
            array (
                'id' => 1053,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -76,
                'created_at' => '2017-05-24 20:53:21',
                'updated_at' => '2017-05-24 20:53:21',
            ),
            53 => 
            array (
                'id' => 1054,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -62,
                'created_at' => '2017-05-24 20:53:21',
                'updated_at' => '2017-05-24 20:53:21',
            ),
            54 => 
            array (
                'id' => 1055,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -76,
                'created_at' => '2017-05-24 20:53:24',
                'updated_at' => '2017-05-24 20:53:24',
            ),
            55 => 
            array (
                'id' => 1056,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -76,
                'created_at' => '2017-05-24 20:53:25',
                'updated_at' => '2017-05-24 20:53:25',
            ),
            56 => 
            array (
                'id' => 1057,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -76,
                'created_at' => '2017-05-24 20:53:26',
                'updated_at' => '2017-05-24 20:53:26',
            ),
            57 => 
            array (
                'id' => 1058,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -53,
                'created_at' => '2017-05-24 20:53:28',
                'updated_at' => '2017-05-24 20:53:28',
            ),
            58 => 
            array (
                'id' => 1059,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -59,
                'created_at' => '2017-05-24 20:53:29',
                'updated_at' => '2017-05-24 20:53:29',
            ),
            59 => 
            array (
                'id' => 1060,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -52,
                'created_at' => '2017-05-24 20:53:30',
                'updated_at' => '2017-05-24 20:53:30',
            ),
            60 => 
            array (
                'id' => 1061,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -55,
                'created_at' => '2017-05-24 20:53:32',
                'updated_at' => '2017-05-24 20:53:32',
            ),
            61 => 
            array (
                'id' => 1062,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -58,
                'created_at' => '2017-05-24 20:53:33',
                'updated_at' => '2017-05-24 20:53:33',
            ),
            62 => 
            array (
                'id' => 1063,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -75,
                'created_at' => '2017-05-24 20:53:34',
                'updated_at' => '2017-05-24 20:53:34',
            ),
            63 => 
            array (
                'id' => 1064,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -74,
                'created_at' => '2017-05-24 20:53:35',
                'updated_at' => '2017-05-24 20:53:35',
            ),
            64 => 
            array (
                'id' => 1065,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -63,
                'created_at' => '2017-05-24 20:53:37',
                'updated_at' => '2017-05-24 20:53:37',
            ),
            65 => 
            array (
                'id' => 1066,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -67,
                'created_at' => '2017-05-24 20:53:38',
                'updated_at' => '2017-05-24 20:53:38',
            ),
            66 => 
            array (
                'id' => 1067,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -72,
                'created_at' => '2017-05-24 20:53:39',
                'updated_at' => '2017-05-24 20:53:39',
            ),
            67 => 
            array (
                'id' => 1068,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -67,
                'created_at' => '2017-05-24 20:53:40',
                'updated_at' => '2017-05-24 20:53:40',
            ),
            68 => 
            array (
                'id' => 1069,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -64,
                'created_at' => '2017-05-24 20:53:42',
                'updated_at' => '2017-05-24 20:53:42',
            ),
            69 => 
            array (
                'id' => 1070,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -68,
                'created_at' => '2017-05-24 20:53:43',
                'updated_at' => '2017-05-24 20:53:43',
            ),
            70 => 
            array (
                'id' => 1071,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -72,
                'created_at' => '2017-05-24 20:53:44',
                'updated_at' => '2017-05-24 20:53:44',
            ),
            71 => 
            array (
                'id' => 1072,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -60,
                'created_at' => '2017-05-24 20:53:46',
                'updated_at' => '2017-05-24 20:53:46',
            ),
            72 => 
            array (
                'id' => 1073,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -76,
                'created_at' => '2017-05-24 20:53:48',
                'updated_at' => '2017-05-24 20:53:48',
            ),
            73 => 
            array (
                'id' => 1074,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -69,
                'created_at' => '2017-05-24 20:53:52',
                'updated_at' => '2017-05-24 20:53:52',
            ),
            74 => 
            array (
                'id' => 1075,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -62,
                'created_at' => '2017-05-24 20:53:53',
                'updated_at' => '2017-05-24 20:53:53',
            ),
            75 => 
            array (
                'id' => 1076,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -59,
                'created_at' => '2017-05-24 20:53:56',
                'updated_at' => '2017-05-24 20:53:56',
            ),
            76 => 
            array (
                'id' => 1077,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -77,
                'created_at' => '2017-05-24 20:53:58',
                'updated_at' => '2017-05-24 20:53:58',
            ),
            77 => 
            array (
                'id' => 1078,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -70,
                'created_at' => '2017-05-24 20:54:01',
                'updated_at' => '2017-05-24 20:54:01',
            ),
            78 => 
            array (
                'id' => 1079,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -60,
                'created_at' => '2017-05-24 20:54:02',
                'updated_at' => '2017-05-24 20:54:02',
            ),
            79 => 
            array (
                'id' => 1080,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -71,
                'created_at' => '2017-05-24 20:54:04',
                'updated_at' => '2017-05-24 20:54:04',
            ),
            80 => 
            array (
                'id' => 1081,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -62,
                'created_at' => '2017-05-24 20:54:05',
                'updated_at' => '2017-05-24 20:54:05',
            ),
            81 => 
            array (
                'id' => 1082,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -59,
                'created_at' => '2017-05-24 20:54:06',
                'updated_at' => '2017-05-24 20:54:06',
            ),
            82 => 
            array (
                'id' => 1083,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -61,
                'created_at' => '2017-05-24 20:54:08',
                'updated_at' => '2017-05-24 20:54:08',
            ),
            83 => 
            array (
                'id' => 1084,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -61,
                'created_at' => '2017-05-24 20:54:09',
                'updated_at' => '2017-05-24 20:54:09',
            ),
            84 => 
            array (
                'id' => 1085,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -67,
                'created_at' => '2017-05-24 20:54:11',
                'updated_at' => '2017-05-24 20:54:11',
            ),
            85 => 
            array (
                'id' => 1086,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -68,
                'created_at' => '2017-05-24 20:54:13',
                'updated_at' => '2017-05-24 20:54:13',
            ),
            86 => 
            array (
                'id' => 1087,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -59,
                'created_at' => '2017-05-24 20:54:14',
                'updated_at' => '2017-05-24 20:54:14',
            ),
            87 => 
            array (
                'id' => 1088,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -63,
                'created_at' => '2017-05-24 20:54:14',
                'updated_at' => '2017-05-24 20:54:14',
            ),
            88 => 
            array (
                'id' => 1089,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -67,
                'created_at' => '2017-05-24 20:54:15',
                'updated_at' => '2017-05-24 20:54:15',
            ),
            89 => 
            array (
                'id' => 1090,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -69,
                'created_at' => '2017-05-24 20:54:17',
                'updated_at' => '2017-05-24 20:54:17',
            ),
            90 => 
            array (
                'id' => 1091,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -59,
                'created_at' => '2017-05-24 20:54:18',
                'updated_at' => '2017-05-24 20:54:18',
            ),
            91 => 
            array (
                'id' => 1092,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -60,
                'created_at' => '2017-05-24 20:54:19',
                'updated_at' => '2017-05-24 20:54:19',
            ),
            92 => 
            array (
                'id' => 1093,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -73,
                'created_at' => '2017-05-24 20:54:20',
                'updated_at' => '2017-05-24 20:54:20',
            ),
            93 => 
            array (
                'id' => 1094,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -69,
                'created_at' => '2017-05-24 20:54:22',
                'updated_at' => '2017-05-24 20:54:22',
            ),
            94 => 
            array (
                'id' => 1095,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -71,
                'created_at' => '2017-05-24 20:54:23',
                'updated_at' => '2017-05-24 20:54:23',
            ),
            95 => 
            array (
                'id' => 1096,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -69,
                'created_at' => '2017-05-24 20:54:24',
                'updated_at' => '2017-05-24 20:54:24',
            ),
            96 => 
            array (
                'id' => 1097,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -67,
                'created_at' => '2017-05-24 20:54:26',
                'updated_at' => '2017-05-24 20:54:26',
            ),
            97 => 
            array (
                'id' => 1098,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -63,
                'created_at' => '2017-05-24 20:54:27',
                'updated_at' => '2017-05-24 20:54:27',
            ),
            98 => 
            array (
                'id' => 1099,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -77,
                'created_at' => '2017-05-24 20:54:28',
                'updated_at' => '2017-05-24 20:54:28',
            ),
            99 => 
            array (
                'id' => 1100,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -80,
                'created_at' => '2017-05-24 20:54:33',
                'updated_at' => '2017-05-24 20:54:33',
            ),
            100 => 
            array (
                'id' => 1101,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -65,
                'created_at' => '2017-05-24 20:54:35',
                'updated_at' => '2017-05-24 20:54:35',
            ),
            101 => 
            array (
                'id' => 1102,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -75,
                'created_at' => '2017-05-24 20:54:37',
                'updated_at' => '2017-05-24 20:54:37',
            ),
            102 => 
            array (
                'id' => 1103,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -61,
                'created_at' => '2017-05-24 20:54:40',
                'updated_at' => '2017-05-24 20:54:40',
            ),
            103 => 
            array (
                'id' => 1104,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -67,
                'created_at' => '2017-05-24 20:54:41',
                'updated_at' => '2017-05-24 20:54:41',
            ),
            104 => 
            array (
                'id' => 1105,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -66,
                'created_at' => '2017-05-24 20:54:42',
                'updated_at' => '2017-05-24 20:54:42',
            ),
            105 => 
            array (
                'id' => 1106,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -61,
                'created_at' => '2017-05-24 20:54:45',
                'updated_at' => '2017-05-24 20:54:45',
            ),
            106 => 
            array (
                'id' => 1107,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -64,
                'created_at' => '2017-05-24 20:54:45',
                'updated_at' => '2017-05-24 20:54:45',
            ),
            107 => 
            array (
                'id' => 1108,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -85,
                'created_at' => '2017-05-24 20:54:46',
                'updated_at' => '2017-05-24 20:54:46',
            ),
            108 => 
            array (
                'id' => 1109,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -70,
                'created_at' => '2017-05-24 20:54:48',
                'updated_at' => '2017-05-24 20:54:48',
            ),
            109 => 
            array (
                'id' => 1110,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -79,
                'created_at' => '2017-05-24 20:54:50',
                'updated_at' => '2017-05-24 20:54:50',
            ),
            110 => 
            array (
                'id' => 1111,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -75,
                'created_at' => '2017-05-24 20:54:53',
                'updated_at' => '2017-05-24 20:54:53',
            ),
            111 => 
            array (
                'id' => 1112,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -73,
                'created_at' => '2017-05-24 20:54:53',
                'updated_at' => '2017-05-24 20:54:53',
            ),
            112 => 
            array (
                'id' => 1113,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -70,
                'created_at' => '2017-05-24 20:54:54',
                'updated_at' => '2017-05-24 20:54:54',
            ),
            113 => 
            array (
                'id' => 1114,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -67,
                'created_at' => '2017-05-24 20:54:54',
                'updated_at' => '2017-05-24 20:54:54',
            ),
            114 => 
            array (
                'id' => 1115,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -59,
                'created_at' => '2017-05-24 20:54:55',
                'updated_at' => '2017-05-24 20:54:55',
            ),
            115 => 
            array (
                'id' => 1116,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -59,
                'created_at' => '2017-05-24 20:54:57',
                'updated_at' => '2017-05-24 20:54:57',
            ),
            116 => 
            array (
                'id' => 1117,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -74,
                'created_at' => '2017-05-24 20:54:58',
                'updated_at' => '2017-05-24 20:54:58',
            ),
            117 => 
            array (
                'id' => 1118,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -81,
                'created_at' => '2017-05-24 20:54:58',
                'updated_at' => '2017-05-24 20:54:58',
            ),
            118 => 
            array (
                'id' => 1119,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -74,
                'created_at' => '2017-05-24 20:54:59',
                'updated_at' => '2017-05-24 20:54:59',
            ),
            119 => 
            array (
                'id' => 1120,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -74,
                'created_at' => '2017-05-24 20:55:00',
                'updated_at' => '2017-05-24 20:55:00',
            ),
            120 => 
            array (
                'id' => 1121,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -74,
                'created_at' => '2017-05-24 20:55:02',
                'updated_at' => '2017-05-24 20:55:02',
            ),
            121 => 
            array (
                'id' => 1122,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -85,
                'created_at' => '2017-05-24 20:55:03',
                'updated_at' => '2017-05-24 20:55:03',
            ),
            122 => 
            array (
                'id' => 1123,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -74,
                'created_at' => '2017-05-24 20:55:04',
                'updated_at' => '2017-05-24 20:55:04',
            ),
            123 => 
            array (
                'id' => 1124,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -74,
                'created_at' => '2017-05-24 20:55:06',
                'updated_at' => '2017-05-24 20:55:06',
            ),
            124 => 
            array (
                'id' => 1125,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -61,
                'created_at' => '2017-05-24 20:55:07',
                'updated_at' => '2017-05-24 20:55:07',
            ),
            125 => 
            array (
                'id' => 1126,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -77,
                'created_at' => '2017-05-24 20:55:07',
                'updated_at' => '2017-05-24 20:55:07',
            ),
            126 => 
            array (
                'id' => 1127,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -68,
                'created_at' => '2017-05-24 20:55:08',
                'updated_at' => '2017-05-24 20:55:08',
            ),
            127 => 
            array (
                'id' => 1128,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -70,
                'created_at' => '2017-05-24 20:55:10',
                'updated_at' => '2017-05-24 20:55:10',
            ),
            128 => 
            array (
                'id' => 1129,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -62,
                'created_at' => '2017-05-24 20:55:15',
                'updated_at' => '2017-05-24 20:55:15',
            ),
            129 => 
            array (
                'id' => 1130,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -75,
                'created_at' => '2017-05-24 20:55:16',
                'updated_at' => '2017-05-24 20:55:16',
            ),
            130 => 
            array (
                'id' => 1131,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -75,
                'created_at' => '2017-05-24 20:55:18',
                'updated_at' => '2017-05-24 20:55:18',
            ),
            131 => 
            array (
                'id' => 1132,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -77,
                'created_at' => '2017-05-24 20:55:20',
                'updated_at' => '2017-05-24 20:55:20',
            ),
            132 => 
            array (
                'id' => 1133,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -79,
                'created_at' => '2017-05-24 20:55:21',
                'updated_at' => '2017-05-24 20:55:21',
            ),
            133 => 
            array (
                'id' => 1134,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -61,
                'created_at' => '2017-05-24 20:55:22',
                'updated_at' => '2017-05-24 20:55:22',
            ),
            134 => 
            array (
                'id' => 1135,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -71,
                'created_at' => '2017-05-24 20:55:24',
                'updated_at' => '2017-05-24 20:55:24',
            ),
            135 => 
            array (
                'id' => 1136,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -68,
                'created_at' => '2017-05-24 20:55:25',
                'updated_at' => '2017-05-24 20:55:25',
            ),
            136 => 
            array (
                'id' => 1137,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -64,
                'created_at' => '2017-05-24 20:55:26',
                'updated_at' => '2017-05-24 20:55:26',
            ),
            137 => 
            array (
                'id' => 1138,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -79,
                'created_at' => '2017-05-24 20:55:28',
                'updated_at' => '2017-05-24 20:55:28',
            ),
            138 => 
            array (
                'id' => 1139,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -62,
                'created_at' => '2017-05-24 20:55:29',
                'updated_at' => '2017-05-24 20:55:29',
            ),
            139 => 
            array (
                'id' => 1140,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -66,
                'created_at' => '2017-05-24 20:55:31',
                'updated_at' => '2017-05-24 20:55:31',
            ),
            140 => 
            array (
                'id' => 1141,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -74,
                'created_at' => '2017-05-24 20:55:33',
                'updated_at' => '2017-05-24 20:55:33',
            ),
            141 => 
            array (
                'id' => 1142,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -66,
                'created_at' => '2017-05-24 20:55:35',
                'updated_at' => '2017-05-24 20:55:35',
            ),
            142 => 
            array (
                'id' => 1143,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -69,
                'created_at' => '2017-05-24 20:55:37',
                'updated_at' => '2017-05-24 20:55:37',
            ),
            143 => 
            array (
                'id' => 1144,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -69,
                'created_at' => '2017-05-24 20:55:38',
                'updated_at' => '2017-05-24 20:55:38',
            ),
            144 => 
            array (
                'id' => 1145,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -79,
                'created_at' => '2017-05-24 20:55:39',
                'updated_at' => '2017-05-24 20:55:39',
            ),
            145 => 
            array (
                'id' => 1146,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -75,
                'created_at' => '2017-05-24 20:55:40',
                'updated_at' => '2017-05-24 20:55:40',
            ),
            146 => 
            array (
                'id' => 1147,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -75,
                'created_at' => '2017-05-24 20:55:42',
                'updated_at' => '2017-05-24 20:55:42',
            ),
            147 => 
            array (
                'id' => 1148,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -62,
                'created_at' => '2017-05-24 20:55:43',
                'updated_at' => '2017-05-24 20:55:43',
            ),
            148 => 
            array (
                'id' => 1149,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -79,
                'created_at' => '2017-05-24 20:55:44',
                'updated_at' => '2017-05-24 20:55:44',
            ),
            149 => 
            array (
                'id' => 1150,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -71,
                'created_at' => '2017-05-24 20:55:46',
                'updated_at' => '2017-05-24 20:55:46',
            ),
            150 => 
            array (
                'id' => 1151,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -66,
                'created_at' => '2017-05-24 20:55:47',
                'updated_at' => '2017-05-24 20:55:47',
            ),
            151 => 
            array (
                'id' => 1152,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -61,
                'created_at' => '2017-05-24 20:55:48',
                'updated_at' => '2017-05-24 20:55:48',
            ),
            152 => 
            array (
                'id' => 1153,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -69,
                'created_at' => '2017-05-24 20:55:49',
                'updated_at' => '2017-05-24 20:55:49',
            ),
            153 => 
            array (
                'id' => 1154,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -81,
                'created_at' => '2017-05-24 20:55:53',
                'updated_at' => '2017-05-24 20:55:53',
            ),
            154 => 
            array (
                'id' => 1155,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -61,
                'created_at' => '2017-05-24 20:55:56',
                'updated_at' => '2017-05-24 20:55:56',
            ),
            155 => 
            array (
                'id' => 1156,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -65,
                'created_at' => '2017-05-24 20:55:57',
                'updated_at' => '2017-05-24 20:55:57',
            ),
            156 => 
            array (
                'id' => 1157,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -75,
                'created_at' => '2017-05-24 20:56:00',
                'updated_at' => '2017-05-24 20:56:00',
            ),
            157 => 
            array (
                'id' => 1158,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -76,
                'created_at' => '2017-05-24 20:56:01',
                'updated_at' => '2017-05-24 20:56:01',
            ),
            158 => 
            array (
                'id' => 1159,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -62,
                'created_at' => '2017-05-24 20:56:04',
                'updated_at' => '2017-05-24 20:56:04',
            ),
            159 => 
            array (
                'id' => 1160,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -59,
                'created_at' => '2017-05-24 20:56:05',
                'updated_at' => '2017-05-24 20:56:05',
            ),
            160 => 
            array (
                'id' => 1161,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -59,
                'created_at' => '2017-05-24 20:56:06',
                'updated_at' => '2017-05-24 20:56:06',
            ),
            161 => 
            array (
                'id' => 1162,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -61,
                'created_at' => '2017-05-24 20:56:07',
                'updated_at' => '2017-05-24 20:56:07',
            ),
            162 => 
            array (
                'id' => 1163,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -59,
                'created_at' => '2017-05-24 20:56:09',
                'updated_at' => '2017-05-24 20:56:09',
            ),
            163 => 
            array (
                'id' => 1164,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -57,
                'created_at' => '2017-05-24 20:56:10',
                'updated_at' => '2017-05-24 20:56:10',
            ),
            164 => 
            array (
                'id' => 1165,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -57,
                'created_at' => '2017-05-24 20:56:11',
                'updated_at' => '2017-05-24 20:56:11',
            ),
            165 => 
            array (
                'id' => 1166,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -69,
                'created_at' => '2017-05-24 20:56:14',
                'updated_at' => '2017-05-24 20:56:14',
            ),
            166 => 
            array (
                'id' => 1167,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -62,
                'created_at' => '2017-05-24 20:56:15',
                'updated_at' => '2017-05-24 20:56:15',
            ),
            167 => 
            array (
                'id' => 1168,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -45,
                'created_at' => '2017-05-24 20:56:17',
                'updated_at' => '2017-05-24 20:56:17',
            ),
            168 => 
            array (
                'id' => 1169,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -50,
                'created_at' => '2017-05-24 20:56:18',
                'updated_at' => '2017-05-24 20:56:18',
            ),
            169 => 
            array (
                'id' => 1170,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -46,
                'created_at' => '2017-05-24 20:56:19',
                'updated_at' => '2017-05-24 20:56:19',
            ),
            170 => 
            array (
                'id' => 1171,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -49,
                'created_at' => '2017-05-24 20:56:20',
                'updated_at' => '2017-05-24 20:56:20',
            ),
            171 => 
            array (
                'id' => 1172,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -52,
                'created_at' => '2017-05-24 20:56:22',
                'updated_at' => '2017-05-24 20:56:22',
            ),
            172 => 
            array (
                'id' => 1173,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -48,
                'created_at' => '2017-05-24 20:56:23',
                'updated_at' => '2017-05-24 20:56:23',
            ),
            173 => 
            array (
                'id' => 1174,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -47,
                'created_at' => '2017-05-24 20:56:26',
                'updated_at' => '2017-05-24 20:56:26',
            ),
            174 => 
            array (
                'id' => 1175,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -47,
                'created_at' => '2017-05-24 20:56:27',
                'updated_at' => '2017-05-24 20:56:27',
            ),
            175 => 
            array (
                'id' => 1176,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -62,
                'created_at' => '2017-05-24 20:56:28',
                'updated_at' => '2017-05-24 20:56:28',
            ),
            176 => 
            array (
                'id' => 1177,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -60,
                'created_at' => '2017-05-24 20:56:29',
                'updated_at' => '2017-05-24 20:56:29',
            ),
            177 => 
            array (
                'id' => 1178,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -47,
                'created_at' => '2017-05-24 20:56:31',
                'updated_at' => '2017-05-24 20:56:31',
            ),
            178 => 
            array (
                'id' => 1179,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -58,
                'created_at' => '2017-05-24 20:56:35',
                'updated_at' => '2017-05-24 20:56:35',
            ),
            179 => 
            array (
                'id' => 1180,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -42,
                'created_at' => '2017-05-24 20:56:36',
                'updated_at' => '2017-05-24 20:56:36',
            ),
            180 => 
            array (
                'id' => 1181,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -63,
                'created_at' => '2017-05-24 20:56:38',
                'updated_at' => '2017-05-24 20:56:38',
            ),
            181 => 
            array (
                'id' => 1182,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -41,
                'created_at' => '2017-05-24 20:56:41',
                'updated_at' => '2017-05-24 20:56:41',
            ),
            182 => 
            array (
                'id' => 1183,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -42,
                'created_at' => '2017-05-24 20:56:42',
                'updated_at' => '2017-05-24 20:56:42',
            ),
            183 => 
            array (
                'id' => 1184,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -62,
                'created_at' => '2017-05-24 20:56:45',
                'updated_at' => '2017-05-24 20:56:45',
            ),
            184 => 
            array (
                'id' => 1185,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -62,
                'created_at' => '2017-05-24 20:56:46',
                'updated_at' => '2017-05-24 20:56:46',
            ),
            185 => 
            array (
                'id' => 1186,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -48,
                'created_at' => '2017-05-24 20:56:47',
                'updated_at' => '2017-05-24 20:56:47',
            ),
            186 => 
            array (
                'id' => 1187,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -50,
                'created_at' => '2017-05-24 20:56:49',
                'updated_at' => '2017-05-24 20:56:49',
            ),
            187 => 
            array (
                'id' => 1188,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -63,
                'created_at' => '2017-05-24 20:56:50',
                'updated_at' => '2017-05-24 20:56:50',
            ),
            188 => 
            array (
                'id' => 1189,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -63,
                'created_at' => '2017-05-24 20:56:51',
                'updated_at' => '2017-05-24 20:56:51',
            ),
            189 => 
            array (
                'id' => 1190,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -59,
                'created_at' => '2017-05-24 20:56:51',
                'updated_at' => '2017-05-24 20:56:51',
            ),
            190 => 
            array (
                'id' => 1191,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -64,
                'created_at' => '2017-05-24 20:56:53',
                'updated_at' => '2017-05-24 20:56:53',
            ),
            191 => 
            array (
                'id' => 1192,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -62,
                'created_at' => '2017-05-24 20:56:53',
                'updated_at' => '2017-05-24 20:56:53',
            ),
            192 => 
            array (
                'id' => 1193,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -45,
                'created_at' => '2017-05-24 20:56:54',
                'updated_at' => '2017-05-24 20:56:54',
            ),
            193 => 
            array (
                'id' => 1194,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -46,
                'created_at' => '2017-05-24 20:56:55',
                'updated_at' => '2017-05-24 20:56:55',
            ),
            194 => 
            array (
                'id' => 1195,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -60,
                'created_at' => '2017-05-24 20:56:56',
                'updated_at' => '2017-05-24 20:56:56',
            ),
            195 => 
            array (
                'id' => 1196,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -46,
                'created_at' => '2017-05-24 20:56:58',
                'updated_at' => '2017-05-24 20:56:58',
            ),
            196 => 
            array (
                'id' => 1197,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -63,
                'created_at' => '2017-05-24 20:56:59',
                'updated_at' => '2017-05-24 20:56:59',
            ),
            197 => 
            array (
                'id' => 1198,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -50,
                'created_at' => '2017-05-24 20:57:00',
                'updated_at' => '2017-05-24 20:57:00',
            ),
            198 => 
            array (
                'id' => 1199,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -49,
                'created_at' => '2017-05-24 20:57:02',
                'updated_at' => '2017-05-24 20:57:02',
            ),
            199 => 
            array (
                'id' => 1200,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -50,
                'created_at' => '2017-05-24 20:57:04',
                'updated_at' => '2017-05-24 20:57:04',
            ),
            200 => 
            array (
                'id' => 1201,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -50,
                'created_at' => '2017-05-24 20:57:06',
                'updated_at' => '2017-05-24 20:57:06',
            ),
            201 => 
            array (
                'id' => 1202,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -70,
                'created_at' => '2017-05-24 20:57:07',
                'updated_at' => '2017-05-24 20:57:07',
            ),
            202 => 
            array (
                'id' => 1203,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -63,
                'created_at' => '2017-05-24 20:57:09',
                'updated_at' => '2017-05-24 20:57:09',
            ),
            203 => 
            array (
                'id' => 1204,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -63,
                'created_at' => '2017-05-24 20:57:11',
                'updated_at' => '2017-05-24 20:57:11',
            ),
            204 => 
            array (
                'id' => 1205,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -62,
                'created_at' => '2017-05-24 20:57:12',
                'updated_at' => '2017-05-24 20:57:12',
            ),
            205 => 
            array (
                'id' => 1206,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -59,
                'created_at' => '2017-05-24 20:57:15',
                'updated_at' => '2017-05-24 20:57:15',
            ),
            206 => 
            array (
                'id' => 1207,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -42,
                'created_at' => '2017-05-24 20:57:16',
                'updated_at' => '2017-05-24 20:57:16',
            ),
            207 => 
            array (
                'id' => 1208,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -58,
                'created_at' => '2017-05-24 20:57:17',
                'updated_at' => '2017-05-24 20:57:17',
            ),
            208 => 
            array (
                'id' => 1209,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -58,
                'created_at' => '2017-05-24 20:57:21',
                'updated_at' => '2017-05-24 20:57:21',
            ),
            209 => 
            array (
                'id' => 1210,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -58,
                'created_at' => '2017-05-24 20:57:22',
                'updated_at' => '2017-05-24 20:57:22',
            ),
            210 => 
            array (
                'id' => 1211,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -58,
                'created_at' => '2017-05-24 20:57:24',
                'updated_at' => '2017-05-24 20:57:24',
            ),
            211 => 
            array (
                'id' => 1212,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -50,
                'created_at' => '2017-05-24 20:57:26',
                'updated_at' => '2017-05-24 20:57:26',
            ),
            212 => 
            array (
                'id' => 1213,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -48,
                'created_at' => '2017-05-24 20:57:27',
                'updated_at' => '2017-05-24 20:57:27',
            ),
            213 => 
            array (
                'id' => 1214,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -48,
                'created_at' => '2017-05-24 20:57:29',
                'updated_at' => '2017-05-24 20:57:29',
            ),
            214 => 
            array (
                'id' => 1215,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -46,
                'created_at' => '2017-05-24 20:57:30',
                'updated_at' => '2017-05-24 20:57:30',
            ),
            215 => 
            array (
                'id' => 1216,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -60,
                'created_at' => '2017-05-24 20:57:31',
                'updated_at' => '2017-05-24 20:57:31',
            ),
            216 => 
            array (
                'id' => 1217,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -47,
                'created_at' => '2017-05-24 20:57:36',
                'updated_at' => '2017-05-24 20:57:36',
            ),
            217 => 
            array (
                'id' => 1218,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -63,
                'created_at' => '2017-05-24 20:57:36',
                'updated_at' => '2017-05-24 20:57:36',
            ),
            218 => 
            array (
                'id' => 1219,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -59,
                'created_at' => '2017-05-24 20:57:36',
                'updated_at' => '2017-05-24 20:57:36',
            ),
            219 => 
            array (
                'id' => 1220,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -59,
                'created_at' => '2017-05-24 20:57:36',
                'updated_at' => '2017-05-24 20:57:36',
            ),
            220 => 
            array (
                'id' => 1221,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -60,
                'created_at' => '2017-05-24 20:57:38',
                'updated_at' => '2017-05-24 20:57:38',
            ),
            221 => 
            array (
                'id' => 1222,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -50,
                'created_at' => '2017-05-24 20:57:39',
                'updated_at' => '2017-05-24 20:57:39',
            ),
            222 => 
            array (
                'id' => 1223,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -49,
                'created_at' => '2017-05-24 20:57:41',
                'updated_at' => '2017-05-24 20:57:41',
            ),
            223 => 
            array (
                'id' => 1224,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -54,
                'created_at' => '2017-05-24 20:57:42',
                'updated_at' => '2017-05-24 20:57:42',
            ),
            224 => 
            array (
                'id' => 1225,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -50,
                'created_at' => '2017-05-24 20:57:43',
                'updated_at' => '2017-05-24 20:57:43',
            ),
            225 => 
            array (
                'id' => 1226,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -63,
                'created_at' => '2017-05-24 20:57:44',
                'updated_at' => '2017-05-24 20:57:44',
            ),
            226 => 
            array (
                'id' => 1227,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -64,
                'created_at' => '2017-05-24 20:57:45',
                'updated_at' => '2017-05-24 20:57:45',
            ),
            227 => 
            array (
                'id' => 1228,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -51,
                'created_at' => '2017-05-24 20:57:47',
                'updated_at' => '2017-05-24 20:57:47',
            ),
            228 => 
            array (
                'id' => 1229,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -60,
                'created_at' => '2017-05-24 20:57:48',
                'updated_at' => '2017-05-24 20:57:48',
            ),
            229 => 
            array (
                'id' => 1230,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -51,
                'created_at' => '2017-05-24 20:57:49',
                'updated_at' => '2017-05-24 20:57:49',
            ),
            230 => 
            array (
                'id' => 1231,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -64,
                'created_at' => '2017-05-24 20:57:51',
                'updated_at' => '2017-05-24 20:57:51',
            ),
            231 => 
            array (
                'id' => 1232,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -64,
                'created_at' => '2017-05-24 20:57:52',
                'updated_at' => '2017-05-24 20:57:52',
            ),
            232 => 
            array (
                'id' => 1233,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -51,
                'created_at' => '2017-05-24 20:57:53',
                'updated_at' => '2017-05-24 20:57:53',
            ),
            233 => 
            array (
                'id' => 1234,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -42,
                'created_at' => '2017-05-24 20:57:56',
                'updated_at' => '2017-05-24 20:57:56',
            ),
            234 => 
            array (
                'id' => 1235,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -42,
                'created_at' => '2017-05-24 20:57:57',
                'updated_at' => '2017-05-24 20:57:57',
            ),
            235 => 
            array (
                'id' => 1236,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -42,
                'created_at' => '2017-05-24 20:57:58',
                'updated_at' => '2017-05-24 20:57:58',
            ),
            236 => 
            array (
                'id' => 1237,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -59,
                'created_at' => '2017-05-24 20:58:02',
                'updated_at' => '2017-05-24 20:58:02',
            ),
            237 => 
            array (
                'id' => 1238,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -43,
                'created_at' => '2017-05-24 20:58:04',
                'updated_at' => '2017-05-24 20:58:04',
            ),
            238 => 
            array (
                'id' => 1239,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -60,
                'created_at' => '2017-05-24 20:58:05',
                'updated_at' => '2017-05-24 20:58:05',
            ),
            239 => 
            array (
                'id' => 1240,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -44,
                'created_at' => '2017-05-24 20:58:07',
                'updated_at' => '2017-05-24 20:58:07',
            ),
            240 => 
            array (
                'id' => 1241,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -47,
                'created_at' => '2017-05-24 20:58:09',
                'updated_at' => '2017-05-24 20:58:09',
            ),
            241 => 
            array (
                'id' => 1242,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -49,
                'created_at' => '2017-05-24 20:58:10',
                'updated_at' => '2017-05-24 20:58:10',
            ),
            242 => 
            array (
                'id' => 1243,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -61,
                'created_at' => '2017-05-24 20:58:11',
                'updated_at' => '2017-05-24 20:58:11',
            ),
            243 => 
            array (
                'id' => 1244,
                'beacon_id' => '0',
                'mac_address' => 'cd:18:e2:48:d6:53',
                'RSSI' => -62,
                'created_at' => '2017-05-24 20:58:13',
                'updated_at' => '2017-05-24 20:58:13',
            ),
        ));

        \DB::table('beacon_data')->where('id', 1)
            ->update(['time_delta' => 0]);

        $prev_data = BeaconData::find(1);
        for ($i = 2; $i <= 1244; $i++){
            $beacon_data = BeaconData::find($i);

            $st = new Carbon($prev_data->created_at);
            $en = new Carbon($beacon_data->created_at);
            $diff = $en->diffInSeconds($st);

            \DB::table('beacon_data')->where('id', $i)
                ->update(['time_delta' => $diff]);
        }

    }
}