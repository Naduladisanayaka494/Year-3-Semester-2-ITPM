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
                                   <!-- <a href="{{ url('generate-report') }}"  class="btn btn-danger "> <i class="fa fa-cloud-download"></i>&nbsp; Requirement PDF</a> -->
                              
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
                                                <th><center>Product Category</center></th>
                                                <th><center>Product Name</center></th>
                                                <th><center>Quantity</center></th>
                                                <th><center>Packaging Preference</center></th>
                                                <th><center>Preferred Delivery Date</center></th>
                                             <th><center>Preferred Delivery Time</center></th>
                                                <th><center>Details Report</center></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             @foreach($Requirements as $item)
                                             <tr>
                                             
                                                
                                                <input type="hidden" class="reqdelete_val_id" value="{{$item->id}}">
                                                 <td align="center">{{ $item->product_category }}</td>
                                                <td align="center">{{ $item->product_name }}</td>
                                                <td align="center">{{ $item->Quantity }}</td>
                                                <td align="center">{{ $item->pack_preference }}</td>
                                                <td align="center">{{ $item->preferred_day }} </td>
                                              <td align="center">{{ $item->preferred_time }}</td>
                                                    <td align="center">
                                                        
                                                                                <a href="{{ url('generate-report',$item->id ) }}"  class="btn btn-danger "> <i class="fa fa-cloud-download"></i>&nbsp;&nbsp;Download</a>                                                                                                                                   
                                                    </td>
                                            </tr>
                                             @endforeach
                                        </tbody> 
                                         
                                    </table>
                                               <a href="{{url('/ad-requirements')}}">
                    <button type="button" class = "btn btn-primary"><i class="fa-solid fa-arrow-rotate-left"></i>&nbsp;Reset</button>
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