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
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>

<body
<?php include $_SERVER["HOME"] . '/public/header.php'; ?>

<div aria-live="polite" aria-atomic="true" class="position-relative">
    <div class="toast-container position-absolute top-0 end-0 p-3 pt-0" style="z-index: 11" id="toast-container">
    </div>
</div>

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
<script src="JS/notification.js?<?php echo time(); ?>"></script>
<script src="JS/cartAction.js?<?php echo time(); ?>"></script>
<script src="JS/productCard.js?<?php echo time(); ?>"></script>
<script src="JS/cartWrapper.js?<?php echo time(); ?>"></script>
<script src="JS/addToCart.js?<?php echo time(); ?>"></script>
</body>

</html>