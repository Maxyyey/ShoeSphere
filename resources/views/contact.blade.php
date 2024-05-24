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
        <div class="best-selling">
            <h1>Best Selling</h1>
            <p>Get on the trend with our curated selection of best-selling shoes.</p>
            <div class="product-list">
                <div class="product">
                    <div class="product-image">
                        <img src="{{ asset('images/shoes.png') }}" alt="Shoes">
                    </div>
                    <p>Name of the Product</p>
                    <p class="price">Price | Rate★</p>
                </div>
                <div class="product">
                    <div class="product-image">
                        <img src="{{ asset('images/shoes.png') }}" alt="Shoes">
                    </div>
                    <p>Name of the Product</p>
                    <p class="price">Price | Rate★</p>
                </div>
                <div class="product">
                    <div class="product-image">
                        <img src="{{ asset('images/shoes.png') }}" alt="Shoes">
                    </div>
                    <p>Name of the Product</p>
                    <p class="price">Price | Rate★</p>
                </div>
            </div>
            <div class="shop-button">
                <a href="{{ route('shop') }}">Shop Now</a>
            </div>
        </div>
    </div>
</body>
</html>
