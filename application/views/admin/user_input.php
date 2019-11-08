<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Content -->
    <h1 class="h3 mb-3 text-primary"><?= $judul ?></h1>
    <div class="card w-50 shadow">
        <div class="card-header">
            <a type="button" class="float-right btn btn btn-info" href="<?= base_url('admin/user_menu'); ?>">
                <i class="fas fa-arrow-left mr-2"></i>
                Edit User
            </a>
            <h4>Form Tambah Data User</h4>

        </div>
        <div class="card-body">
            <p class="card-text font-italic">Merupakan menu untuk memasukkan data user.</p>
            <!-- Edit User -->


            <hr class="divider">
            <form action="" method="post">
                <div class="form-group">
                    <label for="username"><b>Username</b></label>
                    <input type="text" class="form-control" id="username" placeholder="Masukkan Username.." name="username" value="<?= set_value('username'); ?>">
                    <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class=" form-group">
                    <label for="nama"><b>Nama</b></label>
                    <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama.." name="nama" value="<?= set_value('nama'); ?>">
                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class=" form-group">
                    <label for="password"><b>Password</b></label>
                    <input type="password" class="form-control" id="password1" name="password1" placeholder="Masukkan Password..">
                    <input type="password" class="form-control mt-1" id="password2" name="password2" placeholder="Ulangi Password..">
                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <label for="role_id"><b>Role ID</b></label>
                    <select class="form-control" id="role_id" name="role_id">
                        <option value="1">Admin</option>
                        <option value="2">User</option>
                    </select>
                    <?= form_error('role_id', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <button type="submit" class="btn btn-success float-right" name="tambah">Tambah Data User</button>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->