@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  Pedidos
                  <div class="float-right">
                    <a href="{{ route('order.create') }}">
                      <i class="far fa-plus-square"></i>
                    </a>
                  </div>
                </div>
                <div class="card-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Total pedido</th>
                        <th scope="col">Opciones</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($orders as $order)
                        <tr>
                          <td>
                            {{ $order->id }}
                          </td>
                          <td>
                            {{ $order->order_name }}
                          </td>
                          <td>
                            {{ $order->total }} €
                          </td>
                          <td>
                            <a href="{{ route('order', $order->id) }}">
                              <i class="fas fa-eye"></i>
                            </a>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
              </div>
          </div>
          <div class="float-right mt-2">
            {{ $orders->links() }}
          </div>
            </div>
        </div>
    </div>
</div>
@endsection
