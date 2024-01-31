<div>
    <div class="md:columns-2 lg:columns-3 gap-8 space-y-8">
        @foreach($clients as $client)
            <div class="break-inside-avoid-column w-full p-8 border-2 border-gray-300">
                <div class="prose max-w-none text-center">
                    <img src="{{ asset('storage/' . $client->logo) }}" class="w-full h-auto">
                    <h3>{{ $client->name }}</h3>
                    <p>{!! nl2br($client->description) !!}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
