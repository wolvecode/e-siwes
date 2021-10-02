<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php echo $__env->yieldPushContent('meta'); ?>
    <title><?php echo e(config('app.name')); ?> &mdash; <?php echo $__env->yieldContent('title'); ?></title>
    <!-- Favicon -->
    <link href="<?php echo e(asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet" />

    <link rel="icon" href="<?php echo e(asset('assets/img/kwasu.png')); ?>" type="image/x-icon"/>
    <link href="<?php echo e(asset('assets/css/icons.css')); ?>" rel="stylesheet">


    <link href="<?php echo e(asset('assets/plugins/mscrollbar/jquery.mCustomScrollbar.css')); ?>" rel="stylesheet"/>

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/sidemenu1.css')); ?>">
    <link href="<?php echo e(asset('assets/plugins/notify/css/notifIt.css')); ?>" rel="stylesheet"/>
    <link href="<?php echo e(asset('assets/css/style.css')); ?>" rel="stylesheet">
    <!--- Dark-mode css --->

    <!---Skinmodes css-->
    <link href="<?php echo e(asset('assets/css/skin-modes.css')); ?>" rel="stylesheet" />

    <?php echo $__env->yieldPushContent('css'); ?>
</head>
<body class="main-body app sidebar-mini">
<!-- Loader -->
<div id="global-loader">
    <img src="<?php echo e(asset('assets/img/loader.svg')); ?>" class="loader-img" alt="Loader">
</div>
<!-- /Loader -->
<div class="page">
    <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="main-content app-content">
        <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="container-fluid">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>
    <!-- footer -->
    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<!-- script -->
<a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

<script src="<?php echo e(asset('assets/plugins/jquery/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/plugins/ionicons/ionicons.js')); ?>"></script>
<script src="<?php echo e(asset('assets/plugins/moment/moment.js')); ?>"></script>
<script src="<?php echo e(asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/plugins/perfect-scrollbar/p-scroll.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/sticky.js')); ?>"></script>
<script src="<?php echo e(asset('assets/plugins/rating/jquery.rating-stars.js')); ?>"></script>
<script src="<?php echo e(asset('assets/plugins/rating/jquery.barrating.js')); ?>"></script>
<!-- Custom Scroll bar Js-->
<script src="<?php echo e(asset('assets/plugins/mscrollbar/jquery.mCustomScrollbar.concat.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/plugins/side-menu/sidemenu.js')); ?>"></script>
<script src="<?php echo e(asset('assets/plugins/sidebar/sidebar.js')); ?>"></script>
<script src="<?php echo e(asset('assets/plugins/sidebar/sidebar-custom.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/eva-icons.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/plugins/notify/js/notifIt.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/custom.js')); ?>"></script>
<!-- Internal Modal js-->
<script src="<?php echo e(asset('assets/js/modal.js')); ?>"></script>
<?php if(session()->has('status')): ?>
    <?php ($status = session()->get('status')); ?>
    <script>
        notif({
            msg: "<b><?php echo e($status['title']); ?>:</b> <?php echo e($status['message']); ?>",
            type: "<?php echo e($status['type']); ?>"
        });
    </script>
<?php endif; ?>
<?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>
<?php /**PATH /home/wolvecode/projects/e-siwes/resources/views/layouts/master.blade.php ENDPATH**/ ?>