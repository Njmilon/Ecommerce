@extends('backend.master')
@section('content')
<br> 

<form method="POST" action="{{ route('category.update',$catedit->id) }}">
   
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Category Name</label>
    <input type="text" name="category_name" value="{{ $catedit->name }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="category name">
    
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Category Description</label>
     <textarea name="category_description"  class="form-control" name="" id="" cols="10" rows="7">
        {{ $catedit->description }}
     </textarea>
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Update</button>
</form>


@endsection