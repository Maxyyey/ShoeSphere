<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOESPHERE</title>
    <link rel="stylesheet" href="{{ mix('/public/css/about.css') }}">
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
        <h1>About Our Shoe Store</h1>
        <p>Welcome to our shoe store! We're passionate about providing high-quality footwear for every occasion.</p>
        <p>At our store, you'll find a wide selection of shoes, ranging from casual sneakers to elegant dress shoes, designed to meet the diverse needs and preferences of our customers.</p>
        <p>Our team consists of experienced shoe enthusiasts who carefully curate our collection, ensuring that each pair meets our standards of style, comfort, and durability.</p>
        <p>Whether you're strolling through the city streets, hitting the gym, or attending a formal event, we've got the perfect pair of shoes to complement your style and enhance your comfort.</p>
        <p>Customer satisfaction is our top priority. We're dedicated to providing exceptional service, from helping you find the right fit to ensuring a smooth shopping experience from start to finish.</p>
        <p>If you have any questions, feedback, or need assistance, please don't hesitate to <a href="{{ route('contact') }}">Contact Us</a>. We're here to help!</p>
    </div>
</body>
</html>
