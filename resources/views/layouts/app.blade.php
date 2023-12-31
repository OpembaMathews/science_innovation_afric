<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Science Innovation Africa') }}</title>
         <!-- Favicons -->
        <link href="{{ asset('/img/Scinov Logo.png') }}" rel="icon">
        <link href="{{ asset('/img/Scinov Logo.png') }}" rel="apple-touch-icon">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        
        <!-- Template Main CSS File -->
        <link href="{{ asset('/css/style.css') }}" rel="stylesheet">

        <!-- Core theme CSS & JS (includes Bootstrap)-->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-vh-100 bg-gray-100 d-flex flex-column">
    
            @include('layouts.navigation')
    
            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow-sm p-3">
                    <div class="container">
                        {{ $header }}
                    </div>
                </header>
            @endif
    
            <!-- Page Content -->
            <main class="container py-4">
                {{ $slot }}
            </main>
    
        </div>
    
        <!-- Bootstrap JS scripts (if needed) -->
        <!-- Add Bootstrap JS scripts here -->
    
    </body>
</html>
