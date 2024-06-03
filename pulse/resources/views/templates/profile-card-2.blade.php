<div class="profile-card">
    <img class="profile-pic" id="profile-pic" src="{{ $userInfo->profilePic ? asset($userInfo->profilePic) : asset('img/2nd-icon-user-profile.png') }}" alt="Profile Picture">
    <form id="image-form" style="display: none;">
        <input type="file" id="file-input" accept="image/*" onchange="uploadProfileImage(event)">
    </form>
    <div class="user-details">
        <h1 class="display-name">{{ $user->userName }}</h1>
        <p class="username">{{ Auth::user()->email }}</p>
    </div>
    <textarea class="bio" id="bio" placeholder="What do you have in mind...">
        @if(isset($userInfo)){{ $userInfo->bio }}@endif
    </textarea>
</div>

<script src="{{ asset('js/profile.js') }}"></script>