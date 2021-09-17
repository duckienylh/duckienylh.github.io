<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/fonts/themify-icons/themify-icons.css">
</head>
<body>
    <div id="main">
        <div id="header">
            <div id="nav">
                <div class="logo">
                    <img src="./assets/img/logo.png" alt="" class="img-logo">
                </div>
                <ul class="nav-list">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="categories.php">Categories</a></li>
                    <li><a href="foods.php">Foods</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
        <div id="order-food">
            <div class="order-bg">
                <div class="order-container">
                    <h2 class="order-content">Fill this form to confirm your order.</h2>
                    <form class="selected-food">
                        <fieldset>
                            <legend>Selected Food</legend>

                            <div class="food-menu-img">
                                <img src="./assets/img/menu-pizza.jpg" alt="" class="order-img">
                            </div>

                            <div class="food-menu-desc">
                                <h3>Food Tiltle</h3>
                                <p class="food-price">$2.3</p>
                                <div class="order-label">Quantity</div>
                                <input type="number" name="qty" class="input-responsive" value="1" required>
                        
                            </div>
                        </fieldset>
                        
                        <fieldset>
                            <legend>Delivery Details</legend>
                            
                            <div class="order-label">Full Name</div>
                            <input type="text" name="full-name" placeholder="E.g. Vijay Thapa" class="input-responsive" required>

                            <div class="order-label">Phone Number</div>
                            <input type="tel" name="contact" placeholder="E.g. 9843xxxxxx" class="input-responsive" required>

                            <div class="order-label">Email</div>
                            <input type="email" name="email" placeholder="E.g. hi@vijaythapa.com" class="input-responsive" required>

                            <div class="order-label">Address</div>
                            <textarea name="address" rows="10" placeholder="E.g. Street, City, Country" class="input-responsive" required></textarea>

                            <input type="submit" name="submit" value="Confirm Order" class="btn-primary">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <div id="footer">
            <div class="socials-list">
                <a href=""><i class="ti-facebook"></i></a>
                <a href=""><i class="ti-instagram"></i></a>
                <a href=""><i class="ti-twitter"></i></a>
            </div>
            <p class="copyright">All right reserved. Designed By <a href="http://cse.tlu.edu.vn/" class="copyright-tlu">CSE.TLU</a></p>
        </div>
    </div>
</body>
</html>