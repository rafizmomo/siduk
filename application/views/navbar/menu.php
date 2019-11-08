<li class="nav-item <?php if ($judul === 'Halaman Awal') : ?>font-weight-bold active <?php endif; ?>">
    <a class="nav-link" href="<?= base_url(); ?>">Home
        <?php if ($judul === 'Halaman Awal') : ?><span class="sr-only">(current)</span> <?php endif; ?>
    </a>
</li>

<li class="nav-item <?php if ($judul === 'Tentang') : ?>font-weight-bold active <?php endif; ?>">
    <a class="nav-link" href="<?= base_url(); ?>tentang">Tentang</a>
    <?php if ($judul === 'Tentang') : ?><span class="sr-only">(current)</span> <?php endif; ?>
</li>

<li class="nav-item <?php if ($judul === 'Login') : ?>font-weight-bold active <?php endif; ?>">
    <a class="nav-link" href="<?= base_url(); ?>auth">Login</a>
    <?php if ($judul === 'Login') : ?><span class="sr-only">(current)</span> <?php endif; ?>
</li>