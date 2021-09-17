<?php

namespace private\Classes\Loader\OrderLoader;

class OrderElementCreator
{
    public function create($orderId, $date, $total): string
    {
        return "<div class='col-12 mb-3'>
                        <div class='row mx-2 order-item p-2'>
                            <div class='col-12 col-md-10'>
                                <a href='orderdetails.php?order=$orderId'>
                                    <h4 class='order-title'>Order № $orderId</h4>
                                </a>
                                <p style='font-size: 18px' class='m-0'>Registered on $date |
                                    Total $$total</p>
                            </div>
                            <div class='col-12 col-md-2'>
                                <a href='orderdetails.php?order=$orderId'>
                                    <button style='width: 100%;margin-top: 13px' class='btn btn-primary' type='button'>Details
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>";
    }
}