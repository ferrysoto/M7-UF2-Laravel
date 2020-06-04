@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">User Managment</div>
                <div class="card-body">
                    <form class="" action="{{ route('user.update', $user->id) }}" method="post">
                      @csrf
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputName">Nombre completo</label>
                          <input type="text" class="form-control" id="inputName" name="name" value="{{ $user->name }}">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputEmail">Email</label>
                          <input type="email" class="form-control" id="inputEmail" name="email" value="{{ $user->email }}" required>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-12">
                          <label for="is_admin">Rol de usuario</label>
                          <select class="custom-select" name="is_admin">
                            <option value="0">Estándar</option>
                            <option value="1">Administrador</option>
                          </select>
                        </div>

                      </div>
                      <button type="submit" class="btn btn-success float-right">Guardar datos</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
