

<?php $__env->startSection('content'); ?>

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
                                    <a href="<?php echo e(url('add-req')); ?>"><button type="button"class="btn btn-primary p-2 rounded mx-3 h4 mb-0 line-height-1 d-none d-lg-block"><span class="text-white font-weight-bold h4"><i class="fa-solid fa-file"></i>&nbsp;+</span></button></a>
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
                                                <th width = "200"><center>Manage</center></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             <?php $__currentLoopData = $Requirements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                             <tr>
                                             
                                                
                                                <input type="hidden" class="reqdelete_val_id" value="<?php echo e($item->id); ?>">
                                                 <td align="center"><?php echo e($item->product_category); ?></td>
                                                <td align="center"><?php echo e($item->product_name); ?></td>
                                                <td align="center"><?php echo e($item->Quantity); ?></td>
                                                <td align="center"><?php echo e($item->pack_preference); ?></td>
                                                <td align="center"><?php echo e($item->preferred_day); ?> </td>
                                              <td align="center"><?php echo e($item->preferred_time); ?></td>
                                                    <td>
                                                        <a href="<?php echo e(url('/requirements/' . $item->id . '/edit')); ?>"  class="btn btn-primary"> <i class="fa fa-edit"></i>&nbsp; Edit</a>
                                                         <form method="POST" action="<?php echo e(url('/requirements' . '/' . $item->id)); ?>" accept-charset="UTF-8" style="display:inline">
                                                <?php echo e(method_field('DELETE')); ?>

                                                <?php echo e(csrf_field()); ?>

                                                <button type="submit" class="btn btn-danger"  onclick="return confirm(Confirm)"><i class="fa fa-trash"></i> &nbsp;Delete</button>
                                            </form>
                                                                                                                                                                                                                   
                                                    </td>
                                            </tr>
                                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

<script>
  
    $(document).ready(function(){
        $('.confirmdel').click(function (e){
            e.preventDefault();
            alert('Hello');
        
    });
     });
  
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Year-3-Semester-2-ITPM\Requirements_Management\resources\views/Requirements/requirements.blade.php ENDPATH**/ ?>