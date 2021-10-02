<?php $attributes = $attributes->exceptProps(['lecturers' => $lecturers]); ?>
<?php foreach (array_filter((['lecturers' => $lecturers]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<!-- Modal effects -->
<div class="modal" id="modaldemo8">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Choose Lecturer</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <h6>Select a lecturer to assign to</h6>
                <table class="table key-buttons text-md-nowrap">
                    <thead>
                    <tr>
                        <th class="border-bottom-0"><span>Mark</span></th>
                        <th class="border-bottom-0"><span>Name</span></th>
                        <th class="border-bottom-0"><span>Lecturer</span></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $lecturers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lecturer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr id="tr_<?php echo e($lecturer->id); ?>">
                            <td>
                                <div class="checkbox">
                                    <div class="custom-checkbox custom-control">
                                        <input type="checkbox" value="<?php echo e($lecturer->id); ?>" name="lecturer"  class="custom-control-input" id="<?php echo e($lecturer->id); ?>">
                                        <label for="<?php echo e($lecturer->id); ?>" class="custom-control-label mt-1"></label>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <?php echo e($lecturer->name); ?>

                            </td>
                            <td><?php echo e($lecturer->email); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <p>No Data Available</p>
                    <?php endif; ?>
                    </tbody>
                    <?php echo e($lecturers->links()); ?>

                </table>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" type="submit">Save changes</button>
                <button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/wolvecode/projects/e-siwes/resources/views/components/modal-table.blade.php ENDPATH**/ ?>