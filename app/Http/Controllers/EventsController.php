<?php

namespace App\Http\Controllers;

use App\Models\Events\Event;
use App\Models\Events\EventType;

class EventsController extends Controller
{
    public function event($slug) {
        $event = Event::whereSlug($slug)->firstOrFail();
        return view('events.event', compact('event'));
    }

    public function upcomingEvents() {
        $events = Event::upcoming()->get();
        return view('events.events', compact('events'));
    }

    public function pastEvents() {
        $events = Event::all();
        return view('events.events', compact('events'));
    }

    public function eventType($typeSlug) {
        $eventType = EventType::whereSlug($typeSlug)->firstOrFail();
        $events = $eventType->events()->upcoming()->get();
        return view('events.type', compact('eventType','events'));
    }

    public function eventCategory($typeSlug, $categorySlug) {
        $events = Event::all();
        return view('events.category', compact('events','typeSlug','categorySlug'));
    }
}
