<div>
    <div class="grid md:grid-cols-2 gap-8 lg:grid-cols-3">
        @foreach( $events as $event )
            <div @class([
                "relative group aspect-video bg-eclipse-secondary p-8 flex items-center justify-center text-center hover:bg-eclipse-primary",
                "md:hidden lg:flex" => $loop->iteration === 9
            ])>
                @if( $event->featured_image )
                    <x-cms-media-image-renderer
                        :media="$event->featured_image?->media_id"
                        :curation="$event->featured_image?->curation"
                        preset="thumbnail"
                        imgClass="absolute inset-0 w-full h-full object-cover"
                    />
                @endif
                <a href="{{ route('events.event', $event->slug) }}" class="relative text-white text-xl font-semibold">
                    {{ $event->title }}
                </a>
            </div>
        @endforeach
    </div>
</div>
