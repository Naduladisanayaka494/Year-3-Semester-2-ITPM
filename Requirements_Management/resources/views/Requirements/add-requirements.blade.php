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
                                    <a href="{{url('requirements')}}"><button type="button" class="btn btn-outline-warning rounded-btn btn-medium"><i class="fa-solid fa-arrow-left"></i> &nbsp; Back</button></a>
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
                                                        <label for="validationCustom01"><b>Customer Name</b><span style="color:red; font-size: 20px;">*</span></label>
                                                        <input type="text" class="form-control" id="customer_name" name = "customer_name" placeholder="Customer Name">
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustom02"><b>Address</b><span style="color:red; font-size: 20px;">*</span></label>
                                                        <input type="text" class="form-control"  id="address" name = "address" placeholder="Address">
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustom02"><b>Email Address</b><span style="color:red;font-size: 20px;">*</span></label>
                                                        <input type="text" class="form-control"  id="email" name = "email" placeholder="Email Address">
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustomUsername"><b>Contact Number</b><span style="color:red;font-size: 20px;">*</span></label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="phone" name = "phone" placeholder="Contact Number">
                                                           
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                       <label><b>Payment Method</b><span style="color:red;font-size: 20px;">*</span></label><br/>
                                                        <select name = "payment_methods" id="payment_methods" class="form-control rounded border border-info">
                                                             <option value = "select" selected>--Select--</option>
                                                            <option value = "Cash">Cash</option>
                                                            <option value = "Credit Card">Credit Card</option>
                                                            <option value = "Debit Card">Debit Card</option>
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
                                                        <label for="validationDefault01"><b>Product Name</b><span style="color:red;font-size: 20px;">*</span></label>
                                                        <input type="text" class="form-control" id="product_name" name = "product_name"  placeholder="Product Name">
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationDefault02"><b>Quantity</b><span style="color:red;font-size: 20px;">*</span></label>
                                                        <input type="text" class="form-control" id="Quantity" name = "Quantity" placeholder="Quantity">
                                                    </div>
                                                      <div class="col-md-3 mb-3">
                                                        <label for="validationDefault03"><b>Preferred Delivery Day</b><span style="color:red;font-size: 20px;">*</span></label>
                                                        <input type="date" class="form-control" id="preferred_day" name = "preferred_day"  placeholder="Date">
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationDefault04"><b>Preferred Delivery Time</b><span style="color:red;font-size: 20px;">*</span></label>
                                                        <input type="time" class="form-control" id="preferred_time" name = "preferred_time" placeholder="Time">
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