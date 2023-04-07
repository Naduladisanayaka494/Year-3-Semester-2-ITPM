@extends('delivery.layout')
@section('content')
<div class="card">
  <div class="card-header">Delivery Details</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Order_Id : {{ $delivery->order_id }}</h5>
        <p class="card-text">Name : {{ $delivery->name }}</p>
        <p class="card-text">Email : {{ $delivery->email }}</p>
        <p class="card-text">Phone_Number : {{ $delivery->phone_number }}</p>
        <p class="card-text">License_Number : {{ $delivery->license_number }}</p>
        <p class="card-text">Nic_Number : {{ $delivery->nic_number }}</p>
        <p class="card-text">Occupation : {{ $delivery->occupation }}</p>
  </div>
      
    </hr>
  
  </div>
</div>