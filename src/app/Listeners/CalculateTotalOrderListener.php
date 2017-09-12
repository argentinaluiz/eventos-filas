<?php

namespace App\Listeners;

use App\Events\OrderProductsSaveCompleted;


class CalculateTotalOrderListener
{


    /**
     * Handle the event.
     *
     * @param  OrderProductsSaveCompleted  $event
     * @return void
     */
    public function handle(OrderProductsSaveCompleted $dispatchesEvents)
    {
        $order = $dispatchesEvents->getOrder();
        $sum = 0;

        foreach ($order->products as $orderProduct){
            $sum += ($orderProduct->price * $orderProduct->quantity);
        }
        $order->total = $sum;
        $order->save();
    }
}
