@extends('layout.app')

@section('content')

<section class="section">

          <div class="section-header">
            <ul>
            <h1><i class="fa-solid fa-house"></i> &nbsp;Dashboard</h1>
            </ul>
          </div>

                   <!-- START: Card Data-->
                <div class="row">
                    <div class="col-12 col-sm-6 col-xl-3 mt-3">
                        <div class="card shadow p-3 mb-5 bg-body rounded">
                            <div class="card-body">
                                <img src="{{ asset('/template/template/assets/img/avatar/Users.jpg') }}" class="rounded-circle-lg" alt="admins" class="float-right" width="50" height="50" align = "right">
                                <h6 class="card-title font-weight-bold">Customers' Requirements</h6>&nbsp;
                                <div class="h5 mb-0 font-weight-bold text-gray-800">

                                 <?php

                                 $connection = mysqli_connect("localhost","root","","food_distribution_system_db","3307");
                                 $query = "SELECT id FROM requirements_info ORDER BY id";
                                 $query_run = mysqli_query($connection, $query);
                                 $row = mysqli_num_rows($query_run);

                                 echo '<h1> '.$row.'</h1>';
                                 
                                 ?>

                                 </div>
                            </div>
                        </div>
                    </div>
</section>

@endSection