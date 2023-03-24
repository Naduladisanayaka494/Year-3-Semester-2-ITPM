@extends('layouts.app')
@section('content')

<!-- Main Content -->
      <div class="main-content">
        <section class="section" >
          <div class="section-header shadow p-8 mb-5 bg-body">
            <h1>Customer's Requirements</h1>
          </div>
          <div class="section-body">
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
                                                <th>DEMO</th>
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
                                                         <button type="button" value="#"  class="confirm_del_btn btn btn-danger"> <i class="fa fa-trash"></i>&nbsp; Delete</button>
                                                                                                                                                                                                                   
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
                                                         <button type="button" value="#"  class="confirm_del_btn btn btn-danger"> <i class="fa fa-trash"></i>&nbsp; Delete</button>
                                                                                                                                                                                                                   
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
          </div>
        </section>
      </div>

      @endsection