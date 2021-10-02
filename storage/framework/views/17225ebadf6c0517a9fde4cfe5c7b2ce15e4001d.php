
<div class="form-group">
    <select name="role" class="form-control select2-no-search">
        <option label="select role">
        </option>
        <option value="2">
            Admin
        </option>
        <option value="3">
            Lecturer
        </option>
    </select>
</div>
<?php $__errorArgs = ['role'];
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
<?php /**PATH /home/wolvecode/projects/e-siwes/resources/views/components/role.blade.php ENDPATH**/ ?>