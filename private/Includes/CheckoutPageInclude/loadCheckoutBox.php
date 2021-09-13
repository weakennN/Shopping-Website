<?php

use private\Classes\Database\CartManagement;
use private\Classes\User\User;

$userId = User::getUserId();

$totalProducts = CartManagement::getUserTotalProducts($userId);
$total = CartManagement::getUserCartTotal($userId);

echo "<div class='row'>
                    <div class='col-lg-6 col-md-12'>
                        <div class='ms-5'>
                            <h5 class='display-6 mb-3'>Order Description</h5>
                            <p class='lead'>Total products: $totalProducts</p>
                        </div>
                    </div>
                    <div class='col-lg-6 col-md-12'>
                        <div class='ms-5'>
                            <p class='display-6'>Total: $$total</p>
                            <button type='submit' class='btn btn-primary order-button btn-lg'>Order</button>
                        </div>
                    </div>
                </div>";