<?php $__env->startSection('title', 'List and verify organization'); ?>

<?php $__env->startSection('content'); ?>
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Pages</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Non verify organization</span>
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
    <!-- row opened -->
    <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-0">Review for verification</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                    </div>
                    <p class="tx-12 tx-gray-500 mb-2">Attach document will be open on new tab for proper review</p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-md-nowrap" id="example1">
                            <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">Organization name</th>
                                <th class="wd-15p border-bottom-0">Organization state</th>
                                <th class="wd-15p border-bottom-0">Organization email</th>
                                <th class="wd-20p border-bottom-0">Organization contact</th>
                                <th class="wd-15p border-bottom-0">Student name</th>
                                <th class="wd-15p border-bottom-0">Acceptance summary</th>
                                <th class="wd-10p border-bottom-0">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $acceptances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $acceptance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($acceptance->organization->name); ?></td>
                                    <td><?php echo e($acceptance->organization->state); ?></td>
                                    <td><?php echo e($acceptance->organization->email); ?></td>
                                    <td><?php echo e($acceptance->organization->contact); ?></td>
                                    <td><?php echo e($acceptance->student->name); ?></td>
                                    <td><?php echo $acceptance->description; ?></td>
                                    <td>
                                        <div>
                                            <div class="d-flex m">
                                                <a class="btn btn-success bd bd-0" href="<?php echo e(route('displayImage',$acceptance->attachment)); ?>" target="_blank">
                                                    <i class="far fa-file-alt"></i>
                                                </a>
                                                <form action="<?php echo e(route('verifyAcceptance', $acceptance->id)); ?>" method="post">
                                                    <?php echo csrf_field(); ?>
                                                    <button class="btn-primary px-3 rounded-5 bd-0 br-1 py-2 ml-2">
                                                        <i class="far fa-check-circle"></i>
                                                    </button>
                                                </form>
                                                <form action="<?php echo e(route('declineAcceptance', $acceptance->id)); ?>" method="post">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('delete'); ?>
                                                    <button class="btn-danger px-3 rounded-5 bd-0 br-1 py-1 ml-2">
                                                        <i class="las la-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /row -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
    <!-- Internal Data table css -->
    <link href="<?php echo e(asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet"/>
    <link href="<?php echo e(asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')); ?>" rel="stylesheet"/>
    <link href="<?php echo e(asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')); ?>" rel="stylesheet"/>
    
    <link href="<?php echo e(asset('assets/plugins/datatable/css/responsive.dataTables.min.css')); ?>" rel="stylesheet"/>
    <link href="<?php echo e(asset('assets/plugins/select2/css/select2.min.css')); ?>" rel="stylesheet"/>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>

    <!-- Internal Data tables -->
    <script src="<?php echo e(asset('assets/plugins/datatable/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/datatable/js/dataTables.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/datatable/js/dataTables.responsive.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/datatable/js/responsive.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/datatable/js/jquery.dataTables.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/datatable/js/dataTables.buttons.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/datatable/js/jszip.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/datatable/js/pdfmake.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/datatable/js/vfs_fonts.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/datatable/js/buttons.html5.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/datatable/js/buttons.print.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/datatable/js/buttons.colVis.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/datatable/js/dataTables.responsive.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js')); ?>"></script>
    <!--Internal  Datatable js -->
    <script src="<?php echo e(asset('assets/js/table-data.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wolvecode/projects/e-siwes/resources/views/new-acceptance.blade.php ENDPATH**/ ?>