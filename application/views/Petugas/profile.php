<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <link rel="icon" href="<?php echo base_url('img/1.png');?>">
  <title>Profile</title>

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
  <link rel="stylesheet" href="<?php echo base_url('assets/stisla/css/style.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/stisla/css/components.css');?>">
  <!-- CSS Libraries -->

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
            <li>
              <a href="<?php echo site_url('Petugas/index');?>" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">DATA</li>
            
            <li><a class="nav-link" href="<?php echo site_url('Petugas/pengaduan');?>"><i class="far fa-file-alt"></i> <span>Data Pengaduan</span></a></li>
            <li><a class="nav-link" href="<?php echo site_url('Petugas/tanggapan');?>"><i class="far fa-file-alt"></i> <span>Data Tanggapan</span></a></li>
            <li class="menu-header">Profile</li>
             <li class="active"><a class="nav-link" href="<?php echo site_url('Petugas/profile');?>"><i class="far fa-user"></i> <span>Profile</span></a></li>
           
            </aside>
      </div>

 <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Profile</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"></div>
               </div>
          </div>
                  <div class="card-body">
<div class="row mt-sm-4">
              <div class="col-12 col-md-12 col-lg-5">
                <div class="card profile-widget">
                  <div class="profile-widget-header">
                    <img alt="image" src="<?php echo base_url('img/avatar-3.png');?>" class="rounded-circle profile-widget-picture">
                    <div class="profile-widget-items">
                      <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Menunggu</div>
    
                        <div class="profile-widget-item-value"><?php echo $count_waiting; ?></div>
                      </div>
                      <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Proses</div>
                        <div class="profile-widget-item-value"><?php echo $count_proses; ?></div>
                      </div>
                      <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Selesai</div>
                        <div class="profile-widget-item-value"><?php echo $count_selesai; ?></div>
                      </div>
                    </div>
                  </div>
             
                  <div class="card-footer text-center">
                    <div class="font-weight-bold mb-2">Petugas</div>
                
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-12 col-lg-7">
                <div class="card">
                  <form method="post" class="needs-validation" action="<?php echo site_url('Petugas/editprofile');?>">
                    <div class="card-header">
                      <h4>Edit Profile</h4>
                    </div>
                       
                    <div class="card-body">
                        <div class="row">
                          <div class="form-group col-md-6 col-12">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" value=" <?php echo $row->nama_petugas ?>" required="" name="nama_petugas">
                            <div class="invalid-feedback">
                              Please fill in the Nama lengkapn
                            </div>
                          </div>
                          <div class="form-group col-md-6 col-12">
                            <label>Username</label>
                            <input type="text" class="form-control" value=" <?php echo $row->username ?>" required="" name="username" readonly="">
                            <div class="invalid-feedback">
                              Please fill in the username
                          </div>
                        </div>
                      </div>
                        <div class="row">
                          <div class="form-group col-md-6 col-12">
                            <label>id petugas</label>
                            <input type="text" class="form-control" value=" <?php echo $row->id_petugas ?>" required="" name="nik" readonly>
                            <div class="invalid-feedback">
                              Please fill in the nik
                            </div>
                          </div>
                          <div class="form-group col-md-5 col-12">
                            <label>Phone</label>
                            <input type="tel" class="form-control" value=" <?php echo $row->telp ?>" name="telp">
                          </div>
                        </div>
                    </div> 
                    <div class="card-footer text-right">
                      <button class="btn btn-primary">Save Changes</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
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