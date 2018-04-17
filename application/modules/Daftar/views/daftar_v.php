<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="CoreUI Bootstrap 4 Admin Template">
  <meta name="author" content="Lukasz Holeczek">
  <meta name="keyword" content="CoreUI Bootstrap 4 Admin Template">
  <!-- <link rel="shortcut icon" href="assets/ico/favicon.png"> -->

  <title>Daftar Taqorrubat</title>
  <link rel="shortcut icon" href="<?php echo base_url('assets/template/img/favicon.ico'); ?>">
  <!-- Icons -->
  <link href="<?php echo base_url('assets/template/vendors/css/font-awesome.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/template/vendors/css/simple-line-icons.min.css'); ?>" rel="stylesheet">

  <!-- Main styles for this application -->
  <link href="<?php echo base_url('assets/template/register/style.css'); ?>" rel="stylesheet">

  <!-- Styles required by this views -->
  <script type="text/javascript">
      setTimeout(function() {
          $('#not').fadeOut('slow');
      }, 5000); 
  </script>
</head>

<body class="app flex-row align-items-center">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card mx-4">
          <div class="card-body p-4">
            <h1>Daftar</h1>
            <div id="not" style="width: 100%">
              <?php echo $this->session->flashdata('alert'); ?> 
            </div> 
            <form action="<?php echo base_url('Daftar/addkontributor'); ?>" method="POST" data-parsley-validate enctype="multipart/form-data">

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-user"></i></span>
              </div>
              <input required type="text" class="form-control" placeholder="Nama Lengkap" name="fullname">
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-envelope"></i></span>
              </div>
              <input required type="email" class="form-control" placeholder="Email" name="email">
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" ><i class="fa fa-mobile"></i></span>
              </div>
              <input required type="number" class="form-control" placeholder="No. HP" name="hp">
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" ><i class="fa fa-map-marker"></i></span>
              </div>
              <input required type="text" class="form-control" placeholder="Alamat" name="alamat">
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-user"></i></span>
              </div>
              <input required type="text" class="form-control" placeholder="Username" name="username">
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-lock"></i></span>
              </div>
              <input type="password" class="form-control" placeholder="Password" name="passwordawal">
            </div>

            <div class="input-group mb-4">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-lock"></i></span>
              </div>
              <input type="password" class="form-control" placeholder="Repeat password" name="password">
            </div>

            <button type="submit" class="btn btn-block btn-success">Buat Akun</button><br>
            <a href="<?php echo base_url(); ?>"><button  type="button" class="btn btn-block btn-primary">Masuk</button></a>
            
            </form>
          </div>
          
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap and necessary plugins -->
  <script src="<?php echo base_url('assets/template/vendors/js/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/template/register/popper.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/template/register/bootstrap.min.js'); ?>"></script>

</body>
</html>