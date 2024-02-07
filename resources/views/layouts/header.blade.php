<header>
    <section class="bg-eclipse-blue text-white py-2">
        <div class="container">
            <div class="flex flex-col items-center justify-between lg:flex-row">
                <p class="text-center text-sm lg:text-base lg:text-left">
                    Luxury corporate hospitality for the world's premier sporting events
                </p>
                <div class="text-center lg:text-right">
                    <p>Sales : 1-815-735-6676</p>
                    <p>info@eclipsesportsevents.com</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-6">
        <div class="container">
            <div class="flex items-center justify-between">
                <a href="{{ route('pages.home') }}">
                    <img src="{{ asset('images/Eclipse-Sports-Events-Logo.png') }}" class="h-16 w-auto xl:h-20">
                </a>
                <ul class="hidden lg:flex items-center font-medium lg:gap-4 xl:gap-8">
                    @if($primary_header)
                        @foreach($primary_header as $item)
                            @if($item['route'])
                                <li>
                                    @if($item['route'])
                                        <a href="{{ route($item['route'], $item['slug']) }}" class="hover:cursor-pointer text-eclipse-blue text-lg uppercase leading-none">
                                            {{ $item['title'] }}
                                        </a>
                                    @endif
                                </li>
                            @endif
                        @endforeach
                    @else
                        <li><a href="{{ route('pages.home') }}" class="hover:cursor-pointer text-eclipse-blue text-lg uppercase leading-none">HOME</a></li>
                        <li><a href="{{ route('events.index') }}" class="hover:cursor-pointer text-eclipse-blue text-lg uppercase leading-none">EVENTS</a></li>
                        <li><a href="{{ route('posts.index') }}" class="hover:cursor-pointer text-eclipse-blue text-lg uppercase leading-none">NEWS</a></li>
                    @endif
                </ul>
                <a class="lg:hidden" href="{{ route('pages.home') }}">
                    <x-heroicon-s-bars-4 class="w-12 h-12 text-eclipse-blue" />
                </a>
            </div>
        </div>
    </section>
</header>
