<?php

namespace App\Events;

use App\Product;

class ProductUpdated
{


    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Product $product)
    {
        //
        $this->product = $product;
    }

    /**
     * @return Product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */


}
