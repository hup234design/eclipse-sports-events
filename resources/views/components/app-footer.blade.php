<footer class="bg-eclipse-blue text-white py-16">
    <div class="container space-y-16">
        <div class="grid lg:grid-cols-3 gap-16">
            <div class="text-center lg:order-3 lg:text-right">
                <p>Eclipse Sports Events</p>
                <p>UK & Europe</p>
                <p>Sales +44 (0) 1823 336510</p>
                <p>Operations +44 (0) 1823 336510</p>
                <p>USA & Canada</p>
                <p>Sales & Operations 1-815-735-6676</p>
                <p>Augusta, Georgia</p>
                <p>Masters Sales 1-815-735-6676</p>
                <p>Get In Touch</p>
            </div>
            <div class="text-center lg:order-1 lg:text-left">
                <ul>
                    <li>Latest News</li>
                    @foreach($posts as $post)
                        <li>
                            <a href="{{ route('posts.post', $post->slug) }}">
                                {{ $post->title }}
                            </a>
                        </li>
                  @endforeach
                </ul>
            </div>
            <div class="text-center lg:order-2">
                <ul>
                    <li>Upcoming Events</li>
                    @foreach($events as $event)
                        <li>
                            <a href="{{ route('events.event', $event->slug) }}">
                                {{ $event->title }}
                            </a>
                        </li>
                    @endforeach
                    <li>
                        <a href="{{ route('events.index') }}">
                            View All Events
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <ul class="flex flex-wrap items-center justify-center">
            @if($menus['primary'])
                @foreach($menus['primary'] as $item)
                    @if($item['route'])
                        <li class="px-4 py-2">
                            @if($item['route'])
                                <a href="{{ route($item['route'], $item['slug']) }}" class="hover:cursor-pointer leading-none">
                                    {{ $item['title'] }}
                                </a>
                            @endif
                        </li>
                    @endif
                @endforeach
            @else
                <li class="px-4 py-2"><a href="{{ route('pages.home') }}" class="hover:cursor-pointer leading-none">HOME</a></li>
                <li class="px-4 py-2"><a href="{{ route('events.index') }}" class="hover:cursor-pointer leading-none">EVENTS</a></li>
                <li class="px-4 py-2"><a href="{{ route('posts.index') }}" class="hover:cursor-pointer leading-none">NEWS</a></li>
            @endif
        </ul>
        <div class="text-center">
            <p>©2024 Eclipse Sports Events, All rights reserved.</p>
        </div>
    </div>
</footer>
