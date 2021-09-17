@extends('frontend.master')

@section('content')

                    

                    <div class="row">
                      <div class="col-md-3"></div>
                      <div class="col-md-6">
                        <div class="login-form">
                       <h2>Sign-in Info:</h2>
                       <form action="{{ route('frontend.signin.store') }}" method="POST"> 
                           @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Username</label>
                                    <input name="email" class="form-control" type="Email" placeholder="Enter Email">
                                </div>
                                <div class="col-md-12">
                                    <label>Password</label>
                                    <input name="password" class="form-control" type="Password" placeholder="Enter Password">
                                </div>
                                <div class="col-md-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="newaccount">
                                        <label class="custom-control-label" for="newaccount">Keep me signed in</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit"class="btn">Submit</button>
                                </div>
                            </div>
                            </div>
                      </form>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                    </div>
                    </div>
                    <br>


                    @endsection