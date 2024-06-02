<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | Pulse</title>

    @include('templates.font')

    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/profile-card.css') }}" rel="stylesheet">
    <link href="{{ asset('css/post.css') }}" rel="stylesheet">
    <link href="{{ asset('css/profile.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
</head>
<body>
    @include('templates.header')
    @include('templates.navbar')

    <div class="container">

        <div class="content">
            <div class="cards">
                @include('templates.profile-card')
    
                <div class="about-card">
                    <h3 class="about-me-label">About Me</h3>
                    <div class="about-me-data">
                        <div class="hometown">
                            <p>Hometown</p>
                            <p>Bicol, Philippines</p>
                        </div>
                        <div class="address">
                            <p>Lives In</p>
                            <p>Makati, Philippines</p>
                        </div>
                        <div class="elementary">
                            <p>Elementary</p>
                            <p>Rizal Elementary School</p>
                        </div>
                        <div class="high-school">
                            <p>High School</p>
                            <p>Makati Science High School</p>
                        </div>
                        <div class="college">
                            <p>College</p>
                            <p>Centro Escolar University</p>
                        </div>
                        <div class="high-school">
                            <p>High School</p>
                            <p>Makati Science High School</p>
                        </div>
                        <div class="birth-date">
                            <p>Birthday</p>
                            <p>October 19, 2003</p>
                        </div>
                    </div>
                </div>
            </div>
            @include('templates.post')
        </div>
    </div>

    @include('templates.footer')

    <script src="{{ asset('js/app.js') }}"></script>
    {{-- <script src="{{ asset('js/navbar-sticky.js') }}"></script> --}}
</body>
</html>