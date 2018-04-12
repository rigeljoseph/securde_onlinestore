<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Category;
use App\Address;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Item;
class UsersController extends Controller
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
        if(Auth::guest()){
            return redirect('/login')->with('error', 'Please Login to Continue');
        }
        if(auth()->user()->user_id !== $id){
            return redirect('/home')->with('error', 'Unauthorized Page');
        }

        $user = User::where('user_id',$id)->first();

        $addresses = Address::where('user_id', $id)->get();

        return view('pages.editprofile', ['user' => $user, 'addresses' => $addresses]);
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
        if(Auth::guest()){
            return redirect('/login')->with('error', 'Please Login to Continue');
        }

        if(auth()->user()->user_id !== $id){
            return redirect('/home')->with('error', 'Unauthorized Page');
        }

        $this->validate($request, [
            'username' => 'required|string|min:3|max:20|regex:/(^([a-zA-Z]+)(\d+)?$)/u',
            'email' => 'required|string|email|max:255|',
            'first_name' => 'required|string|max:255|regex:/^[\pL\s\-]+$/u',
            'last_name' => 'required|string|max:255|regex:/^[\pL\s\-]+$/u',
        ]);

        $user = User::where('user_id',$id)->first();
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->save();

        return redirect('/home')->with('success', 'Information Updated!');
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

    public function viewUserAddresses($id){
        if(Auth::guest()){
            return redirect('/login')->with('error', 'Please Login to Continue');
        }

        if(auth()->user()->user_id !== $id){
            return redirect('/home')->with('error', 'Unauthorized Page');
        }

        $addresses = Address::where('user_id', $id)->get();

        return view('pages.useraddresses', ['addresses' => $addresses, 'user' => $id]);
    }
}
