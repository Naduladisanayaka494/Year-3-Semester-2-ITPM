@extends('layout.app')

@section('content')


<section class="section">
          <div class="section-header">
            <ul>
            <h1><i class="fa-solid fa-file"></i>&nbsp;<i class="fa-solid fa-plus"></i> &nbsp; Add Farmer</h1>
            </ul>
          </div>

          <!-- START: Main Content-->
        <main>
            <div class="container-fluid">
                <!-- START: Breadcrumbs-->
                <div class="row ">
                    <div class="col-12  align-self-center">
                        <div class="sub-header mt-3 py-3 px-3 align-self-center d-sm-flex w-100 rounded">
                            <div class="w-sm-100 mr-auto"><h4 class="mb-0">Enter Farmer Details</h4></div>

                              <div class="btn-group mb-2">
                                    <a href="{{url('farmer')}}"><button type="button" class="btn btn-outline-warning rounded-btn btn-medium"><i class="fa-solid fa-arrow-left"></i> &nbsp; Back</button></a>
                                </div>
                         </div>

                    </div>
                    
                </div>
                <!-- END: Breadcrumbs-->

                <!-- START: Card Data-->
                <div class="row">
                    <div class="col-9 mt-8">
                        <div class="card">
                          <div class="card-content">
                                <div class="card-body">
                                    <div class="row">                                           
                                        <div class="col-12">
                                            </div>
                                             <form action = "{{ url('farmer') }}"  method="post">
                                                 {!! csrf_field() !!}
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label>Namr**</label>
                                                        <input type="text" class="form-control rounded border border-info" id="name" name = "name" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>NIC**</label>
                                                        <input type="text" class="form-control rounded border border-info" id="nic" name = "nic" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Address**</label>
                                                        <input type="text" class="form-control rounded border border-info" id="address" name = "address" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Mobile**</label>
                                                        <input type="text" class="form-control rounded border border-info" id="mobile" name = "mobile" required>
                                                    </div>
                                                         <div class="form-group col-md-6">
                                                        <label>Email**</label>
                                                        <input type="text" class="form-control rounded border border-info" id="email" name = "email" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Type of Crops**</label>
                                                        <input type="text" class="form-control rounded border border-info" id="type_of_crops" name = "type_of_crops" required>
                                                    </div>
                                                    
                                                 
                                                <button type="submit" class="btn btn-success"><i class="fa-solid fa-check-circle"></i>&nbsp; Save</button>
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