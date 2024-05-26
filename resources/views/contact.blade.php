<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="{{ mix('/public/css/contact.css') }}">
</head>
<body>
    <header>
        <div class="logo">SHOESPHERE</div>
        <nav>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('shop') }}">Shop</a> 
            <a href="#">Features</a>
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('contact') }}">Contact</a>
        </nav>
        <div class="login-signup">
            <a href="{{ route('login') }}">Login</a> |
            <a href="{{ route('signup') }}">Signup</a>
        </div>
    </header>

    <div class="container">
        <h1>Contact Us</h1>
        
        <div class="contact-info">
            <h2>Contact Information</h2>
            <p><strong>Address:</strong> 123 Shoe Street, Cityville, State, Country</p>
            <p><strong>Phone:</strong> +123 456 789</p>
            <p><strong>Email:</strong> info@example.com</p>
        </div>

        <h2>Send Us a Message</h2>
            <form action="submit.php" method="post">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Your Message:</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <input type="submit" value="Submit">
            </form>
        </div>
    </div>
</body>
</html>
