@extends('layouts.app')

@section('content')
  <div class="container mt-3">
    <div class="row">
      <div class="col-md-12">
        <h3 class="panel-title">Data User</h3>
        <table class="table table-hover">
          <thead>
            <tr>
              <th>NAMA</th>
              <th>EMAIL</th>
              <th>TELEPON</th>
            </tr>
          </thead>
          <tbody>
          @foreach($users as $user)
            <tr>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ $user->phone }}</td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@stop