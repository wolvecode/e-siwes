<?php $__env->startSection('title', 'report'); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-md-7">
        <div class="card  box-shadow-0">
            <div class="card-header">
                <h4 class="card-title mb-1">Upload Acceptance</h4>
                <p class="mb-2">Select company that issue placement acceptance from the form</p>
            </div>
            <div class="card-body pt-0">
                <form action="<?php echo e(route('uploadAcceptance')); ?>" enctype="multipart/form-data" method="post" class="form-horizontal" >
                    <?php echo csrf_field(); ?>
                    <div class="form-group ql-wrapper ql-wrapper-demo bg-gray-100">
                        <textarea id="editor" name="description" cols="100" rows="10" value="<?php echo e(old('description')); ?>" required></textarea>
                    </div>
                    <?php $__errorArgs = ['description'];
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
                        <select name="organization_id" class="form-control select2" style="width: 75%;" placeholder="Select Company" required>
                            <?php $__currentLoopData = $organizations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $organization): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($organization->id); ?>">
                                   <?php echo e($organization->name); ?> ( <?php echo e($organization->state); ?>, <?php echo e($organization->city); ?> )
                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <?php $__errorArgs = ['organization_id'];
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
                        <input type="file" name="attachment" class="dropify" data-height="150" required/>
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
                            <button type="submit" class="btn btn-primary">Upload Acceptance</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>

    <!-- JQuery min js -->
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
    <script src="<?php echo e(asset('assets/plugins/select2/js/select2.min.js')); ?>"></script>
    <script>
        const quill = new FroalaEditor('#editor', { height: '200px'})
        $('.select2').select2({
            placeholder: "Select a company",
            allowClear: true,
            theme: "classic",
        });
    </script>
    <!-- Internal Select2.min js -->
<?php $__env->stopPush(); ?>

<?php $__env->startPush('css'); ?>
    <link href="<?php echo e(asset('assets/plugins/fileuploads/css/fileupload.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(asset('assets/plugins/quill/quill.snow.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/plugins/quill/quill.bubble.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/plugins/mscrollbar/jquery.mCustomScrollbar.css')); ?>" rel="stylesheet"/>
    <link href="<?php echo e(asset('assets/plugins/notify/css/notifIt.css')); ?>" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.0.4/css/froala_editor.min.css"
          integrity="sha512-ssmgHpB90upcc3tJZuL9zXUcAQn9j40MBRBlPt5FTvlJCDSwByyYWsv9TWH/tV6Ry154FQE93pA5bk31XOWb8Q=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Internal Select2 css -->
    <link href="<?php echo e(asset('assets/plugins/select2/css/select2.min.css')); ?>" rel="stylesheet">
<?php $__env->stopPush(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wolvecode/projects/e-siwes/resources/views/students/upload-acceptance.blade.php ENDPATH**/ ?>