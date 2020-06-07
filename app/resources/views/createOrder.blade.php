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
                      <p class="lead">Elige los productos y cantidad que necesites.</p>
                    </div>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item active">
                      <div class="col-md-12">
                        <div class="col-md-8 float-left">
                          Nombre del producto
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
                        <div class="col-md-12">
                          <div class="col-md-8 float-left">
                            {{ $p->name}}
                          </div>
                          <div class="col-md-3 text-center float-right">
                            <button class="btn btn-light" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                              <i class="fas fa-minus"></i>
                            </button>
                            <input class="quantity" min="0" max="99" name="quantity" value="1" type="number">
                            <button class="btn btn-light" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                              <i class="fas fa-plus"></i>
                            </button>                          </div>
                          <div class="col-md-1 float-right">
                            <label class="form-check-label" for="quantity"><b>{{$p->price}} €</b></label>
                          </div>
                        </div>
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
