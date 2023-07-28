<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  
  <link rel="icon" href="<?php echo base_url('img/1.png');?>">

  <title>Appem</title>

  <!-- General CSS Files -->

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/stisla/css/style.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/stisla/css/components.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/stisla/modules/bootstrap/css/bootstrap.min.css');?>">
   <link rel="stylesheet" href="<?php echo base_url('assets/stisla/modules/fontawesome/css/all.min.css');?>">

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
            <li class="nav-item active">
              <a href="<?php echo site_url('Masyarakat/homemasy');?>" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="nav-item">
              <a href="<?php echo site_url('Masyarakat/profile');?>" class="nav-link"><i class="far fa-user"></i><span>Profile</span></a>
            </li>
             <li class="nav-item">
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
                 <h3>Hallo <?php echo $this->session->userdata('nama'); ?></h3>
              </div>
              <div class="card bg-primary text-white">
              <div class="card-body">
                <p> Selamat datang di aplikasi pengaduan masyarakat yang dibuat untuk melaporkan pelanggaran/penyimpangan kejadian-kejadian yang ada pada masyarakat </p>
                 <a href="#formpengaduan" class="btn btn-icon icon-left btn-success" class="scroll-down" addres="true"><i class="far fa-edit"></i> Buat Laporan</a>
              </div>
              </div>
            </div>
  
                <div class="card">
                  <div class="card-header">
                    <h4>Tulis Laporan</h4>
                  </div>
                  
                  <div class="card-body">
              <form action="<?= site_url('masyarakat/create_laporan')?>" enctype="multipart/form-data" method="post" id="formpengaduan">
                <div class="form-group cols-sm-6">
                  <label>Judul Laporan</label>
                  <input type="char" name="judul" class="form-control">
                  <span
                          class="help-block"><?= form_error('judul', '<small class="text-danger">', '</small>'); ?></span>
                </div>
                <div class="form-group cols-sm-6">
                  <label>Tanggal</label>
                  <input type="timestamp" name="tgl_pengaduan" value="<?php echo date('d/m/y');?>"class="form-control"readonly>
                </div>
                 <div class="form-group cols-sm-6">
                  <input type="char" name="nik" value="<?php echo $this->session->userdata('nik'); ?>"class="form-control" hidden>
                  <span
                          class="help-block"><?= form_error('nik', '<small class="text-danger">', '</small>'); ?></span>
                </div>
                <div class="form-group cols-sm-6">
                  <label>Isi Laporan</label>
                  <textarea class="form-control" rows="7" name="isi_laporan">   </textarea>
                  <span
                          class="help-block"><?= form_error('isi_laporan', '<small class="text-danger">', '</small>'); ?></span>
                </div>
                <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Bukti Foto</label>
                      <div class="col-sm-12 col-md-7">
                        <div id="image-preview" class="image-preview">
                          <label for="image-upload" id="image-label">Choose File</label>
                          <input type="file" name="image" id="image-upload" required />
                          <span
                          class="help-block"><?= form_error('image', '<small class="text-danger">', '</small>'); ?></span>
                        </div>
                      </div>
                      <input type="text" name="status" value="menunggu" hidden>
                </div>
                <button class="btn btn-primary" type="submit">Kirim</button>
                   <input type="reset" value="kosongkan" class="btn btn-warning">
                </div>
              </form>
            </div>
          </div>
  
      
              </div>
            </div>
           
            <div class="simple-footer">
              Copyright &copy; serevina
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <!-- General JS Scripts -->
  <script src="<?php echo base_url('assets/stisla/modules/jquery.min.js')?>"></script>
  <script src="<?php echo base_url('assets/stisla/modules/popper.js')?>"></script>
  <script src="<?php echo base_url('assets/stisla/modules/tooltip.js')?>"></script>
  <script src="<?php echo base_url('assets/stisla/modules/bootstrap/js/bootstrap.min.js')?>"></script>
  <script src="<?php echo base_url('assets/stisla/modules/nicescroll/jquery.nicescroll.min.js')?>"></script>
  <script src="<?php echo base_url('assets/stisla/modules/moment.min.js')?>"></script>
  <script src="<?php echo base_url('assets/stisla/js/stisla.js')?>"></script>
  
  <!-- JS Libraies -->
  
  <script src="<?php echo base_url('assets/stisla/modules/summernote/summernote-bs4.js')?>"></script>
  <script src="<?php echo base_url('assets/stisla/modules/jquery-selectric/jquery.selectric.min.js')?>"></script>
  <script src="<?php echo base_url('assets/stisla/modules/upload-preview/assets/js/jquery.uploadPreview.min.js')?>"></script>
  <script src="<?php echo base_url('assets/stisla/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')?>"></script>

  <!-- Page Specific JS File -->
  <script src="<?php echo base_url('assets/stisla/js/page/features-post-create.js')?>"></script>
  
  <!-- Template JS File -->
  <script src="<?php echo base_url('assets/stisla/js/scripts.js')?>"></script>
  <script src="<?php echo base_url('assets/stisla/js/custom.js')?>"></script>
</body>
</html>
