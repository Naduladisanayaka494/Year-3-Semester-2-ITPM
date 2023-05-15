@extends('Admin.Adlayout.adapp')

@section('content')

<section class="section">
          <div class="section-header">
            <ul>
            <h1><i class="fa-solid fa-table"></i> &nbsp;Show Requirements</h1>
            </ul>
          </div>
           <!-- START: Breadcrumbs-->
                <div class="row ">
                    <div class="col-12  align-self-center">
                        <div class="sub-header mt-3 py-3 px-3 align-self-center d-sm-flex w-100 rounded">
                            <div class="w-sm-100 mr-auto"><h4 class="mb-0" style="font-style: italic;">Requirements Information</h4></div>
                              <div class="btn-group mb-2">
                                   <a href="{{ url('generate-report') }}"  class="btn btn-danger "> <i class="fa fa-cloud-download"></i>&nbsp; Requirement PDF</a>
                              
                                </div>
                         </div>
                        
                    </div>
                    
                </div>
                
                <!-- END: Breadcrumbs-->
     <!-- START: Main Content-->
        <main>
            <div class="container-fluid">
                                <!-- START: Card Data-->
                <div class="row">
                    <div class="col-12 mt-3">
                        <div class="card shadow p-3 mb-5 bg-white rounded">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display table dataTable table-striped table-bordered shadow p-3 mb-5 bg-white rounded">
                                        <thead>
                                            <tr>
                                             
                                                <th>Customer Name</th>
                                                  <th>Home Address</th>
                                                <th>Email Address</th>
                                                <th>Contact Number</th>
                                                <th>Payment Method</th>
                                                <th>Product Name</th>
                                                <th>Quantity</th>
                                                <th>Preferred Delivery Day</th>
                                             <th>Preferred Delivery Time</th>
                                                <th class="col-1"><center>Manage</center></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             @foreach($Requirements as $item)
                                             <tr>
                                             
                                                
                                                <input type="hidden" class="reqdelete_val_id" value="{{$item->id}}">
                                                 <td>{{ $item->customer_name }}</td>
                                                <td>{{ $item->address }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->phone }}</td>
                                                <td>{{ $item->payment_methods }}</td>
                                                <td>{{ $item->product_name }}</td>
                                                <td>{{ $item->Quantity }}</td>
                                                <td>{{ $item->preferred_day }} </td>
                                              <td>{{ $item->preferred_time }}</td>
                                                    <td>
                                                        <a href="#"  class="btn btn-success"> <i class="fa fa-eye"></i>&nbsp; View</a>
                                                                                                                                                                                                                   
                                                    </td>
                                            </tr>
                                             @endforeach
                                        </tbody> 
                                         
                                    </table>
                                               <a href="{{url('/ad-requirements')}}">
                    <button type="button" class = "btn btn-primary"><i class="fa-solid fa-arrow-rotate-left"></i>Reset</button>
                    </a>
                                </div>
                            </div>
                        </div> 

                    </div>                  
                </div>
                <!-- END: Card DATA-->
            </div>
        </main>
        <!-- END: Content-->
          
</section>

@endSection