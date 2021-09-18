<?php
include_once "../private/AutoLoad/autoLoader.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="style/navBar.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/pagination.css">
</head>

<body>
<?php include "header.php"; ?>
<?php include_once "notificationContainer.php" ?>
<div class="container-lg container-fluid-lg shadow-sm">
    <div class="row">
        <?php include_once "../private/Includes/MainPageInclude/loadMainProducts.php"; ?>
    </div>
    <nav class="pb-2">
        <ul class="pagination justify-content-end">
            <?php include_once "../private/Includes/PaginationInclude/createPagination.php" ?>
        </ul>
    </nav>
</div>
<?php include_once "addToCartAlert.php" ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>
<script src="JS/favouriteAction.js"></script>
<script src="JS/cartAction.js"></script>
<script src="JS/cartItemActions.js"></script>
<script src="JS/notification.js"></script>
<script src="JS/productCard.js"></script>
<script src="JS/cartWrapper.js"></script>
<script src="JS/addToCart.js"></script>
<script src="JS/header.js"></script>
<script src="JS/addToCartAlert.js"></script>
</body>

</html>