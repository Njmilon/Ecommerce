@extends('backend.master')
@section('content')

    <br>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Create New Slider
    </button>


    <h1>Slider List: </h1>

    @if (session()->has('message'))
        <div class="row" style="padding: 10px;">
            <span class="alert alert-success">{{ session()->get('message') }}</span>
        </div>
    @endif

    <table class="table table-success table-striped">
        <thead class="table table-dark">
            <tr>
                <th scope="col">SL</th>
                <th scope="col">Slider Image</th>
                <th scope="col">Slider Title</th>
                <th scope="col">Slider Text</th>
                <th scope="col">Priority</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sliders as $key => $slider)
                <tr>
                    <!-- {{ $loop->iteration }}-->
                    <!-- {{ $key + 1 }}-->
                    <td scope="row">{{ $loop->iteration }}</td>
                    <td>
                        <img src="{{ url('uploads/'.$slider->image) }}" width="100px" height="100px"alt="slider image">
                    </td>
                    <td>{{ $slider->title }}</td>
                    <td>{{ $slider->button_text }}</td>
                    <td>{{ $slider->priority }}</td>
                    <td>
                        <a href="#" class="btn btn-info" title="Slider Data">
                            Edit</a>

                        <a onclick="return confirm('Are you sure you want to delete this item?');"
                            href="#" class="btn btn-danger"
                            title="Delete slider">Delete</a>

                    </td>

                </tr>
            @endforeach
    </table>




    <!-- Modal -->

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create New Slider</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                    <form action="{{ route('slider.post') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                <div class="form-group">
                    <label for="productName"><strong>Slider Title:</strong></label>
                    <input required type="text" class="form-control" id="productName" name="title"
                        placeholder="Enter Product Name">

                </div>
                <div class="form-group">
                    <label for="productPrice"><strong>Slider Text:</strong></label>
                    <input type="text" class="form-control" id="productPrice" name="slider_text"
                        placeholder="Enter Product Price">
                </div>
                <div class="form-group">
                    <label for="productPriority"><strong>Priority:</strong></label>
                    <input type="number" class="form-control" id="productPriority" name="priority"
                        placeholder="Enter Product Priority">
                </div>

                <div class="form-group">
                    <label for="slider_image"><strong>Image:</strong></label>
                    <input required type="file" class="form-control" id="slider_image" name="slider_image">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
                </form>

            </div>
        </div>


    </div>
@endsection
