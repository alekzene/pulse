<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifications | Blade</title>

    @include('templates.font')

    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/notification.css') }}" rel="stylesheet">
    <link href="{{ asset('css/page-not-found.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
</head>
<body>
    @include('templates.header')
    @include('templates.navbar')

    <div class="container">
        <div class="content">
            @include('templates.page-not-found')
        </div>
    </div>

    @include('templates.footer')

    <script src="{{ asset('js/app.js') }}"></script>
    {{-- <script src="{{ asset('js/navbar-sticky.js') }}"></script> --}}
</body>
</html>