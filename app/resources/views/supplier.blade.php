@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Suppliers Managment</div>
                <div class="card-body">
                    <form class="" action="{{ route('supplier.update', $supplier->id) }}" method="post">
                      @csrf
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputName">Nombre completo</label>
                          <input type="text" class="form-control" id="inputName" name="name" value="{{ $supplier->name }}" required>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputEmail">Email</label>
                          <input type="email" class="form-control" id="inputEmail" name="email" value="{{ $supplier->email }}" required>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="address">Dirección</label>
                          <input type="text" class="form-control" name="address" value="{{ $supplier->address }}" required>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="phone">Teléfono</label>
                          <input type="text" class="form-control" name="phone" value="{{ $supplier->phone }}" required>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="cif">Número fiscal / CIF</label>
                          <input type="text" class="form-control" name="cif" value="{{ $supplier->cif }}" required>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="active">Activar / Desactivar proveedor</label>
                          <select class="custom-select" name="active">
                            <option value="1">Activar</option>
                            <option value="0">Desactivar</option>
                          </select>
                        </div>
                      </div>
                      <input type="text" name="id" value="{{ $supplier->id }}" hidden>
                      <button type="submit" class="btn btn-success float-right">Guardar datos</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
