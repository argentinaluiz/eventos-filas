<?php

namespace App\Listeners;

use App\Stock\DecrementStocks;
use App\Events\OrderProductCreated;


class DecrementStockFromCheckoutListener
{
  use DecrementStocks;

    /**
     * Handle the event.
     *
     * @param  OrderProductCreated  $event
     * @return void
     */
    public function handle(OrderProductCreated $dispatchesEvents)
    {

        $orderProduct = $dispatchesEvents->getProduct();
        $this->decrement($orderProduct->product,$orderProduct->quantity);
    }
}
