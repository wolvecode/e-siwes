<?php $attributes = $attributes->exceptProps(['user' => $user]); ?>
<?php foreach (array_filter((['user' => $user]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="app-sidebar__user clearfix">
    <div class="dropdown user-pro-body">
        <div class="">
            <img alt="user-img" class="avatar avatar-xl brround" src="../../assets/img/faces/6.jpg"><span class="avatar-status profile-status bg-green"></span>
        </div>
        <div class="user-info">
            <h4 class="font-weight-semibold mt-3 mb-0"> <?php echo e($user->user()->name); ?> </h4>
            <span class="mb-0 text-muted"> <?php echo e(( $user->user()->role == 1 ||
                $user->user()->role == 2 ? 'Admin' :
                $user->user()->role == 3) ? 'Supervisor' :
                'Student'); ?> Member
            </span>
        </div>
    </div>
</div>
<?php /**PATH /home/wolvecode/projects/e-siwes/resources/views/components/username.blade.php ENDPATH**/ ?>