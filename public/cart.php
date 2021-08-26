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
                <div class="d-flex flex-column w-100 cart-item border-bottom pb-xl-3 mb-3" id="1">
                    <div class="d-flex flex-row w-100">
                        <div class="d-flex flex-row cart-image-holder" style="width: 35%">
                            <a href="">
                                <img style="width: 110px;object-fit: contain"
                                     src="recourses/images/ProductImages/1/1.jpg" alt="">
                            </a>
                            <a href="">
                                <h5 class="mt-3 ms-4 title">Neo: The World Ends With You (PS4)</h5>
                            </a>
                        </div>
                        <div style="height: 40px;align-self: center;width: 30%;" class="quantity-holder" id="5">
                            <div class="pagination justify-content-center">
                                <button class="increase-quantity-btn-minus" style="height: 40px;width: 40px;left: 10px">
                                    -
                                </button>
                                <input class="quantity-input" value="1" style="height: 40px;width: 40px" type="text">
                                <button class="increase-quantity-btn-plus" style="height: 40px;width: 40px">+</button>
                            </div>
                        </div>
                        <div class="text-center total-holder" style="width: 30%;align-self: center">
                            <p class="price"><span class="cart-wrapper-price">$59</span><span class="cent">.00</span>
                            </p>
                        </div>
                        <div class="ms-auto" style="width: 10%">
                            <button type="button" class="btn-close float-end mt-2" aria-label="Close"></button>
                        </div>
                    </div>
                    <div class="d-flex flex-row cart-item-bottom">

                    </div>
                </div>
                <div class="d-flex flex-column w-100 cart-item border-bottom pb-xl-3 mb-3" id="3">
                    <div class="d-flex flex-row w-100">
                        <div class="d-flex flex-row cart-image-holder" style="width: 35%">
                            <a href="">
                                <img style="width: 110px;object-fit: contain"
                                     src="recourses/images/ProductImages/1/1.jpg" alt="">
                            </a>
                            <a href="">
                                <h5 class="mt-3 ms-4 title">Neo: The World Ends With You (PS4)</h5>
                            </a>
                        </div>
                        <div style="height: 40px;align-self: center;width: 30%;" class="quantity-holder" id="6">
                            <div class="pagination justify-content-center">
                                <button class="increase-quantity-btn-minus" style="height: 40px;width: 40px;left: 10px">
                                    -
                                </button>
                                <input class="quantity-input" value="1" style="height: 40px;width: 40px" type="text">
                                <button class="increase-quantity-btn-plus" style="height: 40px;width: 40px">+</button>
                            </div>
                        </div>
                        <div class="text-center total-holder" style="width: 30%;align-self: center">
                            <p class="price"><span class="cart-wrapper-price">$59</span><span class="cent">.00</span>
                            </p>
                        </div>
                        <div class="ms-auto" style="width: 10%">
                            <button type="button" class="btn-close float-end mt-2" aria-label="Close"></button>
                        </div>
                    </div>
                    <div class="d-flex flex-row cart-item-bottom">

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <form action="">
                <div class="w-100 checkout-box">
                    <div class="p-4">
                        <h3 style="font-weight: 500">Order Description</h3>
                        <hr>
                        <p class="h5 mb-3">Total products: <span id="total-products">5</span></p>
                        <p id="total" class="h5 mb-4">Total: $100.00</p>
                        <button type="submit" class="btn btn-primary w-100 text-center btn-lg">Proceed to checkout
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>

</div>

<script src="JS/cartWrapper.js?<?php echo time(); ?>"></script>
<script src="JS/cart.js?<?php echo time(); ?>"></script>

</body>
</html>
