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
                            <div class="w-sm-100 mr-auto"><h4 class="mb-0">Enter Your Details & Your Product Details</h4></div>

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
                                <h4 class="card-title">Customer Details:</h4>                                
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
                                                        <label for="validationCustom01">Customer Name</label>
                                                        <input type="text" class="form-control" id="DEMO1" name = "DEMO1" placeholder="Customer Name" value="{{$requirements->DEMO1}}">
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustom02">Email Address</label>
                                                        <input type="text" class="form-control"  id="DEMO2" name = "DEMO2" placeholder="Email Address"  value="{{$requirements->DEMO2}}">
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustomUsername">Contact Number</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="DEMO3" name = "DEMO3" placeholder="Contact Number" value="{{$requirements->DEMO3}}">
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-4 mb-3">
                                                       <label>Payment Method</label><br/>
                                                         <select name = "DEMO4" id="DEMO4" class="form-control rounded border border-info" value="{{$requirements->DEMO4}}">
                                                          <option value = "Cash" {{$requirements->DEMO4 == "Cash" ? 'selected' : ''}}>Cash</option>
                                                            <option value = "Credit Card" {{$requirements->DEMO4 == "Credit Card" ? 'selected' : ''}}>Credit Card</option>
                                                            <option value = "Debit Card" {{$requirements->DEMO4 == "Debit Card" ? 'selected' : ''}}>Debit Card</option>
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
                                <h4 class="card-title">Product Details</h4>                                
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row">                                           
                                        <div class="col-12">
                                            <form>
                                                <div class="form-row">
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationDefault01">Product Name</label>
                                                        <input type="text" class="form-control" id="DEMO5" name = "DEMO5"  placeholder="Product Name"  value="{{$requirements->DEMO5}}">
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationDefault02">Quantity</label>
                                                        <input type="text" class="form-control" id="DEMO6" name = "DEMO6" placeholder="Quantity" value="{{$requirements->DEMO6}}">
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-3 mb-3">
                                                        <label for="validationDefault03">Date</label>
                                                        <input type="text" class="form-control" id="DEMO7" name = "DEMO7"  placeholder="Date" value="{{$requirements->DEMO7}}">
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationDefault04">Time</label>
                                                        <input type="text" class="form-control" id="DEMO8" name = "DEMO8" placeholder="Time" value="{{$requirements->DEMO8}}">
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