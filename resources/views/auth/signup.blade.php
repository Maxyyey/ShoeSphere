<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup - ShoeSphere</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('/public/css/signup.css') }}">
    <script>
        function showNotification(message) {
            alert(message);  // You can replace this with any other type of notification
        }

        document.addEventListener('DOMContentLoaded', function() {
            const urlParams = new URLSearchParams(window.location.search);
            if (urlParams.has('signup') && urlParams.get('signup') === 'success') {
                showNotification('User created successfully!');
            }
        });
    </script>
</head>
<body>
    <div class="signup-container">
        <h1>SIGNUP</h1>
        <form action="{{ route('signup') }}" method="POST">
            @csrf
            <input type="text" name="username" placeholder="Username" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
            <button type="submit">Signup</button>
        </form>
        <div class="login-link">
            Already have an account? <a href="/login">Login</a>
        </div>
    </div>
</body>
</html>
