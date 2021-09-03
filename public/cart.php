<?php include_once "../private/AutoLoad/autoLoader.php" ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="style/navBar.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="style/style.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="style/cart.css">
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>
<script src="JS/cartAction.js"></script>
<script src="JS/cartWrapper.js"></script>
<script src="JS/cart.js"></script>
<script src="JS/cartItemActions.js"></script>
<script src="JS/header.js"></script>

</body>
</html>
