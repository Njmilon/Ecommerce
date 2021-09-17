@extends('backend.master')
@section('content')
   
<br>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Create New Product
</button>


<h1>Product List: </h1>

@if(session()->has('message'))
<div class="row" style="padding: 10px;">
    <span class="alert alert-success">{{session()->get('message')}}</span>
</div>
@endif

<table class="table table-success table-striped"> 
<thead class="table table-dark">
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Product Image</th>
      <th scope="col">Product Name</th>
      <th scope="col">Category Name</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($products as $key=>$product) 
    <tr>
      <!-- {{ $loop->iteration }}-->
      <!-- {{ $key+1 }}-->
      <td scope="row">{{ $loop->iteration }}</td>
      <td>
            <img src="{{ url('uploads/'.$product->image) }}" width="100px" alt="product image">
      </td>
      <td>{{$product->name}}</td>
      <td>{{$product->category->name}}</td>
      <td>{{$product->price}}</td>
      <td>{{$product->description}}</td>
      <td>
		    <a href="{{ route('Product.edit',$product->id) }}" class="btn btn-info" title="Edit Data"> Edit</a>
        
		    <a onclick="return confirm('Are you sure you want to delete this item?');" href="{{ route('Product.delete',$product->id) }}" class="btn btn-danger" title="Delete Data">Delete</a>

	     </td>
      
    </tr>
    @endforeach
</table>




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create New Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        

      <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">  <!-- form -->
        @csrf

        <div class="form-group">
          <label for="productName">Select Category:</label>
          <select class="form-control" name="categoryId" id="">
            @foreach($categories as $cat)
            <option value="{{$cat->id}}">{{$cat->name}}</option>
            @endforeach
          </select>

        </div>
  <div class="form-group">
    <label for="productName">Name:</label>
    <input required type="text" class="form-control" id="productName" name="productName" placeholder="Enter Product Name">
    
  </div>
  <div class="form-group">
    <label for="productPrice">Price:</label>
    <input required type="number" class="form-control" id="productPrice" name="productPrice" placeholder="Enter Product Price">
  </div>
  <div>
  <label for="productDescription">Description:</label>
  <textarea required class="form-control" name="productDescription" id="productDescription" placeholder="Enter Product Description"></textarea>
  </div>
      <div class="form-group">
          <label for="product_image">Price:</label>
          <input required type="file" class="form-control" id="product_image" name="product_image">
  </div>

 
    <div class="form-group">
       
        <div class="controls">
           
            <fieldset>
                <input type="checkbox" id="checkbox_3" name="featured" value="1">
                <label for="checkbox_3">Featured</label>
            </fieldset>
        </div>

        <div class="controls">
           
          <fieldset>
              <input type="checkbox" id="recent_3" name="recent" value="1">
              <label for="recent_3">Recent</label>
          </fieldset>
      </div>
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
