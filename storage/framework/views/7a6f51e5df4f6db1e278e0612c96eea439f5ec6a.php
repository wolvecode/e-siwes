<?php $attributes = $attributes->exceptProps(['user' => $user]); ?>
<?php foreach (array_filter((['user' => $user]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="col-lg-4">
    <div class="card mg-b-20">
        <div class="card-body">
            <div class="pl-0">
                <div class="main-profile-overview">
                    <div class="main-img-user profile-user">
                        <img alt="" src="../../assets/img/faces/6.jpg"><a class="fas fa-camera profile-edit" href="JavaScript:void(0);"></a>
                    </div>
                    <div class="d-flex justify-content-between mg-b-20">
                        <div>
                            <h5 class="main-profile-name"><?php echo e($user->user()->name); ?></h5>

                        </div>
                    </div>
                    <h6>Bio</h6>
                    <div class="main-profile-bio">
                        <?php echo e($user->user()->bio); ?>


                    </div><!-- main-profile-bio -->
                    <hr class="mg-y-30">
                    <label class="main-content-label tx-13 mg-b-20">Social</label>
                    <div class="main-profile-social-list">
                        <div class="media">
                            <div class="media-icon bg-primary-transparent text-primary">
                                <i class="icon ion-logo-github"></i>
                            </div>
                            <div class="media-body">
                                <span>Github</span> <a href=""><?php echo e($user->user()->git); ?></a>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-icon bg-info-transparent text-info">
                                <i class="icon ion-logo-linkedin"></i>
                            </div>
                            <div class="media-body">
                                <span>Linkedin</span> <a href=""> <?php echo e($user->user()->linkedin); ?></a>
                            </div>
                        </div>
                    </div>
                    <hr class="mg-y-30">
                </div><!-- main-profile-overview -->
            </div>
        </div>
    </div>
</div>
<!-- Col -->
<div class="col-lg-8">
    <div class="card">
        <div class="card-body">
            <div class="mb-4 main-content-label">Personal Information</div>
            <form class="form-horizontal" action="<?php echo e(route('updateProfile', $user->user()->id)); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="mb-4 main-content-label">Name</div>
                <div class="form-group ">
                    <div class="row">
                        <div class="col-md-3">
                            <label class="form-label">Full Name</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="name" class="form-control"  placeholder="First Name" value="<?php echo e($user->user()->name); ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group ">
                    <div class="row">
                        <div class="col-md-3">
                            <label class="form-label">Email</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="email" class="form-control"  placeholder="Last Name" value="<?php echo e(($user->user()->email)); ?>" disabled>
                        </div>
                    </div>
                </div>
                <div class="form-group ">
                    <div class="row">
                        <div class="col-md-3">
                            <label class="form-label">Password</label>
                        </div>
                        <div class="col-md-9">
                            <input type="password" name="password" class="form-control"  placeholder="Enter password" value="">
                        </div>
                    </div>
                </div>
                <div class="form-group ">
                    <div class="row">
                        <div class="col-md-3">
                            <label class="form-label">Confirm Password</label>
                        </div>
                        <div class="col-md-9">
                            <input type="password" name="password_confirmation" class="form-control"  placeholder="Confirm Password" value="">
                        </div>
                    </div>
                </div>
                <div class="mb-4 main-content-label">Social Info</div>
                <div class="form-group ">
                    <div class="row">
                        <div class="col-md-3">
                            <label class="form-label">Linked in</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="linkedin_url" class="form-control"  placeholder="linkedin" value="<?php echo e($user->user()->linkedin); ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group ">
                    <div class="row">
                        <div class="col-md-3">
                            <label class="form-label">Github</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="git_url" class="form-control" placeholder="github" value="<?php echo e($user->user()->git); ?>">
                        </div>
                    </div>
                </div>
                <div class="mb-4 main-content-label">About Yourself</div>
                <div class="form-group ">
                    <div class="row">
                        <div class="col-md-3">
                            <label class="form-label">Biographical Info</label>
                        </div>
                        <div class="col-md-9">
                            <textarea class="form-control" name="bio" rows="4" placeholder=""><?php echo e($user->user()->bio); ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                     <button type="submit" class="btn btn-primary waves-effect waves-light">Update Profile</button>
                </div>
            </form>
        </div>
        
    </div>
</div>
<!-- /Col -->
<?php /**PATH /home/wolvecode/projects/e-siwes/resources/views/components/profile.blade.php ENDPATH**/ ?>