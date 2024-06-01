<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Page</title>
    <link rel="stylesheet" href="{{ asset('css/create-acct.css') }}">
</head>
<body>
    <div class="container">
        <div class="left-panel">

            <div class="green-container">
                <h1>You are few<br>steps away<br>from creating<br>an account</h1>

                <div class="logo">
                    <img src="{{ asset('img/pulse-logo-white-text.png') }}" alt="Pulse Logo">
                </div>
            </div>

        </div>
        <div class="right-panel">
            <form method="POST" action="{{ route('create-acct') }}">
                @csrf
                <div class="white-container">
                    <h2>Creating An Account</h2>
                    <div class="horizontal-fields">
                        <input type="text" name="name" placeholder="Name" class="input-field" required>
                        <select name="gender" class="input-field" required>
                            <option value="" disabled selected>Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <input type="text" name="username" placeholder="Username" class="input-field" required>
                    <input type="email" name="email" placeholder="Email" class="input-field" required>
                    <div class="password-container">
                        <input type="password" name="password" placeholder="Password" class="input-field" id="password" required>
                        <input type="password" name="password_confirmation" placeholder="Confirm Password" class="input-field" id="confirm-password" required>
                        <span class="password-icon" onclick="togglePasswordVisibility()"> <img src="{{ asset('img/icons/eye.png') }}" alt=""> </span>
                    </div>
                    
                    <button type="submit">Register</button>
                </div>
            </form>
            <p class="signup">Already have an account?<a href="login"> Sign In</a></p>
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
