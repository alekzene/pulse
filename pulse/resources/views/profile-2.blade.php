<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | Jimboy</title>

    @include('templates.font')

    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/profile-card-2.css') }}" rel="stylesheet">
    <link href="{{ asset('css/profile-2.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
</head>
<body>
    @include('templates.header')
    @include('templates.navbar')

    <div class="container">

        <div class="content">
            <div class="cards">
                @include('templates.profile-card-2')
                <div class="about-card">
                    <h3 class="about-me-label">About Me <a href="#" class="edit-link">Edit</a></h3>
                    <div class="about-me-data">
                        <div class="hometown">
                            <p>Hometown</p>
                            <input type="text" name="hometown" placeholder="Parañaque,, Philippines" class="input-field">
                        </div>
                        <div class="address">
                            <p>Lives In:</p>
                            <input type="text" name="lives-in" placeholder="Parañaque, Philippines" class="input-field">
                        </div>
                        <div class="elementary">
                            <p>Elementary:</p>
                            <input type="text" name="elementary" placeholder="Kalayaan Elementary School"  class="input-field">
                        </div>
                        <div class="high-school">
                            <p>High School:</p>
                            <input type="text" name="high-school" placeholder="Kalayaan National High School"  class="input-field">
                        </div>
                        <div class="college">
                            <p>College:</p>
                            <input type="text" name="college" placeholder="Centro Escolar University"  class="input-field">
                        </div>
                        <div class="work">
                            <p>Work At:</p>
                            <p><input type="text" name="work-at" placeholder="Tambay sa Comshop"  class="input-field"></p>
                        </div>
                        <div class="birth-date">
                            <p>Birthday:</p>
                            <input type="text" name="birthday" placeholder="December 30, 2002"  class="input-field" readonly>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('templates.footer')

    <script src="{{ asset('js/app.js') }}"></script>
    {{-- <script src="{{ asset('js/navbar-sticky.js') }}"></script> --}}
</body>
</html>