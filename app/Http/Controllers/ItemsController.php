<?php

namespace App\Http\Controllers;

use \Input as Input;
use Illuminate\Http\Request;
use App\Category;
use App\Inventory;
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
        $item = Request::input('input');

        $items = Item::where('name',$item )
                    ->orWhere('photo',$item )->get();


        return view('pages.items')->with('items', $items);
    }
    public function display($search)
    {
        $item= Request::input('$search');
        $items = Item::where('item_id', $search )->get();
        
       

        return view('pages.display')->with('items', $items);
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

        if(auth()->user()->user_type_id !== 2){
            return redirect('/home')->with('error', 'Unauthorized Page');
        }

        $this->validate($request, [
            'item_id' => 'required|alpha_num|unique:items',
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'category' => 'required|alpha_num',
            'photo' => 'image|max:1999'
        ]);

        // Get filename with extension

        $filenameWithExt = $request->file('photo')->getClientOriginalName();

        // Get just the filename

        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

        // Get extension

        $extension = $request->file('photo')->getClientOriginalExtension();

        // Create new filename

        $filenameToStore = $filename.'_'.time().'.'.$extension;

        // store item

        $path = $request->file('photo')->storeAs('public/item_photos', $filenameToStore);

        $item = new Item;
        $item->item_id = $request->input('item_id');
        $item->name = $request->input('name');
        $item->description = $request->input('description');
        $item->price = $request->input('price');
        $item->category_id = $request->input('category');
        $item->photo = $filenameToStore;
        $item->save();

        $inventory = new Inventory;
        $inventory->item_id = $request->input('item_id');
        $inventory->status_id = 1;
        $inventory->save();

        return redirect('/admin/products')->with('success', 'Item Added');
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
        if(auth()->user()->user_type_id !== 2){
            return redirect('/home')->with('error', 'Unauthorized Page');
        }

        $this->validate($request, [
            'item_id' => 'required|alpha_num|',
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'category' => 'required|alpha_num',
        ]);

        // update item

        $item = Item::find($id);
        $item->item_id = $request->input('item_id');
        $item->name = $request->input('name');
        $item->description = $request->input('description');
        $item->price = $request->input('price');
        $item->category_id = $request->input('category');
        $item->save();

        return redirect('/admin/products')->with('success', 'Item Updated');
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
