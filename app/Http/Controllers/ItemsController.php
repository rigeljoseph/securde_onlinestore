<?php

namespace App\Http\Controllers;


use Request;
use App\Category;

use App\Item;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewAll()
    {
        $items = Item::all();


        return view('pages.items')->with('items', $items);
    }
    public function viewTop()
    {
        $items = Item::where('category_id', 1)->get();


        return view('pages.items')->with('items', $items);
    }
    public function viewPants()
    {
        $items = Item::where('category_id', 2)->get();


        return view('pages.items')->with('items', $items);
    }

    public function viewShorts()
    {
        $items = Item::where('category_id', 3)->get();


        return view('pages.items')->with('items', $items);
    }
    public function viewHoodies()
    {
        $items = Item::where('category_id', 4)->get();


        return view('pages.items')->with('items', $items);
    }
    public function search()
    {
        $item= Request::input('input');

        $items = Item::where('name',$item )
                    ->orWhere('photo',$item )->get();


        return view('pages.items')->with('items', $items);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        if(auth()->user()->user_type_id !== 2){
            return redirect('/home')->with('error', 'Unauthorized Page');
        }

        return view('pages.itemcreate')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function items()
    {
        $items = Item::all();


        return view('items')->with('items', $items);
    }
}
