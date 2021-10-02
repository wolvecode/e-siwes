<?php $__env->startSection('title', 'Log into your account'); ?>

<?php $__env->startSection('content'); ?>
    <?php if(auth()->guard('admin')->check()): ?>
        <div class="row mg-t-60">
            <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
                <div class="d-flex flex-row">
                    <div class="card  box-shadow-0">
                        <?php if(session('status')): ?>
                            <div class="alert alert-success mg-b-0" role="alert">
                                <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <strong> Success: </strong> <?php echo e(session('status')); ?>.
                            </div>
                        <?php endif; ?>
                        <div class="card-header">
                            <h4 class="card-title mb-1">Add Lecturer</h4>
                            <p class="mb-2">Generate login for Lecturer (email and password for login)</p>
                        </div>
                        <div class="card-body pt-0">
                            <form action="<?php echo e(route('addSupervisor')); ?>" method="post" class="form-horizontal" >
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" id="inputName" placeholder="Name" value="<?php echo e(old('name')); ?>">
                                </div>
                                <?php $__errorArgs = ['name'];
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
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="email" value="<?php echo e(old('email')); ?>">
                                </div>
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
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                                </div>
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
                                <div class="form-group">
                                    <input type="password" name="password_confirmation" class="form-control" id="inputPassword3" placeholder="Confirm Password">
                                </div>
                                <?php $__errorArgs = ['password_confirmation'];
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
                                <div class="form-group mb-0 mt-3 justify-content-end">
                                    <div>
                                        <button type="submit" class="btn btn-primary">Sign in</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wolvecode/projects/e-siwes/resources/views/admin/addSupervisor.blade.php ENDPATH**/ ?>