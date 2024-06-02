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
                    <div class="buttons">
                        <button class ="Edit"> Edit</button>
                    </div>
                    <h3 class="about-me-label">About Me</h3>
                    <div class="about-me-data">
                        <div class="hometown">
                            <p>Hometown</p>
                            <input type="text" name="hometown" class="input-field" readonly>
                        </div>
                        <div class="address">
                            <p>Lives In:</p>
                            <input type="text" name="lives-in" class="input-field" readonly>
                        </div>
                        <div class="elementary">
                            <p>Elementary:</p>
                            <input type="text" name="elementary" class="input-field" readonly>
                        </div>
                        <div class="high-school">
                            <p>High School:</p>
                            <input type="text" name="high-school" class="input-field" readonly>
                        </div>
                        <div class="college">
                            <p>College:</p>
                            <input type="text" name="college" class="input-field" readonly>
                        </div>
                        <div class="work">
                            <p>Work At:</p>
                            <p><input type="text" name="work-at" class="input-field" readonly></p>
                        </div>
                        <div class="birth-date">
                            <p>Birthday:</p>
                            <input type="text" name="birthday" class="input-field" readonly>
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