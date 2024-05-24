<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - ShoeSphere</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('/public/css/login.css') }}">
   
</head>
<body>
    <div class="login-container">
        <h1>LOGIN</h1>
        <form action="/login" method="POST">
            @csrf
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <div class="signup-link">
            Don’t have an account? <a href="/signup">Signup</a>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('form').addEventListener('submit', function(e) {
                e.preventDefault(); // Prevent the default form submission
                // Redirect to the home page after successful login
                window.location.href = "/#"; // Change "/home" to the actual route of your home page
            });
        });
    </script>
</body>
</html>
