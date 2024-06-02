<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Pulse</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="container">
        <div class="left-panel">
            <div class="green-container">
                <h1>Capture your thoughts.<br>Share your<br>voice.</h1>
            </div>
            <img src="{{ asset('img/mockup2x.png') }}" alt="Phone Image">
        </div>
        <div class="right-panel">
            <div class="logo">
                <img src="{{ asset('img/pulse-logo.png') }}" alt="Pulse Logo">
            </div>
            <h2>Welcome Back</h2>
            <p>Please login to your account</p>
            <form method="POST" action="{{ url('login') }}">
                @csrf
                <input type="text" name="userName" placeholder="Username" class="input-field" required>
                <div class="password-container">
                    <input type="password" name="userPass" placeholder="Password" class="input-field" required>
                    <span class="password-icon" onclick="togglePasswordVisibility()"> <img src="{{ asset('img/icons/eye.png') }}" alt=""> </span>
                </div>
                <a href="reset-pass" class="forgot-password">Forgot Password?</a>

                <button type="submit">Login</button>
                
                @if ($errors->has('loginError'))
                    <div class="alert alert-danger" role="alert">
                        {{ $errors->first('loginError') }}
                    </div>
                @endif
                
            </form>
            <p class="signup">Don't have an account? <a href="create-acct">Sign Up</a></p>
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