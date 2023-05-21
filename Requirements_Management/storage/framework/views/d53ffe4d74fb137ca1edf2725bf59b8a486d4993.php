

<?php $__env->startSection('content'); ?>

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
                                <img src="<?php echo e(asset('/template/template/assets/img/avatar/Users.jpg')); ?>" class="rounded-circle-lg" alt="admins" class="float-right" width="50" height="50" align = "right">
                                <h5 class="card-title font-weight-bold">Customers' Requirements</h5> &nbsp;
                                   <h5 class="card-subtitle mb-2 text-muted"><a href="<?php echo e(url('requirements')); ?>">Show</a> &nbsp;<i class="fa-solid fa-hand-point-left fa-beat" style= "color: #011ffe;"></i></h5>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">

                                 <?php

                                 $connection = mysqli_connect("localhost","root","","food_distribution_system_db","3307");
                                 $query = "SELECT id FROM requirements ORDER BY id";
                                 $query_run = mysqli_query($connection, $query);
                                 $row = mysqli_num_rows($query_run);

                                 echo '<h1> '.$row.'</h1>';
                                 
                                 ?>

                                 </div>
                            </div>
                        </div>
                    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Year-3-Semester-2-ITPM\Requirements_Management\resources\views/Dashboard/dashboard.blade.php ENDPATH**/ ?>