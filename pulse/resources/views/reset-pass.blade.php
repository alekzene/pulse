<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Page</title>
    <link rel="stylesheet" href="{{ asset('css/reset-pass.css') }}">
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
            <form method="POST" action="{{ route('reset-password') }}">
                @csrf
                <div class="white-container">
                    <h2>Reset Password</h2>
                    @if($errors->has('resetError'))
                        <div class="error-message" style="background-color: #ffcccc; padding: 5px; margin-bottom: 10px;">
                            {{ $errors->first('resetError') }}
                        </div>
                    @endif
                    <input type="text" name="username" placeholder="Username" class="input-field" required>
                    <div class="password-container">
                        <input type="password" name="password" placeholder="Password" class="input-field" required>
                        <input type="password" name="password_confirmation" placeholder="Confirm Password" class="input-field" required>
                        <span class="password-icon" onclick="togglePasswordVisibility()"> <img src="{{ asset('img/icons/eye.png') }}" alt=""> </span>
                    </div>
                    
                    <button type="submit">Reset</button>
                </div>
            </form>
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
