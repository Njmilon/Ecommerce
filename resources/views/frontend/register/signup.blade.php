@extends('frontend.master')

@section('content')




<div class="login">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3"></div> 
                    <div class="col-md-6">  
                    <h2>Signup Info:</h2> 
                        <div class="register-form">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                        <ul>
                    @foreach ($errors->all() as $error)
                         <li>{{ $error }}</li>
                    @endforeach
                        </ul>
                        </div>
                    @endif


                        @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{session()->get('success')}}
                        </div>
                        @endif

                            <form action="{{route('frontend.signup.store')}}" type="form" method="POST">
                                @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="form-label">Name:</label>
                                    <input required name="name" class="form-control" type="text" placeholder="Enter Your Name">
                                </div>
                               
                                <div class="col-md-12"> 
                                    <label class="form-label">E-mail:</label>
                                    <input required name="email"class="form-control" type="email" placeholder="Enter Your Email">
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Mobile No:</label>
                                    <input required name="phonenumber"class="form-control" type="number" placeholder="Enter Your Mobile No">
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Password:</label>
                                    <input required name="password"class="form-control" type="password" placeholder="Enter Your Password">
                                </div>                       
                                                               
                                <div class="col-md-12">
                                    <button type="submit"class="btn">Submit</button>
                                </div>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-3"></div> 
                    </div>
            </div>
        </div>
        <br>
        <br>
        @endsection