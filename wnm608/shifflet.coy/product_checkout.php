<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Page</title>

   
<meta name="viewport" content="width=device-width">

<base href="http://coyshifflet.com/aau/wnm608/shifflet.coy/">

    <link rel="stylesheet" href="../lib/css/styleguide.css">
    <link rel="stylesheet" href="../lib/css/gridsystem.css">
    <link rel="stylesheet" href="../css/storetheme.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script></head>
<body>

   

<header class="navbar">
    <div class="container display-flex">
        <div class="flex-none">
            <h1>TRECH</h1>
        </div>
        <div class="flex-stretch"></div>
        <nav class="nav nav-flex flex-none">
            <ul>
                <!-- li*3>a[href=#]>{Link $} -->
                <li><a href="index.php">Home</a></li>
                <li><a href="product_list.php">Shop</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="product_cart.php">
                    <span>Cart</span>
                    <span class="badge"></span>
                </a></li>
            </ul>
        </nav>
    </div>
</header>
    <div class="container">
        <div class="card soft">
            <h2>Product Checkout</h2>

            <form class="form">
                <h3>Address</h3>
                <div class="form-control">
                    <label for="address-street" class="form-label">Street</label>
                    <input id="address-street" type="text" placeholder="Street name" class="form-input">
                </div>
                <div class="form-control">
                    <div class="grid gap">
                        <div class="col-xs-12 col-md-6">
                            <label for="address-street" class="form-label">City</label>
                            <input id="address-street" type="text" placeholder="City" class="form-input">
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <label for="address-street" class="form-label">State</label>
                            <input id="address-street" type="text" placeholder="State" class="form-input">
                        </div>
                    </div>
                </div>
                <div class="form-control">
                    <div class="grid gap">
                        <div class="col-xs-12 col-md-6">
                            <label for="address-street" class="form-label">Zip Code</label>
                            <input id="address-street" type="text" placeholder="Zip Code" class="form-input">
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <label for="address-street" class="form-label">Country</label>
                            <input id="address-street" type="text" placeholder="Country" class="form-input">
                        </div>
                    </div>
                </div>
                <div class="form-control">
                    <input type="submit" class="form-button" value="Submit">
                </div>
            </form>

            <form class="form">
                <h3>Payment</h3>
                <div class="form-control">
                    <label for="payment-name" class="form-label">Full Name</label>
                    <input id="payment-name" type="text" placeholder="Name" class="form-input">
                </div>
                <div class="col-xs-12 col-md-6">
                            <label for="payment-number" class="form-label">Card Number</label>
                            <input id="payment-number" type="text" placeholder="####-####-####-####" class="form-input">
                        </div>
                <div class="form-control">
                    <div class="grid gap">
                        <div class="col-xs-12 col-md-6">
                            <label for="payment-expiration" class="form-label">Expiration</label>
                            <input id="payment-expiration" type="text" placeholder="MM-YY" class="form-input">
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <label for="payment-cvv" class="form-label">CVV</label>
                            <input id="payment-cvv" type="text" placeholder="CVV" class="form-input">
                        </div>
                    </div>
                </div>
                <div class="form-control">
                    <label for="payment-zip" class="form-label">Zip code</label>
                    <input id="payment-zip" type="text" placeholder="Zip code" class="form-input">
                </div>
                <div class="form-control">
                    <!-- <input type="submit" class="form-button" value="Submit"> -->
                    <a href="product_confirmation.php" class="form-button">Complete Checkout</a>
                </div>
            </form>
        </div>
    </div>
   
</body>
</html>