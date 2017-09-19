<?php
/**
 * Created by PhpStorm.
 * User: juliofilgueiras@conder.intranet
 * Date: 12/09/17
 * Time: 16:22
 */

namespace App\Stock;


use App\Product;

trait DecrementStocks
{
    public function decrement(Product $product, $quantity){
        $product->stock = $product->stock - $quantity;
        $product->save();
    }
}