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
            <div class="panel-actions link">
                <a href="<?php echo base_url('buku-ajar')?>">
                <button class="btn btn-danger" type="button">
                  <i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali
                </button>
                </a>
            </div>
        </div>
        <div class="panel-body">
          <table class="table table-hover table-bordered table-striped">
              <tr>
                <th style="width: 120px;">Buku</th>
                <td>
                    <textarea name="dt[judul]" class="form-control"><?php echo $data->judul ?></textarea>
                </td>
              </tr>
              <tr>
                  <th>Penulis</th>
                  <td><?php echo $data->dosen ?></td>
              </tr>
              <tr>
                  <th>ISBN</th>
                  <td><input type="text" name="dt[isbn]" class="form-control" value="<?php echo $data->isbn ?>"></td>
              </tr>
              <tr>
                  <th>Jumlah Halaman</th>
                  <td><input type="number" min="1" name="dt[jml_halaman]" class="form-control" value="<?php echo $data->jml_halaman ?>"></td>
              </tr>
              <tr>
                  <th>Penerbit</th>
                  <td><input type="text" name="dt[penerbit]" class="form-control" value="<?php echo $data->penerbit ?>"></td>
              </tr>
              <tr>
                  <th>Tahun</th>
                  <td><input type="number" min="1945" name="dt[tahun]" class="form-control" value="<?php echo $data->tahun ?>"></td>
              </tr>
              <tr>
                  <th>Keterangan Invalid</th>
                  <td>
                    <textarea name="dt[keterangan_invalid]" class="form-control"><?php echo $data->keterangan_invalid ?></textarea>
                  </td>
              </tr>
          </table>
        </div>
      </div>
      <!-- End Panel -->
    </div>
</div>

<?php $this->load->view('themes/footer'); ?>
<?php $this->load->view('themes/footer-script'); ?>