<?php $this->load->view('themes/webmin/header'); ?>
<?php $this->load->view('themes/webmin/sidebar'); ?>

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
            <a style="text-decoration: none;" href="<?php echo base_url('laporan/dosen-berprestasi') ?>">
            <div class="widget">
              <div class="widget-content padding-30 bg-purple-600">
                <div class="widget-watermark darker font-size-60 margin-15"><i class="icon fa fa-print" aria-hidden="true"></i></div>
                <div class="counter counter-md counter-inverse text-left">
                  <div class="counter-number-group">
                    <span class="counter-number-related text-capitalize">Laporan</span>
                  </div>
                  <div class="counter-label text-capitalize">Menu Umum / Laporan Dosen Berprestasi</div>
                </div>
              </div>
            </div>
            </a>
            <!-- End Widget -->
          </div>

          <div class="col-sm-6 txt-dc-none">
            <!-- Widget -->
            <a style="text-decoration: none;" href="<?php echo base_url('laporan/kaprodi-berprestasi')?>">
            <div class="widget">
              <div class="widget-content padding-30 bg-grey-700">
                <div class="widget-watermark darker font-size-60 margin-15"><i class="icon fa fa-print" aria-hidden="true"></i></div>
                <div class="counter counter-md counter-inverse text-left">
                  <div class="counter-number-group">
                    <span class="counter-number-related text-capitalize">Laporan</span>
                  </div>
                  <div class="counter-label text-capitalize">Menu Umum / Laporan Calon Kaprodi Berprestasi</div>
                </div>
              </div>
            </div>
            </a>
            <!-- End Widget -->
          </div>

          <div class="col-sm-6 txt-dc-none">
            <!-- Widget -->
            <a style="text-decoration: none;" href="<?php echo base_url('webmin/prestasi-unggul')?>">
            <div class="widget">
              <div class="widget-content padding-30 bg-grey-500">
                <div class="widget-watermark darker font-size-60 margin-15"><i class="icon wb-star-half" aria-hidden="true"></i></div>
                <div class="counter counter-md counter-inverse text-left">
                  <div class="counter-number-group">
                    <span class="counter-number-related text-capitalize">Formulir Prestasi Unggul</span>
                  </div>
                  <div class="counter-label text-capitalize">Dosen Berprestasi / Formulir Prestasi Unggul</div>
                </div>
              </div>
            </div>
            </a>
            <!-- End Widget -->
          </div>

          <div class="col-sm-6 txt-dc-none">
            <!-- Widget -->
            <a style="text-decoration: none;" href="<?php echo base_url('webmin/seleksi-dosen')?>">
            <div class="widget">
              <div class="widget-content padding-30 bg-success">
                <div class="widget-watermark darker font-size-60 margin-15"><i class="icon wb-users" aria-hidden="true"></i></div>
                <div class="counter counter-md counter-inverse text-left">
                  <div class="counter-number-group">
                    <span class="counter-number-related text-capitalize">Seleksi Dosen Berprestasi</span>
                  </div>
                  <div class="counter-label text-capitalize">Dosen Berprestasi / Seleksi Dosen Berprestasi</div>
                </div>
              </div>
            </div>
            </a>
            <!-- End Widget -->
          </div>

          <div class="col-sm-6 txt-dc-none">
            <!-- Widget -->
            <a style="text-decoration: none;" href="<?php echo base_url('webmin/cadospres')?>">
            <div class="widget">
              <div class="widget-content padding-30 bg-info">
                <div class="widget-watermark darker font-size-60 margin-15"><i class="icon wb-user" aria-hidden="true"></i></div>
                <div class="counter counter-md counter-inverse text-left">
                  <div class="counter-number-group">
                    <span class="counter-number-related text-capitalize">Calon Dosen Berprestasi</span>
                  </div>
                  <div class="counter-label text-capitalize">Dosen Berprestasi / Calon Dosen Berprestasi</div>
                </div>
              </div>
            </div>
            </a>
            <!-- End Widget -->
          </div>

          <div class="col-sm-6 txt-dc-none">
            <!-- Widget -->
            <a style="text-decoration: none;" href="<?php echo base_url('webmin/seleksi-kaprodi')?>">
            <div class="widget">
              <div class="widget-content padding-30 bg-yellow-700">
                <div class="widget-watermark darker font-size-60 margin-15"><i class="icon wb-users" aria-hidden="true"></i></div>
                <div class="counter counter-md counter-inverse text-left">
                  <div class="counter-number-group">
                    <span class="counter-number-related text-capitalize">Seleksi Kaprodi Berprestasi</span>
                  </div>
                  <div class="counter-label text-capitalize">Kaprodi Berprestasi / Seleksi Kaprodi Berprestasi</div>
                </div>
              </div>
            </div>
            </a>
            <!-- End Widget -->
          </div>

          <div class="col-sm-6 txt-dc-none">
            <!-- Widget -->
            <a style="text-decoration: none;" href="<?php echo base_url('webmin/cakaprodi')?>">
            <div class="widget">
              <div class="widget-content padding-30 bg-warning">
                <div class="widget-watermark darker font-size-60 margin-15"><i class="icon wb-user" aria-hidden="true"></i></div>
                <div class="counter counter-md counter-inverse text-left">
                  <div class="counter-number-group">
                    <span class="counter-number-related text-capitalize">Calon Kaprodi Berprestasi</span>
                  </div>
                  <div class="counter-label text-capitalize">Menu Kelola / Calon Kaprodi Berprestasi</div>
                </div>
              </div>
            </div>
            </a>
            <!-- End Widget -->
          </div>

          <div class="col-sm-6 txt-dc-none">
            <!-- Widget -->
            <a style="text-decoration: none;" href="<?php echo base_url('webmin/managemen-akun')?>">
            <div class="widget">
              <div class="widget-content padding-30 bg-blue-700">
                <div class="widget-watermark darker font-size-60 margin-15"><i class="icon fa fa-gears" aria-hidden="true"></i></div>
                <div class="counter counter-md counter-inverse text-left">
                  <div class="counter-number-group">
                    <span class="counter-number-related text-capitalize">Managemen Akun</span>
                  </div>
                  <div class="counter-label text-capitalize">Menu Lain / Managemen Akun</div>
                </div>
              </div>
            </div>
            </a>
            <!-- End Widget -->
          </div>

          <div class="col-sm-6 txt-dc-none">
            <!-- Widget -->
            <a style="text-decoration: none;" href="<?php echo base_url('webmin/pengaturan')?>">
            <div class="widget">
              <div class="widget-content padding-30 bg-danger">
                <div class="widget-watermark darker font-size-60 margin-15"><i class="icon fa fa-gear" aria-hidden="true"></i></div>
                <div class="counter counter-md counter-inverse text-left">
                  <div class="counter-number-group">
                    <span class="counter-number-related text-capitalize">Pengaturan</span>
                  </div>
                  <div class="counter-label text-capitalize">Menu Lain / Pengaturan</div>
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