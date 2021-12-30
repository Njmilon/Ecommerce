@extends('backend.master')
@section('content')
<br> 

<form method="POST" action="{{ route('Product.update',$productedit->id) }}">
   
  @csrf

  

  <div class="form-group">
    <label for="exampleInputEmail1">Product Name</label>
    <input type="text" name="product_name" value="{{ $productedit->name }}" class="form-control" id="exampleInputEmail1" placeholder="product name">
    
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Price</label>
    <input type="number" name="product_price" value="{{ $productedit->price }}" class="form-control" id="exampleInputEmail1" placeholder="price">
    
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Product Description</label>
     <textarea name="product_description"  class="form-control" name="" id="" cols="10" rows="7">{{ $productedit->description }}
     </textarea>
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Update</button>
</form>


@endsection