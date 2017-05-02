
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Halaman login Sistem Dosen Berprestasi UMM">
  <meta name="author" content="fikrisaa">
  <title>Dosen Berprestasi | Badan Kendali Mutu Akademik</title>
  <link rel="apple-touch-icon" href="<?php echo base_url('public/base/assets/images/apple-touch-icon.png') ?>">
  <link rel="shortcut icon" href="<?php echo base_url('public/base/assets/images/favicon.ico') ?>">
  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?php echo base_url('public/global/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('public/global/css/bootstrap-extend.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('public/base/assets/css/site.min.css') ?>">
  <!-- Plugins -->
  <link rel="stylesheet" href="<?php echo base_url('public/global/vendor/animsition/animsition.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('public/global/vendor/asscrollable/asScrollable.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('public/global/vendor/switchery/switchery.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('public/global/vendor/intro-js/introjs.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('public/global/vendor/slidepanel/slidePanel.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('public/global/vendor/flag-icon-css/flag-icon.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('public/base/assets/examples/css/pages/login-v2.css') ?>">
  <!-- Fonts -->
  <link rel="stylesheet" href="<?php echo base_url('public/global/fonts/web-icons/web-icons.min.css') ?>">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
  <!--[if lt IE 9]>
    <script src="<?php echo base_url('public/global/vendor/html5shiv/html5shiv.min.js') ?>"></script>
    <![endif]-->
  <!--[if lt IE 10]>
    <script src="<?php echo base_url('public/global/vendor/media-match/media.match.min.js') ?>"></script>
    <script src="<?php echo base_url('public/global/vendor/respond/respond.min.js') ?>"></script>
    <![endif]-->
  <!-- Scripts -->
  <script src="<?php echo base_url('public/global/vendor/modernizr/modernizr.js') ?>"></script>
  <script src="<?php echo base_url('public/global/vendor/breakpoints/breakpoints.js') ?>"></script>
  <script>
  Breakpoints();
  </script>
</head>
<body class="page-login-v2 layout-full page-dark">
<div class="se-pre-con"></div>
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
  <!-- Page -->
  <div class="page animsition" data-animsition-in="fade-in" data-animsition-out="fade-out">
    <div class="page-content">
      <div class="page-brand-info">
        <div class="brand">
          <img class="brand-img" src="<?php echo base_url('/public/img/logo-umm.png') ?>" width="120" alt="...">
          <h2 class="brand-text font-size-40">SIM - DOSPRES</h2>
        </div>
        <p class="font-size-20" style="color: white;">Selamat datang di Sistem Informasi Manajemen Dosen Berprestasi, Silahkan login dengan username dan password Anda.</p>
      </div>
      <div class="page-login-main">
        <div class="brand visible-xs">
          <img class="brand-img" src="<?php echo base_url('/public/base/assets/images/logo-blue@2x.png') ?>" alt="...">
          <h3 class="brand-text font-size-40">TIP Quick Response</h3>
        </div>
        <h3 class="font-size-24">Login ke Sistem</h3>
        <?php if(!empty($alert)){ echo '<font color=red>'.$alert.'</font>'; } else { ?>
          <p>Masukkan username dan password Anda untuk login</p>
        <?php } ?>
        <form method="post" action="<?php echo site_url('login/process') ?>">
          <div class="form-group">
            <label class="sr-only" for="inputEmail">Username</label>
            <input type="text" class="form-control" value="" id="inputEmail" name="username" placeholder="Username">
          </div>
          <div class="form-group">
            <label class="sr-only" for="inputPassword">Password</label>
            <input type="password" class="form-control" id="inputPassword" name="password"
            placeholder="Password">
          </div>
          <div class="form-group text-center ">
            <button type="submit" class="btn btn-primary btn-block"><span class="fa fa-sign-in"></span>&nbsp; Login</button>
          </div>
                    
          
        </form>
        <footer class="page-copyright">
        <div class="site__content_form">
          <p>WEBSITE By Semicolon;</p>
          <p>Badan Kendali Mutu Akademik UMM</p>
          <p>© <?php echo date('Y') ?>. All RIGHT RESERVED.</p>
        </div>
        </footer>
      </div>
    </div>
  </div>
  <!-- End Page -->
  <!-- Core  -->
  <script src="<?php echo base_url('public/global/vendor/jquery/jquery.js') ?>"></script>
  <script src="<?php echo base_url('public/global/vendor/bootstrap/bootstrap.js') ?>"></script>
  <script src="<?php echo base_url('public/global/vendor/animsition/animsition.js') ?>"></script>
  <script src="<?php echo base_url('public/global/vendor/asscroll/jquery-asScroll.js') ?>"></script>
  <script src="<?php echo base_url('public/global/vendor/mousewheel/jquery.mousewheel.js') ?>"></script>
  <script src="<?php echo base_url('public/global/vendor/asscrollable/jquery.asScrollable.all.js') ?>"></script>
  <script src="<?php echo base_url('public/global/vendor/ashoverscroll/jquery-asHoverScroll.js') ?>"></script>
  <!-- Plugins -->
  <script src="<?php echo base_url('public/global/vendor/switchery/switchery.min.js') ?>"></script>
  <script src="<?php echo base_url('public/global/vendor/intro-js/intro.js') ?>"></script>
  <script src="<?php echo base_url('public/global/vendor/screenfull/screenfull.js') ?>"></script>
  <script src="<?php echo base_url('public/global/vendor/slidepanel/jquery-slidePanel.js') ?>"></script>
  <script src="<?php echo base_url('public/global/vendor/jquery-placeholder/jquery.placeholder.js') ?>"></script>
  <!-- Scripts -->
  <script src="<?php echo base_url('public/global/js/core.js') ?>"></script>
  <script src="<?php echo base_url('public/base/assets/js/site.js') ?>"></script>
  <script src="<?php echo base_url('public/base/assets/js/sections/menu.js') ?>"></script>
  <script src="<?php echo base_url('public/base/assets/js/sections/menubar.js') ?>"></script>
  <script src="<?php echo base_url('public/base/assets/js/sections/gridmenu.js') ?>"></script>
  <script src="<?php echo base_url('public/base/assets/js/sections/sidebar.js') ?>"></script>
  <script src="<?php echo base_url('public/global/js/configs/config-colors.js') ?>"></script>
  <script src="<?php echo base_url('public/base/assets/js/configs/config-tour.js') ?>"></script>
  <script src="<?php echo base_url('public/global/js/components/asscrollable.js') ?>"></script>
  <script src="<?php echo base_url('public/global/js/components/animsition.js') ?>"></script>
  <script src="<?php echo base_url('public/global/js/components/slidepanel.js') ?>"></script>
  <script src="<?php echo base_url('public/global/js/components/switchery.js') ?>"></script>
  <script src="<?php echo base_url('public/global/js/components/jquery-placeholder.js') ?>"></script>
  <script>
  (function(document, window, $) {
    'use strict';
    var Site = window.Site;
    $(document).ready(function() {
      Site.run();
    });
  })(document, window, jQuery);
  </script>
</body>
</html>