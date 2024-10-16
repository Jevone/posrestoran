<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        @vite('resources/css/app.css') 
    </head>
    <body class="bg-base-200 min-h-screen">
        @auth
            
        @endauth

        @guest
            <div class="flex flex-col justify-center items-center h-screen">
                {{ $slot }}
            </div>
        @endguest
    </body>
</html>
