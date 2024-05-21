<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShoeSphere</title>
    <link rel="stylesheet" href="{{ mix('/public/css/index.css') }}">
</head>
<body>
    <header>
        <div class="logo">SHOESPHERE</div>
        <nav>
            <a href="#">Home</a>
            <a href="{{ route('shop') }}">Shop</a> 
            <a href="#">Features</a>
            <a href="#">Contact</a>
        </nav>
        <div class="login-signup">
            <a href="#">Login/Signup</a>
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
            <button><a href="{{ route('shop') }}">Shop Now</a></button>
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

        <div class="exclusive-offer">
            <h2>Exclusive Offer</h2>
            <p>Unlock the ultimate style upgrade with our exclusive offer. Enjoy savings of up to 40% on our latest New Arrival</p>
            <div>
                <span>07 Days</span>
                <span>30 Hours</span>
                <span>20 Minutes</span>
            </div>
            <button><a href="{{ route('shop') }}">Shop Now</a></button>
        </div>

        <div class="feedback">
            <div class="feedback-item">
                <p>Michael Jordan</p>
                <p>These shoes are incredibly comfortable and stylish—I'm thrilled with my purchase!</p>
            </div>
            <div class="feedback-item">
                <p>Michael Jordan</p>
                <p>These shoes are incredibly comfortable and stylish—I'm thrilled with my purchase!</p>
            </div>
            <div class="feedback-item">
                <p>Michael Jordan</p>
                <p>These shoes are incredibly comfortable and stylish—I'm thrilled with my purchase!</p>
            </div>
        </div>

        <footer>
            <div>SHOESPHERE</div>
            <div>
                <a href="{{ route('shop') }}">Shop</a> | 
                <a href="#">Products</a> | 
                <a href="#">Overview</a> | 
                <a href="#">Pricing</a> | 
                <a href="#">Releases</a>
            </div>
            <div>
                <a href="#">About Us</a> | 
                <a href="#">Contact</a> | 
                <a href="#">News</a> | 
                <a href="#">Support</a>
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
        </footer>
    </div>
</body>
</html>
