<?php $__env->startSection('title', 'report'); ?>

<?php $__env->startSection('content'); ?>
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Pages</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Edit-Profile</span>
            </div>
        </div>
        <div class="d-flex my-xl-auto right-content">
            <div class="pr-1 mb-3 mb-xl-0">
                <button type="button" class="btn btn-warning  btn-icon mr-2"><i class="mdi mdi-refresh"></i></button>
            </div>
            <div class="mb-3 mb-xl-0">
                <div class="btn-group ">
                    <button type="button" class="btn btn-primary"><?php echo e(date("j F, Y")); ?></button>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->

    <!-- row -->
    <div class="row row-sm">
        <!-- Col -->
        <div class="col-lg-5">
            <div class="card card-aside custom-card">
                <div class="card-body d-flex flex-column">
                    <h4><a href="#" class="card-title">Your Student List</a></h4>
                    <?php $__empty_1 = true; $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div class="d-flex align-items-center pt-3 mt-auto">
                            <div class="main-img-user avatar-sm mr-3">
                                <i class="icon ion-md-paper"></i>
                            </div>
                            <div>
                                <a href="<?php echo e(route('reports.show', $student->id)); ?>" class="text-default"><?php echo e($student->name); ?></a>
                                <small class="d-block text-muted"><?php echo e($student->matric_no); ?></small>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <p>You have make no report</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <!-- /Col -->
    </div>
    <!-- row closed -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wolvecode/projects/e-siwes/resources/views/supervisors/students-reports.blade.php ENDPATH**/ ?>