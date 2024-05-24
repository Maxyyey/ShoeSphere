<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShoeSphere</title>
    <link rel="stylesheet" href="{{ mix('/public/css/home.css') }}">
</head>
<body>
    <header>
        <div class="logo">SHOESPHERE</div>
        <nav>
            <a href="#">Home</a>
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
    <main>
        <section class="content">
            <h1>Discover And Find Your Own Fashion</h1>
            <p>Celebrate your unique style journey as you immerse yourself in a world where every step leads to discovery, connecting with the perfect pair to complement your individuality, effortlessly merging comfort and fashion, all within a seamless shopping experience tailored just for you.</p>
        </section>
        <section class="image">
            <img src="{{ asset('images/shoes.png') }}" alt="Pair of fashionable shoes">
        </section>
    </main>
    <div class="container">
        <div class="best-selling">
            <h1>Best Selling</h1>
            <p>Get on the trend with our curated selection of best-selling shoes.</p>
            <div class="product-grid">
                <div class="product">
                    <div class="product-image">
                        <img src="{{ asset('images/shoes.png') }}" alt="Shoes">
                    </div>
                    <p>Name of the Product</p>
                    <p>Price | Rate★</p>
                </div>
                <div class="product">
                    <div class="product-image">
                        <img src="{{ asset('images/shoes.png') }}" alt="Shoes">
                    </div>
                    <p>Name of the Product</p>
                    <p>Price | Rate★</p>
                </div>
                <div class="product">
                    <div class="product-image">
                        <img src="{{ asset('images/shoes.png') }}" alt="Shoes">
                    </div>
                    <p>Name of the Product</p>
                    <p>Price | Rate★</p>
                </div>
            </div>
            <div class="shop-button">
                <a href="{{ route('shop') }}">Shop Now  </a>
            </div>
        </div>

        <div class="best-selling">
            <h1>Best Selling</h1>
            <div class="product-grid-6">
                <div class="product">
                    <div class="product-image">
                        <img src="{{ asset('images/shoes.png') }}" alt="Shoes">
                    </div>
                    <p>Name of the Product</p>
                    <p>Price | Rate★</p>
                </div>
                <div class="product">
                    <div class="product-image">
                        <img src="{{ asset('images/shoes.png') }}" alt="Shoes">
                    </div>
                    <p>Name of the Product</p>
                    <p>Price | Rate★</p>
                </div>
                <div class="product">
                    <div class="product-image">
                        <img src="{{ asset('images/shoes.png') }}" alt="Shoes">
                    </div>
                    <p>Name of the Product</p>
                    <p>Price | Rate★</p>
                </div>
                <div class="product">
                    <div class="product-image">
                        <img src="{{ asset('images/shoes.png') }}" alt="Shoes">
                    </div>
                    <p>Name of the Product</p>
                    <p>Price | Rate★</p>
                </div>
                <div class="product">
                    <div class="product-image">
                        <img src="{{ asset('images/shoes.png') }}" alt="Shoes">
                    </div>
                    <p>Name of the Product</p>
                    <p>Price | Rate★</p>
                </div>
                <div class="product">
                    <div class="product-image">
                        <img src="{{ asset('images/shoes.png') }}" alt="Shoes">
                    </div>
                    <p>Name of the Product</p>
                    <p>Price | Rate★</p>
                </div>
            </div>
        </div>
        <div class="container1">
           
            <div class="exclusive-offer">
            <h2>Exclusive Offer</h2>
            <p>Unlock the ultimate style upgrade with our exclusive offer. Enjoy savings of up to 40% on our latest New Arrival</p>
            <span> 07 Days | 30 Hours | 20 Minutes </span>
            <div>
            <div class="product-image1">
                <img src="{{ asset('images/shoes.png') }}" alt="Shoes">
            </div>
                
            <div class="shop-button">
                <a href="{{ route('shop') }}">Shop Now  </a>
            </div>
            </div>
        </div>
        

        <div class="feedback">
            <div class="feedback-item">
                <h1>Michael Jordan</h1>
                <p>These shoes are incredibly comfortable and stylish
                I'm thrilled with my purchase!</p>
            </div>
            <div class="feedback-item">
                <h1>Michael Jordan</h1>
                <p>These shoes are incredibly comfortable and stylish
                I'm thrilled with my purchase!</p>
            </div>
            <div class="feedback-item">
                <h1>Michael Jordan</h1>
                <p>These shoes are incredibly comfortable and stylish
                I'm thrilled with my purchase!</p>
            </div>
        </div>
        <div class="container">
            <div class="footer">
                <div>SHOESPHERE</div>
            <div>
                <a href="{{ route('shop') }}">Shop</a> | 
                <a href="#">Products</a>
            </div>
            <div>
                <a href="#">About Us</a> | 
                <a href="#">Contact</a>
            </div>
            <div>
                <form>
                    <label>Stay Up To Date</label>
                    <input type="email" placeholder="Enter your email">
                    <button type="submit">SUBMIT</button>
                </form>
            </div>
            <div>
                <a href="#">Terms</a> | 
                <a href="#">Privacy</a> | 
                <a href="#">Cookies</a>
            </div>
            </div>
        </div>
        
    </div>
</body>
</html>
