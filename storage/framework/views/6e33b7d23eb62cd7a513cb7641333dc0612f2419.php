<?php $attributes = $attributes->exceptProps(['name' => $name, 'type' => $type, 'role'=> $role,
'action' => $action, 'na' => $na, 'sessions' => $sessions]); ?>
<?php foreach (array_filter((['name' => $name, 'type' => $type, 'role'=> $role,
'action' => $action, 'na' => $na, 'sessions' => $sessions]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>


<div class="row mg-t-60">
    <div class="col-md-8">
        <form action="<?php echo e(route('fileRegister')); ?>" enctype="multipart/form-data" method="post">
            <?php echo csrf_field(); ?>
            <div class="modal" id="modalQuill">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="mb-4 main-content-label mx-4  mt-4">Upload file to register multiple student</div>
                        <div class="form-group ">
                            <div class="row mx-4">
                                <div class="col-md-3">
                                    <label class="form-label">Placement letter <i>(required)</i></label>
                                </div>
                                <div class="col-md-9">
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
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Submit placement request</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <?php if($na): ?>
        <div class="card-header ml-3 pb-0">
            <p class="tx-14 tx-gray-500 mb-2">You can add multiple students by clicking <strong><a data-effect="effect-fall" data-target="#modalQuill" data-toggle="modal" href="<?php echo e(route('application')); ?>">here</a></strong> <i>Note:</i> file upload must be excel or csv file</p>
        </div>
    <?php endif; ?>
        <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
            <div class="d-flex flex-row ">
                <div class="card  box-shadow-0">
                    <div class="card-header">
                        <h4 class="card-title mb-1">Add <?php echo e($name); ?></h4>
                        <p class="mb-2">Generate login for <?php echo e($name); ?> (<?php echo e($type); ?> and password for login)</p>
                    </div>
                    <div class="card-body pt-0">
                        <form action="<?php echo e(route($action)); ?>" method="post" class="form-horizontal" >
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" id="inputName" placeholder="Name" value="<?php echo e(old('name')); ?>">
                            </div>
                            <?php $__errorArgs = ['name'];
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
                                    <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Enter email" value="<?php echo e(old('email')); ?>">
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

                            <?php if($na): ?>
                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.matric','data' => ['na' => true,'type' => 'matric_no','action' => 'addStudent']]); ?>
<?php $component->withName('matric'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['na' => true,'type' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('matric_no'),'action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('addStudent')]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.session','data' => ['sessions' => $sessions]]); ?>
<?php $component->withName('session'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['sessions' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sessions)]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                            <?php endif; ?>

                            <?php if($role): ?>
                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.role','data' => []]); ?>
<?php $component->withName('role'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                            <?php endif; ?>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                            </div>
                            <?php $__errorArgs = ['password'];
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
                                <input type="password" name="password_confirmation" class="form-control" id="inputPassword3" placeholder="Confirm Password">
                            </div>
                            <?php $__errorArgs = ['password_confirmation'];
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
                                    <button type="submit" class="btn btn-primary">Add <?php echo e($name); ?></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


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
    <script src="<?php echo e(asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js')); ?>}"></script>
    <!--Internal  Datatable js -->
    <script src="<?php echo e(asset('assets/js/table-data.js')); ?>"></script>
    <!--Internal Fileuploads js-->
    <script src="<?php echo e(asset('assets/plugins/fileuploads/js/fileupload.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/fileuploads/js/file-upload.js')); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.0.4/js/froala_editor.min.js" integrity="sha512-CLb49GjVXA3PKrmkC+LfLTfU5gQjrS5dtI4KRxdu/h79DHvz7m2PQnpQI0Im7GSw1KBRmaO2tCGqsuqOTuGoHw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        const quill = new FroalaEditor('#editor', { height: '150px'})
    </script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('css'); ?>
    <!-- Internal Data table css -->
    <link href="<?php echo e(asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')); ?>" rel="stylesheet" />
    
    <link href="<?php echo e(asset('assets/plugins/datatable/css/responsive.dataTables.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/plugins/select2/css/select2.min.css')); ?>" rel="stylesheet">

    
    <link href="<?php echo e(asset('assets/plugins/fileuploads/css/fileupload.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(asset('assets/plugins/quill/quill.snow.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/plugins/quill/quill.bubble.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/plugins/mscrollbar/jquery.mCustomScrollbar.css')); ?>" rel="stylesheet"/>
    <link href="<?php echo e(asset('assets/plugins/notify/css/notifIt.css')); ?>" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.0.4/css/froala_editor.min.css" integrity="sha512-ssmgHpB90upcc3tJZuL9zXUcAQn9j40MBRBlPt5FTvlJCDSwByyYWsv9TWH/tV6Ry154FQE93pA5bk31XOWb8Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<?php $__env->stopPush(); ?>

<?php /**PATH /home/wolvecode/projects/e-siwes/resources/views/components/form.blade.php ENDPATH**/ ?>