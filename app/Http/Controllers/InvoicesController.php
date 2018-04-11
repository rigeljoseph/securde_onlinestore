<?php

namespace App\Http\Controllers;


use Request;
use App\User;
use App\Category;
use App\Address;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Item;
class InvoicesController extends Controller
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

        $items = Item::where('name','LIKE','%'. $item. '%'  )
                    ->orWhere('photo',$item )->get();


        return view('pages.items')->with('items', $items);
    }
    public function clear($price)
    {
        if(Auth::guest()){
            return redirect('/login')->with('error', 'Please Login to Continue');
        }

        DB::table('cart') ->where('bought', 0)->
        where('user_id',  Auth::user()->user_id ) ->
        update(['bought' => 1]);

        DB::table('invoices')->insert([
            ['invoice_id'=> uniqid(),   
            'user_id' =>Auth::user()->user_id,
            'address_id' =>1, 
            'total_cost' => $price,
            'fulfilled' => 0]
        ]);

        return view('pages.success');
    }
    public function display($search)
    {
        $item= Request::input('$search');
        $items = Item::where('item_id', $search )->get();
        
       

        return view('pages.display')->with('items', $items);
    }  
    
    public function delete($cartid)
    {
        if(Auth::guest()){
            return redirect('/login')->with('error', 'Please Login to Continue');
        }

        DB::table('cart') ->where('bought', 0)->
        where('cartid',  $cartid)->
        update(['bought' => 1]);

        $titles = DB::table('cart')
        ->join('items', 'cart.item_id', '=', 'items.item_id')
        ->select('items.name', 'items.price','cart.bought', 'cart.cartid')->
        where('user_id',  Auth::user()->user_id )->
        where('cart.bought',0)
        ->orderBy('name','desc')->get();
        $price = DB::table('cart')
        ->join('items', 'cart.item_id', '=', 'items.item_id')
        ->
        where('user_id',  Auth::user()->user_id )->
        where('cart.bought',0) 
        ->orderBy('name','desc')->sum('items.price');
        
                return view('pages.cart')->with('titles', $titles)  ->with('price', $price);

    }
    public function cartdis()
    {  
        if(Auth::guest()){
            return redirect('/login')->with('error', 'Please Login to Continue');
        }

        $titles = DB::table('cart')
        ->join('items', 'cart.item_id', '=', 'items.item_id')
        ->select('items.name', 'items.price','cart.bought','cart.cartid')->
        where('user_id',  Auth::user()->user_id )->
        where('cart.bought',0)
        ->orderBy('name','desc')->get();
        $price = DB::table('cart')
        ->join('items', 'cart.item_id', '=', 'items.item_id')
        ->
        where('user_id',  Auth::user()->user_id )->
        where('cart.bought',0) 
        ->orderBy('name','desc')->sum('items.price');
        
                return view('pages.cart')->with('titles', $titles)  ->with('price', $price);

    }
    public function cartdisplay($items,$user)
    {
       
        if(Auth::guest()){
            return redirect('/login')->with('error', 'Please Login to Continue');
        }
        
        $use = User::where('username', $user )->get();
        $item = Item::where('item_id', $items )->get();
        DB::table('cart')->insert([
            ['user_id' => $use[0]->user_id,
            'item_id' =>$item[0]->item_id ,
            'quantity' => '1',
            'price' => '20',
            'bought' => 0]
        ]);
    
        $titles = DB::table('cart')
        ->join('items', 'cart.item_id', '=', 'items.item_id')
        ->select('items.name', 'items.price','cart.bought','cart.cartid')->
        where('user_id',  Auth::user()->user_id )->
        where('cart.bought',0) 
        ->orderBy('name','desc')->get();
        $price = DB::table('cart')
        ->join('items', 'cart.item_id', '=', 'items.item_id')
        ->
        where('user_id',  Auth::user()->user_id )->
        where('cart.bought',0) 
        ->orderBy('name','desc')->sum('items.price');
        
                return view('pages.cart')->with('titles', $titles)  ->with('price', $price);
    }


    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
}
