<?php

namespace App\Listeners;

use App\Events\ProductUpdated;
use App\Mail\StockGreatherMax;

class CheckStockMaxListener
{


    public function handle(ProductUpdated $event)
    {
        //
        $product = $event -> getProduct();

        if($product->stock >= $product->stock_max){
            \Mail::to(env('MAIL_STOCK'))->send(new StockGreatherMax($product));
        }
    }
}
