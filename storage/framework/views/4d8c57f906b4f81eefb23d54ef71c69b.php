<?php $__env->startSection('main'); ?>
<div class="login" style="align-items:center; margin-top:100px">
    <h1 class="text-center mt-10 mb-5 py-5">Register</h1>
<div class="mt-5 mx-auto" style="width: 400px">
    <div class="card">
        <div class="card-body">
            <form action="<?php echo e(route('register')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label for="" class="form-label">Name</label>
                    <input name="name" type="text" class="form-control" value = "<?php echo e(old('name')); ?>">
                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-danger"> 
                        <?php echo e($message); ?>

                    </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">E-mail</label>
                    <input name="email" type="email" class="form-control" value = "<?php echo e(old('email')); ?>">
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-danger"> 
                        <?php echo e($message); ?>

                    </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" value = "<?php echo e(old('password')); ?>">
                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-danger"> 
                        <?php echo e($message); ?>

                    </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Confirm Password</label>
                    <input name="password_confirmation" type="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/project-laravel/resources/views/auth/register.blade.php ENDPATH**/ ?>