@extends('farmer.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 mt-3">
                <div class="card shadow p-12 mb-7 bg-white rounded">
                    <div class="card-header">
                        <h5 class="mb-0">Farmer Management &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="/exportpdf" class="btn btn-success float-right" > Genarate Report</a>
                        </h5>
                    </div>
                    <div class="card-body">
                    <form action =""  class="col-8">
                        <div class="form-group">
                             <input type="search" name="search" id="" class="form-control"  placeholder=" Search here" > 
                             <br><button class="btn btn-primary btn-sm">Search</button>   
                        </div>
                    </form><br>
                        
                        <a href="{{ url('/farmer/create') }}" class="btn btn-success btn-sm" title="Add New Farmer">
                            <i class="fa fa-plus" aria-hidden="true"></i> + Add New Farmer
                            
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                        <table id="example" class="display table dataTable table-striped table-bordered shadow p-10 mb-12 bg-white rounded">

                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th width = "40">Name</th>
                                        <th width = "40">NIC</th>
                                        <th width = "40">Address</th>
                                        <th width = "40">Mobile</th>
                                        <th width = "40">Email</th>
                                        <th width = "30">Type_of_Crops</th>
                                        <th width ="800">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($farmer as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->nic }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>{{ $item->mobile }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->type_of_crops }}</td>
                                        <td>
                                            <a href="{{ url('/farmer/' . $item->id) }}" title="View Student" class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp; view</a>
                                            <a href="{{ url('/Farmer/' . $item->id . '/edit') }}" title="Edit Student" class="btn btn-primary btn-sm "><i class="fa fa-edit" aria-hidden="true"></i>&nbsp; edit</a>
                                            <form method="POST" action="{{ url('/farmer' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Farmer" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> delete</button>
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
    </div>
@endsection