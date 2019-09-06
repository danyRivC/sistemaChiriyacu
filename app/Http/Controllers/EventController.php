<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::paginate(8);
        return view('events.index', ['events'=>$events]);
    }

    public function show($slug)
    {
        $event = Event::where('slug', $slug)->first();
        return view('events.eventDetail',['event'=>$event]);
    }
}
