<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <link rel="icon" href="<?php echo base_url('img/1.png');?>">
  <title>Tanggapi</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url('assets/stisla/modules/bootstrap/css/bootstrap.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/stisla/modules/fontawesome/css/all.min.css');?>">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?php echo base_url('assets/stisla/modules/datatables/datatables.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/stisla/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/stisla/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css');?>">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/stisla/css/style.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/stisla/css/components.css');?>">
<!-- Start GA -->
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
            <li class="active"><a class="nav-link" href="<?php echo site_url('Petugas/tanggapan');?>"><i class="far fa-file-alt"></i> <span>Data Tanggapan</span></a></li>
            <li class="menu-header">Profile</li>
             <li><a class="nav-link" href="<?php echo site_url('Petugas/profile');?>"><i class="far fa-user"></i> <span>Profile</span></a></li>
           
     
            </aside>
      </div>
</ul>
      </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Tanggapan</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"></div>
               </div>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Tanggapan</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">     
                          <thead>                   
                          <tr>
                              <th>No</th>
                              <th>tanggal</th>
                              <th>Nama Pelapor</th>
                              <th>judul</th>
                              <th>tanggapan</th>
                          </tr>
                        </thead>
                        <tbody> 
                        <?php 
                               $no = 1;
                              foreach ($data as $d) {
                        ?>                                    
                          <tr>
               <td><?php echo $no++ ?></td>
               <td><?php echo $d['tgl_tanggapan'] ?></td>
               <td><?php echo $d['nama'] ?></td>
               <td><?php echo $d['judul'] ?></td>
               <td><?php echo $d['tanggapan'] ?></td>
         

                            
                          </tr>
                               <?php
                                      }
                                  ?>
                        </tbody>
                      </table>
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

  <!-- General JS Scripts -->
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

  <script src="<?php echo base_url('assets/stisla/js/scripts.js');?>"></script>
  <script src="<?php echo base_url('assets/stisla/js/custom.js');?>"></script>
  <!-- Page Specific JS File -->
  <script src="<?php echo base_url('assets/stisla/js/page/modules-datatables.js');?>"></script>
  
  <!-- Template JS File -->
</body>
</html>