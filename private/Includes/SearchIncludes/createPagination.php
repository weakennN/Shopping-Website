<?php

use private\Classes\Loader\PaginationLoader\PaginationLoader;

$paginationLoader = new PaginationLoader();
$currentPage = 1;

if (isset($_GET["page"])) {
    $currentPage = $_GET["page"];
}

$paginationLoader->load("search.php", $currentPage,$_GET["search"]);