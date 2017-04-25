<?php $this->load->view('themes/home/header'); ?><br><br>
<body class="page-profile">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-primary">
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
                              <img class="img-responsive" src="<?php echo base_url() ?>public/frontend/avatar1.png" alt="...">
                          </a>
                          <h4 class="profile-user">Terrance arnold</h4>
                          <p>NIDN</p>
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
                <li class="active" role="presentation"><a data-toggle="tab" href="#bukuAjar" aria-controls="bukuAjar" role="tab" aria-expanded="true">Buku Ajar</a></li>
                <li role="presentation" class=""><a data-toggle="tab" href="#penelitianEksternal" aria-controls="penelitianEksternal" role="tab" aria-expanded="false">Penelitian Eksternal</a></li>
                <li role="presentation" class=""><a data-toggle="tab" href="#luaranLain" aria-controls="luaranLain" role="tab" aria-expanded="false">Luaran Lain</a></li>
                <li role="presentation" class=""><a data-toggle="tab" href="#pemakalahForum" aria-controls="pemakalahForum" role="tab" aria-expanded="false">Pemakalah Forum</a></li>
                <li role="presentation" class=""><a data-toggle="tab" href="#hki" aria-controls="hki" role="tab" aria-expanded="false">Hak Kekayaan Intelektual</a></li>

              <li class="nav-tabs-autoline" style="transition-duration: 0.5s, 1s; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1), cubic-bezier(0.4, 0, 0.2, 1); left: 0px; width: 122px;"></li></ul>
              <div class="tab-content">
                <div class="tab-pane animation-slide-left active" id="bukuAjar" role="tabpanel">
                  <h1>ini Buku Ajar</h1>
                </div>
                <div class="tab-pane animation-slide-left" id="penelitianEksternal" role="tabpanel">
                  <h1>ini Penelitian Eksternal</h1>
                </div>
                <div class="tab-pane animation-slide-left" id="luaranLain" role="tabpanel">
          <h1>ini Luaran Lain</h1>
                </div>
                <div class="tab-pane animation-slide-left" id="pemakalahForum" role="tabpanel">
          <h1>ini Pemakalah Forum</h1>
                </div>
                <div class="tab-pane animation-slide-left" id="hki" role="tabpanel">
          <h1>ini HKI</h1>
                </div>
              </div>
            </div>
          </div>
          <!-- End Panel -->
        </div>
      </div>
  </div>
<script type="text/javascript" src="<?php echo base_url() ?>private/plugins/jqplot/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>public/global/vendor/bootstrap/bootstrap.min.js"></script>
</body>
</html>
