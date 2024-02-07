<x-events-layout>

    @foreach($events as $event)
        <p>
            <a href="{{ route('events.event', $event->slug) }}">
            {{ $event->event_category->event_type->title }}
            &nbsp;|&nbsp;
            {{ $event->event_category->title }}
            &nbsp;|&nbsp;
            {{ $event->title }}
            &nbsp;
            (
            {{ $event->event_venue_id
                ? $event->event_venue->name . " | " . $event->event_venue->event_location->name
                : $event->event_location->name }}
            )
            </a>
        </p>
    @endforeach

</x-events-layout>
