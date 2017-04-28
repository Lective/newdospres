<?php $this->load->view('themes/dosen/header'); ?>
<?php $this->load->view('themes/dosen/sidebar'); ?>

<div class="page animsition">
    <div class="page-header">
        <h1 class="page-title">Dashboard </h1>
        <ol class="breadcrumb">
            <li><a href="#">Menu Umum</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </div>
    <div class="page-content">
        <div class="row">

          <div class="col-sm-6 txt-dc-none">
            <!-- Widget -->
            <a style="text-decoration: none;" href="<?php echo site_url('buku-ajar')?>">
            <div class="widget">
              <div class="widget-content padding-30 bg-primary">
                <div class="widget-watermark darker font-size-60 margin-15"><i class="icon wb-book" aria-hidden="true"></i></div>
                <div class="counter counter-md counter-inverse text-left">
                  <div class="counter-number-group">
                    <span class="counter-number-related text-capitalize">Buku Ajar</span>
                  </div>
                  <div class="counter-label text-capitalize">Menu Kelola / Buku Ajar</div>
                </div>
              </div>
            </div>
            </a>
            <!-- End Widget -->
          </div>

          <div class="col-sm-6 txt-dc-none">
            <!-- Widget -->
            <a style="text-decoration: none;" href="<?php echo site_url('penelitian-internal')?>">
            <div class="widget">
              <div class="widget-content padding-30 bg-warning">
                <div class="widget-watermark darker font-size-60 margin-15"><i class="icon wb-arrow-shrink" aria-hidden="true"></i></div>
                <div class="counter counter-md counter-inverse text-left">
                  <div class="counter-number-group">
                    <span class="counter-number-related text-capitalize">Penelitian Internal</span>
                  </div>
                  <div class="counter-label text-capitalize">Menu Kelola / Penelitian Internal</div>
                </div>
              </div>
            </div>
            </a>
            <!-- End Widget -->
          </div>

          <div class="col-sm-6 txt-dc-none">
            <!-- Widget -->
            <a style="text-decoration: none;" href="<?php echo site_url('penelitian-eksternal')?>">
            <div class="widget">
              <div class="widget-content padding-30 bg-danger">
                <div class="widget-watermark darker font-size-60 margin-15"><i class="icon wb-arrow-expand" aria-hidden="true"></i></div>
                <div class="counter counter-md counter-inverse text-left">
                  <div class="counter-number-group">
                    <span class="counter-number-related text-capitalize">Penelitian Eksternal</span>
                  </div>
                  <div class="counter-label text-capitalize">Menu Kelola / Penelitian Eksternal</div>
                </div>
              </div>
            </div>
            </a>
            <!-- End Widget -->
          </div>

          <div class="col-sm-6 txt-dc-none">
            <!-- Widget -->
            <a style="text-decoration: none;" href="<?php echo site_url('luaran-lain')?>">
            <div class="widget">
              <div class="widget-content padding-30 bg-info">
                <div class="widget-watermark darker font-size-60 margin-15"><i class="icon fa fa-line-chart" aria-hidden="true"></i></div>
                <div class="counter counter-md counter-inverse text-left">
                  <div class="counter-number-group">
                    <span class="counter-number-related text-capitalize">Luaran Lain</span>
                  </div>
                  <div class="counter-label text-capitalize">Menu Kelola / Luaran Lain</div>
                </div>
              </div>
            </div>
            </a>
            <!-- End Widget -->
          </div>

          <div class="col-sm-6 txt-dc-none">
            <!-- Widget -->
            <a style="text-decoration: none;" href="<?php echo site_url('forum-ilmiah') ?>">
            <div class="widget">
              <div class="widget-content padding-30 bg-grey-600">
                <div class="widget-watermark darker font-size-60 margin-15"><i class="icon wb-user" aria-hidden="true"></i></div>
                <div class="counter counter-md counter-inverse text-left">
                  <div class="counter-number-group">
                    <span class="counter-number-related text-capitalize">Pemakalah Forum</span>
                  </div>
                  <div class="counter-label text-capitalize">Menu Kelola / Pemakalah Forum Ilmiah</div>
                </div>
              </div>
            </div>
            </a>
            <!-- End Widget -->
          </div>

          <div class="col-sm-6 txt-dc-none">
            <!-- Widget -->
            <a style="text-decoration: none;" href="<?php echo site_url('penunjang-penelitian')?>">
            <div class="widget">
              <div class="widget-content padding-30 bg-success">
                <div class="widget-watermark darker font-size-60 margin-15"><i class="icon fa fa-eyedropper" aria-hidden="true"></i></div>
                <div class="counter counter-md counter-inverse text-left">
                  <div class="counter-number-group">
                    <span class="counter-number-related text-capitalize">Penelitian Internal</span>
                  </div>
                  <div class="counter-label text-capitalize">Menu Kelola / Penelitian Internal</div>
                </div>
              </div>
            </div>
            </a>
            <!-- End Widget -->
          </div>
          
        </div>
    </div>
</div>

<?php $this->load->view('themes/footer-script'); ?>
<?php $this->load->view('themes/footer'); ?>