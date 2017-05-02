    <?php $this->load->view('themes/home/header') ?>

    <!-- notif -->
    <?php if($alert){ ?>
        <?php if($alert->status == 'success'){ ?>
            <script>alert('<?php echo $alert->message ?>');</script>
        <?php } else { ?>
            <script>alert('<?php echo $alert->message ?>');</script>
        <?php } ?>
    <?php } ?>
    <!-- end notif -->
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
                <!-- HEADER -->
        		<section id="block-0fb49e86e858684c" class="sec-menu1">
        			<div class="bg">
                        <div class="bg-content bg-primary">
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
                                                <div class="shortcode-button" ><a href="<?php echo site_url('login') ?>" class="btn btn-sm btn-default btn-round"><span style="color: #3f51b5"><b>Login</b></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
        		</section>
                <!-- END HEADER -->
        		<!-- BODY -->
                <section id="block-c9fa900e277f0be9" class="sec-testimonial6 grid-fixed cols-start-xs">
                    <div class="bg">
                        <div class="bg-content" style="background-color: #f0f0f0;">
                            <div class="container padding-top-80 padding-bot-80">
                                <div class="row row-1">
                                    <div class="col-xs-12">
                                        <div class="grid-shortcodes row grid-block-text testimonial6 margin-bot-60 grid-xs-1 items-count-1">
                                            <div class="grid-shortcodes-item col-xs magictime boingInUp">
                                                <div class="shortcode-text">
                                                    <h2 class="label label-info" style="color: white;">Calon Dosen Berprestasi Tahun <?php echo date('Y') ?></h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid-block row grid-shortcodes grid-padding-top-30 grid-xs-1 grid-ms-2 grid-sm-3">
                                            <?php $no=0; foreach ($cadospres as $cad) { ?>
                                            <div class="grid-block-item col-xs magictime vanishIn">
                                                <div class="col-inner" style="background-color: #ffffff;">
                                                    <div class="testimonial6-second">
                                                        <div class="grid-shortcodes row grid-block-text grid-xs-1 items-count-1">
                                                            <div class="grid-shortcodes-item col-xs">
                                                                <div class="shortcode-text">
                                                                <h4 style="height: 41px"><b><?php echo $cad['nama_lengkap']?></b></h4>
                                                                    <p>
                                                                    NIDN. <?php echo $cad['nidn']?><br>
                                                                    NIP. <?php echo $cad['nip']?>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="grid-shortcodes row grid-block-media grid-xs-1 items-count-1">
                                                            <div class="grid-shortcodes-item col-xs">
                                                                <div class="shortcode-image">
                                                                    <?php if(!empty($cad['foto']) && is_file('private/uploads/foto-dosen/'.$cad['foto'])){ ?>
                                                                      <img class="img-responsive img-circle" src="<?php echo base_url() ?>private/uploads/foto-dosen/<?php echo $cad['foto'] ?>" alt="...">
                                                                    <?php } else { ?>
                                                                      <img class="img-responsive img-circle" src="<?php echo base_url() ?>public/img/default-user.png" alt="...">
                                                                    <?php } ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="testimonial6-third col-self-center">
                                                        <div class="grid-shortcodes row grid-block-text grid-xs-1 items-count-1">
                                                            <div class="grid-shortcodes-item col-xs">
                                                                <div class="shortcode-text">
                                                                    <button class="btn btn-success" data-toggle="modal" data-target="#votedospres" type="button" onclick="javascript:getvote('<?php echo $cad['nidn']?>')">Vote</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="grid-shortcodes row grid-block-media grid-xs-1 items-count-1">
                                                            <div class="grid-shortcodes-item col-xs">
                                                                <div class="shortcode-text">
                                                                    <a href="<?php echo site_url('cadospres/details/'.$cad['nidn']) ?>">
                                                                    <button class="btn btn-warning" type="button">Detail</button>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php } ?>
                                        </div>
                                        <div class="container padding-top-80 padding-bot-80">
                                            <div class="row row-1">
                                                <div class="col-xs-12">
                                                    <div class="grid-shortcodes row grid-block-text testimonial6 margin-bot-60 grid-xs-1 items-count-1">
                                                        <div class="grid-shortcodes-item col-xs magictime boingInUp">
                                                            <div class="shortcode-text">
                                                                <h2 class="label label-info" style="color: white;">Calon Kaprodi Berprestasi Tahun <?php echo date('Y') ?></h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="grid-block row grid-shortcodes grid-padding-top-30 grid-xs-1 grid-ms-2 grid-sm-3">
                                                        <?php $no=0; foreach($cakaprodi as $cak){ ?>
                                                        <div class="grid-block-item col-xs magictime vanishIn">
                                                            <div class="col-inner" style="background-color: #ffffff;">
                                                                <div class="testimonial6-second">
                                                                    <div class="grid-shortcodes row grid-block-text grid-xs-1 items-count-1">
                                                                        <div class="grid-shortcodes-item col-xs">
                                                                            <div class="shortcode-text">
                                                                            <h4><b><?php echo $cak['nama_lengkap']?></b></h4>
                                                                                <p>
                                                                                NIDN. <?php echo $cak['nidn']?><br>
                                                                                NIP. <?php echo $cak['nip']?><br>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="grid-shortcodes row grid-block-media grid-xs-1 items-count-1">
                                                                        <div class="grid-shortcodes-item col-xs">
                                                                            <div class="shortcode-image">
                                                                                <?php if(!empty($cak['foto']) && is_file('private/uploads/foto-dosen/'.$cak['foto'])){ ?>
                                                                                  <img class="img-responsive img-circle" src="<?php echo base_url() ?>private/uploads/foto-dosen/<?php echo $cak['foto'] ?>" alt="...">
                                                                                <?php } else { ?>
                                                                                  <img class="img-responsive img-circle" src="<?php echo base_url() ?>public/img/default-user.png" alt="...">
                                                                                <?php } ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="testimonial6-third col-self-center">
                                                                    <div class="grid-shortcodes row grid-block-text grid-xs-1 items-count-1">
                                                                        <div class="grid-shortcodes-item col-xs">
                                                                            <div class="shortcode-text">
                                                                                <button class="btn btn-success" data-toggle="modal" data-target="#votekaprodi" type="button" onclick="javascript:getvotekap('<?php echo $cak['nidn']?>')">Vote</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="grid-shortcodes row grid-block-media grid-xs-1 items-count-1">
                                                                        <div class="grid-shortcodes-item col-xs">
                                                                            <div class="shortcode-text">
                                                                                <a href="<?php echo site_url('detail-kaprodi/'.$cak['nidn']) ?>">
                                                                                    <button class="btn btn-warning" type="button">Detail</button>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
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
                            </div>
                        </div>
                    </div>
                </section>
                <!-- END BODY -->
                <?php $this->load->view('themes/home/footer') ?>
        	</div>
        </div>

        <div id="mm-blocker" class="mm-slideout"></div>
        <!-- MODAL VOTE Dospres -->
        <div class="modal fade displaycontent" id="votedospres" aria-hidden="true" aria-labelledby="votedospres" role="dialog" tabindex="-1">
            <?php include('view_modal_vote_dospres.php'); ?>           
        </div>
        <!-- END MODAL VOTE -->
            <!-- MODAL VOTE Dospres -->
        <div class="modal fade displaycontent" id="votekaprodi" aria-hidden="true" aria-labelledby="votekaprodi" role="dialog" tabindex="-1">
            <?php include('view_modal_vote_kaprodi.php'); ?>
        </div>
        <!-- END MODAL VOTE -->
        <!-- MODAL DETAIL -->
        <div class="modal fade displaycontent" id="detaildospres" aria-hidden="true" aria-labelledby="detaildospres" role="dialog" tabindex="-1">
            <?php include('view_modal_detail_dospres.php'); ?>
        </div>
        <!-- END MODAL -->
        <!-- MODAL DETAIL -->
        <div class="modal fade displaycontent" id="detailkaprodi" aria-hidden="true" aria-labelledby="detailkaprodi" role="dialog" tabindex="-1">
            <?php include('view_modal_detail_kaprodi.php'); ?>
        </div>
        <!-- END MODAL -->

    <script type="text/javascript" src="<?php echo base_url() ?>private/plugins/jqplot/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>public/global/vendor/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript">
    //$(".modal-dialog").hide();

    function getvote(nidn){
        $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('lv_home/getdospres/');?>"+nidn,
                    data: "nidn="+nidn,
                    success: function (response) {
                        $(".displaycontent").html(response);
                      
                    }
                });
    }

    function getvotekap(nidn){
        $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('lv_home/getkaprodi/');?>"+nidn,
                    data: "nidn="+nidn,
                    success: function (response) {
                        $(".displaycontent").html(response);
                      
                    }
                });
    }

    function getbukjar(nidn){
         $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('lv_home/getbukuajar/');?>"+nidn,
                    data: "nidn="+nidn,
                    success: function (response) {
                        $(".displaycontent").html(response);
                      
                    }
                });  
    }

    </script>
    </body>
</html>