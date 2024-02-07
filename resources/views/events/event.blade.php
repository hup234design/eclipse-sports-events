<x-cms-app-layout>

    @section('header')
        <div class="h-[240px]">
            <div class="w-full h-full object-cover" style="background-image: url('https://eclipsesportsevents.com/app/default/assets/images/490ab00d1ae64c778566150b79bc1939.jpg?v=1580616331');">
                <div class="overlay d-flex flex-column justify-content-center text-left px-4">
                    <p class="category">
                        <a class="" href="https://eclipsesportsevents.com/events/types/sporting">Sporting Events</a>
                        &nbsp; | &nbsp; Basketball
                    </p>
                    <h1 class="page-banner-title">NCCA Final Four</h1>
                    <p class="page-banner-text">
                        Men's Basketball Tournament played in the US each spring between 64 college basketball teams from the National Collegiate Athletic Association.
                    </p>
                    <p class="date">
                        05/04/2024 - 08/04/2024
                        &nbsp;<br><a href="https://eclipsesportsevents.com/venues/state-farm-stadium">Atlanta GA</a>
                    </p>
                </div>
            </div>
        </div>
    @endsection

    <div class="prose max-w-none">
        <h2>
            {{ $event->title }}
        </h2>
            @if( $event->start_date )
                <p>
                    {{ $event->start_date->format('d/m/Y') }}
                    @if( $event->end_date && $event->end_date )
                        <span> - {{ $event->end_date->format('d/m/Y') }}</span>
                    @endif
                </p>
            @endif
        <p>
            {{ $event->event_venue_id
                ? $event->event_venue->name . " | " . $event->event_venue->event_location->name
                : $event->event_location->name }}
        </p>
        <p>
            {{ nl2br($event->summary) }}
        </p>
    </div>

{{--    {{  json_encode($event) }}--}}

</x-cms-app-layout>
