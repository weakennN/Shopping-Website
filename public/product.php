<?php
include_once "../private/AutoLoad/autoLoader.php";
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
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/navBar.css">
    <link rel="stylesheet" href="style/productPage.css">
    <link rel="stylesheet" type="text/css" href="http://kenwheeler.github.io/slick/slick/slick-theme.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css"
          integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
          integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"
          integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body>
<?php include "header.php"; ?>
<?php include_once "notificationContainer.html" ?>
<div class="container shadow-sm">
    <div class="row">
        <div class="text-left p-0 fs-2 border-bottom" id="title">
            <?php include "../private/Includes/ProductPageInclude/PLoader/loadProductTitle.php"; ?>
        </div>
    </div>
    <div class="row mt-4">
        <!-- start of product gallery -->
        <div class="col-lg-5 col-md-12 col-sm-12 text-center mx-lg-4">
            <div class="gal card-block">
                <?php include "../private/Includes/ProductPageInclude/PLoader/loadProductImages.php"; ?>
            </div>
            <div class="gal-nav">
                <?php include "../private/Includes/ProductPageInclude/PLoader/loadProductSlickSlider.php"; ?>
            </div>
        </div>
        <!-- end of product gallery -->
        <!-- start of product info -->
        <div class="col-lg-6 col-md-12 mb-5 mt-md-5 mt-5 mt-lg-0 mt-xs-0">
            <div>
                <div class="mb-3">
                    <div>
                        <?php include "../private/Includes/ProductPageInclude/PLoader/loadPPrice.php"; ?>
                    </div>
                </div>
                <div class="d-flex flex-row">
                    <button class="btn btn-primary w-100" id="add-to-cart">
                        <i class="fas fa-shopping-cart fa-2x"></i>
                        <div class="mt-1">
                            Add to cart
                        </div>
                    </button>
                </div>
                <div class="d-flex flex-row mt-3">
                    <button class="btn btn-danger w-100" id="add-to-favourite">
                        <i class="far fa-heart fa-2x"></i>
                        <div class="mt-1">
                            Add to favourite
                        </div>
                    </button>
                </div>
                <div class="mt-2">
                    <div class="text-left">
                        <h3>Short product description</h3>
                    </div>
                    <?php include_once "../private/Includes/ProductPageInclude/PLoader/loadProductShortDescription.php"; ?>
                </div>
            </div>
        </div>
        <!-- end of product info -->
        <!-- start of product description -->
        <div class="col-xs-12">
            <div class="text-center my-5" id="product-description-title">
                <div class="text-uppercase">
                    <h2>full product description</h2>
                </div>
            </div>
            <div class="product-description-text">
                <?php include "../private/Includes/ProductPageInclude/PLoader/loadProductDescription.php"; ?>
            </div>
        </div>
    </div>
    <!-- end of product description -->
    <!-- start of product gallery modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-fullscreen-lg-down modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <div id="carouselExampleControls" class="carousel carousel-dark slide"
                                 data-bs-ride="carousel">
                                <div class="carousel-inner text-center test" id="modal-content">
                                    <?php include "../private/Includes/ProductPageInclude/PLoader/loadPModal.php"; ?>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselExampleControls"
                                        data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselExampleControls"
                                        data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of product gallery modal -->
    <?php include_once "addToCartAlert.html" ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"
            integrity="sha512-WNZwVebQjhSxEzwbettGuQgWxbpYdoLf7mH+25A7sfQbbxKeS5SQ9QBf97zOY4nOlwtksgDA/czSTmfj4DUEiQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="JS/notification.js"></script>
    <script src="JS/favouriteAction.js"></script>
    <script src="JS/cartAction.js"></script>
    <script src="JS/cartItemActions.js"></script>
    <script src="JS/cartWrapper.js"></script>
    <script src="JS/productPage.js"></script>
    <script src="JS/header.js"></script>
    <script src="JS/addToCartAlert.js"></script>
</body>
</html>