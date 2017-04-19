<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Administrator - Dosen Berprestasi</title>
  <link rel="stylesheet" href="">
  <link rel="apple-touch-icon" href="<?php echo base_url('public/base/assets/images/apple-touch-icon.png')?>" media="screen">
  <link rel="shortcut icon" href="<?php echo base_url('public/base/assets/images/favicon.ico')?>" media="screen">
  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?php echo base_url('public/global/css/bootstrap.min.css')?>" media="screen">
  <link rel="stylesheet" href="<?php echo base_url('public/global/css/bootstrap-extend.min.css')?>" media="screen">
  <link rel="stylesheet" href="<?php echo base_url('public/base/assets/css/site.min.css')?>" media="screen">
  <link rel="stylesheet" href="<?php echo base_url('public/base/assets/css/all.verymin.css')?>" media="screen">

  <!-- Plugins -->
  <link rel="stylesheet" href="<?php echo base_url('public/global/vendor/animsition/animsition.css')?>" media="screen">
  <link rel="stylesheet" href="<?php echo base_url('public/global/vendor/asscrollable/asScrollable.css')?>" media="screen">
  <link rel="stylesheet" href="<?php echo base_url('public/global/vendor/switchery/switchery.css')?>" media="screen">
  <link rel="stylesheet" href="<?php echo base_url('public/global/vendor/intro-js/introjs.css')?>" media="screen">
  <link rel="stylesheet" href="<?php echo base_url('public/global/vendor/slidepanel/slidePanel.css')?>" media="screen"> 
  <link rel="stylesheet" href="<?php echo base_url('public/global/vendor/flag-icon-css/flag-icon.css')?>" media="screen"> 
  <link rel="stylesheet" href="<?php echo base_url('public/global/vendor/waves/waves.css')?>" media="screen">
  <link rel="stylesheet" href="<?php echo base_url('public/global/vendor/chartist-js/chartist.css')?>" media="screen">
  <link rel="stylesheet" href="<?php echo base_url('public/global/vendor/jvectormap/jquery-jvectormap.css')?>" media="screen">
  <link rel="stylesheet" href="<?php echo base_url('public/global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css')?>" media="screen">
  <link rel="stylesheet" href="<?php echo base_url('public/base/assets/examples/css/dashboard/v1.css')?>" media="screen">
    
  <!-- Fonts -->
  <link rel="stylesheet" href="<?php echo base_url('public/global/fonts/font-awesome/font-awesome.css')?>" media="screen">
  <link rel="stylesheet" href="<?php echo base_url('public/global/fonts/material-design/material-design.min.css')?>" media="screen">
  <link rel="stylesheet" href="<?php echo base_url('public/global/fonts/web-icons/web-icons.min.css')?>" media="screen">

  <!-- Plugin -->
  <link rel="stylesheet" href="<?php echo base_url('public/global/vendor/datatables-bootstrap/dataTables.bootstrap.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('public/global/vendor/datatables-fixedheader/dataTables.fixedHeader.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('public/global/vendor/datatables-responsive/dataTables.responsive.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('public/base/assets/examples/css/tables/datatable.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('public/global/vendor/bootstrap-datepicker/bootstrap-datepicker.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('public/global/css/animate.css')?>">  
  <link rel="stylesheet" href="<?php echo base_url('public/global/css/print.css')?>">  
  
  <!--<link rel="stylesheet" href="<?php echo base_url('public/base/assets/skins/teal.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('public/global/fonts/brand-icons/brand-icons.min.css')?>"> -->
  <!--[if lt IE 9]>
    <script src="<?php echo base_url('public/global/vendor/html5shiv/html5shiv.min.js')?>"></script>
    <![endif]-->
  <!--[if lt IE 10]>
    <script src="<?php echo base_url('public/global/vendor/media-match/media.match.min.js')?>"></script>
    <script src="<?php echo base_url('public/global/vendor/respond/respond.min.js')?>"></script>
  <![endif]-->
  <!-- Scripts -->
  <script src="<?php echo base_url('public/global/vendor/modernizr/modernizr.js')?>"></script>
  <script src="<?php echo base_url('public/global/vendor/breakpoints/breakpoints.js')?>"></script>
  <script src="<?php echo base_url('public/ckeditor/ckeditor.js')?>"></script>  
  <script>
    Breakpoints();
  </script>

  <script src="<?php echo base_url('public/global/vendor/jquery/jquery.js')?>"></script>
  <script src="<?php echo base_url('public/global/vendor/jquery/jquery.min.js')?>"></script>
  </script>
  <style type="text/css">
      .textHide{
        text-decoration: none;
      }
      .no-js #loader { display: none;  }
      .js #loader { display: block; position: absolute; left: 100px; top: 0; }
      .se-pre-con {
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background: url(<?php echo base_url('public/skins/loader/loader_img.gif')?>) center no-repeat #fff;
      }
      .site__header {
        -webkit-animation: bounceInUp 1s;
      }

      .site__title {
        color: #f35626;
        background-image: -webkit-linear-gradient(92deg,#f35626,#feab3a);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        -webkit-animation: hue 60s infinite linear;
      }

      .site__content {
        -webkit-animation: bounceInUp 1s;
        -webkit-animation-delay: .1s;
      }

      .site__content_form {
        -webkit-animation: bounceInUp 1s;
        -webkit-animation-delay: .1s;
      }
      .link a, .link a:hover {
        text-decoration: none;
      }
      hr.single{
        background:#000000;
        border:1px solid #000000;
      }

      hr.double{
        background:#000000;
        border:2px solid #000000;
        margin:-5px 0 5px 0;
      }
      table.pad5 td{
        padding:0 0 5px 0;
      }
  </style>
  <script>
    $(window).load(function() {
     // Animate loader off screen
      $(".se-pre-con").fadeOut("slow");;
    });
  </script>
</head>
<body>
<div class="se-pre-con"></div>
  <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega noprint" role="navigation">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle hamburger hamburger-close navbar-toggle-left hided"
      data-toggle="menubar">
        <span class="sr-only">Toggle navigation</span>
        <span class="hamburger-bar"></span>
      </button>
      <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-collapse"
      data-toggle="collapse">
        <i class="icon wb-more-horizontal" aria-hidden="true"></i>
      </button>
      <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
        <img class="navbar-brand-logo" src="<?php echo base_url('public/img/logo-umm.png') ?>" title="Dosen Berprestasi">
        <span class="navbar-brand-text"> Dosen Berprestasi</span>
      </div>
      <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-search"
      data-toggle="collapse">
        <span class="sr-only">Toggle Search</span>
        <i class="icon wb-search" aria-hidden="true"></i>
      </button>
    </div>
    <div class="navbar-container container-fluid">
      <!-- Navbar Collapse -->
      <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
        <!-- Navbar Toolbar -->
        <ul class="nav navbar-toolbar">
          <li class="hidden-float" id="toggleMenubar">
            <a data-toggle="menubar" href="#" role="button">
              <i class="icon hamburger hamburger-arrow-left">
                  <span class="sr-only">Toggle menubar</span>
                  <span class="hamburger-bar"></span>
                </i>
            </a>
          </li>
          <li class="hidden-xs" id="toggleFullscreen">
            <a class="icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
              <span class="sr-only">Toggle fullscreen</span>
            </a>
          </li>
          <li class="hidden-float">
            <a class="icon wb-search" data-toggle="collapse" href="#" data-target="#site-navbar-search"
            role="button">
              <span class="sr-only">Toggle Search</span>
            </a>
          </li>
        </ul>
        <!-- End Navbar Toolbar -->
        <!-- Navbar Toolbar Right -->
        <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
          <li class="active">
            <a href="<?php echo base_url('wemin')?>"><i class="wb-home"></i> Dashboard <span class="sr-only">(current)</span></a>
          </li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"
            data-animation="slide-bottom" role="button">
              <span>
                <i class="fa fa-user"></i> Administrator <span class="caret"></span>
              </span>
            </a>
            
            <ul class="dropdown-menu" role="menu">
              <!-- <li role="presentation">
                <a href="http://infokhs.umm.ac.id" role="menuitem"><i class="icon wb-payment" aria-hidden="true"></i> Info-KHS</a>
              </li>
              <li role="presentation">
                <a href="http://krs.umm.ac.id" role="menuitem"><i class="icon wb-settings" aria-hidden="true"></i> Krs-Online</a>
              </li>
              <li class="divider" role="presentation"></li> -->
              <li role="presentation">
                <a href="<?php echo base_url('login')?>" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> Logout</a>
              </li>
            </ul>
          </li>
        </ul>
        <!-- End Navbar Toolbar Right -->
      </div>
      <!-- End Navbar Collapse -->
      <!-- Site Navbar Seach -->
      <div class="collapse navbar-search-overlap" id="site-navbar-search">
        <form role="search">
          <div class="form-group">
            <div class="input-search">
              <i class="input-search-icon wb-search" aria-hidden="true"></i>
              <input type="text" class="form-control" name="site-search" placeholder="Search...">
              <button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search"
              data-toggle="collapse" aria-label="Close"></button>
            </div>
          </div>
        </form>
      </div>
      <!-- End Site Navbar Seach -->
    </div>
  </nav>
	