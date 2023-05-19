@extends('farmer.layout')
@section('content')
<div class="card">
  <div class="card-header">Farmer Details Page</div>
  <div class="card-body">
      
      <form action="{{ url('farmer/' .$farmer->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$farmer->id}}" id="id"  />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$farmer->name}}" class="form-control" required></br>
        <label>NIC</label></br>
        <input type="text" name="nic" id="nic" value="{{$farmer->nic}}" class="form-control" required></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$farmer->address}}" class="form-control" required></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" value="{{$farmer->mobile}}" class="form-control" required></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" value="{{$farmer->email}}" class="form-control" required></br>
        <label>Type Of Crops</label></br>
        <input type="text" name="type_of_crops" id="type_of_crops" value="{{$farmer->type_of_crops}}" class="form-control" required></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop