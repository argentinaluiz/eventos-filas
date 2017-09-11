<?php

namespace App\Events;

use App\StockEntry;

class StockEntryCreated
{

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(StockEntry $entry)
    {
        //
        $this ->entry = $entry;
    }

    /**
     * @return StockEntry
     */
    public function getEntry()
    {
        return $this->entry;
    }



}
