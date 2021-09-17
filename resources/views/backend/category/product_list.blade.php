@extends('backend.master')
@section('content')

<h1>Product List:</h1>


<table class="table table-success table-striped">
<thead class="table table-dark">
    <tr>
        <th scope="col">SL</th>
        <th scope="col">Product Name</th>        
        <th scope="col">Price</th>
        <th scope="col">Description</th>
    </tr>
    </thead>
    <tbody>
    {{--categories--}}
    {{--@dd($categories)--}}
    @foreach($products as $key=>$data)
        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$data->name}}</td>
            <td>{{$data->price}}</td>
            <td>{{$data->description}}</td>

        </tr>
    @endforeach
    </tbody>
</table>

@endsection