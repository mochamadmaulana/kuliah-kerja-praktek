<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Arsip Surat | <?= $judul ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('public/lte/') ?>plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url('public/lte/') ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('public/lte/') ?>dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>Arsip Surat</a>
  </div>

      <div class="card">
        <div class="card-body register-card-body">
          <p class="login-box-msg">Registrasi akun baru</p>

          <form action="<?= base_url('registrasi') ?>" method="post" autocomplete="on">
            <?= form_error('nama_pengguna', '<small class="text-danger">', '</small>'); ?>
            <div class="input-group-append mb-3">
              <input type="text" name="nama_pengguna" class="form-control <?= !empty(form_error('nama_pengguna')) ? 'is-invalid' : ''; ?>" placeholder="Nama Lengkap" value="<?= set_value('nama_pengguna'); ?>" autofocus>
            </div>

            <?= form_error('nip_pengguna', '<small class="text-danger">', '</small>'); ?>
            <div class="input-group-append mb-3">
              <input type="text" name="nip_pengguna" class="form-control <?= !empty(form_error('nip_pengguna')) ? 'is-invalid' : ''; ?>" placeholder="No.Induk Pegawai (NIP)" value="<?= set_value('nip_pengguna'); ?>">
            </div>

            <?= form_error('username_pengguna', '<small class="text-danger">', '</small>'); ?>
            <div class="input-group-append mb-3">
              <input type="text" name="username_pengguna" class="form-control <?= !empty(form_error('username_pengguna')) ? 'is-invalid' : ''; ?>" placeholder="Username" value="<?= set_value('username_pengguna'); ?>">
            </div>

            <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
            <div class="input-group-append mb-3">
              <input type="password" name="password" class="form-control <?= !empty(form_error('password')) ? 'is-invalid' : ''; ?>" placeholder="Password">
            </div>

            <div class="input-group-append mb-3">
              <input type="password" name="password_konfirm" class="form-control <?= !empty(form_error('password_konfirm')) ? 'is-invalid' : ''; ?>" placeholder="Konfirmasi Password">
            </div>

            <?= form_error('email_pengguna', '<small class="text-danger">', '</small>'); ?>
            <div class="input-group-append mb-3">
              <input type="text" name="email_pengguna" class="form-control <?= !empty(form_error('email_pengguna')) ? 'is-invalid' : ''; ?>" placeholder="Email" value="<?= set_value('email_pengguna'); ?>">
            </div>

            <?= form_error('telepon_pengguna', '<small class="text-danger">', '</small>'); ?>
            <div class="input-group-append mb-3">
              <input type="text" name="telepon_pengguna" class="form-control <?= !empty(form_error('telepon_pengguna')) ? 'is-invalid' : ''; ?>" placeholder="No.Telepon" value="<?= set_value('telepon_pengguna'); ?>">
            </div>

            <?= form_error('jabatan_pengguna', '<small class="text-danger">', '</small>'); ?>
            <div class="input-group-append mb-3">
              <input type="text" name="jabatan_pengguna" class="form-control <?= !empty(form_error('jabatan_pengguna')) ? 'is-invalid' : ''; ?>" placeholder="Jabatan" value="<?= set_value('jabatan_pengguna'); ?>">
            </div>
            <div class="row">
              <div class="col-lg">
                <button type="submit" class="btn btn-primary btn-block">Register</button>
              </div>
            </div>
          </form>

          <div class="mt-3 text-center">
            <a href="<?= base_url('login'); ?>">Sudah punya akun? Login...</a>
          </div>

        </div>
        <!-- /.form-box -->
      </div><!-- /.card -->
  
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="<?= base_url('public/lte/') ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('public/lte/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('public/lte/') ?>dist/js/adminlte.min.js"></script>
</body>
</html>
