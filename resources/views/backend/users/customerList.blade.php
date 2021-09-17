@extends('backend.master')
@section('content')

<h2>Customer list</h2>

<table class="table table-success table-striped">
  <thead class="table table-dark">
    <tr>
      <th scope="col">Sl</th>
      <th scope="col">Name</th>
      <th scope="col">Type</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
    </tr>
  </thead>

  <tbody>

@foreach($customers as $key=>$user)
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->role}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->mobile}}</td>
    </tr>
@endforeach
    
  </tbody>
</table>




@endsection