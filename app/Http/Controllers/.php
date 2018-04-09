<?php

namespace App\Http\Controllers;
use DB;
use App\Item;
use Illuminate\Http\Request;


class ItemView extends Controller
{

    public function index()
    {
        $items = Item::all();


        return view('itemview')->with('items', $items);
    }
}


