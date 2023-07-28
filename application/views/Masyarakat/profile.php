<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <link rel="icon" href="<?php echo base_url('img/1.png');?>">
  <title>Profile</title>
 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/stisla/css/style.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/stisla/css/components.css');?>">
     <!-- General CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url('assets/stisla/modules/bootstrap/css/bootstrap.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/stisla/modules/fontawesome/css/all.min.css');?>">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?php echo base_url('assets/stisla/modules/bootstrap-social/bootstrap-social.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/stisla/modules/summernote/summernote-bs4.css');?>">

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
            <li class="nav-item active">
              <a href="<?php echo site_url('Masyarakat/profile');?>" class="nav-link"><i class="far fa-user"></i><span>Profile</span></a>
            </li>
             <li class="nav-item">
              <a href="<?php echo site_url('Masyarakat/tanggapan');?>" class="nav-link"><i class="far fa-file"></i><span>Laporan saya</span></a>
            </li>
          </ul>
        </div>
      </nav>
        <div class="main-content">
        <section class="section">
          
          <div class="section-body">
         
            <div class="row mt-sm-4">
              <div class="col-12 col-md-12 col-lg-5">
                <div class="card profile-widget">
                  <div class="profile-widget-header">
                    <img alt="image" src="<?php echo base_url('img/avatar-3.png');?>" class="rounded-circle profile-widget-picture">
                    <div class="profile-widget-items">
                      <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Laporan</div>
    
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
                    <div class="font-weight-bold mb-2">Masyarakat</div>
                
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-12 col-lg-7">
                <div class="card">
                  <form method="post" class="needs-validation" action="<?php echo site_url('Masyarakat/editprofile');?>">
                    <div class="card-header">
                      <h4>Edit Profile</h4>
                    </div>
                       
                    <div class="card-body">
                        <div class="row">
                          <div class="form-group col-md-6 col-12">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" value=" <?php echo $row->nama ?>" required="" name="nama">
                            <div class="invalid-feedback">
                              Please fill in the Nama lengkapn
                            </div>
                          </div>
                          <div class="form-group col-md-6 col-12">
                            <label>Username</label>
                            <input type="text" class="form-control" value=" <?php echo $row->username ?>" required="" name="username">
                            <div class="invalid-feedback">
                              Please fill in the username
                          </div>
                        </div>
                      </div>
                        <div class="row">
                          <div class="form-group col-md-6 col-12">
                            <label>No induk keluarga</label>
                            <input type="text" class="form-control" value=" <?php echo $row->nik ?>" required="" name="nik" readonly>
                            <div class="invalid-feedback">
                              Please fill in the email
                            </div>
                          </div>
                          <div class="form-group col-md-5 col-12">
                            <label>Phone</label>
                            <input type="tel" class="form-control" value=" <?php echo $row->telp ?>" name="telp">
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-12">
                            <label>Alamat</label>
                            <input type="alamat" class="form-control" value=" <?php echo $row->alamat ?>" name="alamat">
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
            <div class="simple-footer">
              Copyright &copy; serevina
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts --><script src="<?php echo base_url('assets/stisla/modules/jquery.min.js');?>"></script>
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
