@extends('layout.app')

@section('content')

<section class="section">
          <div class="section-header">
            <ul>
            <h1><i class="fa-solid fa-table"></i> &nbsp;  Farmer Details</h1>
            </ul>
          </div>

           <!-- START: Breadcrumbs-->
                <div class="row ">
                    <div class="col-12  align-self-center">
                        <div class="sub-header mt-3 py-3 px-3 align-self-center d-sm-flex w-100 rounded">
                            <div class="w-sm-100 mr-auto"><h4 class="mb-0" style="font-style: italic;">Farmer Information</h4></div>
                            <div class="btn-group mb-2">
                                <a href="/exportpdf" class="btn btn-success btn-sm" ><i class="fa fa-cloud-download"></i>&nbsp;&nbsp; Download Report</a>
                                    <a href="{{url('/farmer/create')}}"><button type="button"class="btn btn-primary p-2 rounded mx-3 h4 mb-0 line-height-1 d-none d-lg-block"><span class="text-white font-weight-bold h4"><i class="fa-solid fa-file"></i>&nbsp;+</span></button></a>
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
                                                <th><center>ID</center></th>
                                                <th><center>Name</center></th>
                                                <th><center>NIC</center></th>
                                                <th><center>Address</center></th>
                                                <th><center>Mobile</center></th>
                                                <th><center>Email</center></th>
                                                <th><center>Type_of_Crops</center></th>
                                                <th width="50000">Manage</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             @foreach($farmer as $item)
                                             <tr>
                                             
                                                
                                                <td>{{ $loop->iteration }}</td>
                                                 <td align="center">{{ $item->name  }}</td>
                                                <td align="center">{{ $item->nic }}</td>
                                                <td align="center">{{ $item->address }}</td>
                                                <td align="center">{{ $item->mobile }}</td>
                                                <td align="center">{{ $item->email }} </td>
                                              <td align="center">{{ $item->type_of_crops }}</td>
                                                    <td>
                                            <a href="{{ url('/farmer/' . $item->id . '/edit') }}" class="btn btn-primary btn-sm "><i class="fa fa-edit" aria-hidden="true"></i>&nbsp; edit</a>
                                            <form method="POST" action="{{ url('/farmer' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash" aria-hidden="true"></i> delete</button>
                                            </form>
                                                                                                                                                                                                                   
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

@section('scripts')

<script>
  
    $(document).ready(function(){
        $('.confirmdel').click(function (e){
            e.preventDefault();
            alert('Hello');
        
    });
     });
  
</script>

@endsection