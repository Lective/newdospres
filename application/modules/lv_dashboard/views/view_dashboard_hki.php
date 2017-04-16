<?php $this->load->view('themes/hki/header'); ?>
<?php $this->load->view('themes/hki/sidebar'); ?>

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
            <a style="text-decoration: none;" href="<?php echo base_url('#')?>">
            <div class="widget">
              <div class="widget-content padding-30 bg-grey-700">
                <div class="widget-watermark darker font-size-60 margin-15"><i class="icon wb-copy" aria-hidden="true"></i></div>
                <div class="counter counter-md counter-inverse text-left">
                  <div class="counter-number-group">
                    <span class="counter-number-related text-capitalize">Penelitian Dilitabmas</span>
                  </div>
                  <div class="counter-label text-capitalize">Menu Kelola / Penelitian Nasional</div>
                </div>
              </div>
            </div>
            </a>
            <!-- End Widget -->
          </div>

          <div class="col-sm-6 txt-dc-none">
            <!-- Widget -->
            <a style="text-decoration: none;" href="<?php echo base_url('#')?>">
            <div class="widget">
              <div class="widget-content padding-30 bg-success">
                <div class="widget-watermark darker font-size-60 margin-15"><i class="icon wb-star-half" aria-hidden="true"></i></div>
                <div class="counter counter-md counter-inverse text-left">
                  <div class="counter-number-group">
                    <span class="counter-number-related text-capitalize">Penelitian Non-dilitabmas</span>
                  </div>
                  <div class="counter-label text-capitalize">Menu Kelola / Penelitian Lain</div>
                </div>
              </div>
            </div>
            </a>
            <!-- End Widget -->
          </div>

          <div class="col-sm-6 txt-dc-none">
            <!-- Widget -->
            <a style="text-decoration: none;" href="<?php echo base_url('#')?>">
            <div class="widget">
              <div class="widget-content padding-30 bg-info">
                <div class="widget-watermark darker font-size-60 margin-15"><i class="icon fa fa-users" aria-hidden="true"></i></div>
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
            <a style="text-decoration: none;" href="#">
            <div class="widget">
              <div class="widget-content padding-30 bg-warning">
                <div class="widget-watermark darker font-size-60 margin-15"><i class="icon fa fa-users" aria-hidden="true"></i></div>
                <div class="counter counter-md counter-inverse text-left">
                  <div class="counter-number-group">
                    <span class="counter-number-related text-capitalize">Pemakalah</span>
                  </div>
                  <div class="counter-label text-capitalize">Menu Kelola / Pemakalah Forum Ilmiah</div>
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