<x-app-layout>

    {{--<x-page-header :header="$page->header" :title="$page->title" />--}}

    @php
    $images = \Hup234design\FilamentCms\Models\CmsMedia::inRandomOrder()->take(4)->get();
    @endphp

    @section('heading')
{{--        <div class="bg-brand-crimson">--}}
{{--            <div class="max-w-7xl mx-auto">--}}
                <div class="md:border-x-8 md:border-white">
                    <div class="glide">
                        <div class="glide__track" data-glide-el="track">
                            <ul class="glide__slides">
                                @foreach( $images as $image )
                                    <li class="glide__slide">
                                        <div class="w-full aspect-video max-h-[600px]">
                                            <x-cms-media-image-renderer :media="$image" curation="header" imgClass="w-full h-full object-cover object-center" />
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="glide__bullets" data-glide-el="controls[nav]">
                            @for( $x=1; $x<count($images); $x++ )
{{--                                <button class="glide__bullet h-2 w-2" data-glide-dir="={{ $x }}"></button>--}}
                                <button class="w-64 h-32 bg-red-500 mx-8" data-glide-dir="={{ $x }}"></button>
                            @endfor
                        </div>
                        <div class="glide__arrows" data-glide-el="controls">
                            <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                                <x-heroicon-s-chevron-left class="w-8 h-8 text-white" />
                            </button>
                            <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                                <x-heroicon-s-chevron-right class="w-8 h-8 text-white" />
                            </button>
                        </div>
                    </div>
                </div>
{{--            </div>--}}
{{--        </div>--}}
    @endsection

    <div class="prose max-w-none">
        <h1>{{ $page->title }}</h1>
        @if( $page->content ?? null )
            {!! tiptap_converter()->asHTML($page->content) !!}
        @endif
    </div>

    <x-cms::blocks :blocks="$page->blocks ?? []" />

</x-app-layout>
