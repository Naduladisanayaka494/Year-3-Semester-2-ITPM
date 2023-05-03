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
                            <div class="w-sm-100 mr-auto"><h4 class="mb-0">Requirements Information</h4></div>
                              <div class="btn-group mb-2">
                                   <a href="#"  class="btn btn-danger"> <i class="fa fa-file"></i>&nbsp; Requirement Report</a>
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
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display table dataTable table-striped table-bordered">
                                        <thead>
                                            <tr>
                                             
                                                <th>Customer Name</th>
                                                <th>Email Address</th>
                                                <th>Contact Number</th>
                                                <th>Payment Method</th>
                                                <th>Product Name</th>
                                                <th>Quantity</th>
                                                <th>Date</th>
                                            <th>Time</th>
                                                <th width = "150">Manage</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             @foreach($Requirements as $item)
                                             <tr>
                                             
                                                
                                                <input type="hidden" class="reqdelete_val_id" value="{{$item->id}}">
                                                <td>{{ $item->DEMO1 }}</td>
                                                <td>{{ $item->DEMO2 }}</td>
                                                <td>{{ $item->DEMO3 }}</td>
                                                <td>{{ $item->DEMO4 }}</td>
                                                <td>{{ $item->DEMO5 }}</td>
                                                <td>{{ $item->DEMO6 }}</td>
                                                <td>{{ $item->DEMO7 }}</td>
                                               <td>{{ $item->DEMO8 }}</td>
                                                    <td>
                                                        <a href="#"  class="btn btn-success"> <i class="fa fa-eye"></i>&nbsp; View</a>
                                                                                                                                                                                                                   
                                                    </td>
                                            </tr>
                                             @endforeach
                                        </tbody>  
                                    </table>
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