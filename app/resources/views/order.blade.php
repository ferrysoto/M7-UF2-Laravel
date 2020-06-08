@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Pedido número {{ $order->id }}</div>
                <div class="card-body">
                  <div class="media">
                    <div class="media-body">
                        <ul class="list-group list-group-flush">
                          @foreach ($products as $product)
                          <li class="list-group-item">
                            <h5 class="mt-0">{{ $product->name }}</h5>
                            {{ $product->price }} € / unidad
                            <br>
                            Cantidad pedida: {{ $product->quantity }}
                          </li>
                          @endforeach
                        </ul>
                      <b>Total pedido: {{ $order->total }} €</b>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
