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
                      <h3 class="display-8">Añadir productos al carrito</h3>
                      <a class="float-right" href="{{ route('cart') }}">
                        <i class="fas fa-shopping-cart"></i>
                        Ver carrito
                      </a>
                      <p class="lead">Elige los productos y cantidad que necesites.</p>
                    </div>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item active">
                      <div class="col-md-12">
                        <div class="col-md-6 float-left">
                          Nombre del producto
                        </div>
                        <div class="col-md-1 float-right">
                          <label class="form-check-label">Carrito</label>
                        </div>
                        <div class="col-md-3 text-center float-right">
                          <label class="form-check-label">Cantidad</label>
                        </div>
                        <div class="col-md-1 float-right">
                          <label class="form-check-label">Precio</label>
                        </div>
                      </div>
                    </li>
                    @foreach ($products as $p)
                      <li class="list-group-item">
                        <form action="{{ route('add.product', $p->id) }}" method="get">
                          @csrf
                          <div class="col-md-12">
                            <div class="col-md-6 float-left">
                              {{ $p->name}}
                            </div>
                            <div class="col-md-1 float-right">
                              <button class="btn btn-light" type="submit" name="button">
                                <i class="fas fa-cart-plus"></i>
                              </button>
                            </div>
                            <div class="col-md-3 text-center float-right">
                              <a class="btn btn-secondary-light" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                <i class="fas fa-minus"></i>
                              </a>
                              <input class="quantity" min="1" max="99" name="quantity" value="1" type="number" required>
                              <input name="id" type="text" value="{{$p->id}}" required hidden>
                              <a class="btn btn-secondary-light" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                <i class="fas fa-plus"></i>
                              </a>
                            </div>
                            <div class="col-md-1 float-right">
                              <label class="form-check-label" for="quantity"><b>{{$p->price}} €</b></label>
                            </div>
                          </div>
                        </form>
                      </li>
                    @endforeach
                  </ul>
                </div>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection
