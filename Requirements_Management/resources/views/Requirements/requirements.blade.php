@extends('layout.app')

@section('content')

<section class="section">
          <div class="section-header">
            <ul>
            <h1><i class="fa-solid fa-table"></i> &nbsp;  Customers' Requirements</h1>
            </ul>
          </div>

           <!-- START: Breadcrumbs-->
                <div class="row ">
                    <div class="col-12  align-self-center">
                        <div class="sub-header mt-3 py-3 px-3 align-self-center d-sm-flex w-100 rounded">
                            <div class="w-sm-100 mr-auto"><h4 class="mb-0" style="font-style: italic;">Requirements Information</h4></div>
                            <div class="btn-group mb-2">
                                    <a href="{{url('add-req')}}"><button type="button" class="btn btn-outline-success rounded-btn btn-lg"><i class="fa-solid fa-square-plus"></i> &nbsp; New Requirements</button></a>
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
                                                <th>Product Category</th>
                                                <th>Product Name</th>
                                                <th>Quantity</th>
                                                <th>Packaging Preference</th>
                                                <th>Preferred Delivery Date</th>
                                             <th>Preferred Delivery Time</th>
                                                <th width = "200"><center>Manage</center></th>
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
                                                 <td>{{ $item->product_category }}</td>
                                                <td>{{ $item->product_name }}</td>
                                                <td>{{ $item->Quantity }}</td>
                                                <td>{{ $item->pack_preference }}</td>
                                                <td>{{ $item->preferred_day }} </td>
                                              <td>{{ $item->preferred_time }}</td>
                                                    <td>
                                                        <a href="{{ url('/requirements/' . $item->id . '/edit') }}"  class="btn btn-primary"> <i class="fa fa-edit"></i>&nbsp; Edit</a>
                                                         <form method="POST" action="{{ url('/requirements' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="confirm_del_btn btn btn-danger"  onclick="return confirm(Confirm)"><i class="fa fa-trash"></i> &nbsp;Delete</button>
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