<?php
include_once "../private/AutoLoad/autoLoader.php";
include_once "../private/Includes/LoginSystemInclude/checkLogin.php";
include_once "../private/Includes/CartInclude/checkEmptyCart.php";
?>
<!DOCTYPE html>
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
    <link rel="stylesheet" href="style/navBar.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/addresses.css">
    <link rel="stylesheet" href="style/checkout.css">
</head>
<body>
<?php include_once "header.php" ?>
<div class="container">
    <div class="row">
        <form action="../private/Includes/CheckoutPageInclude/finishOrder.php" method="post">
            <div class="col-12 checkout-content">
                <h5 class="display-5 mb-3">Choose Address</h5>
                <div class="d-flex flex-column address-container pb-1" id="address-container">
                    <?php include_once "../private/Includes/AddressInclude/loadCheckoutPageAddresses.php" ?>
                </div>
                <div>
                    <button type="button" class="btn btn-primary btn-lg ms-5" data-bs-toggle="modal"
                            data-bs-target="#createAddressModal">
                        <div class="d-flex flex-row">
                            <i style="margin-top: 5px" class="fas fa-plus"></i>
                            <p style="color: white" class="m-0 ms-3">Add address</p>
                        </div>
                    </button>
                </div>
            </div>
            <div class="col-12 checkout-content mt-4">
                <?php include_once "../private/Includes/CheckoutPageInclude/loadCheckoutBox.php" ?>
            </div>
        </form>
    </div>
</div>
<?php include_once "addressModal.php" ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>
<script src="JS/header.js"></script>
<script src="JS/validators.js"></script>
<script src="JS/addressFunctions.js"></script>
<script src="JS/addressModal.js"></script>
<script src="JS/checkout.js"></script>
</body>
</html>
