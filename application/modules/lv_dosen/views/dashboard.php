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
            <a style="text-decoration: none;" href="<?php echo base_url('#')?>">
            <div class="widget">
              <div class="widget-content padding-30 bg-grey-700">
                <div class="widget-watermark darker font-size-60 margin-15"><i class="icon wb-copy" aria-hidden="true"></i></div>
                <div class="counter counter-md counter-inverse text-left">
                  <div class="counter-number-group">
                    <span class="counter-number-related text-capitalize">Laporan</span>
                  </div>
                  <div class="counter-label text-capitalize">Menu Umum / Laporan</div>
                </div>
              </div>
            </div>
            </a>
            <!-- End Widget -->
          </div>

          <div class="col-sm-6 txt-dc-none">
            <!-- Widget -->
            <a style="text-decoration: none;" href="<?php echo base_url('buku-ajar')?>">
            <div class="widget">
              <div class="widget-content padding-30 bg-success">
                <div class="widget-watermark darker font-size-60 margin-15"><i class="icon wb-library" aria-hidden="true"></i></div>
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
            <a style="text-decoration: none;" href="<?php echo base_url('penunjang-penelitian')?>">
            <div class="widget">
              <div class="widget-content padding-30 bg-info">
                <div class="widget-watermark darker font-size-60 margin-15"><i class="icon wb-clipboard" aria-hidden="true"></i></div>
                <div class="counter counter-md counter-inverse text-left">
                  <div class="counter-number-group">
                    <span class="counter-number-related text-capitalize">Fasilitas Penunjang Penelitian</span>
                  </div>
                  <div class="counter-label text-capitalize">Menu Kelola / Fasilitas Penunjang Penelitian</div>
                </div>
              </div>
            </div>
            </a>
            <!-- End Widget -->
          </div>

          <div class="col-sm-6 txt-dc-none">
            <!-- Widget -->
            <a style="text-decoration: none;" href="<?php echo base_url('hki')?>">
            <div class="widget">
              <div class="widget-content padding-30 bg-warning">
                <div class="widget-watermark darker font-size-60 margin-15"><i class="icon wb-dashboard" aria-hidden="true"></i></div>
                <div class="counter counter-md counter-inverse text-left">
                  <div class="counter-number-group">
                    <span class="counter-number-related text-capitalize">Hak Kekayaana Intelektual</span>
                  </div>
                  <div class="counter-label text-capitalize">Menu Kelola / Hak Kekayaana Intelektual</div>
                </div>
              </div>
            </div>
            </a>
            <!-- End Widget -->
          </div>

          <div class="col-sm-6 txt-dc-none">
            <!-- Widget -->
            <a style="text-decoration: none;" href="<?php echo base_url('luaran-lain')?>">
            <div class="widget">
              <div class="widget-content padding-30 bg-danger">
                <div class="widget-watermark darker font-size-60 margin-15"><i class="icon wb-inbox" aria-hidden="true"></i></div>
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
            <a style="text-decoration: none;" href="<?php echo base_url('forum-ilmiah')?>">
            <div class="widget">
              <div class="widget-content padding-30 bg-purple-600">
                <div class="widget-watermark darker font-size-60 margin-15"><i class="icon wb-users" aria-hidden="true"></i></div>
                <div class="counter counter-md counter-inverse text-left">
                  <div class="counter-number-group">
                    <span class="counter-number-related text-capitalize">Pemakalah Forum ilmiah</span>
                  </div>
                  <div class="counter-label text-capitalize">Menu Kelola / Pemakalah Forum ilmiah</div>
                </div>
              </div>
            </div>
            </a>
            <!-- End Widget -->
          </div>

          <div class="col-sm-6 txt-dc-none">
            <!-- Widget -->
            <a style="text-decoration: none;" href="<?php echo base_url('hibah-ditlitabmas')?>">
            <div class="widget">
              <div class="widget-content padding-30 bg-grey-600">
                <div class="widget-watermark darker font-size-60 margin-15"><i class="icon wb-dropright" aria-hidden="true"></i></div>
                <div class="counter counter-md counter-inverse text-left">
                  <div class="counter-number-group">
                    <span class="counter-number-related text-capitalize">Penelitian Hibah Ditlitabmas</span>
                  </div>
                  <div class="counter-label text-capitalize">Menu Kelola / Penelitian Hibah Ditlitabmas</div>
                </div>
              </div>
            </div>
            </a>
            <!-- End Widget -->
          </div>

          <div class="col-sm-6 txt-dc-none">
            <!-- Widget -->
            <a style="text-decoration: none;" href="<?php echo base_url('hibah-non-ditlitabmas')?>">
            <div class="widget">
              <div class="widget-content padding-30 bg-yellow-700">
                <div class="widget-watermark darker font-size-60 margin-15"><i class="icon wb-dropleft" aria-hidden="true"></i></div>
                <div class="counter counter-md counter-inverse text-left">
                  <div class="counter-number-group">
                    <span class="counter-number-related text-capitalize">Penelitian Hibah Non Ditlitabmas</span>
                  </div>
                  <div class="counter-label text-capitalize">Menu Kelola / Penelitian Hibah Non Ditlitabmas</div>
                </div>
              </div>
            </div>
            </a>
            <!-- End Widget -->
          </div>
          
        </div>
    </div>
</div>

<?php $this->load->view('themes/footer'); ?>
<?php $this->load->view('themes/footer-script'); ?>