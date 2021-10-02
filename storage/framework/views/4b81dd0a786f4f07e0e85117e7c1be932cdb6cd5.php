<?php $__env->startSection('title', 'Add student'); ?>

<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['name' => 'Student','na' => true,'type' => 'matric_no','role' => false,'action' => 'addStudent','sessions' => $sessions]]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Student'),'na' => true,'type' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('matric_no'),'role' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false),'action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('addStudent'),'sessions' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sessions)]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wolvecode/projects/e-siwes/resources/views/addStudent.blade.php ENDPATH**/ ?>