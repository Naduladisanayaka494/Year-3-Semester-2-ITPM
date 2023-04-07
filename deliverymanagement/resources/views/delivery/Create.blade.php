
@extends('delivery.layout')
@section('content')
<div class="card">
  <div class="card-header">Add New Delivery Agent</div>
  <div class="card-body">
      
      <form action="{{ url('delivery') }}" method="post">
        {!! csrf_field() !!}
        <label>Order_Id</label></br>
        <input type="text" name="order_id" id="order_id" class="form-control"></br>
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" class="form-control"></br>
        <label>Phone_Number</label></br>
        <input type="text" name="phone_number" id="phone_number" class="form-control"></br>
        <label>License_Number</label></br>
        <input type="text" name="license_number" id="license_number" class="form-control"></br>
        <label>Nic_Number</label></br>
        <input type="text" name="nic_number" id="nic_number" class="form-control"></br>
        <label>Occupation</label></br>
        <input type="text" name="occupation" id="occupation" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop