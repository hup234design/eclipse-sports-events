<div>
    <div class="grid gap-12 lg:grid-cols-3">
        @foreach($clients as $client)
            <div class="prose max-w-none border border-gray-400 p-8">
                <img src="{{ asset('storage/' . $client->logo) }}" class="w-full h-auto">
                <h3>{{ $client->name }}</h3>
                <p>{!! nl2br($client->description) !!}</p>
            </div>
        @endforeach
    </div>
</div>
