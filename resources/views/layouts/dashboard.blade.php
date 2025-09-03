<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - Dashboard</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Dark Mode Script -->
    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        document.documentElement.classList.toggle(
            "dark",
            localStorage.theme === "dark" ||
            (!("theme" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches)
        );
    </script>
</head>

<body class="bg-gray-100 dark:bg-slate-900 font-sans antialiased">
    <div class="min-h-screen p-4">
        <!-- Floating Sidebar -->
        <div
            class="fixed left-4 top-4 bottom-4 z-50 w-64 transform transition-transform duration-300 ease-in-out lg:translate-x-0 -translate-x-full lg:block">
            <div
                class="h-full bg-white dark:bg-slate-800 rounded-2xl shadow-xl border border-gray-200 dark:border-slate-700">
                @yield('sidebar')
            </div>
        </div>

        <!-- Main Content Area -->
        <div class="lg:ml-72 flex flex-col min-h-screen">
            <!-- Top Header -->
            <header
                class="bg-white dark:bg-slate-800 shadow-sm border border-gray-200 dark:border-slate-700 rounded-2xl mb-4 px-6 py-4">
                @yield('header')
            </header>

            <!-- Page Content -->
            <main
                class="flex-1 bg-white dark:bg-slate-800 rounded-2xl shadow-sm border border-gray-200 dark:border-slate-700 p-6">
                @yield('content')
            </main>
        </div>
    </div>

    <!-- Mobile menu button (for responsive) -->
    <div class="lg:hidden fixed top-6 left-6 z-50">
        <button id="mobile-menu-button"
            class="bg-white dark:bg-slate-800 p-3 rounded-xl shadow-lg border border-gray-200 dark:border-slate-700">
            <svg class="w-6 h-6 text-gray-600 dark:text-gray-300" fill="none" stroke="currentColor"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                </path>
            </svg>
        </button>
    </div>

    <!-- Mobile Sidebar Overlay -->
    <div id="sidebar-overlay" class="fixed inset-0 z-40 bg-gray-900 bg-opacity-50 transition-opacity lg:hidden hidden">
    </div>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const sidebar = document.querySelector('.fixed.left-4.top-4.bottom-4');
            const overlay = document.getElementById('sidebar-overlay');

            sidebar.classList.toggle('-translate-x-full');
            overlay.classList.toggle('hidden');
        });

        // Close sidebar when clicking overlay
        document.getElementById('sidebar-overlay').addEventListener('click', function() {
            const sidebar = document.querySelector('.fixed.left-4.top-4.bottom-4');
            const overlay = document.getElementById('sidebar-overlay');

            sidebar.classList.add('-translate-x-full');
            overlay.classList.add('hidden');
        });
    </script>
</body>

</html>
