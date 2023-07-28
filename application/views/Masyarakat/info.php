<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <link rel="icon" href="<?php echo base_url('img/1.png');?>">
  <title>tanggapan &mdash; Appem</title>

  <!-- General CSS Files -->
  
  <link rel="stylesheet" href="<?php echo base_url('assets/stisla/modules/chocolat/dist/css/chocolat.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/stisla/css/style.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/stisla/css/components.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/stisla/modules/bootstrap/css/bootstrap.min.css');?>">
   <link rel="stylesheet" href="<?php echo base_url('assets/stisla/modules/fontawesome/css/all.min.css');?>">
   <link rel="stylesheet" href="<?php echo base_url('assets/stisla/modules/bootstrap/css/bootstrap.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/stisla/modules/fontawesome/css/all.min.css');?>">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?php echo base_url('assets/stisla/modules/chocolat/dist/css/chocolat.css');?>">
  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?php echo base_url('assets/stisla/modules/bootstrap-social/bootstrap-social.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/stisla/modules/summernote/summernote-bs4.css');?>">
  <!-- CSS Libraries -->
<style type="text/css">
  html{
    scroll-behavior: smooth;
  }

</style>
  <!-- Template CSS -->
</head>

<body class="layout-3">
  <div id="app">
    <div class="main-wrapper container">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <a href="index.html" class="navbar-brand sidebar-gone-hide">Website Layanan Masyakat</a>
        <div class="navbar-nav">
          <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
        </div>

        <card class="form-inline ml-auto">
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
           
            <img alt="image" src="<?php echo base_url('assets/stisla/img/avatar/avatar-1.png');?>" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, <?php echo $this->session->userdata('nama'); ?></div></a>
            <div class="dropdown-menu dropdown-menu-right">
              
              <a href="<?php echo site_url('Masyarakat/profile');?>" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <div class="dropdown-divider"></div>
              <a href="<?php echo base_url().'index.php/LoginM/Logout'?>" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>

      <nav class="navbar navbar-secondary navbar-expand-lg">
        <div class="container">
          <ul class="navbar-nav">
             <li class="nav-item">
              <a href="<?php echo site_url('Masyarakat/homemasy');?>" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="nav-item">
              <a href="<?php echo site_url('Masyarakat/profile');?>" class="nav-link"><i class="far fa-user"></i><span>Profile</span></a>
            </li>
             <li class="nav-item active">
              <a href="<?php echo site_url('Masyarakat/tanggapan');?>" class="nav-link"><i class="far fa-file-alt"></i><span>Laporan saya</span></a>
            </li>
          </ul>
        </div>
      </nav>
   

      <!-- Main Content -->
       <div class="main-content">
        <section class="section">

          <div class="section-body">
        
             <div class="card">
              <div class="card-header">
                 <h3>Tanggapan Petugas</h3>
              </div>
               <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Laporan Anda</h4>
                  </div>
                  <div class="card-body">
                    <h5> <?php echo $row->alamat?></h5>
                     <p align="left">Judul : <?php echo $row->judul?></p>
                    <p>isi laporan : <?php echo $row->isi_laporan?></p>
                       <div style="text-align: right;"><img style="width: 100px; height: 100px;" src="<?php echo base_url()?>images/<?php echo $row->foto?>">
                    </div>
                  </div>
                  <div class="card-footer">
                    <hr style="text-align: right;">
                    <p style="text-align: right;">Dilaporkan pada <?php echo $row->tgl_pengaduan?></p>
                  </div>
                </div>
                
              </div>
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">Tanggapan Petugas</h4>
                  </div>
                  <div class="card-body">
                       <p>Petugas : <?php echo $row->nama_petugas?></p>
                       <p class="card-text"><?php echo $row->tanggapan?></p>
                  </div>
                   <div class="card-footer">
                    <hr style="text-align: right;">
                    <p style="text-align: right;">Ditanggapi pada <?php echo $row->tgl_tanggapan?></p>
                  </div>
                </div>
             
        

  <script src="<?php echo base_url('assets/stisla/modules/jquery.min.js');?>"></script>
  <script src="<?php echo base_url('assets/stisla/modules/popper.js');?>"></script>
  <script src="<?php echo base_url('assets/stisla/modules/tooltip.js');?>"></script>
  <script src="<?php echo base_url('assets/stisla/modules/bootstrap/js/bootstrap.min.js');?>"></script>
  <script src="<?php echo base_url('assets/stisla/modules/nicescroll/jquery.nicescroll.min.js');?>"></script>
  <script src="<?php echo base_url('assets/stisla/modules/moment.min.js');?>"></script>
  <script src="<?php echo base_url('assets/stisla/js/stisla.js');?>"></script>
  
  <script src="<?php echo base_url('assets/stisla/modules/datatables/datatables.min.js');?>"></script>
  <script src="<?php echo base_url('assets/stisla/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js');?>"></script>
  <script src="<?php echo base_url('assets/stisla/modules/datatables/Select-1.2.4/js/dataTables.select.min.js');?>"></script>
  <script src="<?php echo base_url('assets/stisla/modules/jquery-ui/jquery-ui.min.js');?>"></script>
  <script src="<?php echo base_url('assets/stisla/js/stisla.js');?>"></script>
  <script src="<?php echo base_url('assets/stisla/js/scripts.js');?>"></script>
  <script src="<?php echo base_url('assets/stisla/js/custom.js');?>"></script>
  <!-- Page Specific JS File -->
  <script src="<?php echo base_url('assets/stisla/js/page/modules-datatables.js');?>"></script>
  
</body>
</html>
