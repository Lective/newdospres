<?php $this->load->view('themes/dppm/header'); ?>
<?php $this->load->view('themes/dppm/sidebar'); ?>

<div class="page animsition">
    <div class="page-header">
        <h1 class="page-title">Kelola Buku Ajar </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('dashboard')?>">Dashboard</a></li>
            <li><a href="<?php echo base_url('buku-ajar')?>">Buku Ajar</a></li>
            <li class="active">Detail</li>
        </ol>
    </div>
    <div class="page-content">
      <!-- Panel -->
      <div class="panel panel-bordered panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Detail Buku Ajar</h3>
            <div class="panel-actions">
                <button class="btn btn-danger" type="button">
                  <i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali
                </button>
            </div>
        </div>
        <div class="panel-body">
          <table class="table table-hover table-bordered table-striped">
              <tr>
                <th style="width: 120px;">Buku</th>
                <td><?php echo $data->judul ?></td>
              </tr>
              <tr>
                  <th>Dosen</th>
                  <td>-</td>
              </tr>
          </table>
        </div>
      </div>
      <!-- End Panel -->
    </div>
</div>

<?php $this->load->view('themes/footer'); ?>
<?php $this->load->view('themes/footer-script'); ?>