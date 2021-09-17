<?php

namespace private\Classes\Loader\PaginationLoader;

use private\Classes\Database\ProductManagement;
use private\Classes\Database\SearchManagement;

class PaginationLoader
{

    public function load($pageLink, $currentPage, $searchedProducts = null)
    {
        $products = null;
        if ($searchedProducts != null) {
            $products = SearchManagement::searchProducts($searchedProducts);
        } else {
            $products = ProductManagement::getProducts();
        }
        $pages = ceil(count($products) / 25);
        if ($pages <= 0) {
            return;
        }
        $pageElements = $this->setBackwardsPageItem($currentPage, $pageLink);
        for ($i = 1; $i <= $pages; $i++) {
            $linkToPage = $pageLink . "?page=" . $i;
            if ($currentPage == $i) {
                $pageElements .= "<li  class='page-item active'>
                <a class='page-link'>
                    <span>$i</span>
                </a>
            </li>";
            } else {
                $pageElements .= "<li class='page-item'>
                <a href=$linkToPage class='page-link'>
                    <span>$i</span>
                </a>
            </li>";
            }
        }

        $pageElements .= $this->setForwardPageItem($currentPage, $pageLink, $pages);

        echo $pageElements;
    }

    function setBackwardsPageItem($currentPage, $pageLink): string
    {
        $linkToPage = "";
        if ($currentPage > 1) {
            $linkToPage = "href=" . $pageLink . "?page=" . ((int)$currentPage) - 1;
        }

        return " <li class='page-item page-backwards'>
                <a $linkToPage class='page-link'>
                   <i class='fas fa-backward'></i>
                </a>
            </li>";
    }

    function setForwardPageItem($currentPage, $pageLink, $pages): string
    {
        $linkToPage = "";
        if ($currentPage >= 1 && $currentPage < $pages) {
            $linkToPage = "href=" . $pageLink . "?page=" . ((int)$currentPage) + 1;
        }

        return " <li class='page-item page-backwards'>
                <a $linkToPage class='page-link'>
                     <i class='fas fa-forward'></i>
                </a>
            </li>";
    }
}