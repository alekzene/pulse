<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feed</title>

    @include('templates.font')

    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/feed.css') }}" rel="stylesheet">
    <link href="{{ asset('css/post.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font.css') }}" rel="stylesheet">
</head>
<body>
    @include('templates.header')
    @include('templates.navbar')

    <div class="container">
        <div class="content">
            @include('templates.post')
        </div>
    </div>

    @include('templates.footer')
</body>
</html>
