<?php

use private\Classes\Database\ProductManagement;

echo ProductManagement::getProductTitle($_GET["id"]);