<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <link rel="icon" href="<?php echo base_url('img/1.png');?>">
  <title>Login &mdash; Appem</title>

  <!-- General CSS Files -->
    <link href="<?php echo base_url('assets/bootstrap/css3/sb-admin-2.min.css'); ?>" rel="stylesheet">
<style type="text/css">
  .body{
    background-color: #4e73df;
  }
</style>
<!-- Start GA -->

<body class="body">
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
                    <h1 class="h4 text-gray-900 mb-4">Login!</h1>
                  </div>
                  <form class="user" action="<?php echo site_url('LoginP/Auth'); ?>" method="post">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="username" placeholder="Masukan username...">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user"  name="password" placeholder="Password" id="myInput">
                    </div>
                    <input type="checkbox" onclick="myFunction()">Tampilkan Password
                    <br>
                    
                    <button class="btn btn-primary btn-user btn-block" type="submit" value="login">

                      Login
                    </button>
                                        <hr>
                                        <?php echo $this->session->flashdata('login_failed');  ?>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

  <!-- General JS Scripts -->
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
  <script src="assets/modules/jquery.min.js"></script>
  <script src="assets/modules/popper.js"></script>
  <script src="assets/modules/tooltip.js"></script>
  <script src="assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="assets/modules/moment.min.js"></script>
  <script src="assets/js/stisla.js"></script>
  
  <!-- JS Libraies -->

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>
</body>
</html>