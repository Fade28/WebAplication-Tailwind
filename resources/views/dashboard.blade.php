@extends('layouts.dashboard')

@section('sidebar')
    <div class="flex flex-col h-full">
        <!-- Logo/Brand -->
        <div
            class="flex items-center px-6 py-4 border-b bg-primary-500 dark:bg-slate-700 border-gray-100 dark:border-slate-600 rounded-t-2xl">
            <div class="flex items-center space-x-3">
                <div
                    class="w-8 h-8 bg-gradient-to-r from-primary-900 to-primary-500 rounded-lg flex items-center justify-center">
                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z" />
                    </svg>
                </div>
                <span class="text-xl font-bold text-white">Sikeu Bumdes</span>
            </div>
        </div>

        <!-- Navigation Menu -->
        <nav class="flex-1 px-4 py-4 space-y-6 overflow-y-auto sidebar-scrollbar">
            <!-- Main Navigation -->
            <div class="space-y-1">
                <a href="#"
                    class="flex items-center px-3 py-2 text-primary-900 bg-primary-50 dark:bg-slate-800 dark:text-primary-400 rounded-lg font-medium group">
                    <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="2" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 0 1-1.125-1.125v-3.75ZM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-8.25ZM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-2.25Z" />
                    </svg>
                    Dashboard
                </a>

            </div>

            <!-- CUSTOM Section -->
            <div>
                <p class="text-xs font-semibold text-gray-400 dark:text-gray-500 uppercase tracking-wider mb-3 px-3">CUSTOM
                </p>
                <div class="space-y-1">
                    <a href="#"
                        class="flex items-center justify-between px-3 py-2 text-gray-600 hover:bg-gray-50 dark:text-gray-300 dark:hover:bg-slate-800 rounded-lg group">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                            </svg>
                            Application
                        </div>
                        <svg class="w-4 h-4 text-gray-400 dark:text-gray-500" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>

                    <a href="#"
                        class="flex items-center justify-between px-3 py-2 text-gray-600 hover:bg-gray-50 dark:text-gray-300 dark:hover:bg-slate-800 rounded-lg group">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                            </svg>
                            Pages
                        </div>
                        <svg class="w-4 h-4 text-gray-400 dark:text-gray-500" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- LAYOUT Section -->
            <div>
                <p class="text-xs font-semibold text-gray-400 dark:text-gray-500 uppercase tracking-wider mb-3 px-3">LAYOUT
                </p>
                <div class="space-y-1">
                    <a href="#"
                        class="flex items-center justify-between px-3 py-2 text-gray-600 hover:bg-gray-50 dark:text-gray-300 dark:hover:bg-slate-800 rounded-lg group">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z" />
                            </svg>
                            Themes
                        </div>
                        <svg class="w-4 h-4 text-gray-400 dark:text-gray-500" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>

                    <a href="#"
                        class="flex items-center justify-between px-3 py-2 text-gray-600 hover:bg-gray-50 dark:text-gray-300 dark:hover:bg-slate-800 rounded-lg group">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            General
                        </div>
                        <svg class="w-4 h-4 text-gray-400 dark:text-gray-500" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>

                    <a href="#"
                        class="flex items-center justify-between px-3 py-2 text-gray-600 hover:bg-gray-50 dark:text-gray-300 dark:hover:bg-slate-800 rounded-lg group">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                            </svg>
                            Builder
                        </div>
                    </a>
                </div>
            </div>

            <!-- ELEMENTS Section -->
            <div>
                <p class="text-xs font-semibold text-gray-400 dark:text-gray-500 uppercase tracking-wider mb-3 px-3">
                    ELEMENTS</p>
                <div class="space-y-1">
                    <a href="#"
                        class="flex items-center px-3 py-2 text-gray-600 hover:bg-gray-50 dark:text-gray-300 dark:hover:bg-slate-800 rounded-lg group">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        Invoice
                    </a>

                    <a href="#"
                        class="flex items-center justify-between px-3 py-2 text-gray-600 hover:bg-gray-50 dark:text-gray-300 dark:hover:bg-slate-800 rounded-lg group">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                            forms
                        </div>
                        <svg class="w-4 h-4 text-gray-400 dark:text-gray-500" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>

                    <a href="#"
                        class="flex items-center px-3 py-2 text-gray-600 hover:bg-gray-50 dark:text-gray-300 dark:hover:bg-slate-800 rounded-lg group">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                        </svg>
                        Board
                    </a>

                    <a href="#"
                        class="flex items-center px-3 py-2 text-gray-600 hover:bg-gray-50 dark:text-gray-300 dark:hover:bg-slate-800 rounded-lg group">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        Calander
                    </a>
                </div>
            </div>
        </nav>
    </div>
@endsection

@section('header')
    <!-- Top header content -->
    <div class="flex items-center justify-between">
        <!-- Left side - Dark Mode Toggle -->
        <div class="flex items-center space-x-4">
            <!-- Dark Mode Toggle -->
            <button id="darkModeToggle"
                class="p-2 text-gray-500 hover:text-primary-600 rounded-lg hover:bg-gray-100 dark:text-gray-400 dark:hover:text-primary-400 dark:hover:bg-slate-800 transition-colors">
                <svg id="sunIcon" class="w-5 h-5 hidden dark:block" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
                <svg id="moonIcon" class="w-5 h-5 block dark:hidden" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                </svg>
            </button>
        </div>

        <!-- Right side - Actions -->
        <div class="flex items-center space-x-4">
            <!-- Search -->
            <button
                class="p-2 text-gray-400 hover:text-gray-600 rounded-lg hover:bg-gray-100 dark:text-gray-500 dark:hover:text-gray-300 dark:hover:bg-slate-800">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </button>

            <!-- Notifications -->
            <button class="relative p-2 text-gray-400 hover:text-gray-600 rounded-lg hover:bg-gray-100">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-5 5v-5z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M11 19H6.5A2.5 2.5 0 014 16.5v-9A2.5 2.5 0 016.5 5h11A2.5 2.5 0 0120 7.5v1.5" />
                </svg>
                <span
                    class="absolute -top-1 -right-1 h-4 w-4 bg-red-500 text-white text-xs rounded-full flex items-center justify-center">2</span>
            </button>

            <!-- Messages -->
            <button class="relative p-2 text-gray-400 hover:text-gray-600 rounded-lg hover:bg-gray-100">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                </svg>
                <span
                    class="absolute -top-1 -right-1 h-4 w-4 bg-red-500 text-white text-xs rounded-full flex items-center justify-center">2</span>
            </button>

            <!-- User Avatar -->
            <div
                class="w-8 h-8 bg-gradient-to-r from-purple-400 to-pink-400 rounded-full flex items-center justify-center">
                <span class="text-white text-sm font-medium">U</span>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <!-- Dashboard Content -->
    <div class="space-y-6">
        <!-- Page Header -->
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-bold text-gray-900 dark:text-white">Dashboard</h1>
                <nav class="flex space-x-2 text-sm text-gray-500 mt-1">
                    <a href="#" class="hover:text-gray-700">Home</a>
                    <span>/</span>
                    <span class="text-gray-700">Analytic</span>
                </nav>
            </div>

            <div class="flex items-center space-x-4">
                <!-- Date Range Selector -->
                <div
                    class="bg-white dark:bg-slate-800 border border-gray-200 dark:border-slate-600 rounded-lg px-4 py-2 text-sm text-gray-600 dark:text-gray-300">
                    August 1, 2020 - August 31, 2020
                </div>

                <!-- Action Button -->
                <button class="bg-primary-600 hover:bg-primary-700 text-white px-4 py-2 rounded-lg text-sm font-medium">
                    Action ▼
                </button>
            </div>
        </div>

        <!-- Main Content -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Left side - Revenue Chart -->
            <div class="lg:col-span-2">
                <div
                    class="bg-white dark:bg-slate-800 rounded-xl shadow-sm border border-gray-200 dark:border-slate-600 p-6">
                    <!-- Chart Header -->
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Revenue</h3>
                        <div class="flex space-x-2">
                            <button class="px-3 py-1 text-sm text-gray-500 hover:text-gray-700">Month</button>
                            <button class="px-3 py-1 text-sm bg-primary-600 text-white rounded-lg">Week</button>
                            <button class="px-3 py-1 text-sm text-gray-500 hover:text-gray-700">Day</button>
                        </div>
                    </div>

                    <!-- Chart Area -->
                    <div class="relative h-80">
                        <!-- Y-axis labels -->
                        <div class="absolute left-0 top-0 h-full flex flex-col justify-between text-xs text-gray-500 pr-4">
                            <span>120</span>
                            <span>90</span>
                            <span>60</span>
                            <span>30</span>
                            <span>0</span>
                        </div>

                        <!-- Chart bars -->
                        <div class="ml-8 h-full flex items-end justify-between space-x-4">
                            <!-- Feb -->
                            <div class="flex flex-col items-center space-y-2">
                                <div class="w-12 bg-primary-300 rounded-t" style="height: 30%"></div>
                                <span class="text-xs text-gray-500">Feb</span>
                            </div>
                            <!-- Mar -->
                            <div class="flex flex-col items-center space-y-2">
                                <div class="w-12 bg-primary-500 rounded-t" style="height: 45%"></div>
                                <span class="text-xs text-gray-500">Mar</span>
                            </div>
                            <!-- Apr -->
                            <div class="flex flex-col items-center space-y-2">
                                <div class="w-12 bg-primary-600 rounded-t" style="height: 55%"></div>
                                <span class="text-xs text-gray-500">Apr</span>
                            </div>
                            <!-- May -->
                            <div class="flex flex-col items-center space-y-2">
                                <div class="w-12 bg-primary-700 rounded-t" style="height: 50%"></div>
                                <span class="text-xs text-gray-500">May</span>
                            </div>
                            <!-- Jun -->
                            <div class="flex flex-col items-center space-y-2">
                                <div class="w-12 bg-primary-800 rounded-t" style="height: 60%"></div>
                                <span class="text-xs text-gray-500">Jun</span>
                            </div>
                            <!-- Jul -->
                            <div class="flex flex-col items-center space-y-2">
                                <div class="w-12 bg-primary-900 rounded-t" style="height: 65%"></div>
                                <span class="text-xs text-gray-500">Jul</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right side - Export Card -->
            <div class="lg:col-span-1">
                <div
                    class="bg-gradient-to-br from-primary-500 to-primary-700 rounded-xl shadow-sm p-6 text-white relative overflow-hidden h-auto">
                    <!-- Background decorative elements -->
                    <div class="absolute top-4 right-4 w-16 h-16 bg-white bg-opacity-10 rounded-full"></div>
                    <div class="absolute top-12 right-8 w-8 h-8 bg-white bg-opacity-20 rounded-full"></div>
                    <div class="absolute bottom-4 left-4 w-12 h-12 bg-white bg-opacity-10 rounded-full"></div>

                    <!-- Export Header -->
                    <div class="relative z-10 mb-6">
                        <h3 class="text-xl font-bold mb-2">Export</h3>
                        <div class="flex items-center space-x-2">
                            <div class="w-8 h-8 bg-white bg-opacity-20 rounded-lg flex items-center justify-center">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M4 4a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2H4zm5 3a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM16 14l-3-3-2 2-4-4-3 3v2h12v-2z" />
                                </svg>
                            </div>
                            <div class="w-6 h-6 bg-primary-300 rounded-lg"></div>
                            <div class="w-4 h-4 bg-white bg-opacity-30 rounded"></div>
                        </div>
                    </div>

                    <!-- Stats -->
                    <div class="relative z-10 bg-white bg-opacity-10 rounded-lg p-4 mb-4">
                        <div class="text-sm opacity-90 mb-1">Paid Visit Total Visit</div>
                        <div class="text-2xl font-bold">655056646,454</div>
                    </div>

                    <div class="relative z-10 bg-white bg-opacity-10 rounded-lg p-4">
                        <div class="flex justify-between items-center">
                            <div>
                                <div class="text-sm opacity-90 mb-1">Expence</div>
                                <div class="text-lg font-semibold">$650</div>
                            </div>
                            <div>
                                <div class="text-sm opacity-90 mb-1">Commission</div>
                                <div class="text-lg font-semibold">$56</div>
                            </div>
                        </div>
                    </div>

                    <!-- Decorative illustration -->
                    <div class="absolute bottom-0 right-0 w-24 h-24 opacity-20">
                        <svg viewBox="0 0 100 100" class="w-full h-full">
                            <circle cx="20" cy="20" r="8" fill="currentColor" />
                            <circle cx="50" cy="30" r="12" fill="currentColor" />
                            <circle cx="80" cy="40" r="6" fill="currentColor" />
                            <path d="M10 80 Q50 60 90 80" stroke="currentColor" stroke-width="3" fill="none" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const darkModeToggle = document.getElementById('darkModeToggle');

        if (darkModeToggle) {
            darkModeToggle.addEventListener('click', function() {
                console.log('Dark mode toggle clicked'); // Debug log

                if (document.documentElement.classList.contains('dark')) {
                    // Whenever the user explicitly chooses light mode
                    localStorage.theme = 'light';
                    document.documentElement.classList.remove('dark');
                    console.log('Switched to light mode'); // Debug log
                } else {
                    // Whenever the user explicitly chooses dark mode
                    localStorage.theme = 'dark';
                    document.documentElement.classList.add('dark');
                    console.log('Switched to dark mode'); // Debug log
                }
            });
        } else {
            console.error('Dark mode toggle button not found!');
        }
    });
</script>
