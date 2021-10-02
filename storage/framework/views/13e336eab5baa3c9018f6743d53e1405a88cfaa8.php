<?php $__env->startSection('title', 'message'); ?>

<?php $__env->startSection('content'); ?>
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Pages</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Messages</span>
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
                    <h4><a href="#" class="card-title">Messages Sent</a></h4>
                    <?php $__empty_1 = true; $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div class="d-flex align-items-center pt-3 mt-auto">
                            <div class="main-img-user avatar-sm mr-3">
                                <i class="icon ion-md-paper"></i>
                            </div>
                            <div>
                                <p><?php echo $message->message; ?></p>
                                <small class="d-block text-muted"><?php echo e($message->created_at->diffForHumans()); ?></small>
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
            <!-- div -->
            <div class="d-flex flex-row ">
                <div class="card box-shadow-0">
                    <div class="card-header">
                        <h4 class="card-title mb-1">Add report</h4>
                        <p class="mb-2">Send message across to your students</p>
                    </div>
                    <div class="card-body pt-0">
                        <form action="#" method="post" class="form-horizontal" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="form-group ql-wrapper ql-wrapper-demo bg-gray-100">
                                <textarea id="editor" name="message" cols="100" rows="20" value="<?php echo e(old('message')); ?>"></textarea>
                            </div>
                            <?php $__errorArgs = ['message'];
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

<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(asset('assets/plugins/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/quill/quill.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/perfect-scrollbar/p-scroll.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/form-editor.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/notify/js/notifIt.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/notify/js/notifit-custom.js')); ?>"></script>
    <!--Internal Fileuploads js-->
    <script src="<?php echo e(asset('assets/plugins/fileuploads/js/fileupload.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/fileuploads/js/file-upload.js')); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.0.4/js/froala_editor.min.js" integrity="sha512-CLb49GjVXA3PKrmkC+LfLTfU5gQjrS5dtI4KRxdu/h79DHvz7m2PQnpQI0Im7GSw1KBRmaO2tCGqsuqOTuGoHw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        const quill = new FroalaEditor('#editor', { height: '200px'})
    </script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('css'); ?>
    <link href="<?php echo e(asset('assets/plugins/fileuploads/css/fileupload.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(asset('assets/plugins/quill/quill.snow.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/plugins/quill/quill.bubble.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/plugins/mscrollbar/jquery.mCustomScrollbar.css')); ?>" rel="stylesheet"/>
    <link href="<?php echo e(asset('assets/plugins/notify/css/notifIt.css')); ?>" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.0.4/css/froala_editor.min.css" integrity="sha512-ssmgHpB90upcc3tJZuL9zXUcAQn9j40MBRBlPt5FTvlJCDSwByyYWsv9TWH/tV6Ry154FQE93pA5bk31XOWb8Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wolvecode/projects/e-siwes/resources/views/message.blade.php ENDPATH**/ ?>