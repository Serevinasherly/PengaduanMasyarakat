
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <link rel="icon" href="<?php echo base_url('img/1.png');?>">
  <title>detail pengaduan</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/stisla/css/style.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/stisla/css/components.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/stisla/modules/bootstrap/css/bootstrap.min.css');?>">
   <link rel="stylesheet" href="<?php echo base_url('assets/stisla/modules/fontawesome/css/all.min.css');?>">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?php echo base_url('assets/stisla/modules/bootstrap-social/bootstrap-social.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/stisla/modules/summernote/summernote-bs4.css');?>">
</head>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Layout &rsaquo; Top Navigation &mdash; Stisla</title>

  <!-- General CSS Files -->

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css');?>">
      <link rel="stylesheet" href="<?php echo base_url('assets/stisla/css/style.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/stisla/css/components.css');?>">
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

        <form class="form-inline ml-auto">
      
            
             
             
        </form>
        <ul class="navbar-nav navbar-right">
          
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-list-content dropdown-list-message">
               
            

                 
             
              </div>
            </div>
          </li>
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
          Detail Pengaduan
        </div>
      </nav>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
        </nav>
        <div class="container-fluid">

          <!-- Page Heading -->
  <a href="<?php echo site_url('Masyarakat/tanggapan'); ?>" class="btn btn-primary btn-icon-split">
                    <span class="icon text-whire-50">
                      <span class="text">kembali</span>
                  </span>
                    
                  </a>
            <div class="card-body">
<form>
   <div class="form-group cols-sm-6">
          <label>Tanggal</label>
                <input type="date" name="tgl_pengaduan" value="<?php echo $d['tgl_pengaduan'] ?>"class="form-control"readonly>
     </div>
      <div class="form-group cols-sm-6">
           <label>judul laporan</label>
                  <input type="char" name="judul" value="<?php echo $d['judul'] ?>"class="form-control"readonly>
     </div>
     <div class="form-group cols-sm-6">
           <label>isi_laporan</label>
                  <input type="char" name="isi_laporan" value="<?php echo $d['isi_laporan'] ?>"class="form-control"readonly>
     </div>
  <div class="form-group cols-sm-6">
             <label>Foto</label>
              <br>
             <img style="width: 300px; height: 300px;" src="<?php echo base_url()?>images/<?php echo $d['foto']?>">
      </div>
           <div class="form-group cols-sm-6">
           <label>status</label>
                  <input type="char" name="status" value="<?php echo $d['status'] ?>"class="form-control"readonly>
     </div>
</table>
 </form>
        </section>
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

  <!-- JS Libraies -->

  <!-- Page Specific JS File -->

  <!-- Template JS File -->
  <script src="../assets/js/scripts.js"></script>
  <script src="../assets/js/custom.js"></script>
</body>
</html>
