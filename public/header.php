<!-- start of large screen navbar !-->
<nav class="navbar mb-5" id="main-navbar">
    <div class="container">
        <div class="d-flex flex-row bd-highlight w-100">
            <a class="navbar-brand" href="index.php">
                <img style="height: 30px"
                     src="recourses/images/logo/5891132146_34b49d36-3b74-49c9-b710-aa58cb5ada62.png" alt="">
            </a>
            <form action="search.php" class="form-inline text-center w-100 me-5" method="GET">
                <div class="input-group input-group-append">
                    <input class="form-control navbar-search" name="search" type="search" placeholder="Search"
                           aria-label="Search">
                    <button class="btn btn-primary navbar-search-button" type="submit">
                        <i class="fas fa-search fa-2x"></i>
                    </button>
                </div>
            </form>
            <?php include "../private/Includes/HeaderInclude/createMainNavProfile.php" ?>
            <a href="favourite.php" class="mt-2 mx-5 favourite-btn">
                <i class="far fa-heart fa-2x"></i>
            </a>
            <div class="dropdown cart-wrapper-dropdown" id="cart-dropdown">
                <div class="dropdown-menu dropdown-menu-end cart-dropdown">
                    <?php include '../private/Includes/CartInclude/CartLoader/loadCartWrapper.php' ?>
                </div>
                <div class="pt-2" id="cart">
                    <a href="cart.php">
                        <div class="dropdown-toggle shopping-cart-btn">
                            <div id="badge" style="z-index:1;left: 21px!important;top: 3px!important;"
                                 class="position-absolute top-0 start-0 cart-badge badge rounded-pill bg-danger"><?php include "../private/Includes/CartInclude/CartLoader/loadCartBadge.php" ?>
                            </div>
                            <i class="fas fa-shopping-cart fa-2x position-relative"></i>
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
            <?php include "../private/Includes/HeaderInclude/createResponsiveNavbarProfile.php" ?>
            <a href="favourite.php">
                <i class="far fa-heart fa-2x responsive-navbar-item"></i>
            </a>
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
                         class="responsive-navbar-cart-badge cart-badge position-absolute badge rounded-pill bg-danger"><?php include "../private/Includes/CartInclude/CartLoader/loadCartBadge.php" ?>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="collapse navbar-collapse text-center" id="responsive-navbar-collapse">
        <form action="search.php" class="form-inline text-center my-3" method="get">
            <div class="input-group input-group-append">
                <input class="flex-fill form-control navbar-search" name="search" type="search" placeholder="Search"
                       aria-label="Search">
                <button class="btn btn-primary navbar-search-button" type="submit">
                    <i class="fas fa-search fa-2x"></i>
                </button>
            </div>
        </form>
    </div>
</nav>