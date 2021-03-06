<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Item;
use App\Category;
use App\Address;
use App\Inventory;

use App\Invoice;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $users = User::all();

        if(auth()->user()->user_type_id !== 2){
            return redirect('/home')->with('error', 'Unauthorized Page');
        }

        return view('auth.createadmin')->with('users', $users);
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

    }

    public function promoteToAdmin($id){
        if(auth()->user()->user_type_id !== 2){
            return redirect('/home')->with('error', 'Unauthorized Page');
        }

        $user = User::where('user_id',$id)->first();
        $user->user_type_id = 2;
        $user->save();

        return redirect('/admin')->with('success', 'User Promoted');
    }

    public function removeUser($id){
        if(auth()->user()->user_type_id !== 2){
            return redirect('/home')->with('error', 'Unauthorized Page');
        }

        $user = User::where('user_id',$id)->first();
        $user->delete();

        return redirect('/admin')->with('success', 'User Deleted');
    }

    public function viewAllProducts(){
        $items = Item::all();

        if(auth()->user()->user_type_id !== 2){
            return redirect('/home')->with('error', 'Unauthorized Page');
        }

        return view('pages.adminproduct',['items' => $items]);
    }

    public function viewAllPurchases(){
        $invoices = Invoice::all();
        $addresses = Address::all();
        if(auth()->user()->user_type_id !== 2){
            return redirect('/home')->with('error', 'Unauthorized Page');
        }

        return view('pages.adminpurchases',['invoices' => $invoices, 'addresses' => $addresses]);
    }

    public function editProductData($id){
        if(auth()->user()->user_type_id !== 2){
            return redirect('/home')->with('error', 'Unauthorized Page');
        }

        $item = Item::where('item_id',$id)->first();
        $categories = Category::all();

        return view('pages.admineditproduct', ['item' => $item, 'categories' => $categories]);
    }

    public function removeProduct($id){
        if(auth()->user()->user_type_id !== 2){
            return redirect('/home')->with('error', 'Unauthorized Page');
        }



        $item = Item::where('item_id',$id)->first();
        $item->delete();

        return redirect('/admin/products')->with('success', 'Item Deleted');
    }

    public function setInvoiceFulfilled($id){
        if(auth()->user()->user_type_id !== 2){
            return redirect('/home')->with('error', 'Unauthorized Page');
        }

        $invoice = Invoice::where('invoice_id',$id)->first();
        $invoice->fulfilled = 1;
        $invoice->save();

        return redirect('/admin/purchases')->with('success', 'Invoice Fulfilled');
    }

    public function setInvoiceUnfulfilled($id){
        if(auth()->user()->user_type_id !== 2){
            return redirect('/home')->with('error', 'Unauthorized Page');
        }

        $invoice = Invoice::where('invoice_id',$id)->first();
        $invoice->fulfilled = 0;
        $invoice->save();

        return redirect('/admin/purchases')->with('success', 'Invoice Status Reset');
    }

    public function setInvoiceRejected($id){
        if(auth()->user()->user_type_id !== 2){
            return redirect('/home')->with('error', 'Unauthorized Page');
        }

        $invoice = Invoice::where('invoice_id',$id)->first();
        $invoice->fulfilled = 2;
        $invoice->save();

        return redirect('/admin/purchases')->with('success', 'Invoice Rejected');
    }
}
