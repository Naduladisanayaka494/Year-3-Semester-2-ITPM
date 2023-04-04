@extends('layout.app')

@section('content')

<section class="section">
          <div class="section-header">
            <ul>
            <h1><i class="fa-solid fa-user"></i> &nbsp;  Customers' Requirements</h1>
            </ul>
          </div>

           <!-- START: Breadcrumbs-->
                <div class="row ">
                    <div class="col-12  align-self-center">
                        <div class="sub-header mt-3 py-3 px-3 align-self-center d-sm-flex w-100 rounded">
                            <div class="w-sm-100 mr-auto"><h4 class="mb-0">Requirements Information</h4></div>
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
                                             
                                                <th>DEMO</th>
                                                <th>DEMO</th>
                                                <th>DEMO</th>
                                                <th>DEMO</th>
                                                <th>DEMO</th>
                                                <th>DEMO</th>
                                                <th>DEMO</th>
                                                <th>Date</th>
                                                <th width = "200">Manage</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             <tr>
                                             
                                             
                                                <td>demo</td>
                                                <td>demo</td>
                                                <td>demo</td>
                                                <td>demo</td>
                                                <td>demo</td>
                                                <td>demo</td>
                                                <td>demo</td>
                                                 <td>demo</td>
                                                    <td>
                                                        <a href="#"  class="btn btn-primary"> <i class="fa fa-edit"></i>&nbsp; Edit</a>
                                                         <button type="button" value=""  class="confirm_del_btn btn btn-danger"> <i class="fa fa-trash"></i>&nbsp; Delete</button>
                                                                                                                                                                                                                   
                                                    </td>
                                            </tr>
                                            <tr>
                                             
                                             
                                                <td>demo</td>
                                                <td>demo</td>
                                                <td>demo</td>
                                                <td>demo</td>
                                                <td>demo</td>
                                                <td>demo</td>
                                                <td>demo</td>
                                                 <td>demo</td>
                                                    <td>
                                                        <a href="#"  class="btn btn-primary"> <i class="fa fa-edit"></i>&nbsp; Edit</a>
                                                         <button type="button" value=""  class="confirm_del_btn btn btn-danger"> <i class="fa fa-trash"></i>&nbsp; Delete</button>
                                                                                                                                                                                                                   
                                                    </td>
                                            </tr>
                                              
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