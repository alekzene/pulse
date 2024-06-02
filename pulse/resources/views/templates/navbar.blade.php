<div class="navbar">
    <a href="profile" class="profile-link">
        <div class="profile">
            <img src="img/user-icon.png" alt="">
            <p>Profile</p>
        </div>
    </a>
    <ul>
        <li><a href="feed"><img src="img/icons/home.png" alt=""> News Feed</a></li>
        <li><a href="notification"><img src="img/icons/bell.png" alt=""> Notification</a></li>
        <li><a href="privacy"><img src="img/icons/settings.png" alt=""> Settings</a></li>
        <li><a href="help"><img src="img/icons/help.png" alt=""> Help</a></li>
        <li><a href="login"><img src="img/icons/log-out.png" alt=""> Log Out</a></li>
        <form method="GET" action="{{route('create-post')}}">
            @csrf
            <button class="post-button">Post</button>
        </form>
    </ul>
</div>