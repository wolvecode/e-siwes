<?php $attributes = $attributes->exceptProps(['user' => $user]); ?>
<?php foreach (array_filter((['user' => $user]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="nav nav-item  navbar-nav-right ml-auto">
    <div class="nav-link" id="bs-example-navbar-collapse-1">
        <form class="navbar-form" role="search">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-btn">
                    <button type="reset" class="btn btn-default">
                        <i class="fas fa-times"></i>
                    </button>
                    <button type="submit" class="btn btn-default nav-link resp-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                    </button>
                </span>
            </div>
        </form>
    </div>
    <?php if(auth()->guard('student')->check()): ?>
        <div class="dropdown nav-item main-header-message ">
            <a class="new nav-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg><span class=" pulse-danger"></span></a>
            <div class="dropdown-menu">
                <div class="menu-header-content bg-primary text-left">
                    <div class="d-flex">
                        <h6 class="dropdown-title mb-1 tx-15 text-white font-weight-semibold">Messages</h6>
                    </div>
                    <p class="dropdown-title-text subtext mb-0 text-white op-6 pb-0 tx-12 ">You have <?php echo e($messages->count()); ?> messages</p>
                </div>
                <div class="main-message-list chat-scroll">
                    <?php $__empty_1 = true; $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <a href="#" class="p-3 d-flex border-bottom">
                            <div class="  drop-img  cover-image  "
                                 data-image-src="../../assets/img/faces/3.jpg">
                                <span class="avatar-status bg-teal"></span>
                            </div>
                            <div class="wd-90p">



                                <div class="mb-0 desc"> <?php echo $message->message; ?></div>
                                <p class="time mb-0 text-left float-left ml-2 mt-2">Mar 15 3:55 PM</p>
                            </div>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <p>You have no message</p>
                    <?php endif; ?>
                </div>
                <div class="text-center dropdown-footer">
                    <a href="text-center">VIEW ALL</a>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="nav-item full-screen fullscreen-button">
        <a class="new nav-link full-screen-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg></a>
    </div>
    <div class="dropdown main-profile-menu nav nav-item nav-link">
        <a class="profile-user d-flex" href=""><img alt="" src="<?php echo e(asset('assets/img/faces/6.jpg')); ?>"></a>
        <div class="dropdown-menu">
            <div class="main-header-profile bg-primary p-3">
                <div class="d-flex wd-100p">
                    <div class="main-img-user"><img alt="" src="<?php echo e(asset('assets/img/faces/6.jpg')); ?>" class=""></div>
                    <div class="ml-3 my-auto">
                        <h6> <?php echo e($user->user()->name); ?> </h6>
                        <span><?php echo e($user->user()->role == '3'  ? 'Supervisor' : 'Admin'); ?> Member</span>
                    </div>
                </div>
            </div>
            <a class="dropdown-item" href="<?php echo e(route('profile.show')); ?>"><i class="bx bx-user-circle"></i>Profile</a>
            <a class="dropdown-item" href=""><i class="bx bx-slider-alt"></i> Account Settings</a>
            <form class="dropdown-item" action="<?php echo e(route('logout')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <button type="submit" class="btn btn-outline-dark btn-block"> <i class="bx bx-log-out"></i> Sign Out</button>
            </form>
        </div>
    </div>
</div>
<?php /**PATH /home/wolvecode/projects/e-siwes/resources/views/components/header.blade.php ENDPATH**/ ?>