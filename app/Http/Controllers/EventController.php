<?php

namespace App\Http\Controllers;

use App\Events;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Events::all();
        return view('event.index', ['events' => $events]);
    }
}
