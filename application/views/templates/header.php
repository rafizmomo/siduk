<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Sistem Informasi Data Urut Kepangkatan">
  <meta name="author" content="Ihsan Alhafiz">

  <!-- favicon -->
  <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/img/favicon/'); ?>favicon-16x16.png">
  <link rel="manifest" href="<?= base_url('assets/img/favicon/'); ?>manifest.json">

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets/'); ?>css/sb-admin-2.css" rel="stylesheet">
  <link href="<?= base_url('assets/'); ?>css/animate.css" rel="stylesheet">

  <!-- Such WOW -->
  <script src="<?= base_url('assets/'); ?>js/wow.min.js"></script>

  <title><?php echo $judul; ?></title>
</head>

<!-- Halaman Control -->
<?php
$landing_Page = array("Halaman Awal", "Tentang");

if ($judul === 'Login') : ?>

  <body class="bg-gradient-primary ">
  <?php elseif ($judul === $landing_Page) : ?>

    <body>
    <?php else : ?>

      <body id="page-top">
      <?php endif; ?>