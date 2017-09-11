<?php

namespace App\Http\Controllers;

use App\Mail\StockGreatherMax;
use App\Product;
use App\StockEntry;
use Illuminate\Http\Request;


class StockEntriesController extends Controller
{
    public function index()
    {
        $movements = StockEntry::all();
        return view('stock-entries.index', compact('movements'));
    }

    public function create()
    {
        $products = Product::all()->pluck('name', 'id');
        return view('stock-entries.create', compact ('products'));
    }

    public function store(Request $request)
    {
        $data = array_except($request->all(), '_token');
        StockEntry::forceCreate($data);
        return redirect()->route('stock_entries.index');
    }
}
