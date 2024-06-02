<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Notification - Ongoing </title>

    @include('templates.font')
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/notification.css') }}" rel="stylesheet">
    <link href="{{ asset('css/page-not-found.css') }}" rel="stylesheet">
</head>
<body>
    @include('templates.header')
    @include('templates.navbar')  
      
    <div class="main-content">
        <div class="feed-container">
            <div class="warning-panel">
                <h1>Oops! This page is under construction.</h1>
                <p>Developers are working hard to bring you this feature.</p>
            </div>
        </div>
    </div>
</body>
</html>