<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pulse - Homepage
    </title>
    <link rel="stylesheet" href="{{ asset('css/feed.css')}}">
</head>
<body>
    <header>
        <div class="logo">
            <img src="img/pulse-logo.png" alt="Pulse Logo" />
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Search">
            <img src="img/icons/search.png" alt="Search Icon" class="search-icon">
        </div>
    </header>
    <main>
    <div class="container">
        <div class="sidebar">
            <a href="#" class="profile-link">
                <div class="profile">
                    <img src="img/user-icon.png" alt="">
                    <p>Profile</p>
                </div>
            </a>
            <ul>
                <li><a href="#"><img src="img/icons/home.png" alt=""> News Feed</a></li>
                <li><a href="#"><img src="img/icons/bell.png" alt=""> Notification</a></li>
                <li><a href="#"><img src="img/icons/settings.png" alt=""> Settings</a></li>
                <li><a href="#"><img src="img/icons/help.png" alt=""> Help</a></li>
            </ul>
        </div>
        <main>
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
