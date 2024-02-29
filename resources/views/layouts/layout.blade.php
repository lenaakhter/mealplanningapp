<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Stylesheet -->
        <link rel="stylesheet" href="/css/global.css">
        <title>Calfoodie</title>
    </head>

    @yield('content')
</html>
