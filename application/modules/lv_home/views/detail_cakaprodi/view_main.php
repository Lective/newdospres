<?php $this->load->view('themes/home/header'); ?><br><br>
<body class="page-profile">
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
          <div class="bg" style="margin-top: -44px; margin-bottom: 20px;">
            <div class="bg-content bg-primary">
              <div class="container">
                <div class="row row-1">
                  <div class="col-xs-8 col-sm-3 header-col-left col-content-middle">
                    <div class="grid-shortcodes row grid-block-media grid-xs-1 items-count-1">
                      <div class="grid-shortcodes-item col-xs">
                        <div class="shortcode-logo">
                          <a href="<?php echo site_url() ?>"><img src="<?php echo base_url('public/frontend/umm.png') ?>"></a>
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
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-warning">
                <div class="panel-heading">
                  <h2 class="panel-title text-center">Detail Calon Ketua Program Studi Berprestasi</h2>
              </div>
        </div>
      </div>

          <div class="col-md-3">
            <div class="panel">
              <div class="panel-heading nav-tabs-animate">
              <!-- Page Widget -->
                  <div class="widget widget-shadow text-center">
                    <div class="widget-header">
                        <div class="widget-header-content">
                          <a class="avatar avatar-lg" href="javascript:void(0)">
                            <?php if(!empty($data->foto) && is_file('private/uploads/foto-dosen/'.$data->foto)){ ?>
                              <img class="img-responsive img-circle" src="<?php echo base_url() ?>private/uploads/foto-dosen/<?php echo $data->foto ?>" alt="...">
                            <?php } else { ?>
                              <img class="img-responsive img-circle" src="<?php echo base_url() ?>public/img/default-user.png" alt="...">
                            <?php } ?>
                          </a>
                          <h4 class="profile-user"><?php echo $data->dosen ?></h4>
                          <p>NIDN. <?php echo $data->nidn ?></p>
                        </div>
                    </div>
                  </div>
                  <!-- End Page Widget -->
              </div>
            </div>  
          </div>
         
        <div class="col-md-9">
          <!-- Panel -->
          <div class="panel">
            <div class="panel-body nav-tabs-animate">
              <ul class="nav nav-tabs nav-tabs-line" data-plugin="nav-tabs" role="tablist">
                <li class="active" role="presentation"><a data-toggle="tab" href="#bukuAjar" aria-controls="bukuAjar" role="tab" aria-expanded="true">Profil</a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane animation-slide-left active" id="bukuAjar" role="tabpanel">
                  <table class="table table-stiped">
                    <tr>
                      <th style="width: 150px">
                        Nama dan Gelar
                      </th>
                      <td>
                        <?php echo $data->dosen ?>
                      </td>
                    </tr>
                    <tr>
                      <th>
                        Jabatan Akademik
                      </th>
                      <td>
                        <?php echo $data->jabatan_akademik ?>
                      </td>
                    </tr>
                    <tr>
                      <th>Pangkat &amp; Golongan</th>
                      <td><?php echo $data->pangkat_golongan ?></td>
                    </tr>
                    <tr>
                      <th>Bidang Keahlian</th>
                      <td><?php echo $data->bidang_keahlian ?></td>
                    </tr>
                    <tr>
                      <th>Kaprodi</th>
                      <td><?php echo $data->nama_program_studi ?></td>
                    </tr>
                    <tr>
                      <th>Fakultas</th>
                      <td><?php echo $data->nama_fakultas ?></td>
                    </tr>
                  </table>
                </div>
              </div>
              <br>
              <div class="text-center">
                <a href="<?php echo site_url('/') ?>">
                  <button type="button" onclick="goBack()" class="btn btn-danger"><i class="fa fa-arrow-left"></i>&nbsp; Kembali</button>
                    <script>
                      function goBack() {
                        window.history.back();
                      }
                    </script>
                </a>
              </div>
            </div>
          </div>
          <!-- End Panel -->
        </div>
      </div>
  </div>

  <div class="bbm page-container-preview mm-page mm-slideout" id="page-container">
    <section id="block-ac94e6846810e432" class="sec-footer4">
                    <div class="bg">
                        <div class="content" style="background-color: #5C5965;">
                            <div class="container padding-top-30 padding-bot-30" >
                                <div class="row row-1">
                                    <div class="col-xs-12 col-sm-2 col-md-2 offset-md-2 col-lg-1 offset-lg-3 footer-col-left">
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

                                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 footer4">
                                        <div class="grid-shortcodes row grid-block-text grid-xs-1 items-count-1">
                                            <div class="grid-shortcodes-item col-xs">
                                                <div class="shortcode-text">
                                                    <p><a href="#" style="color: #D3D3D3">Portal UMM</a>
                                                    </p>
                                                    <p><a href="#" style="color: #D3D3D3">SIMUTU</a>
                                                    </p>
                                                    <p><a href="#" style="color: #D3D3D3">SIMDOSPRES</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 footer4">
                                        <div class="grid-shortcodes row grid-block-text grid-xs-1 items-count-1">
                                            <div class="grid-shortcodes-item col-xs">
                                                <div class="shortcode-text">
                                                    <p><a href="#" style="color: #D3D3D3">Portal DPPM</a>
                                                    </p>
                                                    <p><a href="#" style="color: #D3D3D3">Portal HKI</a>
                                                    </p>
                                                    <p><a href="#" style="color: #D3D3D3">Portal BKMA</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 footer4">
                                        <div class="grid-shortcodes row grid-block-text grid-xs-1 items-count-1">
                                            <div class="grid-shortcodes-item col-xs">
                                                <div class="shortcode-text">
                                                    <p><a href="#" style="color: #D3D3D3">E-Library</a>
                                                    </p>
                                                    <p><a href="#" style="color: #D3D3D3">E-Jurnal</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row row-2">
                                    <div class="col-xs-12 padding-bot-20 text-center">
                                        <div class="grid-shortcodes row grid-block-line grid-xs-1 items-count-1">
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
                                                    <h4 style="color: white">© Copyright <?php echo date('Y') ?> SIM-Dospres - All Rights Reserved. Website by Semicolon;</h4>
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
<script type="text/javascript" src="<?php echo base_url() ?>private/plugins/jqplot/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>public/global/vendor/bootstrap/bootstrap.min.js"></script>
</body>
</html>
