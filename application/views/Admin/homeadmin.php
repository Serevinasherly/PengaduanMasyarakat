<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <link rel="icon" href="<?php echo base_url('img/1.png');?>">
  <title>Dashboard &mdash; Appem</title>
  
  <!-- General CSS Files -->

  <link rel="stylesheet" href="<?php echo base_url('assets/stisla/modules/bootstrap/css/bootstrap.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/stisla/modules/fontawesome/css/all.min.css');?>">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?php echo base_url('assets/stisla/modules/jqvmap/dist/jqvmap.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/stisla/modules/weather-icon/css/weather-icons.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/stisla/modules/weather-icon/css/weather-icons-wind.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/stisla/modules/summernote/summernote-bs4.css');?>">

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url('assets/stisla/modules/bootstrap/css/bootstrap.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/stisla/modules/fontawesome/css/all.min.css');?>">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?php echo base_url('assets/stisla/modules/jqvmap/dist/jqvmap.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/stisla/modules/summernote/summernote-bs4.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/stisla/modules/owlcarousel2/dist/assets/owl.carousel.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/stisla/modules/owlcarousel2/dist/assets/owl.theme.default.min.css');?>">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/stisla/css/style.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/stisla/css/components.css');?>">
  <!-- Template CSS -->


<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>


<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
         
        
        </form>
          <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="<?php echo base_url('assets/stisla/img/avatar/avatar-1.png');?>" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, <?php echo $this->session->userdata('username'); ?></div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-divider"></div>
              <a href="<?php echo base_url().'index.php/LoginP/Logout'?>" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
     <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">APPEM</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="active"><a href="<?php echo site_url('Admin/index');?>" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">DATA</li>
            
             <li><a class="nav-link" href="<?php echo site_url('Admin/dpengaduan');?>"><i class="far fa-file-alt"></i> <span>Data Pengaduan</span></a></li>

            <li><a class="nav-link" href="<?php echo site_url('Admin/dtanggapan');?>"><i class="far fa-file-alt"></i> <span>Data Tanggapan</span></a></li>
            
            
            <li class="menu-header">Report</li>
            <li><a class="nav-link" href="<?php echo site_url('Admin/hasil');?>"><i class="far fa-file-alt"></i> <span>Report Data</span></a></li>
            <li><a class="nav-link" href="<?php echo site_url('Admin/report');?>"><i class="far fa-file-alt"></i> <span>Cari data pengaduan</span></a></li>


            <li class="menu-header">USER</li>

            <li><a class="nav-link" href="<?php echo site_url('Admin/dpetugas');?>"><i class="far fa-user"></i> <span>Data Petugas</span></a></li>
            <li><a class="nav-link" href="<?php echo site_url('Admin/dmasyarakat');?>"><i class="far fa-user"></i> <span>Data Masyarakat</span></a></li>
          
            </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
        
             <div class="card">
         <div class="card-header">
            <h1>Dashboard</h1>
          </div>
                    <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <br><br><br><br>
                  <div class="card-header">
                    <h4>Total Masyarakat</h4>
                  </div>
                  <div class="card-body">
                  <?php echo $count_masyarakat; ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <br><br><br><br>
                  <div class="card-header">
                    <h4>Total Petugas</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $count_petugas; ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="far fa-file"></i>
                </div>
                <div class="card-wrap">
                  <br><br><br><br>
                  <div class="card-header">
                    <h4>Pengaduan Menunggu</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $count_proses; ?>
                  </div>
                </div>
              </div>
            </div>
             <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <i class="fas fa-check"></i>
                </div>
                <div class="card-wrap">
                  <br><br><br><br>
                  <div class="card-header">
                    <h4>Pengaduan yang telah ditanggapi</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $count_selesai; ?>
                  </div>
                </div>
              </div>
            </div>                  
          </div> 
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; serevina</a>
        </div>
        <div class="footer-right">
          
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <!-- General JS Scripts -->
 

  <!-- General JS Scripts -->
  <script src="<?php echo base_url('assets/stisla/modules/jquery.min.js');?>"></script>
  <script src="<?php echo base_url('assets/stisla/modules/popper.js');?>"></script>
  <script src="<?php echo base_url('assets/stisla/modules/tooltip.js');?>"></script>
  <script src="<?php echo base_url('assets/stisla/modules/bootstrap/js/bootstrap.min.js');?>"></script>
  <script src="<?php echo base_url('assets/stisla/modules/nicescroll/jquery.nicescroll.min.js');?>"></script>
  <script src="<?php echo base_url('assets/stisla/modules/moment.min.js');?>"></script>
  <script src="<?php echo base_url('assets/stisla/js/stisla.js');?>"></script>
  
  <!-- JS Libraies -->
  <script src="<?php echo base_url('assets/stisla/modules/simple-weather/jquery.simpleWeather.min.js');?>"></script>
  <script src="<?php echo base_url('assets/stisla/modules/chart.min.js');?>"></script>
  <script src="<?php echo base_url('assets/stisla/modules/jqvmap/dist/jquery.vmap.min.js');?>"></script>
  <script src="<?php echo base_url('assets/stisla/modules/jqvmap/dist/maps/jquery.vmap.world.js');?>"></script>
  <script src="<?php echo base_url('assets/stisla/modules/summernote/summernote-bs4.js');?>"></script>
  <script src="<?php echo base_url('assets/stisla/modules/chocolat/dist/js/jquery.chocolat.min.js');?>"></script>

  <!-- Page Specific JS File -->
  <script src="<?php echo base_url('assets/stisla/js/page/index-0.js');?>"></script>
  
  <!-- Template JS File -->
  <script src="<?php echo base_url('assets/stisla/js/scripts.js');?>"></script>
  <script src="<?php echo base_url('assets/stisla/js/custom.js');?>"></script>
</body>
</html>