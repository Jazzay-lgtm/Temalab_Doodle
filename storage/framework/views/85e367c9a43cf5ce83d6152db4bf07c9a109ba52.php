<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-6">
            <?php if(session('success')): ?>
                <p class="alert alert-success"><?php echo e(session('success')); ?></p>
            <?php endif; ?>
            <?php if($errors->any()): ?>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <p class="alert alert-danger"><?php echo e($err); ?></p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
            <form action="<?php echo e(route('login.action')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label>Username <span class="text-danger">*</span></label>
                    <input class="form-control" type="username" name="username" value="<?php echo e(old('username')); ?>" />
                </div>
                <div class="mb-3">
                    <label>Password <span class="text-danger">*</span></label>
                    <input class="form-control" type="password" name="password" />
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary">Login</button>
                    <a class="btn btn-danger" href="<?php echo e(route('home')); ?>">Back</a>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\doodleLike\resources\views/login.blade.php ENDPATH**/ ?>