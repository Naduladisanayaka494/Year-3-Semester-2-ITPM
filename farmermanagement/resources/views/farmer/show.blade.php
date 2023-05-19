@extends('farmer.layout')
@section('content')
<div class="card">
  <div class="card-header">Farmer Details Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Name : {{ $farmer->name }}</h5>
        <p class="card-text">NIC : {{ $farmer->nic }}</p>
        <p class="card-text">Address : {{ $farmer->address }}</p>
        <p class="card-text">Mobile : {{ $farmer->mobile }}</p>
        <p class="card-text">Email : {{ $farmer->email }}</p>
        <p class="card-text">Type of Crops : {{ $farmer->type_of_crops }}</p>
  </div>
      
    </hr>
  
  </div>
</div>