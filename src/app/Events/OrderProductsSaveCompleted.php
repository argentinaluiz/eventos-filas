<?php

namespace App\Events;

use App\Order;

class OrderProductsSaveCompleted
{


    private $order;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(order $order)
    {
        $this->order = $order;
    }

    /**
     * @return Order
     */
    public function getOrder()
    {
        return $this->order;
    }



}
