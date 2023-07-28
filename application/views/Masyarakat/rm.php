<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="<?php echo base_url('img/1.png');?>">
  <title>Appem - Register</title>
<link href="<?php echo base_url('assets/bootstrap/css3/sb-admin-2.min.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/bootstrap/css3/sb-admin-2.css'); ?>" rel="stylesheet">
<style type="text/css">
  .body{
    background-color: #4e73df;
  }
</style>
</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-6 col-lg-6 col-md-6">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Daftar Appem!</h1>
                  </div>
                  <form class="user" action="<?php echo site_url('Register/register'); ?>" method="post">  
                    <div class="row">
                    <div class="form-group col-6">
                      <input type="text" class="form-control form-control-user" name="nama" value="<?= set_value('nama')?>" placeholder="Nama Lengkap...">
                       <?php echo form_error('nama','<small class=text-danger pl-3>','</small>');?>
                    </div>
                    <div class="form-group col-6">
                      <input type="username" class="form-control form-control-user"  name="username" value="<?= set_value('username')?>" placeholder="Username">
                      <?php echo form_error('username','<small class=text-danger pl-3>','</small>');?>
                    </div>
                   </div>
                     <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="nik" value="<?php echo set_value('nik');?>" placeholder="Masukan nik...">
                       <?php echo form_error('nik','<small class=text-danger pl-3>','</small>');?>
                    </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <input type="password" class="form-control form-control-user"  name="password" value="<?= set_value('password')?>" placeholder="Password">
                      <?php echo form_error('password','<small class=text-danger pl-3>','</small>');?>
                     </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user"  name="password2" value="<?= set_value('password2')?>" placeholder="konfirmasi Password">
                      <?php echo form_error('password2','<small class=text-danger pl-3>','</small>');?>
                    </div>
                   </div>
                   <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="telp" value="<?= set_value('telp')?>" placeholder="Enter No telp...">
                    </div>
                     <?php echo form_error('telp','<small class=text-danger pl-3>','</small>');?>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user"  name="alamat" value="<?= set_value('alamat')?>" placeholder="Alamat">
                       <?php echo form_error('alamat','<small class=text-danger pl-3>','</small>');?>
                    </div>
                    
                    
                    <button class="btn btn-primary btn-user btn-block" type="submit" value="login">

                     Daftar
                    </button>
                     <?php echo $this->session->flashdata('user_registered');  ?>
             
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

</body>
</html>
 