<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password | Pulse</title>
    <link rel="stylesheet" href="{{ asset('css/reset-pass-done.css') }}">
</head>
<body>
    <div class="container">
        <div class="left-panel">

            <div class="green-container">
                <h1>Forgot your<br>password?</h1>

                <div class="logo">
                    <img src="{{ asset('img/pulse-logo-white-text.png') }}" alt="Pulse Logo">
                </div>
            </div>
         

        </div>
        <div class="right-panel">
            <div class="sage-container">
                    <img src="{{ asset('img/icons/verify.png') }}" alt="">
                    <h2>Password Changed!</h2>
                    <h3>Your password has been changed successfully.</h3>
                    <form method="GET" action="{{ route('login') }}">
                        <button type="submit">Proceed</button>
                    </form>

            </div>
        
        </div>
    </div>

    <script>
        function togglePasswordVisibility() {
            const passwordFields = document.querySelectorAll('.password-container .input-field');
            passwordFields.forEach(field => {
                if (field.type === 'password') {
                    field.type = 'text';
                } else {
                    field.type = 'password';
                }
            });
        }
    </script>
</body>
</html>
