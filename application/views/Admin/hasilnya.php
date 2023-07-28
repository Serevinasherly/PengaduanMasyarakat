<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <link rel="icon" href="<?php echo base_url('img/1.png');?>">
  <title>Data Report</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url('assets/stisla/modules/bootstrap/css/bootstrap.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/stisla/modules/fontawesome/css/all.min.css');?>">


  <!-- CSS Libraries -->

  <link rel="stylesheet" href="<?php echo base_url('assets/stisla/modules/bootstrap-daterangepicker/daterangepicker.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/stisla/modules/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/stisla/modules/select2/dist/css/select2.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/stisla/modules/jquery-selectric/selectric.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/stisla/modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/stisla/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css');?>">

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
            <li><a href="<?php echo site_url('Admin/index');?>" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">DATA</li>

            
               <li><a class="nav-link" href="<?php echo site_url('Admin/dpengaduan');?>"><i class="far fa-file-alt"></i> <span>Data Pengaduan</span></a></li>

                
            <li><a class="nav-link" href="<?php echo site_url('Admin/dtanggapan');?>"><i class="far fa-file-alt"></i> <span>Data Tanggapan</span></a></li>
      
            <li class="menu-header">Report</li>

            <li class="active"><a class="nav-link" href="<?php echo site_url('Admin/hasil');?>"><i class="far fa-file-alt"></i> <span>Report Data</span></a></li>
            <li ><a class="nav-link" href="<?php echo site_url('Admin/report');?>"><i class="far fa-file-alt"></i> <span>Cari data pengaduan</span></a></li>

            <li class="menu-header">USER</li>

            <li><a class="nav-link" href="<?php echo site_url('Admin/dpetugas');?>"><i class="far fa-user"></i> <span>Data Petugas</span></a></li>
            <li><a class="nav-link" href="<?php echo site_url('Admin/dmasyarakat');?>"><i class="far fa-user"></i> <span>Data Masyarakat</span></a></li>
          
      </div>
</aside>
      </div>

      <!-- Main Content -->
       <div class="main-content">
        <section class="section">
        
             <div class="card">
         <div class="card-header">
            <h3>Report Data Pengaduan</h3>
          </div>
            <div class="card shadow mb-4">
            <div class="card-body">
            <form action="<?= site_url('Admin/cari_hasil'); ?>" method="post">
              <div class="row input-daterange">
                <div class="col-lg-4 col-md-4 mb-3">
                  <label for="firstName">Tanggal Pengaduan Awal</label>
                  <input type="date" class="form-control" id="start_date" name="start_date"
                    placeholder="" value="" required>
                  <div class="invalid-feedback">
                    Harus diisi!
                  </div>
                </div>
                <div class="col-lg-4 col-md-4">
                  <label for="lastName">Tanggal Pengaduan Akhir</label>
                  <input type="date" class="form-control" id="end_date" name="end_date" placeholder=""
                    value="" required>
                  <div class="invalid-feedback">
                    Harus diisi!
                  </div>
                </div>
                <div class="col-lg-3 col-md-3" style="margin-top:33px;">
                  <label for=""></label>
                  <button type="submit" class="btn btn-primary" name="search" id="search">
                    Cari
                  </button>
                </form>
                 
                </div>
                </div>
                </div>
                </div>
                <div class="col-lg-3 col-md-3" style="margin-top:33px;">
      
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
  
  <!-- JS Libraies -->
  <!-- JS Libraies -->
  <script src="<?php echo base_url('assets/stisla/modules/cleave-js/dist/cleave.min.js');?>"></script>
  <script src="<?php echo base_url('assets/stisla/modules/cleave-js/dist/addons/cleave-phone.us.js');?>"></script>
  <script src="<?php echo base_url('assets/stisla/modules/jquery-pwstrength/jquery.pwstrength.min.js');?>"></script>
  <script src="<?php echo base_url('assets/stisla/modules/bootstrap-daterangepicker/daterangepicker.js');?>"></script>
  <script src="<?php echo base_url('assets/stisla/modules/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js');?>"></script>
  <script src="<?php echo base_url('assets/stisla/modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js');?>"></script>
  <script src="<?php echo base_url('assets/stisla/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js');?>"></script>
  <script src="<?php echo base_url('assets/stisla/modules/select2/dist/js/select2.full.min.js');?>"></script>
  <script src="<?php echo base_url('assets/stisla/modules/jquery-selectric/jquery.selectric.min.js');?>"></script>
  <!-- Page Specific JS File -->
  <script src="<?php echo base_url('assets/stisla/js/page/forms-advanced-forms.js');?>"></script>
  
  <!-- Template JS File -->

  <script src="<?php echo base_url('assets/stisla/js/scripts.js');?>"></script>
  <script src="<?php echo base_url('assets/stisla/js/custom.js');?>"></script>


  <script src="<?php echo base_url('assets/stisla/js/page/modules-datatables.js');?>"></script>
  <script src="<?php echo base_url('assets/stisla/modules/datatables/datatables.min.js');?>"></script>
  <script src="<?php echo base_url('assets/stisla/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js');?>"></script>
  <script src="<?php echo base_url('assets/stisla/modules/datatables/Select-1.2.4/js/dataTables.select.min.js');?>"></script>
  <script src="<?php echo base_url('assets/stisla/modules/jquery-ui/jquery-ui.min.js');?>"></script>
  <script src="<?php echo base_url('assets/datatablesjs/demo/datatables-demo.js')?>"></script>
<script src="<?php echo base_url('assets/datatables/jquery-3.4.1.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables/DataTables/DataTables-1.10.20/js/jquery.dataTables.min.js');?>"></script>
<script src="<?php echo base_url('assets/datatables/DataTables/Buttons-1.6.1/js/dataTables.buttons.min.js');?>"></script>
<script src="<?php echo base_url('assets/datatables/DataTables/Buttons-1.6.1/js/buttons.flash.min.js');?>"></script>
<script src="<?php echo base_url('assets/datatables/DataTables/JSZip-2.5.0/jszip.min.js');?>"></script>
<script src="<?php echo base_url('assets/datatables/DataTables/pdfmake-0.1.36/pdfmake.min.js');?>"></script>
<script src="<?php echo base_url('assets/datatables/DataTables/pdfmake-0.1.36/vfs_fonts.js');?>"></script>
<script src="<?php echo base_url('assets/datatables/DataTables/Buttons-1.6.1/js/buttons.html5.min.js');?>"></script>
<script src="<?php echo base_url('assets/datatables/DataTables/Buttons-1.6.1/js/buttons.print.min.js');?>"></script>
<!-- <script src="assets/DataTables/"></script> -->
<script src="<?php echo base_url('assets/datatables/bootstrap-4.4.1/js/bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('assets/datatables/popper.min.js');?>"></script>
<script src="<?php echo base_url('assets/datatables/DataTables/DataTables-1.10.20/js/dataTables.bootstrap4.js');?>"></script>

<script>
  $(document).ready(function() {
    $("#table-1").DataTable({
      dom: 'Bfrtip',
      buttons: [
        'copy', 'csv', 'excel', 'pdf', 'print'
      ]
    });
  });
</script>
</body>
</html>