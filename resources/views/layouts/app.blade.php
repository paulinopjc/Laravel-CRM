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

        <!-- CoreUI CSS -->
        <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet"/>

        <!-- Scripts -->
        @vite([
            'resources/css/app.css',
            'resources/css/coreui.min.css',
            'resources/js/app.js'
        ])

    </head>
    <body class="c-app">
        <div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
            <div class="c-sidebar-brand d-lg-down-none">
                CRM
            </div>
            @include('partials.sidemenu')
        </div>
        <div class="c-wrapper c-fixed-components bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="c-header c-header-light c-header-fixed c-header-with-subheader">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <div class="c-body">
                <main class="c-main">
                    {{ $body }}
                </main>
                <footer class="c-footer">
                    <div>© {{ now()->year }} Dewgtech.</div>
                </footer>
            </div>
        </div>
    </body>

</html>
