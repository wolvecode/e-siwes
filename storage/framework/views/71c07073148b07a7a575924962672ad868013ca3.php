<?php $__env->startSection('title', 'report'); ?>

<?php $__env->startSection('content'); ?>
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Pages</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Student Report List</span>
            </div>
        </div>
        <div class="d-flex my-xl-auto right-content">
            <div class="pr-1 mb-3 mb-xl-0">
                <button type="button" class="btn btn-warning  btn-icon mr-2"><i class="mdi mdi-refresh"></i></button>
            </div>
            <div class="mb-3 mb-xl-0">
                <div class="btn-group ">
                    <button type="button" class="btn btn-primary"><?php echo e(date("F j, Y")); ?></button>
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

        <!-- Col -->
        <div class="col-lg-7">
            <div class="card card-aside custom-card">
                <div class="card-body d-flex flex-column">
                    <div class="card-header pb-0">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title mg-b-0">Report List</h4>
                            <i class="mdi mdi-dots-horizontal text-gray"></i>
                        </div>
                        <p class="tx-14 tx-gray-500 mb-2"> <i class="txt-18">Note:</i> Attach document will be open in new tab for user convenience</p>
                    </div>
                    <?php $__empty_1 = true; $__currentLoopData = $reports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $report): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div class="d-flex align-items-center pt-3 mt-auto">
                            <div class="main-img-user avatar-sm mr-3">
                                <i class="icon ion-md-paper"></i>
                            </div>
                            <div>
                                <p > <?php echo $report->content; ?></p>
                            </div>
                            <div class="ml-auto text-muted d-flex">
                                <form action="<?php echo e(route('viewReport',  $report->id)); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('patch'); ?>
                                    <?php if( $report->view == true): ?>
                                        <a class="btn btn-outline-primary bd bd-0 disabled"><?php echo $report->view == true ?  '<i class="far fa-eye"></i>' : '<i class="far fa-eye-slash"></i>'; ?></a>
                                    <?php else: ?>
                                        <a class="btn btn-outline-success bd bd-0" href="<?php echo e(route('displayImage',$report->attachment)); ?>" target="_blank">
                                            <i class="far fa-file-alt"></i>
                                        </a>
                                        <button class="btn btn-outline-primary bd bd-0"><?php echo $report->view == true ?  '<i class="far fa-eye"></i>' : '<i class="far fa-eye-slash"></i>'; ?></button>
                                    <?php endif; ?>
                                </form>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <p>User have make no report</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <!-- /Col -->
    </div>
    <!-- row closed -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
    <!-- Internal Modal js-->
    <script src="<?php echo e(asset('assets/js/modal.js')); ?>"></script>
<?php $__env->stopPush(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wolvecode/projects/e-siwes/resources/views/Reports/reports-list.blade.php ENDPATH**/ ?>