@extends('products.layout')
@section('content')
<div class="card">
  <div class="card-header">Product ADD Page</div>
  <div class="card-body">
    <form action="{{ url('product') }}" method="post">
      {!! csrf_field() !!}
      
      <label>Itemcode</label></br>
      <input type="text" name="itemcode" id="itemcode" class="form-control">
      @if($errors->has('itemcode'))
        <p class="text-danger">{{ $errors->first('itemcode') }}</p>
      @endif
      
      <label>Product name</label></br>
      <input type="text" name="pname" id="pname" class="form-control">
      @if($errors->has('pname'))
        <p class="text-danger">{{ $errors->first('pname') }}</p>
      @endif
      
      <label>Quantity</label></br>
      <input type="text" name="qty" id="qty" class="form-control">
      @if($errors->has('qty'))
        <p class="text-danger">{{ $errors->first('qty') }}</p>
      @endif
      
      <label>Price</label></br>
      <input type="text" name="price" id="price" class="form-control">
      @if($errors->has('price'))
        <p class="text-danger">{{ $errors->first('price') }}</p>
      @endif
      
      <input type="submit" value="Save" class="btn btn-success">
    </form>
  </div>
</div>
@stop
