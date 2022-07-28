<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <link rel="icon" href="{{ asset('images/favicon.png') }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <style>
            .dropdown-toggle::after {
            display: none;
            }

            .bg-light {
                background: #fff !important;
            }

            .sidebar {
                background: rgb(241, 236, 236);
            }

            .help .nav-link {
                padding: 0 0.5rem !important;
            }

            .btn-group-of-in-row .btn {
                border: 0.1rem solid #ddd;
                border-radius: 40px;
            }

            .btn-group-of-in-row .btn-primary-1 {
                background: #0DABD8;
                color: #fff;
            }

            .btn-group-of-in-row .btn-primary-2 {
                background: #EF5350;
                color: #fff;
            }
        </style>

        <!-- Scripts -->
        @routes
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.26.0/moment.min.js"></script>
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="bg-light">
        @inertia

        @env ('local')
            <script src="http://localhost:3000/browser-sync/browser-sync-client.js"></script>
        @endenv
    </body>
</html>
