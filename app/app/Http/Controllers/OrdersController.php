<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Product;
use App\Shipping;
use App\User;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $products = Product::get();
      $shipping = Shipping::get();

        return view('createOrder', compact('products', 'shipping'));
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

    }

    public function cart() {
      $cart = session()->get('cart');

      return view('cart', compact('cart'));
    }

    public function addCart(Request $request, $id) {
      $product = Product::find($id);
      $cart = session()->get('cart');

      if (!$cart) {
        $cart = [
          $id => [
            'name'        => $product->name,
            'price'       => $product->price,
            'quantity'    => $request->quantity
          ]
        ];

        session()->put('cart', $cart);

        return redirect()->back();
      }

      if (isset($cart[$id])) {
        $cart[$id]['quantity']++;
        session()->put('cart', $cart);

        return redirect()->back();
      }

      $cart[$id] = [
          "name"     => $product->name,
          "price"    => $product->price,
          "quantity" => $request->quantity
        ];
        session()->put('cart', $cart);

        return redirect()->back();
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
