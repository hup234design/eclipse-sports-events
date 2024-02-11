<div>
    <div class="grid gap-8 lg:grid-cols-3">
        @foreach( $posts as $post )
            <div @class([
                "relative group"
            ])>

                <div class="relative aspect-video bg-eclipse-primary">
                    @if( $post->featured_image )
                        <x-cms-media-image-renderer
                            :media="$post->featured_image?->media_id"
                            :curation="$post->featured_image?->curation"
                            preset="thumbnail"
                            imgClass="absolute inset-0 w-full h-full object-cover"
                        />
                    @endif
                </div>
                <div class="text-center p-8 bg-eclipse-primary">
                    <a href="{{ route('posts.post', $post->slug) }}" class="text-white text-xl font-semibold">
                        {{ $post->title }}
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>
