<x-app-layout>

    {{--<x-page-header :header="$page->header" :title="$page->title" />--}}

    @php
    $images = \Hup234design\FilamentCms\Models\CmsMedia::inRandomOrder()->take(4)->get();
    @endphp

    @section('heading')
        <div
            x-data="{swiper: null}"
            x-init="swiper = new Swiper($refs.container, {
                autoplay: {
                    delay: 10000,
                },
                slidesPerView: 1,
                spaceBetween: 0,
                loop: true,
                effect: 'slide',
                navigation: {
                    enabled: true,
                    nextEl: '.swiper-next',
                    prevEl: '.swiper-previous',
                }
             })"
            class="relative overflow-hidden"
        >
            <div class="swiper-container w-full" x-ref="container">
                <div class="swiper-wrapper">
                    @foreach( $images as $image )
                        <div class="swiper-slide max-w-full h-[600px] bg-red-200 flex justify-center items-center">
                            <x-cms-media-image-renderer :media="$image" curation="header" imgClass="w-full h-full object-cover object-center" />
                        </div>
                    @endforeach
                </div>
            </div>
            <x-heroicon-s-arrow-left-circle class="swiper-previous absolute top-1/2 left-0 h-12 w-12 ml-4 rounded-full z-50 -translate-y-1/2 text-white" />
            <x-heroicon-s-arrow-right-circle class="swiper-next absolute top-1/2 right-0 h-12 w-12 mr-4 rounded-full z-50 -translate-y-1/2 text-white" />
        </div>
    @endsection

    <div class="prose max-w-none">
        <h1>{{ $page->title }}</h1>
        @if( $page->content ?? null )
            {!! tiptap_converter()->asHTML($page->content) !!}
        @endif
    </div>

    <x-cms::blocks :blocks="$page->blocks ?? []" />

</x-app-layout>
