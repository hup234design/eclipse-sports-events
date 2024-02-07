{{-- resources/views/partials/breadcrumbs.blade.php --}}

@unless ($breadcrumbs->isEmpty())
    <div class="container py-3">
    <ol class="flex items-center divide-x-2 leading-none">
        @foreach ($breadcrumbs as $breadcrumb)
            @if (!is_null($breadcrumb->url) && !$loop->last)
                @if($loop->first)
                    <li class="relative pl-7 pr-4">
                        <x-heroicon-s-home class="absolute -mt-0.5 left-0 w-5 h-5 text-white" />
                        <a href="{{ $breadcrumb->url }}" class="inline-flex items-center leading-none">
                            {{ $breadcrumb->title }}
                        </a>
                    </li>
                @else
                    <li class="p-4">
                        <a href="{{ $breadcrumb->url }}" class="inline-flex items-center leading-none">
                            {{ $breadcrumb->title }}
                        </a>
                    </li>
                @endif
            @else
                <li class="breadcrumb-item active pl-4">{{ $breadcrumb->title }}</li>
            @endif

        @endforeach
    </ol>
    </div>
@endunless
