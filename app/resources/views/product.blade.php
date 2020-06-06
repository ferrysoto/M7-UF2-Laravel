@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Suppliers Managment</div>
                <div class="card-body">
                    <form class="" action="{{ route('product.update', $product->id) }}" method="post">
                      @csrf
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="name">Nombre de producto</label>
                          <input type="text" class="form-control" name="name" maxlength="255" value="{{$product->name}}" required>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="id_supplier">Proveedor</label>
                          <select name="id_supplier" class="form-control">
                            @foreach ($suppliers as $supplier)
                              @if ($supplier->active == 1)
                                @if ($product->id_supplier == $supplier->id)
                                  <option selected value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                                @else
                                  <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                                @endif
                              @endif
                            @endforeach
                          </select>
                        </div>
                      </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="price">Precio</label>
                            <input type="number" step="0.01" min="0" class="form-control" name="price" value="{{$product->price}}" required>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="active">Estado de producto</label>
                            <select name="active" class="form-control">
                              @if ($product->active == 1)
                                <option selected value="1">Activar</option>
                                <option value="0">Desactivar</option>
                              @else
                                <option value="1">Activar</option>
                                <option selected value="0">Desactivar</option>
                              @endif
                            </select>
                          </div>
                        </div>
                      <input type="text" name="id" value="{{ $product->id }}" hidden>
                      <button type="submit" class="btn btn-success float-right">Guardar datos</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
