@extends('backend.master')
@section('content')

    <br>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Create New Image
    </button>


    <h1>Image List: </h1>

    @if (session()->has('message'))
        <div class="row" style="padding: 10px;">
            <span class="alert alert-success">{{ session()->get('message') }}</span>
        </div>
    @endif

    <table class="table table-success table-striped">
        <thead class="table table-dark">
            <tr>
                <th scope="col">SL</th>
                <th scope="col">Image</th>
                <th scope="col">Title</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($indexImages as $key => $data)
                <tr>
                    <!-- {{ $loop->iteration }}-->
                    <!-- {{ $key + 1 }}-->
                    <td scope="row">{{ $loop->iteration }}</td>
                    <td>
                        <img src="{{ url('uploads/' .$data->image) }}" width="100px" height="100px" alt="index image">
                    </td>
                    <td>{{ $data->title }}</td>
                    <td>
                        <a href="#" class="btn btn-info" title="Edit Data">
                            Edit</a>

                        <a onclick="return confirm('Are you sure you want to delete this item?');"
                            href="#" class="btn btn-danger"
                            title="Delete Data">Delete</a>

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
                    <h5 class="modal-title" id="exampleModalLabel">Create New Image</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                    <form action="{{ route('index.image.post') }}" method="POST" enctype="multipart/form-data">
                        <!-- form -->
                        @csrf

                        <div class="form-group">
                            <div class="controls">
                                <fieldset>
                                    <input type="checkbox" id="checkbox_3" name="upperImg" value="1">
                                    <label for="checkbox_3">Upper Image</label>
                                </fieldset>

                                <fieldset>
                                    <input type="checkbox" id="recent_3" name="middleImg" value="1">
                                    <label for="recent_3">Middle Image</label>
                                </fieldset>
                            </div>
                        </div>

                      
                        <div class="form-group">
                            <label for="title">Title:</label>
                            <input required type="text" class="form-control" id="title" name="title"
                                placeholder="Enter Title">
                        </div>

                        <div class="form-group">
                            <label for="image">Image:</label>
                            <input required type="file" class="form-control" id="image" name="image">
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
