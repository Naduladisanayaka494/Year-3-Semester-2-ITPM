@extends('layout.app')

@section('content')


<section class="section">
          <div class="section-header">
            <ul>
            <h1><i class="fa-solid fa-edit"></i> &nbsp; Edit the Requirements</h1>
            </ul>
          </div>

          <!-- START: Main Content-->
        <main>
            <div class="container-fluid">
                <!-- START: Breadcrumbs-->
                <div class="row ">
                    <div class="col-12  align-self-center">
                        <div class="sub-header mt-3 py-3 px-3 align-self-center d-sm-flex w-100 rounded">
                            <div class="w-sm-100 mr-auto"><h4 class="mb-0" style="font-style: italic;">Enter Your Details & Your Product Details</h4></div>

                              <div class="btn-group mb-2">
                                    <a href="{{url('requirements')}}"><button type="button" class="btn btn-outline-warning rounded-btn btn-medium"><i class="fa-solid fa-arrow-left"></i> &nbsp; BACK</button></a>
                                </div>
                         </div>

                    </div>
                    
                </div>
                <!-- END: Breadcrumbs-->
               <!-- START: Card Data-->
                <div class="row">
                    <div class="col-12 mt-3">
                        <div class="card shadow p-3 mb-5 bg-white rounded">
                            <div class="card-header">                               
                                <h4 class="card-title" style="font-style: italic;">Customer Details:</h4>                                
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row">                                           
                                        <div class="col-12">
                                            <form action = "{{ url('requirements/' .$requirements->id) }}"  method="post">
                                                 {!! csrf_field() !!}
                                                  @method("PATCH")
                                                <div class="form-row">
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustom01"><b>Customer Full Name</b><span style="color:red; font-size: 20px;">*</span></label>
                                                        <input type="text" class="form-control  @error('customer_name') is-invalid @enderror" id="customer_name" name = "customer_name" placeholder="Customer Name" value="{{$requirements->customer_name	}}" value="{{ old('customer_name') }}">
                                                                           @error('customer_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Please Enter Your Name.</strong>
                                    </span>
                                @enderror
                                           
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustom01"><b>Home Address</b><span style="color:red; font-size: 20px;">*</span></label>
                                                        <input type="text" class="form-control" id="address" name = "address" placeholder="Address" value="{{$requirements->address}}">
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustom02"><b>Email Address</b><span style="color:red; font-size: 20px;">*</span></label>
                                                        <input type="text" class="form-control"  id="email" name = "email" placeholder="Email Address"  value="{{$requirements->email}}">
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustomUsername"><b>Contact Number</b><span style="color:red; font-size: 20px;">*</span></label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="phone" name = "phone" placeholder="Contact Number" value="{{$requirements->phone}}">
                                                        </div>
                                                    </div>
                                                     <div class="col-md-2.5 mb-3">
                                                       <label><b>Payment Method</b><span style="color:red; font-size: 20px;">*</span></label><br/>
                                                         <select name = "payment_methods" id="payment_methods" class="form-control rounded border border-info" value="{{$requirements->payment_methods}}">
                                                            <option selected disabled value="">--Select--</option>
                                                          <option value = "Cash on Delivery" {{$requirements->payment_methods == "Cash on Delivery" ? 'selected' : ''}}>Cash on Delivery</option>
                                                            <option value = "Credit Card" {{$requirements->payment_methods == "Credit Card" ? 'selected' : ''}}>Credit Card</option>
                                                            <option value = "Debit Card" {{$requirements->payment_methods == "Debit Card" ? 'selected' : ''}}>Debit Card</option>
                                                        </select>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="col-12 mt-3">
                        <div class="card shadow p-3 mb-5 bg-white rounded">
                            <div class="card-header">                               
                                <h4 class="card-title" style="font-style: italic;">Product and Delivery Details:</h4>                                
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row">                                           
                                        <div class="col-12">
                                            <form>
                                                <div class="form-row">
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationDefault01"><b>Product Category</b><span style="color:red; font-size: 20px;">*</span></label>
                                                        <input type="text" class="form-control" id="product_category" name = "product_category"  placeholder="Product Name"  value="{{$requirements->product_category}}">
                                                        
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationDefault01"><b>Product Name</b><span style="color:red; font-size: 20px;">*</span></label>
                                                        <input type="text" class="form-control" id="product_name" name = "product_name"  placeholder="Product Name"  value="{{$requirements->product_name}}">
                                                        
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationDefault02"><b>Quantity Preference</b><span style="color:red; font-size: 20px;">*</span></label>
                                                        <input type="text" class="form-control" id="Quantity" name = "Quantity" placeholder="Quantity" value="{{$requirements->Quantity}}">
                                                    </div>
                                                     <div class="col-md-4 mb-3">
                                                       <label><b>Preferred Delivery Time</b><span style="color:red; font-size: 20px;">*</span></label><br/>
                                                         <select name = "preferred_time" id="preferred_time" class="form-control rounded border border-info" value="{{$requirements->preferred_time}}">
                                                            <option selected disabled value="">--Select--</option>
                                                          <option value = "Morning" {{$requirements->preferred_time == "Morning" ? 'selected' : ''}}>Morning</option>
                                                            <option value = "Afternoon" {{$requirements->preferred_time == "Afternoon" ? 'selected' : ''}}>Afternoon</option>
                                                            <option value = "Evening" {{$requirements->preferred_time == "Evening" ? 'selected' : ''}}>Evening</option>
                                                        </select>
                                                    </div>
                                                     <div class="col-md-4 mb-3">
                                                        <label for="validationDefault03"><b>Preferred Delivery Date</b><span style="color:red; font-size: 20px;">*</span></label>
                                                        <input type="date" class="form-control" id="preferred_day" name = "preferred_day"  placeholder="Date" value="{{$requirements->preferred_day}}">
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                       <label><b>Packaging Preference</b><span style="color:red; font-size: 20px;">*</span></label><br/>
                                                         <select name = "pack_preference" id="pack_preference" class="form-control rounded border border-info" value="{{$requirements->pack_preference}}">
                                                            <option selected disabled value="">--Select--</option>
                                                          <option value = "Loose Vegetables" {{$requirements->pack_preference == "Loose Vegetables" ? 'selected' : ''}}>Loose Vegetables</option>
                                                            <option value = "Pre-Packaged" {{$requirements->pack_preference == "Pre-Packaged" ? 'selected' : ''}}>Pre-Packaged</option>
                                                            <option value = "Eco-friendly Packaging" {{$requirements->pack_preference == "Eco-friendly Packaging" ? 'selected' : ''}}>Eco-friendly Packaging</option>
                                                            <option value = "Customizable Packaging" {{$requirements->pack_preference == "Customizable Packaging" ? 'selected' : ''}}>Customizable Packaging</option>
                                                        </select>
                                                    </div>
                                                    
                                                  
                                                </div>
                                                    
                                              
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- END: Card DATA-->
            </div>
            <button type="submit" class="btn btn-primary"><i class="fa-solid fa-check-circle"></i>&nbsp; SAVE</button>
                                             </form>
        </main>
        <!-- END: Content-->

@endSection