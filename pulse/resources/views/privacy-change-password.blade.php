<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" href="{{ asset('css/privacy-change-password.css')}}">

    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">

</head>
<body>
    @include('templates.header')
    @include('templates.navbar')
    <div class="privacy-container">
        <div class="privacy-content">
            <div class="privacy-panel">
                <div class="credentials-panel">
                    <h1><img src="{{ asset('img/icons/lock.png') }}" alt=""> Change Password</h1>
                    <form method="POST" action="{{ route('update-password') }}">
                        @csrf
                        <input type="password" name="current_password" placeholder="Previous Password" class="input-field-1" required>
                        <input type="password" name="new_password" placeholder="New Password" class="input-field-2" required>
                        <input type="password" name="new_password_confirmation" placeholder="Confirm New Password" class="input-field-3" required>
                        <div class="buttons">
                            <button type="button" class="Cancel" onclick="window.location='{{ route('privacy') }}'">Cancel</button>
                            <button type="submit" class="Update">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>