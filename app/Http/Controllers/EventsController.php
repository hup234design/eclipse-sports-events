<?php

namespace App\Http\Controllers;

use App\Models\Events\Event;
use App\Models\Events\EventType;
use Hup234design\FilamentCms\Models\IndexPage;

class EventsController extends Controller
{

    public function index() {
        $page = IndexPage::where('slug', 'events')->first();
        $events = Event::upcoming()->get();
        return view('events.index', compact('page','events'));
    }

    public function event($slug) {
        $event = Event::whereSlug($slug)->firstOrFail();
        return view('events.event', compact('event'));
    }

    public function pastEvents() {
        $events = Event::all();
        return view('events.index', compact('events'));
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
