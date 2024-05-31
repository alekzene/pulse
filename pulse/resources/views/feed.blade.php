<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pulse - Homepage
    </title>
    <link rel="stylesheet" href="{{ asset('css/feed.css')}}">

    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">

</head>
<body>
        @include('templates.header')
        @include('templates.navbar')
            <div class="main-content">
                <div class="feed-container">
                    <div class="post-container">
                        <div class="green-create-post-container">
                            <div class="white-container">
                                <div class="new-post">
                                <img src="img/user-icon.png" alt="">
                                <input type="text" placeholder="What are your thoughts today?" readonly>

                                <button id="createPostButton">Create Post</button>
                                </div>
                            </div>
                        </div>
            <div class="news-feed">
                <div class="post">
                        <div class="post-header">
                        <img src="img/user-profile-icon.png" alt="Profile Picture">
                            <div>
                            <h4>Nath❤️Mich</h4>
                            <p>@NathanielMapagmahal25</p>
                            </div>
                        </div>
                        <div class="post-description">
                            <p>Feels Like Summer when Im with you parang Islang Pantropiko.</p>
                        </div>
                    <div class="post-images">
                        <img src="img/picture-1.png" alt="">
                        <img src="img/picture-2.png" alt="">
                    </div>
                </div>
                <!-- Repeat post div for more posts -->
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
</html>
