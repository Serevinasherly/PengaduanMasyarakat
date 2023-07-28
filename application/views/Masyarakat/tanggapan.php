<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <link rel="icon" href="<?php echo base_url('img/1.png');?>">
  <title>Tanggapan &mdash; Appem</title>

  <!-- General CSS Files -->

     <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/stisla/css/style.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/stisla/css/components.css');?>">
   <link rel="stylesheet" href="<?php echo base_url('assets/stisla/modules/bootstrap-social/bootstrap-social.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/stisla/modules/summernote/summernote-bs4.css');?>">
      <link rel="stylesheet" href="<?php echo base_url('assets/stisla/modules/bootstrap/css/bootstrap.min.css');?>">
   <link rel="stylesheet" href="<?php echo base_url('assets/stisla/modules/fontawesome/css/all.min.css');?>">

  <link rel="stylesheet" href="<?php echo base_url('assets/stisla/modules/bootstrap/css/bootstrap.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/stisla/modules/fontawesome/css/all.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/stisla/modules/bootstrap/css/bootstrap.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/stisla/modules/fontawesome/css/all.min.css');?>">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?php echo base_url('assets/stisla/modules/datatables/datatables.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/stisla/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/stisla/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css');?>">
  <!-- CSS Libraries -->
  <!-- CSS Libraries -->

  <!-- CSS Libraries -->

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
              <a href="#" class="nav-link"><i class="far fa-file"></i><span>Laporan saya</span></a>
            </li>
          </ul>
        </div>
      </nav>

      <!-- Main Content -->

        <section class="section">
     <div class="card">
         <div class="card-header">
            <h1>Tanggapan</h1>
          </div>
         <div class="card-body">
             <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                             <th>No</th>
                             <th>judul</th>
                             <th>tanggal</th>
                             <th>status</th>
                             <th>aksi</th>
                          </tr>
                        </thead>
                        <tbody>                                
                            <?php 
                               $no = 1;
                              foreach ($data as $d) {
                        ?>                                 
                          <tr>
         <td><?php echo $no++ ?></td>
         <td><?php echo $d['judul'] ?></td>
         <td><?php echo $d['tgl_pengaduan'] ?></td>
         <td ><?php if ($d['status'] == "menunggu") :?>
             <div class="btn btn-warning"><?php echo $d['status']?></div>
             <?php elseif ($d['status'] == "proses") :?> 
             <div class="btn btn-primary"><?php echo $d['status']?></div>
             <?php elseif ($d['status'] == "selesai") :?>
             <div class="btn btn-success"><?php echo $d['status']?></div>
           <?php endif;?>
        </td>
         <td>
         <div class="buttons">
            <a href="<?php echo site_url('/Masyarakat/Update/pengaduan/' . $d['id_pengaduan']) ?>" class="btn btn-success">
                  <i class="fas fa-eye">
                      
                  </i>
             </a>
             <a href="<?php echo site_url('Masyarakat/info/' .  $d['id_pengaduan'])  ?>" class="btn btn-primary">
                  <i class="">
                      Detail
                  </i> 
         </a>
       </td>
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

    </div>
  </div>

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
  <script src="<?php echo base_url('assets/stisla/js/stisla.js');?>"></script>
  <script src="<?php echo base_url('assets/stisla/js/scripts.js');?>"></script>
  <script src="<?php echo base_url('assets/stisla/js/custom.js');?>"></script>
  <!-- Page Specific JS File -->
  <script src="<?php echo base_url('assets/stisla/js/page/modules-datatables.js');?>"></script>
  
</body>
</html>
