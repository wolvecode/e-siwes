<?php $__env->startSection('title', 'report'); ?>

<?php $__env->startSection('content'); ?>
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Pages</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Find Placement through search</span>
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
        <div class="col-md-8">
            <form action="<?php echo e(route('application')); ?>" enctype="multipart/form-data" method="post">
                <?php echo csrf_field(); ?>
                <div class="modal" id="modalQuill">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="my-4 main-content-label mx-4">Company Info</div>
                            <div class="form-group ">
                                <div class="row mx-4">
                                    <div class="col-md-3">
                                        <label class="form-label">Name<i>(required)</i></label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" name="name" class="form-control"  placeholder="Name of company" value="<?php echo e(old('name')); ?>" required/>
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
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row mx-4">
                                    <div class="col-md-3">
                                        <label class="form-label">State <i>(required)</i></label>
                                    </div>
                                    <div class="col-md-9">
                                        <select name="state" class="form-control select2-no-search js-states">
                                            <option label="Select state"></option>
                                        </select>
                                    </div>
                                    <?php $__errorArgs = ['state'];
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
                                <div class="row mx-4">
                                    <div class="col-md-3">
                                        <label class="form-label">City <i>(required)</i></label>
                                    </div>
                                    <div class="col-md-9">
                                        <select name="city" class="form-control select2-no-search js-lga">
                                            <option label="select city"></option>
                                        </select>
                                    </div>
                                    <?php $__errorArgs = ['city'];
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
                                <div class="row mx-4">
                                    <div class="col-md-3">
                                        <label class="form-label">Email <i>(required)</i></label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" name="email" class="form-control"  placeholder="Email" value="<?php echo e(old('email')); ?>" required/>
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
                                <div class="row mx-4">
                                    <div class="col-md-3">
                                        <label class="form-label">Website</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text"  name="website" class="form-control"  placeholder="Website" value="<?php echo e(old('website')); ?>" required/>
                                    </div>
                                    <?php $__errorArgs = ['website'];
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
                                <div class="row mx-4">
                                    <div class="col-md-3">
                                        <label class="form-label">Phone <i>(required)</i></label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" name="contact" class="form-control"  placeholder="phone number" value="<?php echo e(old('contact')); ?>" required/>
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
                                <div class="row mx-4">
                                    <div class="col-md-3">
                                        <label class="form-label">Address <i>(required)</i></label>
                                    </div>
                                    <div class="col-md-9">
                                        <textarea class="form-control" name="address" rows="2"  placeholder="Address" required>San Francisco, CA</textarea>
                                    </div>
                                    <?php $__errorArgs = ['placement_description'];
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
                            <div class="mb-4 main-content-label mx-4">Placement Info</div>
                            <div class="form-group ">
                                <div class="row mx-4">
                                    <div class="col-md-3">
                                        <label class="form-label">Placement letter <i>(required)</i></label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="file" name="placement_attachment" class="dropify" data-height="150" required/>
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
                                <div class="row mx-4">
                                    <div class="col-md-3">
                                        <label class="form-label">Placement summary <i>(required)</i></label>
                                    </div>
                                    <div class="col-md-9">
                                        <textarea class="form-control" name="placement_description" rows="2"  placeholder="Summary of placement" required>Description of placement company.</textarea>
                                    </div>
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
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between mb-2">
                        <h4 class="card-title mg-b-0">Organizations for placement</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                    </div>
                    <p class="tx-12 tx-gray-500 mb-2">If company does not exit <strong><a data-effect="effect-fall" data-target="#modalQuill" data-toggle="modal" href="<?php echo e(route('application')); ?>">click</a></strong> to add preferred company</p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-md-nowrap" id="example1">
                            <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">Company name</th>
                                <th class="wd-15p border-bottom-0">Company state</th>
                                <th class="wd-20p border-bottom-0">Company city</th>
                                <th class="wd-20p border-bottom-0">Company email</th>
                                <th class="wd-20p border-bottom-0">Contact</th>
                                <th class="wd-20p border-bottom-0">Website</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $organizations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $organzation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($organzation->name); ?></td>
                                    <td><?php echo e($organzation->state); ?></td>
                                    <td><?php echo e($organzation->city); ?></td>
                                    <td><?php echo e($organzation->email); ?></td>
                                    <td><?php echo e($organzation->contact); ?></td>
                                    <td><a class="$" href="<?php echo e($organzation->website); ?>" target="_blank"> <?php echo e($organzation->website); ?></a></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--/div-->
    </div>
    <!-- /row mx-4 -->
<?php $__env->stopSection(); ?>

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
        const quill = new FroalaEditor('#editor', { height: '100px'})
    </script>
    <script src="<?php echo e(asset('js/state.js')); ?>"></script>
    <script>
        var states = Object.keys(STATE).map(function (state){
            return "<option value='" + state +"'>"+ state +"</option>"
        }).join('\n');

        $('.js-states').html('<option> Select your state...</option>' + states)

        $('.js-states').on('change', function (){
            var selected = $(this).find(':selected').text();
            if (!STATE[selected]) return;
            var locals = STATE[selected].map(function(local) {
                return `<option value='${local}'>${local}</option>`;
            }).join('\n');

            $('.js-lga').html('<option>Pick City/LGA</option>' + locals);
        });

        // $('.js-states').html(Object.keys(STATE)
        //     .map(state => `<option value="${state}">${state}</option>`)
        //     .join('')
        // );
        // $.(#state)
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


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/techbigo1/Desktop/workspace/e-siwes/resources/views/students/placement.blade.php ENDPATH**/ ?>