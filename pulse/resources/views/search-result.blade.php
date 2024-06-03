<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search | Pulse</title>

    @include('templates.font')
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/search-result.css') }}" rel="stylesheet">
    <link href="{{ asset('css/profile-card.css') }}" rel="stylesheet">
</head>
<body>
    @include('templates.header')
    @include('templates.navbar')
    <div class="container">
        <p class="search-result-label">Search results for "<b>nat nat<b>"</p>
        <div class="content">
            <div class="profile-cards">
                @include('templates.profile-card')
                @include('templates.profile-card')
                @include('templates.profile-card')
             </div>
        </div>
    </div>
</body>
</html>
