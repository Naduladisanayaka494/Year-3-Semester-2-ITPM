@extends('farmer.layout')
@section('content')
 
<div class="card">
<div class="row">
  <div class="col-12 mt-3">
  <div class="card shadow p-12 mb-7 bg-white rounded">
  <div class="card-header">Farmer Page</div>
  <div class="card-body">
      
      <form action="{{ url('farmer') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control" required></br>
        <label>NIC</label></br>
        <input type="text" name="nic" id="nic" class="form-control" required></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control" required></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" class="form-control" required></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" class="form-control" required></br>
        <label>Type of Crops</label></br>
        <input type="text" name="type_of_crops" id="type_of_crops" class="form-control" required></br>

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
  </div>
  </div>
  </div>
</div>
 
@stop