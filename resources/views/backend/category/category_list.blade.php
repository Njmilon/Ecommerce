@extends('backend.master')
@section('content')


<br>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
 Create New Category
</button>

<h1>Category List: </h1>

<table class="table table-success table-striped">
<thead class="table table-dark">
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Status</th>
      <th scope="col">View Product</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  @foreach($categories as $key=>$category)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$category->name}}</td>
      <td>{{$category->description}}</td>
      <td>{{$category->status}}</td>
      <td>
      <a href="{{route('category.product',$category->id)}} " class="btn btn-success">view product</a>
      </td>
      <td>
		    <a href="{{ route('category.edit',$category->id) }}" class="btn btn-info" title="Edit Data"> Edit</a>
        
		    <a href="{{ route('category.delete',$category->id) }}" class="btn btn-danger" title="Delete Data">Delete</a>

	     </td>	
      
    </tr>
@endforeach
</table>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form action="{{route('category.store')}}" method="POST">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create New Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <form action="{{route('category.store')}}" method="post">
  @csrf 
    
  <div class="form-group">
    <label for="categoryName"> Category Name: </label>
    <input type="text" name="categoryName" class="form-control" id="categoryName" placeholder="Enter Category Name">   
  </div>
  <br>
    <label for="categoryDescription">Category Description: </label>
    <textarea type="text" name="categoryDescription"class="form-control" name="categoryDescription" id="categoryDescription" placeholder="Enter Category Description"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      </form>
    </div>
  </div>
  
</div>

</form>


@endsection