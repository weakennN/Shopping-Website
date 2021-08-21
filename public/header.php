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

<script>
    $(document).ready(function () {
        function toggleDropdown(e) {
            const _d = $(e.target).closest('.dropdown'),
                _m = $('.dropdown-menu', _d);
            setTimeout(function () {
                const shouldOpen = e.type !== 'click' && _d.is(':hover');
                _m.toggleClass('show', shouldOpen);
                _d.toggleClass('show', shouldOpen);
                $('[data-toggle="dropdown"]', _d).attr('aria-expanded', shouldOpen);
            }, e.type === 'mouseleave' ? 300 : 0);
        }

        $('body')
            .on('mouseenter mouseleave', '.dropdown', toggleDropdown)
            .on('click', '.dropdown-menu a', toggleDropdown);


        // $('.dropdown a').on('click tap', e => e.preventDefault())
    });
</script>

<nav class="navbar navbar-expand-md navbar-light mb-5" id="main-navbar" style="display: block;background-color: white">
    <div class="container" id="navContainer">
        <a href="index.php" class="navbar-brand">weakennN</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="form-inline w-100">
                <div class="input-group input-group-append">
                    <input class="flex-fill form-control" type="search" placeholder="Search"
                           aria-label="Search">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-search fa-2x"></i>
                    </button>
                </div>
            </form>
        </div>
        <div class="nav-button account-btn mx-5">
            <i class="far fa-user fa-2x"></i>
        </div>
        <div class="nav-button favourite-btn">
            <i class="far fa-heart fa-2x"></i>
        </div>
        <div class="dropdown" id="cart-dropdown">
            <div class="dropdown-menu dropdown-menu-end cart-dropdown">
                <div class="d-flex flex-column overflow-auto cart-wrapper" id="cart-wrapper">

                </div>
                <div class="total-price w-100 py-2" style="background-color: #efebeb">
                    <div class="d-flex flex-row fw-bold">
                        <div class="text-uppercase my-1 sub-total">
                            <p class="ms-3">Total:</p>
                        </div>
                        <div class="ms-auto me-3 my-1 sub-total" id="cart-wrapper-sub-total">
                            <p class="sub-total-cent"><span id="cart-wrapper-price">$0</span><span id="cart-wrapper-cent" class="cent">.00</span></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="nav-button shopping-cart-btn ms-5" id="cart">
                <div class="dropdown-toggle">
                    <i class="fas fa-shopping-cart fa-2x position-relative"></i>
                    <div id="badge" class="position-absolute top-0 start-100 badge rounded-pill bg-danger">0</div>
                </div>
            </div>
        </div>
    </div>
</nav>

<nav class="navbar mb-5" id="responsive-navbar" style="display: none">
    <div class="container-fluid">
        <div class="d-flex flex-row w-100">
            <div style="margin-right: 1rem">
                <i class="far fa-user fa-2x"></i>
            </div>
            <div>
                <i class="far fa-heart fa-2x"></i>
            </div>
            <div class="text-center flex-grow-1">
                <a class="navbar-brand" href="index.php">weakennN</a>
            </div>
            <div style="margin-right: 1rem">
                <div data-bs-toggle="collapse"
                     data-bs-target="#responsive-navbar-collapse" aria-controls="navbarSupportedContent">
                    <i class="fas fa-search fa-2x"></i>
                </div>
            </div>
            <div>
                <i class="fas fa-shopping-cart fa-2x"></i>
            </div>
        </div>
    </div>
    <div class="collapse navbar-collapse text-center" id="responsive-navbar-collapse">
        <form class="form-inline text-center my-3">
            <div class="input-group input-group-append">
                <input class="flex-fill form-control" type="search" placeholder="Search"
                       aria-label="Search">
                <button class="btn btn-primary" type="submit">
                    <i class="fas fa-search fa-2x"></i>
                </button>
            </div>
        </form>
    </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>

<script src="JS/header.js"></script>
</body>

</html>
