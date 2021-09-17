@extends('backend.master')
@section('content')
<br>
@if(session()->has('success'))
<div class="alert alert-success">
    {{session()->get('success')}}
</div>
@endif

<br>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Create New User
</button>
<h1>user list:</h1>



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

@foreach($users as $key=>$user)
    <tr>
      <th scope="row"> {{ $loop->iteration }}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->role}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->mobile}}</td>
    </tr>
@endforeach
    
  </tbody>
</table>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create New User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        

       

      <form action="{{ route('create.user.store') }}" method="POST" enctype="multipart/form-data">  <!-- form -->
        @csrf
  <div class="form-group">
    <label for="userName"><strong> Name:</strong></label>
    <input required type="text" class="form-control" id="userName" name="name" placeholder="Enter User Name">
  </div>
  
  <div class="form-group">
    <label for="userPassword"><strong>Password:</strong></label>
    <input required type="password" class="form-control" id="userPassword" name="password" placeholder="Enter Password">
  </div>


<div class="form-group">
  <label for="userEmail"><strong>Email:</strong></label>
  <input required type="email" class="form-control" id="userEmail" name="email" placeholder="Enter Email">
</div>
 
<div class="form-group">
  <label for="userPhoneNo"><strong>Mobile-No:</strong></label>
  <input required type="number" class="form-control" id="userPhoneNo" name="phone" placeholder="Enter Mobile No">
</div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>

@endsection