<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="antialiased">

<x-header-layout />

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

<x-footer-layout />

@include('cookie-consent::index')

</body>
</html>
