<?php $__env->startSection('title', 'Anasayfa'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <form method="post" class="needs-validation my-2" novalidate>
            <div class="mb-3">
                <label for="username" class="form-label">Email</label> <br>
                <input type="text" value="<?=isset($_posts['username']) ? $_posts['username'] : ""?>" class="<?php if (isset($errors['username'])): ?>has-error<?php endif; ?>" id="username"
                       placeholder="Kullanıcı adı" name="username">
                <?php if (isset($errors['username'])): ?><div class="invalid-feedback"><?=$errors['username'][0]?></div><?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Şifre</label> <br>
                <input type="password" class="<?php if (isset($errors['password'])): ?>has-error<?php endif; ?>" id="password" placeholder="Parola"
                       name="password">
                <?php if (isset($errors['password'])): ?><div class="invalid-feedback"><?=$errors['password'][0]?></div><?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="password_again" class="form-label">Şifre tekrar</label> <br>
                <input type="password" class="<?php if (isset($errors['password_again'])): ?>has-error<?php endif; ?>" id="password_again"
                       placeholder="Parola (Tekrar)" name="password_again">
                <?php if (isset($errors['password_again'])): ?><div class="invalid-feedback"><?=$errors['password_again'][0]?></div><?php endif; ?>
            </div>
            <?php if(!$_POST): ?>
                <button type="submit" class="btn btn-primary">Submit</button>
            <?php else: ?>
                <button type="submit" class="btn btn-primary">Giriş Yap</button>
            <?php endif; ?>
        </form>
        <hr>
        <h3 class="text-start">Ürünler Tablosu</h3>
        <table class="table table-striped border">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">ürün Adı</th>
                <th scope="col">Departman Numarası</th>
                <th scope="col">Kategori ID</th>
                <th scope="col">Seri Numarası</th>
                <th scope="col">Açıklama</th>
                <th scope="col">Satın Alma Tarihi</th>
                <th scope="col">Satın Alma Maliyeti</th>
                <th scope="col">Elden Çıkarma Tarihi</th>
                <th scope="col">Oluturulma Tarihi</th>
                <th scope="col">Güncelleme Tarihi</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $demirbaslar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $demirbas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"><?php echo e($demirbas->id); ?></th>
                    <td><?php echo e($demirbas->ad); ?></td>
                    <td><?php echo e($demirbas->departman_id); ?></td>
                    <td><?php echo e($demirbas->kategori_id); ?></td>
                    <td><?php echo e($demirbas->seri_no); ?></td>
                    <td><?php echo e($demirbas->aciklama); ?></td>
                    <td><?php echo e($demirbas->sati_nalma_tarihi); ?></td>
                    <td><?php echo e($demirbas->satin_alma_maliyeti); ?></td>
                    <td><?php echo e($demirbas->elden_cikarma_tarihi ?? 'Çıkarılmamış'); ?></td>
                    <td><?php echo e($demirbas->olusturulma_tarihi); ?></td>
                    <td><?php echo e($demirbas->guncelleme_tarihi); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

        <hr>

        <h3 class="text-start">Kullanıcıları Tablosu</h3>
        <table class="table table-striped border">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Kullanıcı Adı</th>
                <th scope="col">Kullanıcı Email</th>
                <th scope="col">Kullanıcı Şifre</th>
                <th scope="col">Kullanıcı Oluşturulma Tarihi</th>
                <th scope="col">Kullanıcı Güncelleme Tarihi</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $kullanicilar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kullanici): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"><?php echo e($kullanici->id); ?></th>
                    <td><?php echo e($kullanici->ad); ?></td>
                    <td><?php echo e($kullanici->email); ?></td>
                    <td><?php echo e($kullanici->sifre); ?></td>
                    <td><?php echo e($kullanici->olusturulma_tarihi); ?></td>
                    <td><?php echo e($kullanici->guncelleme_tarihi); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

        <hr>

        <h3 class="text-start">Departmanları Tablosu</h3>

        <table class="table table-striped border">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Departman Adı</th>
                <th scope="col">Departman Oluşturulma Tarihi</th>
                <th scope="col">Departman Güncelleme Tarihi</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $departmanlar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $departman): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"><?php echo e($departman->id); ?></th>
                    <td><?php echo e($departman->ad); ?></td>
                    <td><?php echo e($departman->olusturulma_tarihi); ?></td>
                    <td><?php echo e($departman->guncelleme_tarihi); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/proje/resources/views/home.blade.php ENDPATH**/ ?>