<!DOCTYPE html>
<html lang="en" class="light">

<head>
    <meta charset="utf-8">
    <link href="{{ asset('dist/images/logo.svg') }}" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $judul }}</title>
    <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}" />

    <style>
    
        .btn-primaryy {
            --tw-border-opacity: 1 !important;
            border-color: rgb(var(--color-primary) / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(var(--color-primary) / var(--tw-bg-opacity)) !important;
            --tw-text-opacity: 1 !important;

            color: aliceblue !important;
        }
    </style>

</head>

<body class="{{ Request::is('login') ? 'login' : ''  }} {{ Request::is('register') ? 'login' : ''  }} py-5 md:py-0 bg-black/[0.15] dark:bg-transparent">

    @yield('main')

    <script src="{{ asset('dist/js/app.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    
</body>

</html>