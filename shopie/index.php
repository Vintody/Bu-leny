<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopie - Your Online Shop</title>
    <link rel="stylesheet" href="layout/style.css">
</head>
<body>
    <!-- Navbar -->
    <header style="background-color: #ffffff;">
        <div class="container">
            <div class="logo">
                <span>Shopie</span>
            </div>
            <hr />
            <br>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="wishtlist.php">Wishlist</a></li>
                    <li><a href="cart.php">Cart</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </nav>
            <div class="search">
                <img src="search_icon.png" alt="Search Icon">
                <input type="text" placeholder="Search...">
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        <section class="banner">
            <div class="container">
                <img src="img/1337465.png" alt="Moving Image">
                <div class="banner-text">
                    <h2>Buy OurProducts</h2>
                    <a href="#" class="btn-shop-now">Shop Now</a>
                </div>
            </div>
        </section>

        <section class="our-products">
            <div class="container">
                <h3>Our Products</h3>
                <div class="product">
                    <div class="product-item">
                        <img src="product1.jpg" alt="Product 1">
                        <h4>Product Name 1</h4>
                        <p>Description of Product 1</p>
                    </div>
                    <div class="product-item">
                        <img src="product2.jpg" alt="Product 2">
                        <h4>Product Name 2</h4>
                        <p>Description of Product 2</p>
                    </div>
                    <!-- kasi product lagi -->
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2024 Shopie. All Rights Reserved.</p>
        </div>
    </footer>
    <script src="layout/index.js"></script>
</body>
</html>
