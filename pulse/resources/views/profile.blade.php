<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <div class="logo">
            <img src="img/pulse-logo.png" alt="" />
        </div>
        <nav class="menu">
            <a class="help-link" href="#"> Help </a>
            <a class="sign-in-link" href="#"> Sign In </a>
        </nav>
    </header>

    <main>
        @include('templates.navbar')
        <section id="profile-content">
            <div class="profile-header">
                <img src="images/profile.jpg" alt="Profile Picture">
                <div>
                    <h1>Nath❤️Mich</h1>
                    <p>@NathanielMapagmahal25</p>
                </div>
        </section>

    </main>

    @include('templates.footer')

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>