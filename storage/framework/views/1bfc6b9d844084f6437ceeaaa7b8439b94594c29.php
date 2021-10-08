<?php $attributes = $attributes->exceptProps(['users' => $users, 'mail' => $mail, 'lecturers' => $lecturers, 'contact' => $contact]); ?>
<?php foreach (array_filter((['users' => $users, 'mail' => $mail, 'lecturers' => $lecturers, 'contact' => $contact]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">Page/</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Userlist</span>
        </div>
    </div>
    <div class="d-flex my-xl-auto right-content">
        <div class="pr-1 mb-3 mb-xl-0">
            <button type="button" class="btn btn-info btn-icon mr-2"><i class="mdi mdi-filter-variant"></i></button>
        </div>
        <div class="pr-1 mb-3 mb-xl-0">
            <button type="button" class="btn btn-danger btn-icon mr-2"><i class="mdi mdi-star"></i></button>
        </div>
        <div class="pr-1 mb-3 mb-xl-0">
            <button type="button" class="btn btn-warning  btn-icon mr-2"><i class="mdi mdi-refresh"></i></button>
        </div>
        <div class="mb-3 mb-xl-0">
            <div class="btn-group dropdown">
                <button type="button" class="btn btn-primary"><?php echo e(now()->format("F j, Y")); ?></button>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb -->
<!--div-->
<div class="col-xl-12">
    <div class="card mg-b-20">
        <div class="card-body">
            <div class="table-responsive">
                <form action="<?php echo e(route('assignAll')); ?>" method="post" id="assignment">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PATCH'); ?>
                    <?php if($lecturers): ?>
                        <input type="hidden" name="students_id" id="students_id">
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal-table','data' => ['lecturers' => $lecturers]]); ?>
<?php $component->withName('modal-table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['lecturers' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($lecturers)]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                        <div class="mb-2">
                            <a class="btn btn-primary model-effect"  data-effect="effect-flip-horizontal" data-toggle="modal"href="#modaldemo8">Assign All</a>
                        </div>
                    <?php endif; ?>
                    <table id="example" class="table key-buttons text-md-nowrap">
                        <thead>
                            <tr>
                                <th class="border-bottom-0"><span>Mark</span></th>
                                <th class="border-bottom-0"><span>Name</span></th>
                                <?php if($mail): ?>
                                    <th class="border-bottom-0"><span>Email</span></th>
                                <?php endif; ?>
                                <?php if($contact): ?>
                                    <th class="border-bottom-0"><span>Contact</span></th>
                                <?php endif; ?>

                                <?php if(!$mail): ?>
                                    <th class="border-bottom-0"><span>Matric_No</span></th>
                                    <th class="border-bottom-0"><span>Supervisor Name</span></th>
                                <?php endif; ?>
                                <th class="border-bottom-0"><span>Created</span></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr id="tr_<?php echo e($user->id); ?>">
                                    <td>
                                        <div class="checkbox">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" value="<?php echo e($user->id); ?>" name="user_id[]"  class="custom-control-input" id="<?php echo e($user->id); ?>"/>
                                                <label for="<?php echo e($user->id); ?>" class="custom-control-label mt-1"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                       <?php echo e($user->name); ?>

                                    </td>
                                    <?php if($mail): ?>
                                        <td><?php echo e($user->email); ?></td>
                                    <?php endif; ?>
                                    <?php if($contact): ?>
                                        <td><?php echo e($user->contact); ?></td>
                                    <?php endif; ?>
                                    <?php if(!$mail): ?>
                                        <td><?php echo e($user->matric_no); ?></td>
                                        <td> <?php echo e($user->supervisor ? $user->supervisor->name : '--'); ?> </td>
                                    <?php endif; ?>
                                    <td><?php echo e($user->created_at); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>
<!--/div-->
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

    <script>
        let students = [];

        document.querySelectorAll("input[type='checkbox']").forEach((elm) => elm.addEventListener('change', function() {
            const id = this.getAttribute('id');
            if (this.checked && ! students.includes(id)) {
                students.push(id)
            } else {
                students = students.filter((i) => i !== id)
            }
        }));

        document.querySelector('form#assignment').addEventListener('submit', function(event) {
            event.preventDefault();
            document.getElementById('students_id').value = JSON.stringify(students);

            this.submit();
        })
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH /home/wolvecode/projects/e-siwes/resources/views/components/list-user.blade.php ENDPATH**/ ?>