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
            <div class="white-container">
                <h2>Reset Password</h2>
                <form>
                    <input type="text" placeholder="Username" class="input-field">
                    <div class="password-container">
                        <input type="password" placeholder="Password" class="input-field">
                        <input type="password" placeholder="Confirm Password" class="input-field">
                        <span class="password-icon" onclick="togglePasswordVisibility()"> <img src="{{ asset('img/icons/eye.png') }}" alt=""> </span>
                    </div>
                    
                    <button type="submit">Reset</button>
                </form>
                <p class="signup">Already have an account? <a href="#"> Sign In</a></p>
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
