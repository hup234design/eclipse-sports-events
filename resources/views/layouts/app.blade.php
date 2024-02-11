<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    @googlefonts
    @livewireStyles
</head>
<body class="antialiased font-sans">

<x-app-header />

{{--<div class="bg-eclipse-primary text-white font-bold">--}}
{{--    {{ Breadcrumbs::render('posts') }}--}}
{{--</div>--}}

@section('heading')
@show

<main class="mt-20">
    <div class="container">
        {{ $slot }}
    </div>
    @section('blocks')
    @show
</main>

<x-app-footer />

@include('cookie-consent::index')

@livewireScripts
</body>
</html>
