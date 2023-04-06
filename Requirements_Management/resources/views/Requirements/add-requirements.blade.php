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
                            <div class="w-sm-100 mr-auto"><h4 class="mb-0">Enter Requirements</h4></div>

                              <div class="btn-group mb-2">
                                    <a href="{{url('requirements')}}"><button type="button" class="btn btn-outline-warning rounded-btn btn-medium"><i class="fa-solid fa-arrow-left"></i> &nbsp; Back</button></a>
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
                                             <form action = "{{ url('requirements/create') }}"  method="post">
                                                 {!! csrf_field() !!}
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label>DEMO1**</label>
                                                        <input type="text" class="form-control rounded border border-info" id="DEMO1" name = "DEMO1">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>DEMO2**</label>
                                                        <input type="text" class="form-control rounded border border-info" id="DEMO2" name = "DEMO2">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>DEMO3**</label>
                                                        <input type="text" class="form-control rounded border border-info" id="DEMO3" name = "DEMO3">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>DEMO4**</label>
                                                        <input type="text" class="form-control rounded border border-info" id="DEMO4" name = "DEMO4">
                                                    </div>
                                                         <div class="form-group col-md-6">
                                                        <label>DEMO5**</label>
                                                        <input type="text" class="form-control rounded border border-info" id="DEMO5" name = "DEMO5">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>DEMO6**</label>
                                                        <input type="text" class="form-control rounded border border-info" id="DEMO6" name = "DEMO6">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>DEMO7**</label>
                                                        <input type="text" class="form-control rounded border border-info" id="DEMO7" name = "DEMO7">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>DEMO8**</label>
                                                        <input type="text" class="form-control rounded border border-info" id="DEMO8" name = "DEMO8">
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