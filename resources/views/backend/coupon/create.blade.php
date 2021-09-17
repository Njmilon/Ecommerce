@extends('backend.master')

@section('content')

<h1>Coupon list: </h1>

<form>
  @csrf 

  <div class="form-group">
    <label for="couponName">Name: </label>
    <input type="text" class="form-control" name="coupon_Name" id="couponName" placeholder="Enter coupon name">
  </div>
    <label for="couponDescription">Description: </label>
    <textarea type="text" class="form-control" id="couponDescription" name="coupon_Description"placeholder="Enter coupon description"></textarea>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>





@endsection
