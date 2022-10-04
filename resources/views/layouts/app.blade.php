<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            {{-- @livewire('navigation-menu') --}}
            @livewire('navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>

{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        @livewireStyles
    </head>

    <body class="font-sans antialiased">
        <div class="w-full bg-white h-screen flex p-4 fixed">
            <div class="w-1/6  bg-indigo-700 rounded-3xl mr-4">
                @livewire('menu')
            </div>

            <div class="w-5/6 h-screen  bg-white">
                @include('partials.header')
                <main class="overflow-y-scroll h-4/5 my-4">
                        {{ $slot }}
                </main>
                <footer class="w-full h-8 bg-indigo-700 flex justify-end items-center rounded-3xl px-8">
                    <p class="text-white text-md">Hecho por Netikom <span>❤</span> con mucho amor</p>
                </footer>
            </div>
        </div>


        @stack('modals')
        @livewireScripts

        @stack('js')
        
        <script>
            Livewire.on('alert', function(message){
                Swal.fire({
                    title: '¡Buen trabajo!',
                    text: message,
                    icon: 'success',
                    confirmButtonText:'Gracias!',
                    })
                })
        </script>
    </body>
</html> --}}

