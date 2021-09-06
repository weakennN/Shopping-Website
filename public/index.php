<?php
include_once $_SERVER["HOME"] . "/private/AutoLoad/autoLoader.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="style/navBar.css">
    <link rel="stylesheet" href="style/style.css">
</head>

<body
<?php include $_SERVER["HOME"] . '/public/header.php'; ?>
<?php include_once "notificationContainer.php" ?>
<div class="container-lg container-fluid-lg shadow-sm">
    <div class="row">
        <?php require $_SERVER["HOME"] . '/private/Includes/loadMainProducts.php'; ?>
    </div>
    <nav>
        <ul class="pagination justify-content-end">
            <li class="page-item">
                <a href="#" class="page-link">
                    <span>&laquo;</span>
                </a>
            </li>
            <li class="page-item active">
                <a href="index.php?page=1" class="page-link">
                    1
                </a>
            </li>
            <li class="page-item">
                <a href="index.php?page=2" class="page-link">
                    2
                </a>
            </li>
            <li class="page-item">
                <a href="#" class="page-link">
                    3
                </a>
            </li>
            <li class="page-item">
                <a href="#" class="page-link">
                    4
                </a>
            </li>
            <li class="page-item">
                <a href="#" class="page-link">
                    5
                </a>
            </li>
            <li class="page-item">
                <a href="#" class="page-link">
                    <span>&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
</div>
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
</body>

</html>