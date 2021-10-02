<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4"/>

    <!-- Title -->
    <title> Login Page </title>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo e(asset('assets/img/kwasu.png')); ?>" type="image/x-icon"/>

    <!-- Icons css -->
    <link href="<?php echo e(asset('assets/css/icons.css')); ?>" rel="stylesheet">

    <!--  Right-sidemenu css -->
    <link href="<?php echo e(asset('assets/plugins/sidebar/sidebar.css')); ?>" rel="stylesheet">

    <!--  Custom Scroll bar-->
    <link href="<?php echo e(asset('/assets/plugins/mscrollbar/jquery.mCustomScrollbar.css')); ?>" rel="stylesheet"/>

    <!--  Left-Sidebar css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/sidemenu1.css')); ?>">

    <!--- Style css --->
    <link href="<?php echo e(asset('assets/css/style.css')); ?>" rel="stylesheet">

    <!--- Dark-mode css --->
    <link href="<?php echo e(asset('assets/css/style-dark.css')); ?>" rel="stylesheet">

    <!---Skinmodes css-->
    <link href="<?php echo e(asset('assets/css/skin-modes.css')); ?>" rel="stylesheet" />

    <!--- Animations css-->
    <link href="<?php echo e(asset('assets/css/animate.css')); ?>" rel="stylesheet">


</head>
<body class="main-body bg-light">

<!-- Loader -->
<div id="global-loader">
    <img src="<?php echo e(asset('/assets/img/loader.svg')); ?>" class="loader-img" alt="Loader">
</div>
<!-- /Loader -->

<!-- Page -->
<div class="page">

    <div class="container-fluid">
        <div class="row no-gutter">
            <!-- The image half -->
            <div class="col-md-6 col-lg-6 col-xl-7 d-none d-md-flex bg-primary-transparent">
                <div class="row wd-100p mx-auto text-center">
                    <div class="col-md-12 col-lg-12 col-xl-12 my-auto mx-auto wd-100p">
                        <img src="<?php echo e(asset('assets/img/main1.jpeg')); ?>" class="my-auto ht-xl-80p wd-md-100p wd-xl-80p mx-auto" alt="logo">
                    </div>
                </div>
            </div>
            <!-- The content half -->
            <div class="col-md-6 col-lg-6 col-xl-5 bg-white">
                <div class="login d-flex align-items-center py-2">
                    <!-- Demo content-->
                    <div class="container p-0">
                        <div class="row">
                            <div class="col-md-10 col-lg-10 col-xl-9 mx-auto">
                                <div class="card-sigin">

                                    <div class="mb-5 d-flex"> <a href="index.html"><img src="<?php echo e(asset('assets/img/kwasu.png')); ?>" class="sign-favicon ht-40" alt="logo"></a></div>
                                    <div class="card-sigin">
                                        <div class="main-signup-header">
                                            <h2>Welcome back!</h2>
                                            <h5 class="font-weight-semibold mb-4">Please sign in to continue.</h5>
                                            <form action="<?php echo e(route('login')); ?>" method="post">
                                                <?php echo csrf_field(); ?>
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input class="form-control" name="email" placeholder="Enter your email" type="text"  value="<?php echo e(old('email')); ?>">
                                                    <?php $__errorArgs = ['email'];
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
                                                </div>
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input class="form-control" name="password" placeholder="Enter your password" role="alert" type="password" value="<?php echo e(old('password')); ?>">
                                                    <?php $__errorArgs = ['password'];
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
                                                </div>
                                                <button type="submit" class="btn btn-main-primary btn-block">Sign In</button>
                                            </form>
                                            <div class="main-signin-footer mt-5">
                                                <p><a href="<?php echo e(route('password.request')); ?>">Forgot password?</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End -->
                </div>
            </div><!-- End -->
        </div>
    </div>

</div>
<!-- End Page -->

<!-- JQuery min js -->
<script src="<?php echo e(asset('assets/plugins/jquery/jquery.min.js')); ?>"></script>
<!-- custom js -->
<script src="<?php echo e(asset('assets/js/custom.js')); ?>"></script>

</body>
</html>
<?php /**PATH /home/wolvecode/projects/e-siwes/resources/views/auth/login.blade.php ENDPATH**/ ?>