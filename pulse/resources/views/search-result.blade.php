<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Result</title>

    <link rel="stylesheet" href="{{ asset('css/search-result.css')}}">
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
</head>
<body>
    @include('templates.header')
    @include('templates.navbar')
    <div class="main-content">
        <div class="feed-container">
            <p>Search result for "<b>nat nat<b>"</p>
            <div class="search-result-container">
                <div class="profile-cards">
                    <div class="profile-card">
                        <div class="green-background"></div>
                            <img src="profile-pic.jpg" alt="Profile Picture">
                            </div>
                        </div>
                        <div class="profile-card">
                            <div class="green-background"></div>
                                </div>
                            </div>
                            <div class="profile-card">
                                <div class="green-background"></div>
                                    <img src="profile-pic.jpg" alt="Profile Picture">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</body>
</html>
