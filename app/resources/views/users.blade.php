@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  Users Management
                </div>
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
                          <th scope="col">Admin</th>
                          <th scope="col">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($users as $user)
                          <tr>
                            <td>
                              {{ $user->id }}
                            </td>
                            <td>
                              {{ $user->name }}
                            </td>
                            <td>
                              {{ $user->email }}
                            </td>
                            <td>
                              @if ($user->is_admin == 1)
                                <i class="fas fa-check" style="color: green;"></i>
                              @else
                                <i class="fas fa-times" style="color: red;"></i>
                              @endif
                            </td>
                            <td>
                              <a href="{{ route('user', $user->id) }}">
                                <i class="fas fa-user-cog"></i>
                              </a>
                              <a href="{{ route('user.remove', $user->id) }}">
                                <i class="fas fa-trash-alt"></i>
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
