<?php $__env->startComponent('mail::message'); ?>

Hi <?php echo e($data->name); ?>,<br>
This is a confirmation message
that your acceptance have been
reviewed and accepted.

Wish you good luck in your
at your industrial training
firm/company.

You can click on the below button to login.

<?php $__env->startComponent('mail::button', ['url' => 'http://localhost:8000']); ?>
login
<?php if (isset($__componentOriginalb8f5c8a6ad1b73985c32a4b97acff83989288b9e)): ?>
<?php $component = $__componentOriginalb8f5c8a6ad1b73985c32a4b97acff83989288b9e; ?>
<?php unset($__componentOriginalb8f5c8a6ad1b73985c32a4b97acff83989288b9e); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

Thanks,<br>
<?php echo e(config('app.name')); ?>

<?php if (isset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d)): ?>
<?php $component = $__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d; ?>
<?php unset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php /**PATH /home/wolvecode/projects/e-siwes/resources/views/emails/acceptances/verify_acceptance.blade.php ENDPATH**/ ?>