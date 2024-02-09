<header>
    <div
        x-data="{menuOpen: false}"
        x-init="$watch('menuOpen', value => value
            ? document.body.classList.add('overflow-y-hidden')
            : document.body.classList.remove('overflow-y-hidden')
        )"
    >

        <section class="bg-eclipse-blue text-white py-2">
            <div class="container">
                <div class="flex flex-col items-center justify-between lg:flex-row">
                    <p class="text-center text-sm lg:text-base lg:text-left">
                        Luxury corporate hospitality for the world's premier sporting events
                    </p>
                    <div class="text-center lg:text-right">
                        <p>Sales : 1-815-735-6676</p>
                        <p class="hidden lg:visible">info@eclipsesportsevents.com</p>
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
                        @if($menus['primary'])
                            @foreach($menus['primary'] as $item)
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
                    <a class="lg:hidden" x-on:click="menuOpen = true">
                        <x-heroicon-s-bars-4 class="w-12 h-12 text-eclipse-blue" />
                    </a>
                </div>
            </div>
        </section>

        <div
            x-show="menuOpen"
            x-cloak
            x-transition:enter="transition ease-out duration-500"
            x-transition:enter-start="transform opacity-0 translate-x-full"
            x-transition:enter-end="transform opacity-100 translate-x-0"
            x-transition:leave="transition ease-in duration-500"
            x-transition:leave-start="transform opacity-100 translate-x-0"
            x-transition:leave-end="transform opacity-0 translate-x-full"
            class="fixed inset-0 overflow-y-scroll bg-eclipse-blue z-50 text-center"
            style="overflow-y: auto;"
        >
            <!-- Close button -->
            <button @click="menuOpen = false" class="absolute top-0 right-0 p-2">
                <x-heroicon-s-x-mark class="w-10 h-10 text-white" />
            </button>

            <nav class="mt-8 mr-6">
                <ul class="text-center space-y-3">
                    {{--                    <li  class="uppercase">--}}
                    {{--                        <a href="{{ route('pages.home') }}"  class="uppercase text-white">--}}
                    {{--                            <img src="{{ asset('images/Eclipse-Sports-Events-Logo.png') }}" class="h-16 w-auto xl:h-20">--}}
                    {{--                        </a>--}}
                    {{--                    </li>--}}
                    @if($menus['primary'])
                        @foreach($menus['primary'] as $item)
                            @if($item['route'])
                                <li>
                                    @if($item['route'])
                                        <a href="{{ route($item['route'], $item['slug']) }}" class="text-2xl font-semibold text-white">
                                            {{ $item['title'] }}
                                        </a>
                                    @endif
                                </li>
                            @endif
                        @endforeach
                    @else
                        <li><a href="{{ route('pages.home') }}" class="text-2xl font-semibold text-white">HOME</a></li>
                        <li><a href="{{ route('events.index') }}" class="text-2xl font-semibold text-white">EVENTS</a></li>
                        <li><a href="{{ route('posts.index') }}" class="text-2xl font-semibold text-white">NEWS</a></li>
                    @endif
                </ul>
            </nav>

            <hr class="w-3/4 mx-auto mt-12 mb-8">

            <div class="space-y-4 text-center text-white  leading-7">

                <p class=""><a href="mailto:info@eclipsesportsevents.com">info@eclipsesportsevents.com</a></p>

                <p class="text-white">
                    <strong>UK &amp; Europe</strong>
                    <br>
                    <span class="mr-2">Sales</span>:&nbsp; <a href="tel:+441823336510">+44 (0) 1823 336510</a>
                    <br>
                    <span class="mr-2">Operations</span> <a href="tel:+441823336510">+44 (0) 1823 336510</a>
                </p>

                <p>
                    <strong>USA &amp; Canada</strong>
                    <br>
                    <span class="small mr-2">Sales &amp; Operations</span>:&nbsp; <a href="tel:18157356676">1-815-735-6676</a>
                    <br>
                </p>

                <p>
                    <strong>Augusta, Georgia</strong>
                    <br>
                    <span class="small mr-2">Masters Sales</span>:&nbsp; <a href="tel:18157356676"> 1-815-735-6676</a>
                    <br>
                </p>
            </div>

        </div>

    </div>

</header>
