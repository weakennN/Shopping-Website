<?php
include_once $_SERVER["HOME"] . "/private/AutoLoad/autoLoader.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="style/navBar.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="style/style.css?<?php echo time(); ?>">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>

<body>

<!-- start of large screen navbar !-->
<nav class="navbar mb-5" id="main-navbar">
    <div class="container">
        <div class="d-flex flex-row bd-highlight w-100">
            <a class="navbar-brand" href="index.php">
                <img style="height: 30px"
                     src="recourses/images/logo/5891132146_34b49d36-3b74-49c9-b710-aa58cb5ada62.png" alt="">
            </a>
            <form class="form-inline text-center w-100">
                <div class="input-group input-group-append">
                    <input class="form-control navbar-search" type="search" placeholder="Search"
                           aria-label="Search">
                    <button class="btn btn-primary navbar-search-button" type="submit">
                        <i class="fas fa-search fa-2x"></i>
                    </button>
                </div>
            </form>
            <?php include "../private/Includes/createMainNavProfile.php" ?>
            <a href="#" class="mt-2 favourite-btn">
                <i class="far fa-heart fa-2x"></i>
            </a>
            <div class="dropdown cart-wrapper-dropdown" id="cart-dropdown">
                <div class="dropdown-menu dropdown-menu-end cart-dropdown">
                    <?php include '../private/Includes/loadCartWrapper.php' ?>
                </div>
                <div class="ms-5 pt-2" id="cart">
                    <a href="cart.php">
                        <div class="dropdown-toggle shopping-cart-btn">
                            <i class="fas fa-shopping-cart fa-2x position-relative"></i>
                            <div id="badge" style="left: 70px !important; top: 3px!important;"
                                 class="position-absolute top-0 start-100 badge rounded-pill bg-danger"><?php include "../private/Includes/loadCartBadge.php"?>
                            </div>
                        </div>
                </div>
                </a>
            </div>
        </div>
    </div>
</nav>
<!-- end of large screen navbar !-->

<!-- start of small screen navbar !-->
<nav class="navbar mb-5" id="responsive-navbar" style="display: none">
    <div class="container-fluid">
        <div class="d-flex flex-row w-100">
            <?php include "../private/Includes/createResponsiveNavbarProfile.php" ?>
            <div>
                <i class="far fa-heart fa-2x responsive-navbar-item"></i>
            </div>
            <div class="text-center flex-grow-1">
                <a href="index.php">
                    <img style="height: 18px;"
                         src="recourses/images/logo/5891132146_34b49d36-3b74-49c9-b710-aa58cb5ada62.png" alt="">
                </a>
            </div>
            <div style="margin-right: 1rem">
                <div data-bs-toggle="collapse"
                     data-bs-target="#responsive-navbar-collapse" aria-controls="navbarSupportedContent">
                    <i class="fas fa-search fa-2x responsive-navbar-item"></i>
                </div>
            </div>
            <div class="position-relative">
                <a href="cart.php">
                    <i class="fas fa-shopping-cart fa-2x responsive-navbar-item"></i>
                    <div id="badge"
                         class="responsive-navbar-cart-badge position-absolute badge rounded-pill bg-danger"><?php include "../private/Includes/loadCartBadge.php"?>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="collapse navbar-collapse text-center" id="responsive-navbar-collapse">
        <form class="form-inline text-center my-3">
            <div class="input-group input-group-append">
                <input class="flex-fill form-control navbar-search" type="search" placeholder="Search"
                       aria-label="Search">
                <button class="btn btn-primary navbar-search-button" type="submit">
                    <i class="fas fa-search fa-2x"></i>
                </button>
            </div>
        </form>
    </div>
</nav>
<!-- end of small screen navbar !-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>

<script src="JS/cartAction.js?<?php echo time(); ?>"></script>
<script src="JS/cartItemActions.js?<?php echo time(); ?>"></script>
<script src="JS/header.js?<?php echo time(); ?>"></script>

</body>

</html>
