<!doctype html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'VetCare')</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body class="bg-light">

@include('layout.navbar')

<main class="container py-5">
    @yield('content')
</main>

@include('layout.footer')

</body>
</html>
