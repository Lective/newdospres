<!DOCTYPE html>
<!-- saved from url=(0055)https://guest15194rhw-zjo1.bitblox.me/?ts=1492315529302 -->
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="author" content="andialrizki">
    <link rel="stylesheet" href="">
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/global/css/bootstrap.min.css"> -->
    <link href="<?php echo base_url() ?>public/frontend/preview.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>public/frontend/main.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>public/frontend/group-default.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>public/frontend/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/global/css/magic.min.css">
    <style>
        .bbm h1,
        .bbm h2,
        .bbm h3,
        .bbm h4 {
            font-family: Roboto, Helvetica Neue, Helvetica, Arial, sans-serif;
        }
        .bbm,
        .bbm p,
        .mm-menu {
            font-family: Roboto, Helvetica Neue, Helvetica, Arial, sans-serif;
        }
        .btn-orange {
            background:#f6bb86!important;
            border: 1px solid #f6bb86!important;
        }
        .testimonial6-second {
            margin-bottom: 0!important;
        }
        .magictime {
         -webkit-animation-duration: .7s;
        -moz-animation-duration: .7s;
        -o-animation-duration: .7s;
        animation-duration: .7s;
        }
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content/Box */
        .modal-content {
            background-color: #fefefe;
            margin: 15% auto; /* 15% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 80%; /* Could be more or less, depending on screen size */
        }

        /* The Close Button */
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
    <link href="<?php echo base_url() ?>public/frontend/skins-default.css" rel="stylesheet">
</head>
<body>
    <nav role="navigation" class="site-navigation mm-menu mm-offcanvas mm-top mm-front mm-autoheight" id="mm-mmenu-7">
        <div class="mm-panels">
            <div class="mm-panel mm-opened mm-current" id="mm-0">
                <ul class="nav-top clearfix mm-listview"></ul>
            </div>
        </div>
    </nav>
    <div>
        <div class="bbm page-container-preview mm-page mm-slideout" id="page-container">
            <section id="block-0fb49e86e858684c" class="sec-menu1">
                <div class="bg">
                    <div class="bg-image-container">
                        <div class="bg-image" style="display:none;"></div>
                        <div class="bg-video" style="display:none;"></div>
                    </div>
                    <div class="bg-color bg-ffffff"></div>
                    <div class="bg-content">
                        <div class="bg-padding"></div>
                        <div class="container">
                            <div class="row row-1">
                                <div class="col-xs-8 col-sm-3 header-col-left col-content-middle">
                                    <div class="grid-shortcodes row grid-block-media grid-xs-1 items-count-1">
                                        <div class="grid-shortcodes-item col-xs">
                                            <div class="shortcode-logo">
                                                <a href="<?php echo site_url() ?>"><img src="<?php echo base_url('public/frontend/umm.png') ?>"> 
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 header-col-right col-content-middle">
                                    <div class="grid-shortcodes row buttons grid-xs-1">
                                        <div class="grid-shortcodes-item col-xs btn-item">
                                            <div class="shortcode-button"><a href="<?php echo site_url('login') ?>" class="btn btn-sm btn-round btn-base"><span>Login</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="block-c9fa900e277f0be9" class="sec-testimonial6 grid-fixed cols-start-xs">
                <div class="bg">
                    <div class="bg-image-container">
                        <div class="bg-image" style="display:none;"></div>
                        <div class="bg-video" style="display:none;"></div>
                    </div>
                    <div class="bg-color bg-ffffff"></div>
                    <div class="bg-content">
                        <div class="bg-padding"></div>
                        <div class="container padding-top-80 padding-bot-80">
                            <div class="row row-1">
                                <div class="col-xs-12">
                                    <div class="grid-shortcodes row grid-block-text testimonial6 margin-bot-60 grid-xs-1 items-count-1">
                                        <div class="grid-shortcodes-item col-xs magictime boingInUp">
                                            <div class="shortcode-text">
                                                <h2>Calon Dosen Berprestasi Tahun <?php echo date('Y') ?></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid-block row grid-shortcodes grid-padding-top-30 grid-xs-1 grid-ms-2 grid-sm-3">
                                    <?php $no=0; foreach ($cadospres as $cad) { ?>
                                        <div class="grid-block-item col-xs magictime vanishIn">
                                            <div class="col-inner">
                                                <div class="testimonial6-second">
                                                    <div class="grid-shortcodes row grid-block-text grid-xs-1 items-count-1">
                                                        <div class="grid-shortcodes-item col-xs">
                                                            <div class="shortcode-text">
                                                            <h4><b><?php echo $cad['nama_lengkap']?></b></h4>
                                                                <p>
                                                                <?php echo $cad['nidn']?><br>
                                                                <?php echo $cad['nip']?><br>
                                                                <?php echo $cad['nama_lengkap']?><br>
                                                                <?php echo $cad['nilai']?><br>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="grid-shortcodes row grid-block-media grid-xs-1 items-count-1">
                                                        <div class="grid-shortcodes-item col-xs">
                                                            <div class="shortcode-image">
                                                                <a><img src="<?php echo base_url() ?>public/frontend/avatar1.png" class="img-responsive img-circle">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="testimonial6-third col-self-center">
                                                    <div class="grid-shortcodes row grid-block-text grid-xs-1 items-count-1">
                                                        <div class="grid-shortcodes-item col-xs">
                                                            <div class="shortcode-text">
                                                                <button class="btn btn-base" id="vote">Vote</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="grid-shortcodes row grid-block-media grid-xs-1 items-count-1">
                                                        <div class="grid-shortcodes-item col-xs">
                                                            <div class="shortcode-text">
                                                                <button class="btn btn-base btn-orange" id="detail" >Detail</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                        </div>
                        <div class="container padding-bot-80">

                            <div class="row row-1">
                                <div class="col-xs-12">
                                    <div class="grid-shortcodes row grid-block-text testimonial6 margin-bot-60 grid-xs-1 items-count-1">
                                        <div class="grid-shortcodes-item col-xs magictime boingInUp">
                                            <div class="shortcode-text">
                                                <h2>Calon Kaprodi Berprestasi Tahun <?php echo date('Y') ?></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid-block row grid-shortcodes grid-padding-top-30 grid-xs-1 grid-ms-2 grid-sm-3">
                                        <?php $no=0; foreach($cakaprodi as $cak){ ?>
                                        <div class="grid-block-item col-xs magictime vanishIn">
                                            <div class="col-inner">
                                                <div class="testimonial6-second">
                                                    <div class="grid-shortcodes row grid-block-text grid-xs-1 items-count-1">
                                                        <div class="grid-shortcodes-item col-xs">
                                                            <div class="shortcode-text">
                                                            <h4><b><?php echo $cak['nama_lengkap']?></b></h4>
                                                                <p>
                                                                <?php echo $cak['nidn']?><br>
                                                                <?php echo $cak['nip']?><br>
                                                                <?php echo $cak['nama_lengkap']?><br>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="grid-shortcodes row grid-block-media grid-xs-1 items-count-1">
                                                        <div class="grid-shortcodes-item col-xs">
                                                            <div class="shortcode-image">
                                                                <a><img src="<?php echo base_url() ?>public/frontend/avatar1.png" class="img-responsive img-circle">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="testimonial6-third col-self-center">
                                                    <div class="grid-shortcodes row grid-block-text grid-xs-1 items-count-1">
                                                        <div class="grid-shortcodes-item col-xs">
                                                            <div class="shortcode-text">
                                                                <button class="btn btn-base" id="vote">Vote</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="grid-shortcodes row grid-block-media grid-xs-1 items-count-1">
                                                        <div class="grid-shortcodes-item col-xs">
                                                            <div class="shortcode-text">
                                                                <button class="btn btn-base btn-orange" data-target="#detailkaprodi" data-toggle="modal">Detail</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Modals -->
                                        <div lass="modal fade modal-super-scaled modal-primary" id="detailkaprodi" aria-hidden="true" aria-labelledby="detailkaprodi" role="dialog" tabindex="-1">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                        </button>
                                                            <h4>Detail</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="panel-body">
                                                     Masih Kosong
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" data-dismiss="modal" class="btn">Close</button>
                                            </div>
                                        </div>
                                    </div>

                                    <?php } ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </section>
            <section id="block-ac94e6846810e432" class="sec-footer4">
                <div class="bg">
                    <div class="bg-image-container">
                        <div class="bg-image" style="display:none;"></div>
                        <div class="bg-video" style="display:none;"></div>
                    </div>
                    <div class="bg-color bg-ffffff"></div>
                    <div class="bg-content">
                        <div class="bg-padding"></div>
                        <div class="container padding-top-80 padding-bot-80">
                            <div class="row row-1">
                                <div class="col-xs-12 col-sm-4 col-md-3 offset-md-2 col-lg-2 offset-lg-3 footer-col-left">
                                    <div class="grid-shortcodes row grid-block-media grid-xs-1 items-count-1">
                                        <div class="grid-shortcodes-item col-xs">
                                            <div class="shortcode-media shortcode-media-fluid">
                                                <div class="shortcode-image">
                                                    <a><img src="<?php echo base_url('/public/img/logo-umm.png') ?>">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-2 footer4">
                                    <div class="grid-shortcodes row grid-block-text grid-xs-1 items-count-1">
                                        <div class="grid-shortcodes-item col-xs">
                                            <div class="shortcode-text">
                                                <p><a href="#">Portal UMM</a>
                                                </p>
                                                <p><a href="#">SIMUTU</a>
                                                </p>
                                                <p><a href="#">E-Library</a>
                                                </p>
                                                <p><a href="#">E-Jurnal</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-2 footer4">
                                    <div class="grid-shortcodes row grid-block-text grid-xs-1 items-count-1">
                                        <div class="grid-shortcodes-item col-xs">
                                            <div class="shortcode-text">
                                                <p><a href="#">Portal DPPM</a>
                                                </p>
                                                <p><a href="#">Portal HKI</a>
                                                </p>
                                                <p><a href="#">Portal BKMA</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-2">
                                <div class="col-xs-12 padding-bot-20 text-center">
                                    <div class="grid-shortcodes row grid-block-line padding-top-50 grid-xs-1 items-count-1">
                                        <div class="grid-shortcodes-item col-xs">
                                            <div class="shortcode-line">
                                                <div style="max-width:50%;border-width:1px;border-color:#eeeeee;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-3">
                                <div class="col-xs-12 text-center footer4-second">
                                    <div class="grid-shortcodes row grid-block-text grid-xs-1 items-count-1">
                                        <div class="grid-shortcodes-item col-xs">
                                            <div class="shortcode-text">
                                                <p>© Copyright <?php echo date('Y') ?> SIM-Dospres - All Rights Reserved. Website by semicolon;</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="bbm page-popups" id="page-popups"></div>
    </div>
    </div>
    <div id="mm-blocker" class="mm-slideout"></div>
</body>
</html>
