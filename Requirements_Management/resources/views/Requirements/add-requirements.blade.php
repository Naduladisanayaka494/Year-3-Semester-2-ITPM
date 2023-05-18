@extends('layout.app')

@section('content')


<section class="section">
          <div class="section-header">
            <ul>
            <h1><i class="fa-solid fa-file"></i>&nbsp;<i class="fa-solid fa-plus"></i> &nbsp; Add Requirements</h1>
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
                                            <form action = "{{ url('add-req') }}"  method="post">
                                                 {!! csrf_field() !!}
                                                <div class="form-row">
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustom01"><b>Customer Full Name</b><span style="color:red; font-size: 20px;">*</span></label>
                                                        <input type="text" class="form-control @error('customer_name') is-invalid @enderror"  id="customer_name" name = "customer_name" placeholder="Customer Name"  value="{{ old('customer_name') }}">
                                                        @error('customer_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Please Enter Your Name.</strong>
                                    </span>
                                @enderror
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustom02"><b>Home Address</b><span style="color:red; font-size: 20px;">*</span></label>
                                                        <input type="text" class="form-control @error('address') is-invalid @enderror"   id="address" name = "address" placeholder="Address" value="{{ old('address') }}">
                                                                               @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Please Enter your Address.</strong>
                                    </span>
                                @enderror
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustom02"><b>Email Address</b><span style="color:red;font-size: 20px;">*</span></label>
                                                        <input type="text" class="form-control @error('email') is-invalid @enderror"  id="email" name = "email" placeholder="Email Address"value="{{ old('email') }}">
                                     @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustomUsername"><b>Contact Number</b><span style="color:red;font-size: 20px;">*</span></label>
                                                        <div class="input-group">
                                                            <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" class="form-control  @error('phone') is-invalid @enderror" id="phone" name = "phone" placeholder="Contact Number" maxlength="10" value="{{ old('phone') }}">
                                                               @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                                                           
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2.5 mb-3">
                                                       <label><b>Payment Method</b><span style="color:red;font-size: 20px;">*</span></label><br/>
                                                        <select name = "payment_methods" id="payment_methods" class="form-control  @error('payment_methods') is-invalid @enderror">
                                                             <option selected disabled value="">--Select--</option>
                                                            <option value = "Cash on Delivery" {{ old('payment_methods') === 'Cash on Delivery' ? 'selected' : '' }}>Cash on Delivery</option>
                                                            <option value = "Credit Card" {{ old('payment_methods') === 'Credit Card' ? 'selected' : '' }}>Credit Card</option>
                                                            <option value = "Debit Card" {{ old('payment_methods') === 'Debit Card' ? 'selected' : '' }}>Debit Card</option>
                                                        </select>
    <span class="invalid-feedback" role="alert">
                                        <strong>Please Enter your Payment Method.</strong>
                                    </span>
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
                                                        <label for="validationDefault01"><b>Product Category</b><span style="color:red;font-size: 20px;">*</span></label>
                                                        <input type="text" class="form-control  @error('product_category') is-invalid @enderror" id="product_category" name = "product_category"  placeholder="Product Category" value="{{ old('product_category') }}">
                                             @error('product_category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Please Enter Product Category.</strong>
                                    </span>
                                @enderror
                                                        
                                                    </div>
                                                        <div class="col-md-4 mb-3">
                                                        <label for="validationDefault01"><b>Product Name</b><span style="color:red;font-size: 20px;">*</span></label>
                                                        <input type="text" class="form-control  @error('product_name') is-invalid @enderror" id="product_name" name = "product_name"  placeholder="Product Name" value="{{ old('product_name') }}">
                                             @error('product_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Please Enter Product Name.</strong>
                                    </span>
                                @enderror
                                                        
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationDefault02"><b>Quantity Preference</b><span style="color:red;font-size: 20px;">*</span></label>
                                                        <input type="text" class="form-control @error('Quantity') is-invalid @enderror" id="Quantity" name = "Quantity" placeholder="Quantity Preference" value="{{ old('Quantity') }}">
                                                               @error('Quantity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Please Enter Quantity of Products.</strong>
                                    </span>
                                @enderror
                                                    </div>
                                                      <div class="col-md-4 mb-3">
                                                        <label for="validationDefault02"><b>Preferred Delivery Time</b><span style="color:red;font-size: 20px;">*</span></label>
                                                      <select name = "preferred_time" id="preferred_time" class="form-control  @error('preferred_time') is-invalid @enderror">
                                                        <option selected disabled value="">--Select--</option>
                                                           <option value = "Morning" {{ old('preferred_time') === 'Morning' ? 'selected' : '' }}>Morning</option>
                                                            <option value = "Afternoon" {{ old('preferred_time') === 'Afternoon' ? 'selected' : '' }}>Afternoon</option>
                                                            <option value = "Evening" {{ old('preferred_time') === 'Evening' ? 'selected' : '' }}>Evening</option>
                                                        </select>
                                                         
                                <span class="invalid-feedback" role="alert">
                                        <strong>Please Enter Preferred Delivery Time.</strong>
                                    </span>
                               
                                                      </div>
                                                      <div class="col-md-3 mb-3">
                                                        <label for="validationDefault03"><b>Preferred Delivery Date</b><span style="color:red;font-size: 20px;">*</span></label>
                                                        <input type="date" class="form-control  @error('preferred_day') is-invalid @enderror" id="preferred_day" name = "preferred_day"  placeholder="Date" value="{{ old('preferred_day') }}">
                                                                                 @error('preferred_day')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Please Enter Preferred Delivery Date.</strong>
                                    </span>
                                @enderror

                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationDefault02"><b>Packaging Preference</b><span style="color:red;font-size: 20px;">*</span></label>
                                                      <select name = "pack_preference" id="pack_preference" class="form-control  @error('pack_preference') is-invalid @enderror">
                                                         <option selected disabled value="">--Select--</option>
                                                           <option value = "Loose Vegetables" {{ old('pack_preference') === 'Loose Vegetables' ? 'selected' : '' }}>Loose Vegetables</option>
                                                            <option value = "Pre-Packaged" {{ old('pack_preference') === 'Pre-Packaged' ? 'selected' : '' }}>Pre-Packaged</option>
                                                            <option value = "Eco-friendly Packaging" {{ old('pack_preference') === 'Eco-friendly Packaging' ? 'selected' : '' }}>Eco-friendly Packaging</option>
                                                            <option value = "Customizable Packaging" {{ old('pack_preference') === 'Customizable Packaging' ? 'selected' : '' }}>Customizable Packaging</option>
                                                        </select>
                                <span class="invalid-feedback" role="alert">
                                        <strong>Please Enter Packaging Preferences.</strong>
                                    </span>
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
             <button type="submit" class="btn btn-success"><i class="fa-solid fa-check-circle"></i>&nbsp; SUBMIT</button>
                                            </form>
        </main>
        <!-- END: Content-->

@endSection

