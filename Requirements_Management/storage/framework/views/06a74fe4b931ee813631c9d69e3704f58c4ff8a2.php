<div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">

          <a href="#" style="font-size:x-small"> Food To Your Doorstep </a>  &emsp;
          <img alt="image" src="<?php echo e(asset('/template/template/assets/img/avatar/logo.png')); ?>" class="rounded-rectangular" height="100px" width="100px">
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="#"><img alt="image" src="<?php echo e(asset('/template/template/assets/img/avatar/logo.png')); ?>" class="rounded-rectangular" height="50px" width="50px">FDS</a>
          </div>
          <br/><br/>  <br/>
          <ul class="sidebar-menu">
            <?php echo $__env->make('Admin.adlayout.admenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          </ul>
       
        </aside>
      </div><?php /**PATH D:\Year-3-Semester-2-ITPM\Requirements_Management\resources\views/Admin/Adlayout/adslidebar.blade.php ENDPATH**/ ?>