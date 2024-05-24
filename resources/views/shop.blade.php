<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOESPHERE</title>
    <link rel="stylesheet" href="{{ mix('/public/css/shop.css') }}">
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

    <div class="filters">
        <button>All Products</button>
        <button>Rubber</button>
        <button>Flat</button>
        <button>Rubber</button>
        <button>Flat</button>
        <button>Rubber</button>
    </div>

    <div class="product-container">
                    <div class="product">
                        <img src="images/shoes.png" alt="Shoes">
                    </div> 
                    <div class="product-details">
                    <div class="product-name">Product A</div>
                    <div class="product-price">45</div>
                    <div class="product-rating">★★★★☆</div>
                    </div>
            </div>
            <div class="product-container">
                    <div class="product">
                        <img src="images/shoes.png" alt="Shoes">
                    </div> 
                    <div class="product-details">
                    <div class="product-name">Product A</div>
                    <div class="product-price">45</div>
                    <div class="product-rating">★★★★☆</div>
                    </div>
            </div>
            <div class="product-container">
                    <div class="product">
                        <img src="images/shoes.png" alt="Shoes">
                    </div> 
                    <div class="product-details">
                    <div class="product-name">Product A</div>
                    <div class="product-price">45</div>
                    <div class="product-rating">★★★★☆</div>
                    </div>
            </div>
            <div class="product-container">
                    <div class="product">
                        <img src="images/shoes.png" alt="Shoes">
                    </div> 
                    <div class="product-details">
                    <div class="product-name">Product A</div>
                    <div class="product-price">45</div>
                    <div class="product-rating">★★★★☆</div>
                    </div>
            </div>
            <div class="product-container">
                    <div class="product">
                        <img src="images/shoes.png" alt="Shoes">
                    </div> 
                    <div class="product-details">
                    <div class="product-name">Product A</div>
                    <div class="product-price">45</div>
                    <div class="product-rating">★★★★☆</div>
                    </div>
            </div>
            <div class="product-container">
                    <div class="product">
                        <img src="images/shoes.png" alt="Shoes">
                    </div> 
                    <div class="product-details">
                    <div class="product-name">Product A</div>
                    <div class="product-price">45</div>
                    <div class="product-rating">★★★★☆</div>
                    </div>
            </div>
            <div class="product-container">
                    <div class="product">
                        <img src="images/shoes.png" alt="Shoes">
                    </div> 
                    <div class="product-details">
                    <div class="product-name">Product A</div>
                    <div class="product-price">45</div>
                    <div class="product-rating">★★★★☆</div>
                    </div>
            </div>
            <div class="product-container">
                    <div class="product">
                        <img src="images/shoes.png" alt="Shoes">
                    </div> 
                    <div class="product-details">
                    <div class="product-name">Product A</div>
                    <div class="product-price">45</div>
                    <div class="product-rating">★★★★☆</div>
                    </div>
            </div>
            <div class="product-container">
                    <div class="product">
                        <img src="images/shoes.png" alt="Shoes">
                    </div> 
                    <div class="product-details">
                    <div class="product-name">Product A</div>
                    <div class="product-price">45</div>
                    <div class="product-rating">★★★★☆</div>
                    </div>
            </div>
            
            <div class="shop-button">
                <a href="{{ route('shop') }}">Shop Now</a>
            </div>
        </div>
</body>
</html>
