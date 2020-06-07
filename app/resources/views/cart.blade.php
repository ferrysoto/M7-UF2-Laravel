@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  Crear pedido
                  <div class="float-right">
                    <form action="{{ route('order.create.success') }}" method="post">
                      @csrf
                      <input type="number" name="total" value="{{ $total }}" hidden>
                      <button class="btn btn-success" type="submit">
                        <i class="far fa-plus-square"></i>
                        Pagar y formalizar pedido
                      </button>
                    </form>
                  </div>
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
                        @foreach(session('cart') as $id)
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
