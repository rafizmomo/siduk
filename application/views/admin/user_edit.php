<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Content -->
    <h1 class="h3 mb-3 text-primary"><?= $judul ?></h1>
    <div class="card w-50 shadow">
        <div class="card-header">
            <a type="button" class="float-right btn btn btn-info" href="<?= base_url('admin/user_menu'); ?>">
                <i class="fas fa-user-edit mr-2"></i>
                Edit User
            </a>
            <h4>Form Edit Data User</h4>

        </div>
        <div class="card-body">
            <p class="card-text font-italic">Merupakan menu untuk mengubah data user.</p>
            <!-- Edit User -->


            <hr class="divider">
            <form action="" method="post">
                <div class="form-group">

                    <input type="hidden" class="form-control" id="username" name="username" value="<?= $getuser['username']; ?>">
                </div>
                <div class=" form-group">
                    <label for="nama"><b>Nama</b></label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $getuser['nama']; ?>">
                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class=" form-group">
                    <input type="hidden" class="form-control" id="password" name="password" value="<?= $getuser['password']; ?>">

                </div>

                <div class=" form-group">
                    <label for="role_id"><b>Role ID</b></label>
                    <select class="form-control" id="role_id" name="role_id">
                        <?php foreach ($id as $i) : ?>

                            <?php if ($i == $getuser['role_id']) : ?>
                                <option value="<?= $i; ?>" selected><?= $i; ?></option>
                            <?php else : ?>
                                <option value="<?= $i; ?>"><?= $i; ?></option>
                            <?php endif; ?>

                        <?php endforeach; ?>
                    </select>

                </div>
                <button type="submit" class="btn btn-success float-right" name="ubah">Ubah Data User</button>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->