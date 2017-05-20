<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeaconController extends Controller
{
    public function index()
    {
        return view('beacon.index');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        return $data;
    }
}
