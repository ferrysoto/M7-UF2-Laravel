<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Supplier;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $products = Product::paginate(5);
      $suppliers = Supplier::get();

      return view('products', compact('products', 'suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $inputs = request()->all();
      $create = Product::create($inputs);

      if ($create) {
        return redirect()->route('products');
      }

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
      $product = Product::where('id', $id)->first();
      $suppliers = Supplier::get();

      return view('product', compact('product', 'suppliers'));
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
    public function update(Request $request)
    {
      $update = Product::where('id', $request->id)->update([
        'name' => $request['name'],
        'price' => $request['price'],
        'id_supplier' => $request['id_supplier'],
        'active' => $request['active'],

      ]);

        if ($update) {
          return redirect()->route('products');
        }
    }

    public function updateState($id)
    {
      $product = Product::where('id', $id)->first();

      if ($product->active == 1) {
        Product::where('id', $id)->update(['active' => 0]);
      } else {
        Product::where('id', $id)->update(['active' => 1]);
      }

      return redirect()->route('products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      if (Product::where('id', $id)->delete()) {
        return back()->with('message', 'Delete success');
      }
    }
}
