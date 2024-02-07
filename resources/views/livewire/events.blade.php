
<div>
    @foreach($events as $event)
        <p>
            {{ $event->event_category->event_type->title }}
            &nbsp;|&nbsp;
            {{ $event->event_category->title }}
            &nbsp;|&nbsp;
            {{ $event->title }}
            &nbsp;
            (
            {{ $event->event_venue_id
                ? $event->event_venue->name | $event->event_venue->event_location->name
                : $event->event_location->name }}
            )
        </p>
    @endforeach
</div>
