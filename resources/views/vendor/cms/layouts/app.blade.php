<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="antialiased">

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
                @isset($menus['primary_header'])
                    @foreach($menus['primary_header'] as $item)
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
                @endisset
            </ul>
            <a class="lg:hidden" href="{{ route('pages.home') }}">
                <x-heroicon-s-bars-4 class="w-12 h-12 text-eclipse-blue" />
            </a>
        </div>
    </div>
    </section>
</header>

{{--<div class="bg-eclipse-primary text-white font-bold">--}}
{{--    {{ Breadcrumbs::render('posts') }}--}}
{{--</div>--}}

{{--@section('header')--}}
{{--@show--}}

<img src="https://eclipsesportsevents.com/app/default/assets/images/a30806fa48c0e859066bb3284c035c30.jpg?v=1580543170" />

<main class="my-16">
    <div class="container">
        {{ $slot }}
    </div>
</main>

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
                <p>Latest News</p>
                <p>Eclipse hosts clients at first Six Nations England match</p>
                <p>Eclipse celebrates World Cup England Win</p>
                <p>Cricket World Cup comes to Taunton</p>
                <p>Eclipse CEO completes charity cycle ride with cricketing legend</p>
            </div>
            <div class="text-center lg:order-2">
                <p>Upcoming Events</p>
                <p>Super Bowl</p>
                <p>Cheltenham Festival</p>
                <p>NCCA Final Four</p>
                <p>Masters 2024</p>
                <p>The Kentucky Derby</p>
                <p>PGA Championship</p>
                <p>Monaco Grand Prix</p>
                <p>The French Open</p>
                <p>View All Events</p>
            </div>
        </div>
        <ul class="flex flex-wrap items-center justify-center">
            @isset($menus['primary_footer'])
                @foreach($menus['primary_footer'] as $item)
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
            @endisset
        </ul>
        <div class="text-center">
            <p>©2024 Eclipse Sports Events, All rights reserved.</p>
        </div>
    </div>
</footer>

@include('cookie-consent::index')

</body>
</html>
