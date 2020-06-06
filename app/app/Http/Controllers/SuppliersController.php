<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;

class SuppliersController extends Controller
{

    public function index()
    {
        $suppliers = Supplier::get();

        return view('suppliers', compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $inputs = request()->all();
        dd($inputs, $request);
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
        $supplier = Supplier::where('id', $id)->first();

        return view('supplier', compact('supplier'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateState($id)
    {
      $supplier = Supplier::where('id', $id)->first();

      if ($supplier->active == 1) {
        Supplier::where('id', $id)->update(['active' => 0]);
      } else {
        Supplier::where('id', $id)->update(['active' => 1]);
      }

      return redirect()->route('suppliers');
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
      $update = Supplier::where('id', $request->id)->update([
        'name' => $request['name'],
        'email' => $request['email'],
        'address' => $request['address'],
        'phone' => $request['phone'],
        'cif' => $request['cif'],
        'active' => $request['active'],

      ]);

        if ($update) {
          return redirect()->route('suppliers');
        }
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
