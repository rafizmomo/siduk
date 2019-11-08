<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Content -->
    <h1 class="h3 mb-3 text-primary"><?= $judul ?></h1>
    <div class="card w-75 shadow">
        <div class="card-header">
            <a type="button" class="float-right btn btn btn-info" href="<?= base_url('admin/duk_menu'); ?>">
                <i class="fas fa-arrow-left mr-2"></i>
                Edit DUK
            </a>
            <h4>Form Tambah Data Urut Pegawai</h4>

        </div>
        <div class="card-body">
            <p class="card-text font-italic">Merupakan menu untuk memasukkan data urut pegawai.</p>
            <!-- Edit User -->


            <hr class="divider">
            <form action="" method="post">
                <div class="form-group">
                    <input type="hidden" class="form-control" id="no" name="no" value="<?= set_value('no'); ?>">
                    <?= form_error('no', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <label for="nip"><b>Nomor Induk Pegawai</b></label>
                    <input type="text" class="form-control" id="nip" name="nip" value="<?= set_value('nip'); ?>">
                </div>
                <hr class="divider">

                <label class="text-center text-info">
                    <h5>Data Diri</h5>
                </label>
                <div class="form-row">
                    <div class=" form-group col-md-3">
                        <label for="gelar_depan"><b>Gelar Depan</b></label>
                        <input type="text" class="form-control" id="gelar_depan" name="gelar_depan" value="<?= set_value('gelar_depan'); ?>">
                    </div>

                    <div class=" form-group col-md-6">
                        <label for="nama"><b>Nama</b></label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= set_value('nama'); ?>">
                    </div>

                    <div class=" form-group col-md-3">
                        <label for="gelar_belakang"><b>Gelar belakang</b></label>
                        <input type="text" class="form-control" id="gelar_belakang" name="gelar_belakang" value="<?= set_value('gelar_belakang'); ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="JK"><b>Jenis Kelamin</b></label>
                    <select class="form-control" id="JK" name="JK ">
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>

                <hr class="divider">

                <label class="text-center text-info">
                    <h5>Pangkat Terakhir</h5>
                </label>
                <div class="form-row">
                    <div class=" form-group col-md-6">
                        <label for="pangkat_gol_ruang"><b>Pangkat / Golongan Ruang</b></label>
                        <input type="text" class="form-control" id="pangkat_gol_ruang" name="pangkat_gol_ruang" value="<?= set_value('pangkat_gol_ruang'); ?>">
                    </div>

                    <div class=" form-group col-md-6">
                        <label for="tmt_pangkat"><b>TMT</b></label>
                        <input type="text" class="form-control" id="tmt_pangkat" name="tmt_pangkat" value="<?= set_value('tmt_pangkat'); ?>">
                    </div>
                </div>

                <hr class="divider">
                <label class="text-center text-info">
                    <h5>Jabatan</h5>
                </label>
                <div class="form-row">
                    <div class=" form-group col-md-4">
                        <label for="nama_jabatan"><b>Nama Jabatan</b></label>
                        <input type="text" class="form-control" id="nama_jabatan" name="nama_jabatan" value="<?= set_value('nama_jabatan'); ?>">
                    </div>

                    <div class=" form-group col-md-2">
                        <label for="eselon"><b>Eselon</b></label>
                        <input type="text" class="form-control" id="eselon" name="eselon" value="<?= set_value('eselon'); ?>">
                    </div>

                    <div class=" form-group col-md-4">
                        <label for="struktur"><b>Struktur Kerja</b></label>
                        <input type="text" class="form-control" id="struktur" name="struktur" value="<?= set_value('struktur'); ?>">
                    </div>

                    <div class=" form-group col-md-2">
                        <label for="tmt_jabatan"><b>TMT</b></label>
                        <input type="text" class="form-control" id="tmt_jabatan" name="tmt_jabatan" value="<?= set_value('tmt_jabatan'); ?>">
                    </div>
                </div>

                <hr class="divider">
                <label class="text-center text-info">
                    <h5>SK Terakhir</h5>
                </label>
                <div class="form-row">
                    <div class=" form-group col-md-3">
                        <label for="th_sk_terakhir"><b>Tahun Terakhir</b></label>
                        <input type="text" class="form-control" id="th_sk_terakhir" name="th_sk_terakhir" value="<?= set_value('th_sk_terakhir'); ?>">
                    </div>

                    <div class=" form-group col-md-3">
                        <label for="bln_sk_terakhir"><b>Bulan Terakhir</b></label>
                        <input type="text" class="form-control" id="bln_sk_terakhir" name="bln_sk_terakhir" value="<?= set_value('bln_sk_terakhir'); ?>">
                    </div>

                    <div class=" form-group col-md-3">
                        <label for="th_seluruh"><b>Tahun Seluruhnya</b></label>
                        <input type="text" class="form-control" id="th_seluruh" name="th_seluruh" value="<?= set_value('th_seluruh'); ?>">
                    </div>

                    <div class=" form-group col-md-3">
                        <label for="bln_seluruh"><b>Bulan Seluruhya</b></label>
                        <input type="text" class="form-control" id="th_seluruh" name="th_seluruh" value="<?= set_value('th_seluruh'); ?>">
                    </div>
                </div>

                <hr class="divider">
                <label class="text-center text-info">
                    <h5>Pendidikan Terakhir</h5>
                </label>
                <div class="form-row">
                    <div class=" form-group col-md-2">
                        <label for="jenjang"><b>Jenjang</b></label>
                        <input type="text" class="form-control" id="jenjang" name="jenjang" value="<?= set_value('jenjang'); ?>">
                    </div>

                    <div class=" form-group col-md-4">
                        <label for="jurusan"><b>Jurusan</b></label>
                        <input type="text" class="form-control" id="jurusan" name="jurusan" value="<?= set_value('jurusan'); ?>">
                    </div>

                    <div class=" form-group col-md-4">
                        <label for="universitas"><b>Universitas</b></label>
                        <input type="text" class="form-control" id="universitas" name="universitas" value="<?= set_value('universitas'); ?>">
                    </div>

                    <div class=" form-group col-md-2">
                        <label for="th_lulus"><b>Tahun Lulus</b></label>
                        <input type="text" class="form-control" id="th_lulus" name="th_lulus" value="<?= set_value('th_lulus'); ?>">
                    </div>
                </div>

                <hr class="divider">
                <label class="text-center text-info">
                    <h5>Mutasi</h5>
                </label>
                <div class="form-row">
                    <div class=" form-group col-md-4">
                        <label for="tmt_mutasi"><b>TMT</b></label>
                        <input type="text" class="form-control" id="tmt_mutasi" name="tmt_mutasi" value="<?= set_value('tmt_mutasi'); ?>">
                    </div>

                    <div class=" form-group col-md-8">
                        <label for="instansi_lama"><b>Instansi Lama</b></label>
                        <input type="text" class="form-control" id="instansi_lama" name="instansi_lama" value="<?= set_value('instansi_lama'); ?>">
                    </div>
                </div>

                <hr class="divider">
                <label class="text-center text-info">
                    <h5>Kenaikan</h5>
                </label>
                <div class="form-row">
                    <div class=" form-group col-md-4">
                        <label for="kgb"><b>KGB</b></label>
                        <input type="text" class="form-control" id="kgb" name="kgb" value="<?= set_value('kgb'); ?>">
                    </div>

                    <div class=" form-group col-md-8">
                        <label for="pangkat_kenaikan"><b>Kenaikan Pangkat</b></label>
                        <input type="text" class="form-control" id="pangkat_kenaikan" name="pangkat_kenaikan" value="<?= set_value('pangkat_kenaikan'); ?>">
                    </div>
                </div>

                <hr class="divider">
                <div class=" form-group">
                    <label for="ket"><b>Keterangan</b></label>
                    <input type="text" class="form-control" id="ket" name="ket" value="<?= set_value('ket'); ?>">
                </div>

                <button type="submit" class="btn btn-success float-right" name="tambah">Tambah Data Pegawai</button>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->