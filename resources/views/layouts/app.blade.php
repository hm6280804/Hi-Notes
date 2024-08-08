<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>


        {{-- footer --}}
        <footer class="bg-gray-800 text-white py-4">
            <div class="container mx-auto flex flex-col md:flex-row items-center justify-between">
                <div class="flex items-center space-x-4">
                    <!-- Name -->
                    <span class="text-sm flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1 text-teal-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 19.793A3 3 0 0111.37 16.12m0 0a3 3 0 10-5.955 1.378m5.955-1.378L12 20l1.63-1.63a3 3 0 105.955-1.378m0 0a3 3 0 01-5.955-1.378m5.955 1.378A3 3 0 0118.879 19.793M12 20v2m0-18a9 9 0 110 18m0-18V2" />
                        </svg>
                        Muhammad Hanif
                    </span>
        
                    <!-- Email -->
                    <a href="mailto:hm6280804@gmail.com" class="text-sm flex items-center hover:underline">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1 text-teal-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.586 9L12 13.586 7.414 9M3 6h18a1 1 0 011 1v10a1 1 0 01-1 1H3a1 1 0 01-1-1V7a1 1 0 011-1z" />
                        </svg>
                        hm6280804@gmail.com
                    </a>
        
                    <!-- Profession -->
                    <span class="text-sm flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1 text-teal-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v3a1 1 0 01-1 1H4a1 1 0 01-1-1V4zm1 9h16a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6a1 1 0 011-1zm3-1V7h10v5H7z" />
                        </svg>
                        Full Stack Web Developer
                    </span>
                </div>
        
                <div class="mt-2 md:mt-0 text-sm">
                    © {{ date('Y') }} Hi Notes. All rights reserved.
                </div>
            </div>
        </footer>
        >
        
    </body>
</html>
