  <!-- Footer -->

  <?php
  $depan = array('Halaman Awal', 'Tentang', 'Login');
  if (in_array($judul, $depan)) :
    ?>
    <footer class="py-2 bg-gray-900 fixed-bottom">
      <div class="container">
        <small>
          <p class="m-0 text-center text-white">
            Copyright &copy; DISKOMINSA Kab. Bireuen | Ihsan Alhafiz | Mahasiswa PKL PNL 2019
          </p>
        </small>
      </div>
    </footer>
  <?php endif ?>


  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?= base_url('assets/'); ?>vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

  </body>

  </html>