<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <link rel="icon" href="<?php echo base_url('img/1.png');?>">
  <title>Detail &mdash; Appem</title>

  <link rel="stylesheet" href="<?php echo base_url('assets/stisla/modules/bootstrap/css/bootstrap.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/stisla/modules/fontawesome/css/all.min.css');?>">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?php echo base_url('assets/stisla/modules/chocolat/dist/css/chocolat.css');?>">

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
            <li class="dropdown">
              <a href="<?php echo site_url('Petugas/index');?>" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">DATA</li>
            
            <li class="active"><a class="nav-link" href="<?php echo site_url('Petugas/pengaduan');?>"><i class="far fa-file-alt"></i> <span>Data Pengaduan</span></a></li>
            <li><a class="nav-link" href="<?php echo site_url('Petugas/tanggapan');?>"><i class="far fa-file-alt"></i> <span>Data Tanggapan</span></a></li>
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
            <h1>Data Pengaduan</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"></div>
               </div>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Detail laporan pengaduan</h4>
                  </div>
                  <div class="row">
       <div class="col-12 col-md-6 col-lg-6">
         <div class="card">    
                <div class="card-body">
                <h6>Di <?php echo $row->alamat?></h6>
                <h6>Dari : <?php echo $row->nama?></h6>
                <h6>Dilaporkan pada : <?php echo $row->tgl_pengaduan?></h6>
                <h6>judul laporan : <?php echo $row->judul?></h6>
                <h6>isi laporan : <?php echo $row->isi_laporan?>
              </h6>
            </div>
          </div>
        </div>

 <div class="col-12 col-md-6 col-lg-6">
 <div class="card">
 <div class="card-body">
      <div class="card card-warning">
      <div class="card-header">
            <h4>Status Laporan</h4>
      </div>
 <div class="card-body">
       <?php if ($row->status == "menunggu") :?>      
            <p>Klik button proses jika ingin menanggapi</p>  
       <form method="post" action="<?= site_url('Petugas/update_status/') . $row->id_pengaduan ?>">
          <input type="text" name="id_pengaduan" value="<?php echo $row->id_pengaduan; ?>" hidden>
          <input type="text" name="status" value="<?php echo $row->status; ?>" hidden>
              <button class="btn btn-success">Proses</button>
      </form>

         <?php elseif ($row->status == "proses") : ?>
          <p>Laporan ini berstatus proses</p>
         <?php elseif ($row->status == "selesai") : ?>
           <p>Laporan ini telah ditanggapi</p>
              <?php endif; ?>
            
            </div>
     
                  </div>
                </div>
              </div>
          </div>
        </div>
         <div class="col-12 col-md-6 col-lg-6">
 <div class="card">
 <div class="card-body">
     <h4> Foto Bukti:</h4>
           <div class="gallery gallery-fw">
                      <div class="gallery-item" data-image="<?php echo base_url()?>images/<?php echo $row->foto?>" data-title="Image 1"></div>
              </div>
            <p style="color: red;">note : hapus laporan ini jika terlihat palsu</p>
            <a href="<?php echo site_url('/Petugas/DoDelete/pengaduan/' . $row->id_pengaduan) ?>" onclick="return confirm('apa you yakin?');" class="btn btn-danger btn-sm"><i>Hapus</i></a>
        </div>
      </div>
    </div>
     </div>
   </div>
</div>
        <div class="card-body">
                    <div class="form-group">
                            <label>Tanggapan</label>
                            <?php if ($row->status == "menunggu") :?>
                            <textarea name="tanggapan" class="form-control" required
                            style="margin-top: 0px; margin-bottom: 0px; height: 104px;"
                                disabled>Klik proses terlebih dahulu untuk menanggapi laporan</textarea>

                            <?php elseif ($row->status == "proses") : ?>
                      <form action="<?echo site_url('Petugas/Detail') . $row->id_pengaduan ?>" method="post"> 
                              
                        <input type="text" name="id_pengaduan" value="<?php echo $row->id_pengaduan;?>"hidden>
                        

                           <textarea name="tanggapan" class="form-control"
                                style="margin-top: 0px; margin-bottom: 0px; height: 104px;"></textarea>

                            <button class="btn btn-success">kirim</button>
                        </form>
                            <?php elseif ($row->status == "selesai") : ?>
                            <textarea name="tanggapan" class="form-control"
                                style="margin-top: 0px; margin-bottom: 0px; height: 104px;"
                                disabled>Laporan Telah ditanggapi</textarea>
                            <?php endif; ?>
                        </div>
                        <input type="timestamp" name="tgl_pengaduan" value="<?php echo date('d/m/y');?>"class="form-control"hidden>
                        <input type="text" name="status" value="selesai" hidden>
     
        </section>
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
  
  <!-- JS Libraies -->
  <script src="<?php echo base_url('assets/stisla/modules/chocolat/dist/js/jquery.chocolat.min.js');?>"></script>

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="<?php echo base_url('assets/stisla/js/scripts.js');?>"></script>
  <script src="<?php echo base_url('assets/stisla/js/custom.js');?>"></script>
  
  <!-- Template JS File -->
</body>
</html>