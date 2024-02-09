<div>
    <h2 class="text-3xl font-bold text-center mb-12">Upcoming Events</h2>
    <div class="grid md:grid-cols-2 gap-8 lg:grid-cols-3">
        @foreach( $events as $event )
            <div @class([
                "group aspect-video bg-eclipse-secondary flex items-center justify-center p-8 text-center hover:bg-eclipse-primary",
                "md:hidden lg:flex" => $loop->iteration === 9
            ])>
                <a href="{{ route('events.event', $event->slug) }}" class="text-white text-xl font-semibold">
                    {{ $event->title }}
                </a>
            </div>
        @endforeach
    </div>
</div>
