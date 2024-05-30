<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pulse - Homepage
    </title>
    <link rel="stylesheet" href="{{ asset('css/newsFeed.css')}}">
</head>
<body>
    <header>
        <div class="logo">
            <img src="images/Pulse Logo.png" alt="Pulse Logo" />
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Search">
            <img src="images/Group 20.png" alt="Search Icon" class="search-icon">
        </div>
    </header>
    <main>
    <div class="container">
        <div class="sidebar">
            <a href="#" class="profile-link">
                <div class="profile">
                    <img src="images/image 107.png" alt="">
                    <p>Profile</p>
                </div>
            </a>
            <ul>
                <li><a href="#"><img src="images/Home Icon.png" alt=""> News Feed</a></li>
                <li><a href="#"><img src="images/Bell Icon.png" alt=""> Notification</a></li>
                <li><a href="#"><img src="images/Settings Icon.png" alt=""> Settings</a></li>
                <li><a href="#"><img src="images/Help Icon.png" alt=""> Help</a></li>
            </ul>
        </div>
        <div class="main-content">
            <div class="header">
                </div>
            </div>
            <div class="new-post">
                <img src="profile.jpg" alt="Profile Picture">
                <input type="text" placeholder="What are your thoughts today?">
                <button>Post</button>
            </div>
            <div class="news-feed">
                <div class="post">
                    <div class="post-header">
                        <img src="profile.jpg" alt="Profile Picture">
                        <div>
                            <h4>Nath❤️Mich</h4>
                            <p>@NathanielMapagmahal25</p>
                        </div>
                    </div>
                    <p>Feels Like Summer when Im with you parang Islang Pantropiko.</p>
                    <div class="post-images">
                        <img src="image1.jpg" alt="Image 1">
                        <img src="image2.jpg" alt="Image 2">
                    </div>
                </div>
                <!-- Repeat post div for more posts -->
            </div>
        </div>
    </div>
</body>
</html>
