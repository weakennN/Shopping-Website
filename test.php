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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>

<nav class="navbar navbar-light bg-light">
    <div class="container">
        <div class="d-flex flex-row bd-highlight w-100">
            <a class="navbar-brand" href="#">weakennN</a>
            <form class="form-inline text-center w-100">
                <div class="input-group input-group-append">
                    <input class="form-control" type="search" placeholder="Search"
                           aria-label="Search">
                    <button class="btn btn-primary" type="submit">
                        <i class="fas fa-search fa-2x"></i>
                    </button>
                </div>
            </form>
            <a href="#" class="nav-button favourite-btn pt-2 ps-4">
                <i class="far fa-heart fa-2x"></i>
            </a>
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
                                <p class="sub-total-cent"><span id="cart-wrapper-price">$0</span><span
                                            id="cart-wrapper-cent" class="cent">.00</span></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="nav-button shopping-cart-btn ms-5 pt-2" id="cart">
                    <div class="dropdown-toggle">
                        <i class="fas fa-shopping-cart fa-2x position-relative"></i>
                        <div id="badge" style="left: 70px !important; top: 3px!important;"
                             class="position-absolute top-0 start-100 badge rounded-pill bg-danger">0
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<style>
    .btn {
        background-color: #ddd;
        border: none;
        color: black;
        padding: 16px 32px;
        text-align: center;
        font-size: 16px;
        margin: 4px 2px;
        transition: 0.3s;
    }

    .btn:hover {
        background-color: #3e8e41;
        color: white;
    }
</style>

<h2>Fading Buttons - "Fade in Effect"</h2>

<button class="btn">Hover Over Me</button>

<h2>Fading Buttons - "Fade in Effect"</h2>

<button class="btn">Hover Over Me</button>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>

</body>
</html>