<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Email</title>
    <link rel="stylesheet" href="{{ asset('css/privacy-change-email.css')}}">

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
                        <h1><img src="img/icons/email.png" alt=""> Change Email</h1>
                        <input type="text" name="userName" placeholder="New E-mail" class="input-field" required>
                        <div class ="buttons">
                            <button class="Cancel">Cancel</button>
                            <button class="Update">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>