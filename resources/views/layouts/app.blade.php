<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel Ecom') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Heading -->
        <header class="bg-white shadow">
            <div class="py-6 px-4 sm:px-6 lg:px-8">

            </div>
        </header>

        <!-- Page Content -->
        <main>

            <div class="py-12">
                <div class="sm:px-6 lg:px-8">
                    <div class="bg-white p-4 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="flex w-full">
                            <div class="w-1/4">
                                @include('layouts.admin-sidenav')
                            </div>

                            <div class="w-3/4">
                                @yield('content')
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </main>

        <footer class="bg-white py-6 px-4 sm:px-6 lg:px-8">
            <p class="text-center">&copy; 2024 | ShinyEcom - All rights reserved.</p>
        </footer>
    </div>
</body>

</html>