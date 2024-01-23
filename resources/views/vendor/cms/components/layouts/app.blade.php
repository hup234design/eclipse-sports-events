<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="antialiased">

<header class="py-8 bg-gray-600 flex flex-col items-center justify-center">
    <a href="{{ route('pages.home') }}" class="hover:cursor-pointer text-3xl font-bold text-white leading-none">
        {{ config('app.name') }}
    </a>
    <ul class="mt-8 flex items-center justify-center divide-x-2 divide-gray-100">
        <li class="leading-none px-4">
            <a href="{{ route('pages.home') }}" class="hover:cursor-pointer text-gray-100 font-semibold text-lg leading-none">
                Home
            </a>
        </li>
        @foreach( \Hup234design\FilamentCms\Models\Page::where('is_home',false)->visible()->pluck('title','slug') as $slug=>$title)
            <li class="leading-none px-4">
                <a href="{{ route('pages.page', $slug) }}" class="hover:cursor-pointer text-gray-100 font-semibold text-lg leading-none">
                    {{ $title }}
                </a>
            </li>
        @endforeach
{{--        <li class="leading-none px-6">--}}
{{--            <a href="{{ route('services.index') }}" class="hover:cursor-pointer text-gray-100 font-semibold text-lg leading-none uppercase">--}}
{{--                SERVICES--}}
{{--            </a>--}}
{{--        </li>--}}
{{--        <li class="leading-none px-6">--}}
{{--            <a href="{{ route('events.index') }}" class="hover:cursor-pointer text-gray-100 font-semibold text-lg leading-none uppercase">--}}
{{--                EVENTS--}}
{{--            </a>--}}
{{--        </li>--}}
{{--        <li class="leading-none px-6">--}}
{{--            <a href="{{ route('testimonials.index') }}" class="hover:cursor-pointer text-gray-100 font-semibold text-lg leading-none uppercase">--}}
{{--                TESTIMONIALS--}}
{{--            </a>--}}
{{--        </li>--}}
        <li class="leading-none px-4">
            <a href="{{ route('posts.index') }}" class="hover:cursor-pointer text-gray-100 font-semibold text-lg leading-none">
                Posts
            </a>
        </li>
    </ul>
</header>

<main class="my-16">
    <div class="max-w-7xl mx-auto px-8">
        {{ $slot }}
    </div>
</main>

<footer class="py-16 bg-gray-800 flex flex-col items-center justify-center">
    <a href="{{ route('pages.home') }}" class="hover:cursor-pointer text-xl font-bold text-white leading-none">
        {{ config('app.name') }}
    </a>
    <ul class="mt-16 flex items-center justify-center divide-x-2 divide-gray-100">
        <li class="leading-none px-4">
            <a href="{{ route('pages.home') }}" class="hover:cursor-pointer text-gray-100 font-semibold text-lg leading-none">
                Home
            </a>
        </li>
        @foreach( \Hup234design\FilamentCms\Models\Page::where('is_home',false)->visible()->pluck('title','slug') as $slug=>$title)
            <li class="leading-none px-4">
                <a href="{{ route('pages.page', $slug) }}" class="hover:cursor-pointer text-gray-100 font-semibold text-lg leading-none">
                    {{ $title }}
                </a>
            </li>
        @endforeach
{{--        <li class="leading-none px-6">--}}
{{--            <a href="{{ route('services.index') }}" class="hover:cursor-pointer text-gray-100 font-semibold text-lg leading-none uppercase">--}}
{{--                SERVICES--}}
{{--            </a>--}}
{{--        </li>--}}
{{--        <li class="leading-none px-6">--}}
{{--            <a href="{{ route('events.index') }}" class="hover:cursor-pointer text-gray-100 font-semibold text-lg leading-none uppercase">--}}
{{--                EVENTS--}}
{{--            </a>--}}
{{--        </li>--}}
{{--        <li class="leading-none px-6">--}}
{{--            <a href="{{ route('testimonials.index') }}" class="hover:cursor-pointer text-gray-100 font-semibold text-lg leading-none uppercase">--}}
{{--                TESTIMONIALS--}}
{{--            </a>--}}
{{--        </li>--}}
        <li class="leading-none px-4">
            <a href="{{ route('posts.index') }}" class="hover:cursor-pointer text-gray-100 font-semibold text-lg leading-none">
                Posts
            </a>
        </li>
    </ul>
</footer>

</body>
</html>
