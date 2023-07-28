<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="<?php echo base_url('img/1.png');?>">
  <title>Appem</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/styles.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>">
  <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.js');?>"></script>
  <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>
  <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.js');?>"></script>
  <style type="text/css">
  </style>
</head>
<body>
  <section id="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link text-white" href="<?php echo site_url('LoginM/index'); ?>">Masuk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="<?php echo site_url('Register/rm'); ?>">Daftar</a>
          </li>
        </ul>
      </div>
    </nav>
  </section>
  <section id="banner">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h3 class="promo-title">Pengaduan Masyarakat Online</h3>
          <p>Pengaduan masyarakat online bentuk tanggung jawab kami untuk meningkatkan pelayanan kepada masyarakat</p>
          <a href="#cara" class="btn btn-primary scroll-down" addres="true"><i class="far fa-edit"></i>Langkah Membuat Laporan</a>
          <a href="#"><img src=""></a>
        </div>
        <div class="col-md-6 text-center">
          <img src="<?php echo base_url('img/group.png');?>" style="width: 300px; height: 300px; margin-right: 3%;">
        </div>
      </div>
    </div>
    <img src="<?php echo base_url('img/wave.png');?>" class="button-img">
  </section>

  <section id="services">
    <div class="container text-center" id="cara">
      <h1 class="title">3 Langkah Pengaduan</h1>
      <div class="row text-center">
        <div class="col-md-4 services">
          <img src="<?php echo base_url('img/user.png');?>" class="button-imgs">
          <h4>Masuk Akun</h4>
          <p>Daftar akun baru atau masuk akun dan lengkapi data diri</p>
        </div>
        <div class="col-md-4 services">
          <img src="<?php echo base_url('img/kirim.png');?>" class="button-imgs">
        <h4>Kirim Pengaduan</h4>
<p>Kirim keluhan atau aspirasi pada menu utama</p>
</div>
<div class="col-md-4 services">
<img src="<?php echo base_url('img/terima.png');?>" class="button-imgs">
<h4>Tanggapan</h4>
<p>tunggu persetujuan serta tanggapan petugas kami</p>
</div>
</div>
</div>
<h5 align="center">klik button dibawah ini untuk scroll Halaman utama</h5>
<center><a href="<?php echo site_url('Home/index'); ?>" class="btn btn-primary scroll-down" addres="true"><i class="far fa-edit"></i>Click Me!</a></center>

  </section>
  <script>
    $(document).ready(function() {
      $('.navbar-toggler').click(function() {
        $('.navbar-collapse').toggle();
      });
    });
  </script>
</body>
</html>