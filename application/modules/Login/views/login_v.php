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
  <link rel="shortcut icon" href="<?php echo base_url('assets/template/img/favicon.ico'); ?>">
  <title>Taqorrubat | Login</title>

  <!-- Icons -->
  <link href="<?php echo base_url('assets/template/vendors/css/font-awesome.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/template/vendors/css/simple-line-icons.min.css'); ?>" rel="stylesheet">

  <!-- Main styles for this application -->
  <link href="<?php echo base_url('assets/template/vendors/css/style.css'); ?>" rel="stylesheet">
  <script type="text/javascript">
      setTimeout(function() {
          $('#not').fadeOut('slow');
      }, 5000); 
  </script>
</head>

<body class="app flex-row align-items-center">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card-group mb-0">
          <div class="card p-4">
            <div class="card-body">
              <h1>Masuk</h1>
              <p class="text-muted">Masuk ke akun</p>
              <form action='<?php echo base_url('Login/masuk'); ?>' method="POST">
                <div id="not">
                  <?php echo $this->session->flashdata('alert'); ?>
                </div> 
                <div class="input-group mb-3">
                  <span class="input-group-addon"><i class="icon-user"></i></span>
                  <input type="text" class="form-control" placeholder="Username" name="username" required>
                </div>
                <div class="input-group mb-4">
                  <span class="input-group-addon"><i class="icon-lock"></i></span>
                  <input type="password" class="form-control" placeholder="Password" name="password" required>
                </div>
                <div class="row">
                  <div class="col-6">
                    <button name="submit" class="btn btn-primary px-4" value="submit">Masuk</button>
                  </div>
                  <div class="col-6 text-right">
                    
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
            <div class="card-body text-center">
              <div>
                <h2>Daftar Akun</h2>
                <p>Segera daftar untuk menjadi Kontributor dalam Taqorrubat ini.</p><br>
                <a href="<?php echo base_url('Daftar'); ?>" title=""><button type="button" class="btn btn-primary mt-3 ">Daftar Sekarang!</button></a>
                <a href="<?php echo base_url('Baca'); ?>" title=""><button type="button" class="btn btn-primary mt-3 ">Baca Dzikir!</button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap and necessary plugins -->
  <script src="<?php echo base_url('assets/template/vendors/js/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/template/vendors/js/popper.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/template/vendors/js/bootstrap.min.js'); ?>"></script>

</body>
</html>