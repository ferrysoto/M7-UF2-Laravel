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
                          <th scope="col">Active</th>
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
                              @if ( $supplier->active == 1)
                                <i class="fas fa-check" style="color: green;"></i>
                              @else
                                <i class="fas fa-times" style="color: red;"></i>
                              @endif
                            </td>
                            <td>
                              <a href="{{ route('supplier', $supplier->id) }}">
                                <i class="fas fa-store"></i>
                              </a>
                              <a href="{{ route('supplier.state', $supplier->id) }}">
                                @if ($supplier->active == 1)
                                  <i class="fas fa-toggle-on"></i>
                                @else
                                  <i class="fas fa-toggle-off"></i>
                                @endif
                              </a>
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
