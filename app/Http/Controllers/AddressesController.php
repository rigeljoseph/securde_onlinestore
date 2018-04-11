<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Address;

class AddressesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

    function uniqidReal($lenght = 13) {
        // uniqid gives 13 chars, but you could adjust it to your needs.
        if (function_exists("random_bytes")) {
            $bytes = random_bytes(ceil($lenght / 2));
        } elseif (function_exists("openssl_random_pseudo_bytes")) {
            $bytes = openssl_random_pseudo_bytes(ceil($lenght / 2));
        } else {
            throw new Exception("no cryptographically secure random function available");
        }
        return substr(bin2hex($bytes), 0, $lenght);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        if(Auth::guest()){
            return redirect('/login')->with('error', 'Please Login to Continue');
        }

        if(auth()->user()->user_id !== $id){
            return redirect('/home')->with('error', 'Unauthorized Page');
        }

        $this->validate($request, [
            'address' => 'required|string|max:255|regex:/^[\pL\s\-]+$/u',
        ]);


        $address = new Address;
        $address->address_id = $this->uniqidReal();
        $address->user_id = $id;
        $address->address = $request->input('address');
        $address->save();

        $redirect = "/user/edit/".$id."/addresses";

        return redirect($redirect)->with('success', 'Address Added!');
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

    public function deleteAddress($user_id, $address_id){

        if(Auth::guest()){
            return redirect('/login')->with('error', 'Please Login to Continue');
        }


        if(auth()->user()->user_id !== $user_id){
            return redirect('/home')->with('error', 'Unauthorized Page');
        }

        $address = Address::where('address_id',$address_id)->first();
        $address->delete();

        $redirect = "/user/edit/".$user_id."/addresses";

        return redirect($redirect)->with('success', 'Address Deleted!');
    }
}
