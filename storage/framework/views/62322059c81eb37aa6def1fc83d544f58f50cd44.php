<?php $__env->startSection('title', 'Organization list'); ?>

<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.list-user','data' => ['users' => $organizations,'mail' => true,'lecturers' => false,'contact' => true]]); ?>
<?php $component->withName('list-user'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['users' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($organizations),'mail' => true,'lecturers' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false),'contact' => true]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wolvecode/projects/e-siwes/resources/views/admin/org-list.blade.php ENDPATH**/ ?>