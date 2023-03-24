@extends('layouts.app')
@section('content')

<!-- Main Content -->
      <div class="main-content">
        <section class="section" >
          <div class="section-header shadow p-8 mb-5 bg-body">
            <h1>Dashboard</h1>
          </div>
  <!-- START: Card Data-->
                <div class="row">
                    <div class="col-12 col-sm-6 col-xl-3 mt-3">
                        <div class="card shadow p-3 mb-5 bg-body rounded">
                            <div class="card-body">
                                <img src="assets/img/avatar/users.jpg" class="rounded-circle-lg" alt="admins" class="float-right" width="50" height="50" align = "right">
                                <h6 class="card-title font-weight-bold">Customer's Requirements</h6>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                  <h1>2</h1>
                                </div>
                            </div>
                        </div>
                    </div>
          <div class="section-body">
          </div>
        </section>
      </div>

      @endsection