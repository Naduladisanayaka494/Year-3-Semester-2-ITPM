@extends('layout.app')

@section('content')


<section class="section">
          <div class="section-header">
            <ul>
            <h1><i class="fa-solid fa-file"></i>&nbsp;<i class="fa-solid fa-plus"></i> &nbsp; Add New Delivery Agent</h1>
            </ul>
          </div>

          <!-- START: Main Content-->
        <main>
            <div class="container-fluid">
                <!-- START: Breadcrumbs-->
                <div class="row ">
                    <div class="col-12  align-self-center">
                        <div class="sub-header mt-3 py-3 px-3 align-self-center d-sm-flex w-100 rounded">
                            <div class="w-sm-100 mr-auto"><h4 class="mb-0">Enter Delivery Agent Details</h4></div>

                              <div class="btn-group mb-2">
                                    <a href="{{url('delivery')}}"><button type="button" class="btn btn-outline-warning rounded-btn btn-medium"><i class="fa-solid fa-arrow-left"></i> &nbsp; Back</button></a>
                                </div>
                         </div>

                    </div>
                    
                </div>
                <!-- END: Breadcrumbs-->

                <!-- START: Card Data-->
                <div class="row">
                    <div class="col-10 mt-10">
                        <div class="card">
                          <div class="card-content">
                                <div class="card-body">
                                    <div class="row">                                           
                                        <div class="col-12">
                                            </div>
                                             <form action = "{{ url('delivery') }}"  method="post">
                                                 {!! csrf_field() !!}
                                                <div class="form-row">
                                                    <!-- <div class="form-group col-md-7">
                                                        <label>Order_Id</label>
                                                        <input type="text" class="form-control rounded border border-info" id="order_id" name = "order_id"required>
                                                    </div> -->
                                                    <div class="form-group col-md-6">
                                                        <label>Name</label>
                                                        <input type="text" class="form-control rounded border border-info" id="name" name = "name" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Email</label>
                                                        <input type="text" class="form-control rounded border border-info" id="email" name = "email"required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Phone_Number</label>
                                                        <input type="text" class="form-control rounded border border-info" id="phone_number" name = "phone_number"required>
                                                    </div>
                                                         <div class="form-group col-md-6">
                                                        <label>License_Number</label>
                                                        <input type="text" class="form-control rounded border border-info" id="license_number" name = "license_number"required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Nic_Number</label>
                                                        <input type="text" class="form-control rounded border border-info" id="nic_number" name = "nic_number"required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Occupation</label>
                                                        <input type="text" class="form-control rounded border border-info" id="occupation" name = "occupation"required>
                                                    </div>
                                                   
                                                <button type="submit" class="btn btn-success"><i class="fa-solid fa-check-circle"></i>&nbsp; SUBMIT</button>
                                             </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Card DATA-->
            </div>
        </main>
        <!-- END: Content-->

@endSection