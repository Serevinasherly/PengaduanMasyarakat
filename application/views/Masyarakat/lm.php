<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <link rel="icon" href="<?php echo base_url('img/1.png');?>">
  <title>Appem - Masuk</title>

    <link href="<?php echo base_url('assets/bootstrap/css3/sb-admin-2.min.css'); ?>" rel="stylesheet">
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
                    <h1 class="h4 text-gray-900 mb-4">Login Appem!</h1>
                  </div>
                  <form class="user" action="<?php echo site_url('LoginM/aksi_login'); ?>" method="post">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="username" placeholder="Masukan username...">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user"  name="password" placeholder="password" id="myInput">
                    </div>
                    <input type="checkbox" onclick="myFunction()">Tampilkan Password
                    <br>
                    <button class="btn btn-primary btn-user btn-block" type="submit" value="login">

                      Masuk
                    </button>
                                        <hr>
                                        <?php echo $this->session->flashdata('login_failed');  ?>
                  </form>
                  <hregister'r>
                  <div class="text-center">
                    <a class="small" href="<?php echo site_url('Register/rm');  ?>">buat akun!</a>
                  </div>
                </hregister'r>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
</div>
<script type="text/javascript">
  function myFunction(){
    var x =
    document.getElementById("myInput");
    if (x.type === "password") {
      x.type = "text";
    }else{
      x.type = "password";
    }
    }
  
</script>
</body>
</html>

 