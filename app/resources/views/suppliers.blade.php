@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Suppliers Management</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Name</th>
                          <th scope="col">Email</th>
                          <th scope="col">CIF</th>
                          <th scope="col">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($suppliers as $supplier)
                          <tr>
                            <td>
                              {{ $supplier->id }}
                            </td>
                            <td>
                              {{ $supplier->name }}
                            </td>
                            <td>
                              {{ $supplier->email }}
                            </td>
                            <td>
                              {{ $supplier->cif }}
                            </td>
                            <td>
                              <a href="{{ route('user', $supplier->id) }}">
                                <i class="fas fa-store"></i>
                              </a>
                              <a href="" id="remove-user">
                                <i class="fas fa-ban"></i>
                              </a>
                              @section('scripts')
                                <script type="text/javascript">
                                  $('#remove-user').click(function() {
                                    alert("¿Estás seguro que deseas eliminar este usuario?");
                                  });
                                </script>
                              @endsection
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
