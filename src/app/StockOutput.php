<?php

namespace App;

use App\Events\StockOutputCreated;
use Illuminate\Database\Eloquent\Model;

class StockOutput extends Model
{
    use StockMovements;

    protected $dispatchesEvents =[
      'create' => StockOutputCreated::class
    ];
}
