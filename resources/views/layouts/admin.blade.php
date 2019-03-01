<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>
@include('partials.admin-header')
<div class="container">
    @yield('content')
</div>
</body>
</html>