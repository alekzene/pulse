<div class="profile-card">
    <img class="profile-pic" src="img/2nd-icon-user-profile.png" alt="Profile Picture">
    <div class="user-details">
        <h1 class="display-name">{{ $user->userName }}</h1>
        <p class="username">{{ Auth::user()->email }}</p>
    </div>
    <textarea class="bio" id="bio" placeholder="What do you have in mind...">
        @if(isset($userInfo)){{ $userInfo->bio }}@endif
    </textarea>
</div>