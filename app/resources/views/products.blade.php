@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-left">
                      Administrar productos
                    </div>
                    <div class="float-right">
                      <a data-toggle="modal" data-target="#createProductsModal">
                        <i class="far fa-plus-square"></i>
                      </a>
                    </div>
                   @include('createProductModal')
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Nombre</th>
                          <th scope="col">Precio</th>
                          <th scope="col">Proveedor</th>
                          <th scope="col">Activo</th>
                          <th scope="col">Opciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($products as $product)
                          <tr>
                            <td>
                              {{ $product->id }}
                            </td>
                            <td>
                              {{ $product->name }}
                            </td>
                            <td>
                              {{ $product->price }} €
                            </td>
                            <td>
                              @foreach ($suppliers as $supplier)
                                @if ($product->id_supplier == $supplier->id)
                                  {{ $supplier->name }}
                                @endif
                              @endforeach
                            </td>
                            <td>
                              @if ( $product->active == 1)
                                <i class="fas fa-check" style="color: green;"></i>
                              @else
                                <i class="fas fa-times" style="color: red;"></i>
                              @endif
                            </td>
                            <td>
                              <a href="{{ route('product', $product->id) }}">
                                <i class="fas fa-info-circle"></i>
                              </a>
                              <a href="{{ route('product.state', $product->id) }}">
                                @if ($product->active == 1)
                                  <i class="fas fa-toggle-on"></i>
                                @else
                                  <i class="fas fa-toggle-off"></i>
                                @endif
                              </a>
                              <a href="{{ route('product.remove', $product->id) }}">
                                <i class="fas fa-trash-alt"></i>
                              </a>
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
            <div class="float-right mt-2">
              {{ $products->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
