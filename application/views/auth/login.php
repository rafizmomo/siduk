<div class="container">

    <!-- Outer Row -->
    <div class="row pt-5 justify-content-center ">

        <div class="col-lg-4">

            <div class="card o-hidden border-0 shadow-lg my-5 wow animated fadeIn">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-4">
                                <div class="text-center">
                                    <img class="bg-white img-fluid mx-auto d-block rounded-circle mt-2 mb-5" src="assets/img/logo-kominfo.png" width="120" height="120" alt="logo">
                                    <h1 class="h4 text-gray-900 mb-4">Login <b>SIDUK</b></h1>
                                </div>

                                <?= $this->session->flashdata('message'); ?>

                                <form class="user" method="post" action="<?= base_url('auth'); ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Masukkan Username.." value="<?= set_value('username'); ?>">
                                        <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>

                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Masukkan Password..">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center text-primary">
                                    <!-- Kontak admin -->
                                    <a type="text" class="small" data-toggle="modal" data-target="#lupaPasswordModal">
                                        Lupa Password?
                                    </a>
                                </div>
                                <!-- Modal Kontak admin-->
                                <div class="modal fade" style="color:black;" id="lupaPasswordModal" tabindex="-1" role="dialog" aria-labelledby="lupaPasswordModalTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="lupaPasswordModalTitle">Kontak Admin</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="text-center">
                                                    <strong>Ihsan Alhafiz</strong>
                                                    <br>
                                                    <p class=" text-gray-900 ">Dusun Ujung Paya, Desa Paya Punteuet, Kecamatan Muara Dua, Kota Lhokseumawe, Kode Pos 24351.
                                                </div>
                                                <br>
                                                <address>
                                                    <img class="img-fluid" width="25" height="25" src="assets/img/phone-call.png"> +62 822-1465-7039 <br>
                                                    <img class="img-fluid" width="25" height="25" src="assets/img/envelope.png"> ihsanc4@gmail.com
                                                </address>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>