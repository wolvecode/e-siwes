<?php $__env->startSection('title', 'Log into your account'); ?>

<?php $__env->startSection('content'); ?>
   <?php if(auth()->guard('admin')->check()): ?>
       <div class="row mg-t-60">
           <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
               <div class="d-flex flex-row justify-content-center">
                   <div class="card  box-shadow-0">
                       <div class="card-header">
                           <h4 class="card-title mb-1">Add Student</h4>
                           <p class="mb-2">Generate login for student using their matriculation number</p>
                       </div>
                       <div class="card-body pt-0">
                           <form class="form-horizontal" >
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
                                   <input type="email" name="matric_no" class="form-control" id="inputEmail3" placeholder="Matric_no" value="<?php echo e(old('matric_no')); ?>">
                               </div>
                               <?php $__errorArgs = ['matric_no'];
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wolvecode/projects/e-siwes/resources/views/admin/addUser.blade.php ENDPATH**/ ?>