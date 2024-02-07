<x-cms-app-layout>
    @section('header')
        <div class=" bg-orange-100">
            <div class="max-w-screen-2xl mx-auto p-8">
                <ul class="flex items-center gap-8">
                    <li>View As:</li>
                    <li class="flex items-center gap-1">
                        <x-heroicon-s-squares-2x2 class="w-6 h-6 inline-block" />
                        <a href="{{ route('events.index') }}">All Events</a>
                    </li>
                    @foreach( $eventTypes as $eventType)
                        <li class="flex items-center gap-1">
                            <x-heroicon-s-squares-2x2 class="w-6 h-6 inline-block" />
                            <a href="{{ route('events.type', $eventType->slug) }}">
                                {{ $eventType->title }}
                            </a>
                        </li>
                    @endforeach
                    <li class="flex items-center gap-1">
                        <x-heroicon-s-squares-2x2 class="w-6 h-6 inline-block" />
                        <a href="{{ route('events.index') }}">Past Events</a>
                    </li>
                </ul>
            </div>
        </div>
    @endsection
    <div class="lg:flex">
            <div class="lg:flex-1">
                {{ $slot }}
            </div>
            <div class="min-h-80 mt-12 bg-gray-100 lg:w-96 lg:mt-0 lg:ml-12 lg:flex-shrink-0 ">
                {{-- --}}
            </div>
        </div>

</x-cms-app-layout>
