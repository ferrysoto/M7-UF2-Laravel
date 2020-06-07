@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  Crear pedido
                </div>
                <div class="card-body">
                  <div class="jumbotron-fluid">
                    <div class="container">
                      <h3 class="display-8">Carrito de compra</h3>
                    </div>
                  </div>
                  @if(session('cart'))
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Producto</th>
                          <th>Precio/und.</th>
                          <th>Cantidad</th>
                         </tr>
                        </thead>
                        @php
                          $total = 0;
                        @endphp
                        @foreach(session('cart') as $id)
                          @php
                            $total += $id['price'] * $id['quantity'];
                          @endphp
                          <tr>
                            <th>{{ $id['name'] }}</th>
                            <th>{{ $id['price'] }}€</th>
                            <th>{{ $id['quantity'] }}</th>
                          </tr>
                        @endforeach
                      </table>
                    @endif
                  <div class="float-right">
                    <b>Precio total a pagar: {{ $total }} €</b>
                  </div>
                </div>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection
