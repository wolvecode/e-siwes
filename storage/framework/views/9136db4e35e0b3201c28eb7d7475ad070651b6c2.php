<?php $__env->startSection('title', 'report'); ?>

<?php $__env->startSection('content'); ?>
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Pages</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Apply to company</span>
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

    <!-- container -->
    <div class="container-fluid">

        <!-- row -->
        <div class="row row-sm">
            <!-- Col -->
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal" action="<?php echo e(route('application')); ?>" method="post">
                            <div class="mb-4 main-content-label">Company Info</div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label">Email<i>(required)</i></label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" name="email" class="form-control"  placeholder="Email" value="<?php echo e(old('email')); ?>"/>
                                    </div>
                                    <?php $__errorArgs = ['email'];
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
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label">Website</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text"  name="website" class="form-control"  placeholder="Website" value="@spruko.w">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label">Phone<i>(required)</i></label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" name="contact" class="form-control"  placeholder="phone number" value="<?php echo e(old('contact')); ?>">
                                    </div>
                                    <?php $__errorArgs = ['contact'];
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
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label">Address<i>(required)</i></label>
                                    </div>
                                    <div class="col-md-9">
                                        <textarea class="form-control" name="example-textarea-input" rows="2"  placeholder="Address">San Francisco, CA</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4 main-content-label">Placement Info</div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label">Placement letter<i>(required)</i></label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="file" name="placement_attachment" class="dropify" data-height="150" />
                                    </div>
                                    <?php $__errorArgs = ['placement_attachment'];
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
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label">Placement description<i>(required)</i></label>
                                    </div>
                                    <div class="col-md-9">
                                        <textarea class="form-control" name="example-textarea-input" rows="2"  placeholder="Address">Description of placement company.</textarea>
                                    </div>
                                </div>
                            </div>

                                <button type="submit" class="btn btn-primary waves-effect waves-light">Submit placement request</button>

                        </form>
                    </div>

                </div>
            </div>
            <!-- /Col -->
        </div>
        <!-- row closed -->
    </div>
    <!-- Container closed -->

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
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



<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wolvecode/projects/e-siwes/resources/views/organization/application.blade.php ENDPATH**/ ?>