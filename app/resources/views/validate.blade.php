@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Administración de {{ $name }}</div>
                <div class="card-body">
                  <div class="alert alert-danger text-center" role="alert">
                    El {{ $name }} ya existe o no es válido.
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
