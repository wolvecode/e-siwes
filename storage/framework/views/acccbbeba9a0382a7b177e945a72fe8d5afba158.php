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
        <div class="col-lg-8">
            <div class="d-flex flex-row ">
                <div class="card  box-shadow-0">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success mg-b-0" role="alert">
                            <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong> Success: </strong> <?php echo e(session('status')); ?>.
                        </div>
                    <?php endif; ?>
                    <div class="card-header">
                        <h4 class="card-title mb-1">Edit report</h4>
                        <p class="mb-2">Enter your report below, report won't be editable after lecturer view</p>
                    </div>
                    <div class="card-body pt-0">
                        <form action="<?php echo e(route('editReport', $report->id)); ?>" method="post" class="form-horizontal">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <textarea class="form-control <?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> alert alert-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"  role="alert" name="content" rows="6" placeholder="Give detail description of your report"><?php echo e($report->content); ?></textarea>
                            </div>
                            <?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="alert alert-danger  mg-b-0" role="alert">
                                <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <?php echo e($message); ?>

                            </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            <div class="form-group">
                                <input type="text" class="form-control <?php $__errorArgs = ['attachment'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> alert alert-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" role="alert" name="attachment" id="inputName" placeholder="Attachment" value="<?php echo e($report->attachment); ?>">
                            </div>
                            <?php $__errorArgs = ['attachment'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="alert alert-danger  mg-b-0" role="alert">
                                <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <?php echo e($message); ?>

                            </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            <div class="form-group mb-0 mt-3 justify-content-end">
                                <div>
                                    <button type="submit" class="btn btn-primary">Submit report</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Col -->
    </div>
    <!-- row closed -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
    <!--- Animations css-->
    <link href="<?php echo e(asset('assets/css/animate.css')); ?>" rel="stylesheet">
    <!--Internal   Notify -->
    <link href="<?php echo e(asset('assets/plugins/notify/css/notifIt.css')); ?>" rel="stylesheet"/>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>
    <!--Internal  Notify js -->
    <script src="<?php echo e(asset('assets/plugins/notify/js/notifIt.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/notify/js/notifit-custom.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wolvecode/projects/e-siwes/resources/views/Reports/edit.blade.php ENDPATH**/ ?>