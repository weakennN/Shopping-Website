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
</head>

<body>

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
                    <button type="submit">
                        <img src="recourses/images/5017679.png" alt="">
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
        <div class="nav-button shopping-cart-btn mx-5" id="cart">
            <i class="fas fa-shopping-cart fa-2x"></i>
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
                <button type="submit">
                    <img src="recourses/images/5017679.png" alt="">
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
