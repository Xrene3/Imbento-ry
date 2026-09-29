<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? config('app.name') }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
    </head>
    <body>
        
        
        <div class="w-full min-h-screen max-h-screen overflow-y-auto flex">
            <x-navigation.sidebar/>

            <div class="w-full p-2.5 flex justify-center ml-80">
                <div class="md:max-w-7xl w-full">
                    {{ $slot }}
                </div>
            </div>
        </div>

        @livewireScripts
    </body>
</html>
