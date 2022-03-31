<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;
use Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(!Auth::id()){
            return redirect('/login');
        }
        $carts = Cart::orderBy('id','DESC')->where('user_id',Auth::id())->get();
        return view('cart.index',compact('carts'));
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
        //加入購物車

        if(!Auth::id()){
            return redirect('/login');
        }


        $cart = new Cart;
        $cart->product_id = $request->product_id;
        $cart->user_id = Auth::id();
        $cart->save();

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
        $cart->delete();
        return redirect()->back();

    }
    public function clearCart(){
        $carts = Cart::where('user_id',Auth::id())->get();
        foreach($carts as $cart){
            $cart->delete();
        }
        return redirect()->back();
    }
}
