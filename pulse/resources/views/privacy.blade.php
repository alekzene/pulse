<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy</title>

    @include('templates.font')
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/privacy.css') }}" rel="stylesheet">

    
</head>
<body>
    @include('templates.header')
    @include('templates.navbar')
    <div class="privacy-container">
        <div class="privacy-content">
            <div class="privacy-panel">
                <div class="credentials-panel">
                    <h1>Privacy</h1>
                    <ul>
                        <li>
                            <img src="{{ asset('img/icons/email.png') }}" alt=""> 
                            Email: ‎ ‎ ‎ ‎ ‎ ‎‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ 
                            <input type="text" name="userEmail" value="{{ Auth::user()->email }}" class="input-field" readonly> 
                            <a href="{{ route('privacy-change-email') }}" class="Change-Email">  Change</a>
                        </li> 
                        <li>
                            <img src="{{ asset('img/icons/lock.png') }}" alt=""> 
                            Password: 
                            <input type="password" name="userPass" value="********" class="input-field" readonly> 
                            <a href="{{ route('privacy-change-password') }}" class="Change-Password"> Change</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>