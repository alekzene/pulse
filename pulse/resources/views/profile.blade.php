<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
</head>
<body>
    @include('templates.header')

    <div class="profile-body">
        @include('templates.navbar')

        <div class="profile-content">
            <div class="profile-header">
                <img class="profile-pic" src="img/user-profile-icon.png" alt="Profile Picture">
                <div class="user-details">
                    <h1 class="display-name">Nath❤️Mich</h1>
                    <p class="username">@NathanielMapagmahal25</p>
                </div>
                <button class="add-friend-button">Add Friend</button>
                <p class="bio">love ko si mitch</p>
            </div>
            <div class="about-card">
                About Me
            </div>
        </div>

    </div>

    @include('templates.footer')

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>