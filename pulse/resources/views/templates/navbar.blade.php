<meta name="csrf-token" content="{{ csrf_token() }}">

<div class="navbar">
    <a href="profile-2" class="profile-link">
        <div class="profile">
            <img id="navbar-profile-pic" src="{{ isset($userInfo->profilePic) ? asset('storage/profile_images/' . $userInfo->profilePic) : asset('img/2nd-icon-user-profile.png') }}" alt="">
            <p>Profile</p>
        </div>
    </a>
    <ul>
        <li><a href="feed"><img src="img/icons/home.png" alt=""> News Feed</a></li>
        <li><a href="notification"><img src="img/icons/bell.png" alt=""> Notifications</a></li>
        <li><a href="privacy"><img src="img/icons/settings.png" alt=""> Settings</a></li>
        <li><a href="help-2"><img src="img/icons/help.png" alt=""> Help</a></li>
        <li><a href="login"><img src="img/icons/log-out.png" alt=""> Log Out</a></li>
        <form method="GET" action="{{route('create-post')}}">
            @csrf
            <button class="post-button">Post</button>
        </form>
    </ul>
</div>