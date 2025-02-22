

<div
    style="background-color: #f7f7f7; padding: 20px; border-radius: 8px; width: 100%; max-width: 600px; margin: 0 auto;">
    <h1 style="color: #28a745; text-align: center;">Organization Added Successfully!</h1>

    <p style="font-size: 16px; line-height: 1.6;">
        Hi <?php echo e($data->name); ?>,<br><br>
        We're happy to inform you that the organization you added has been successfully approved!
    </p>

    <p style="font-size: 16px; line-height: 1.6;">
        You can now proceed to upload your acceptance letter to complete your application.
    </p>

    <div style="text-align: center; margin-top: 30px;">
        <?php $__env->startComponent('mail::button', ['url' => 'http://localhost:8000', 'color' => 'success']); ?>
            Upload Acceptance Letter
        <?php echo $__env->renderComponent(); ?>
    </div>

    <p style="font-size: 14px; color: #888; margin-top: 30px; text-align: center;">
        Thank you,<br>
        <?php echo e(config('app.name')); ?>

    </p>
</div>


<?php /**PATH /Users/techbigo1/Desktop/workspace/e-siwes/resources/views/emails/organizations/verify_organization.blade.php ENDPATH**/ ?>