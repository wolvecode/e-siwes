<?php $attributes = $attributes->exceptProps(['type' => $type]); ?>
<?php foreach (array_filter((['type' => $type]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="form-group">
    <input type="text" name="<?php echo e($type); ?>" class="form-control" id="inputEmail3" placeholder="<?php echo e($type); ?>" value="<?php echo e(old($type)); ?>">
</div>
<?php $__errorArgs = [$type];
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
<?php /**PATH /home/wolvecode/projects/e-siwes/resources/views/components/matric.blade.php ENDPATH**/ ?>