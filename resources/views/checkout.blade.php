<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Order Page</title>
    <link rel="stylesheet" href="{{ mix('/public/css/checkout.css') }}">
</head>
<body>
    <div class="container">
        <div class="left-column">
            <div class="product-images">
                <img src="images/shoes.jpg" id="images" alt="Main Product Image">
                <div class="thumbnail-row">
                    <img src="images/shoes.jpg" class="thumbnail" onclick="changeImage('images/shoes.jpg')" alt="Thumbnail 1">
                    <img src="images/shoes.jpg" class="thumbnail" onclick="changeImage('images/shoes.jpg')" alt="Thumbnail 2">
                    <img src="images/shoes.jpg" class="thumbnail" onclick="changeImage('images/shoes.jpg')" alt="Thumbnail 3">
                    <img src="images/shoes.jpg" class="thumbnail" onclick="changeImage('images/shoes.jpg')" alt="Thumbnail 4">
                </div>
            </div>
        </div>
        <div class="right-column">
            <h1>MXQ PRO 5G 4K 8+128G Android UltraHD Smart TV Box</h1>
            <div class="rating">
                <span>4.6</span> <span class="stars">★★★★★</span> <span>351 Ratings</span> <span>1.5K Sold</span>
            </div>
            <div class="price">
                <span class="current-price">₱598 - ₱898</span>
                <span class="original-price">₱1,500 - ₱2,100</span>
                <span class="discount">60% OFF</span>
            </div>
            <div class="options">
                <label for="storage">Storage:</label>
                <div id="storage" class="storage-options">
                    <div class="option">MXQ 8+128GB</div>
                    <div class="option">MXQ 16+256GB</div>
                    <div class="option">MXQ 8+128GB+i8</div>
                </div>
            </div>
            <div class="quantity">
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" value="1" min="1">
            </div>
            <div class="buttons">
                <button class="add-to-cart">Add to Cart</button>
                <button class="buy-now" onclick="openCheckout()">Buy Now</button>
            </div>
        </div>
    </div>

    <div id="checkout-modal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeCheckout()">&times;</span>
            <h2>Checkout</h2>
            <p>Product: MXQ PRO 5G 4K 8+128G Android UltraHD Smart TV Box</p>
            <p id="checkout-quantity"></p>
            <p id="checkout-total"></p>
            <button onclick="completePurchase()">Complete Purchase</button>
        </div>
    </div>

    <script>
        function changeImage(images) {
            document.getElementById('images').src = images;
        }

        function openCheckout() {
            const quantity = document.getElementById('quantity').value;
            const price = document.querySelector('.current-price').textContent.split(' ')[0].replace('₱', '');
            const total = price * quantity;

            document.getElementById('checkout-quantity').textContent = `Quantity: ${quantity}`;
            document.getElementById('checkout-total').textContent = `Total: ₱${total}`;
            document.getElementById('checkout-modal').style.display = 'block';
        }

        function closeCheckout() {
            document.getElementById('checkout-modal').style.display = 'none';
        }

        function completePurchase() {
            alert('Purchase Completed!');
            closeCheckout();
        }
    </script>
</body>
</html>
