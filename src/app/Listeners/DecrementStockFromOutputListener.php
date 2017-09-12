<?php

namespace App\Listeners;

use App\Stock\DecrementStocks;
use App\Events\StockOutputCreated;

class DecrementStockFromOutputListener
{

    use DecrementStocks;
    /**
     * Handle the event.
     *
     * @param  StockOutputCreated  $event
     * @return void
     */
    public function handle(StockOutputCreated $dispatchesEvents)
    {
        //decrementar o estoque do produto
        $output = $dispatchesEvents->getOutput();
        $product = $output->product;
        $this->decrement($product, $output->quantity);

    }
}
