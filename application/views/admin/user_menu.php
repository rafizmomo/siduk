<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Content -->
    <!-- Judul Page -->
    <h1 class="h3 mb-3 text-primary"><?= $judul ?></h1>
    <div class="card shadow">
        <div class="card-header">
            <?php /*Opsional input via Modal
            <a type="button" class="float-right text-white btn btn-info" data-toggle="modal" data-target="#UserInputModal">
                <i class="fas fa-plus mr-2"></i>
                Input User
            </a>
            */ ?>
            <a type="button" class="float-right btn btn-info" href="<?= base_url('admin/user_input'); ?>">
                <i class="fas fa-plus mr-2"></i>
                Input User
            </a>
            <h4>Menu User</h4>

        </div>
        <div class="card-body">
            <p class="card-text">Merupakan menu untuk mengatur data user.</p>

            <?php /*Opsional Modal Alert
            
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?> 
            */ ?>



            <?= $this->session->flashdata('message'); ?>

            <div class="float-right ml-md-3 my-2 md-1 mw-100">
                <form class="d-none d-sm-inline-block form-inline mr-auto " method="post">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-1 small" placeholder="Cari data" name="keyword">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="input">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
                <h5 class=" mt-2 text-info">Jumlah data <?= $total_rows; ?></h5>
            </div>

            <table class="table table-hover">

                <thead class="bg-primary text-white">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Username</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Role ID</th>
                        <th scope="col" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($user_show)) : ?>
                        <tr>
                            <td colspan="5">
                                <div>
                                    <?php if (empty($user_show)) : ?>
                                        <div class="alert alert-danger text-center" role="alert">Data tidak ditemukan</div>
                                    <?php endif; ?>
                                </div>
                            </td>
                        </tr>
                    <?php endif; ?>
                    <?php foreach ($user_show as $usw) : ?>
                        <tr>
                            <td><?= ++$start; ?></td>
                            <td><?= $usw['username']; ?></td>
                            <td><?= $usw['nama']; ?></td>
                            <td><?= $usw['role_id']; ?></td>
                            <td>
                                <a href="<?= base_url('admin/user_edit/') ?><?= $usw['username']; ?>" class="mx-auto btn btn-warning mr-5">
                                    <i class=" fas fa-edit"></i>
                                </a>

                                <a href="<?= base_url('admin/user_delete/') ?><?= $usw['username']; ?>" onclick="return confirm ('Apakah anda ingin menghapus data tersebut?');" class="mx-auto float-right btn btn-danger">
                                    <i class=" fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>

            </table>

            <?= $this->pagination->create_links(); ?>
            <small class="card-text text-danger text-center">Password tidak dapat ditampilkan. Jika password lupa/salah/tidak sesuai dimohon untuk dibuat data user baru</small>
        </div>

    </div>

    <?php /*
    <!-- Modal Input User-->
    <div class="modal fade" style="color:black;" id="UserInputModal" tabindex="-1" role="dialog" aria-labelledby="UserInputModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="UserInputModalTitle">Form Tambah Data User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('admin/user_edit') ?>" method="post">
                        <div class="form-group">
                            <label for="username"><b>Username</b></label>
                            <input type="text" class="form-control" id="nama" placeholder="Masukkan Username.." name="username" value="<?= set_value('username'); ?>">

                        </div>
                        <div class=" form-group">
                            <label for="nama"><b>Nama</b></label>
                            <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama.." name="nama" value="<?= set_value('nama'); ?>">

                        </div>
                        <div class=" form-group">
                            <label for="password"><b>Password</b></label>
                            <input type="password" class="form-control" id="password1" name="password1" placeholder="Masukkan Password..">
                            <input type="password" class="form-control mt-1" id="password2" name="password2" placeholder="Ulangi Password..">

                        </div>

                        <div class="form-group">
                            <label for="role_id"><b>Role ID</b></label>
                            <select class="form-control" id="role_id" name="role_id">
                                <option value="1">Admin</option>
                                <option value="2">User</option>
                            </select>

                        </div>
                        <button type="submit" class="btn btn-success float-right" name="tambah">Tambah Data User</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    */ ?>

</div>
<!-- /.container-fluid -->