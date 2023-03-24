<?php $__env->startSection('title', 'Anasayfa'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <form method="post" class="needs-validation" novalidate>
            <div class="mb-3">
                <label for="username" class="form-label">Email address</label>
                <input type="text" value="<?=isset($_posts['username']) ? $_posts['username'] : ""?>" class="<?php if (isset($errors['username'])): ?>has-error<?php endif; ?> form-control" id="username" placeholder="Kullanıcı adı" name="username">
                <?php if (isset($errors['username'])): ?><div class="invalid-feedback"><?=$errors['username'][0]?></div><?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="<?php if (isset($errors['password'])): ?>has-error<?php endif; ?> form-control" id="password" placeholder="Parola" name="password">
                <?php if (isset($errors['password'])): ?><div class="invalid-feedback"><?=$errors['password'][0]?></div><?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="password_again" class="form-label">Password</label>
                <input type="password" class="<?php if (isset($errors['password_again'])): ?>has-error<?php endif; ?> form-control" id="password_again" placeholder="Parola (Tekrar)" name="password_again">
                <?php if (isset($errors['password_again'])): ?><div class="invalid-feedback"><?=$errors['password_again'][0]?></div><?php endif; ?>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/proje/public/views/home.blade.php ENDPATH**/ ?>