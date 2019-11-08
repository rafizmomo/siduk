<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Content -->
  <!-- Judul Page -->
  <h1 class="h3 mb-3 text-primary"><?= $judul ?></h1>

  <div class="card mb-3" style="max-width: 720px;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="<?= base_url('assets/img/profile/'); ?>default.png" class="card-img">
      </div>
      <div class="col-md-8">
        <div class="card-body text-dark">
          <h5 class="card-title text-primary"><b><?= $user['nama'] ?></b></h5>
          <table class="table table-borderless table-sm">
            <tr>
              <td>
                <p class="card-text">Username</p>
              </td>
              <td>
                <p class="card-text"><?= $user['username']; ?></p>
              </td>
            </tr>
            <tr>
              <td>
                <p class="card-text">Role</p>
              </td>
              <td>
                <?php if ($user['role_id'] == 1) : ?>
                  <p class="card-text">Admin</p>
                <?php else : ?>
                  <!--Dapat Ditambah lagi dengan sintaks elseif -->
                  <p class="card-text">User</p>
                <?php endif; ?>
              </td>
          </table>


        </div>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->