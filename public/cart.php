<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style/cart.css? <?php echo time(); ?>">
</head>
<body>
<?php include "header.php" ?>

<div class="container">
    <div class="row">
        <h1 class="display-4 mb-4">My Cart</h1>
        <div class="col-lg-8 p-0">
            <div class="d-flex flex-column cart-item-holder" id="cart-item-holder">
                <?php include "../private/Includes/loadShoppingCartItems.php" ?>
            </div>
        </div>
        <div class="col-lg-4">
                <div class="w-100 checkout-box">
                    <?php include "../private/Includes/createCheckoutBox.php" ?>
                </div>
        </div>
    </div>
</div>

<script src="JS/cartWrapper.js?<?php echo time(); ?>"></script>
<script src="JS/cart.js?<?php echo time(); ?>"></script>



</body>
</html>
