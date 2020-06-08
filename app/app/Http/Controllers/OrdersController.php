<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\OrderDetail;
use App\Product;
use App\User;
use Auth;


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

      return view('createOrder', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      $cart = session()->get('cart');

      $order = Order::create([
        'user_id' => Auth::id(),
        'total'   => $request['total']
      ]);

      foreach ($cart as $product) {
        OrderDetail::create([
          'id_product' => $product['id_product'],
          'id_order' => $order['id'],
          'unit_price' => $product['price'],
          'quantity'   => $product['quantity']
        ]);
      }

      $request->session()->forget('cart');
      return redirect()->route('home');
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
      $order = Order::where('id', $id)->first();
      $details = OrderDetail::where('id_order', $id)->get();
      $products = [];

      foreach ($details as $d) {
        $product = Product::where('id', $d->id_product)->first();
        $product->quantity = $d->quantity;
        array_push($products, $product);
      }

      return view('order', compact('order', 'products'));
    }

    public function cart() {
      $cart = session()->get('cart');
      $total = 0;

      if (empty($cart)) {
        return view('cart-error');
      }

      foreach ($cart as $product) {
        $total += $product['price'] * $product['quantity'];
      }

      return view('cart', compact('cart', 'total'));
    }

    public function addCart(Request $request, $id) {
      $product = Product::find($id);
      $cart = session()->get('cart');

      if (!$cart) {
        $cart = [
          $id => [
            'id_product'  => $id,
            'name'        => $product->name,
            'price'       => $product->price,
            'quantity'    => $request->quantity
          ]
        ];

        session()->put('cart', $cart);

        return redirect()->back();
      }

      if (isset($cart[$id])) {
        $cart[$id]['quantity'] = $cart[$id]['quantity'] + $request->quantity;
        session()->put('cart', $cart);

        return redirect()->back();
      }

      $cart[$id] = [
          'id_product'  => $id,
          'name'     => $product->name,
          'price'    => $product->price,
          'quantity' => $request->quantity
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
