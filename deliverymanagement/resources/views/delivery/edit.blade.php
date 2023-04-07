@extends('delivery.layout')
@section('content')
<div class="card">
  <div class="card-header">Edit Delivery Agent Details</div>
  <div class="card-body">
      
      <form action="{{ url('delivery/' .$delivery->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$delivery->id}}" id="id" />
        <label>Order_Id</label></br>
        <input type="text" name="order_id" id="order_id" value="{{$delivery->order_id}}" class="form-control"></br>
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$delivery->name}}" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" value="{{$delivery->email}}" class="form-control"></br>
        <label>Phone_Number</label></br>
        <input type="text" name="phone_number" id="phone_number" value="{{$delivery->phone_number}}" class="form-control"></br>
        <label>License_Number</label></br>
        <input type="text" name="license_number" id="license_number" value="{{$delivery->license_number}}" class="form-control"></br>
        <label>Nic_Number</label></br>
        <input type="text" name="nic_number" id="nic_number" value="{{$delivery->nic_number}}" class="form-control"></br>
        <label>Occupation</label></br>
        <input type="text" name="occupation" id="occupation" value="{{$delivery->occupation}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop