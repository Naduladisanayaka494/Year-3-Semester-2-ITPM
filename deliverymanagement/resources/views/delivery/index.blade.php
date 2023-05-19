@extends('layout.app')

@section('content')

<section class="section">
          <div class="section-header">
            <ul>
            <h1><i class="fa-solid fa-truck"></i> &nbsp;  Delivery Management</h1> 
            </ul>
          </div>


           <!-- START: Breadcrumbs-->
                <div class="row ">
                    <div class="col-12  align-self-center">
                        <div class="sub-header mt-3 py-3 px-3 align-self-center d-sm-flex w-100 rounded">
                            <div class="w-sm-100 mr-auto"><h4 class="mb-0">Delivery Details</h4></div>
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
                                             
                                               
                                            
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone_Number</th>
                                            <th>License_Number</th>
                                            <th>Nic_Number</th>
                                            <th>Occupation</th>
                                            <th width = "300">Manage</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($delivery as $item)
                                    <tr>
                                       
                                       <input type="hidden" class="reqdelete_val_id" value="{{$item->id}}">
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->phone_number }}</td>
                                        <td>{{ $item->license_number }}</td>
                                        <td>{{ $item->nic_number }}</td>
                                        <td>{{ $item->occupation }}</td>
                                        <td>
                                            <a href="{{ url('/exportpdf',$item->id  ) }}"  title="View Student"><button class="btn btn-success btn-sm"><i class="fa fa-cloud-download" aria-hidden="true"></i> Download</button></a>
                                            <a href="{{ url('/delivery/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-edit"></i>&nbsp; Edit</button></a>
                                            <form method="POST" action="{{ url('/delivery' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash"></i>&nbsp; Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                             
                                               
                                        </tbody>
                                        
                                              
                                    </table>
                                    <a href="{{url('/delivery')}}">
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