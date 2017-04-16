<?php $this->load->view('themes/dppm/header'); ?>
<?php $this->load->view('themes/dppm/sidebar'); ?>

<div class="page animsition">
    <div class="page-header">
        <h1 class="page-title">Kelola Penunjang Penelitian </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('dashboard')?>">Dashboard</a></li>
            <li><a href="<?php echo base_url('penelitian-internal')?>">Penelitian</a></li>
            <li class="active">Detail</li>
        </ol>
    </div>
    <div class="page-content">
      <!-- Panel -->
      <div class="panel panel-bordered panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Detail Penunjang Penelitian</h3>
            <div class="panel-actions link">
                <a href="<?php echo base_url('penelitian-internal')?>">
                <button class="btn btn-danger" type="button">
                  <i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali
                </button>
                </a>
            </div>
        </div>
        <div class="panel-body">
          <?=$this->session->flashdata('notif')?>
          <form action="<?php echo site_url('penunjang-penelitian/edit/'.$data->id_penunjang) ?>" method="post">
            <table class="table table-bordered table-striped">
                <tr style="width: 120px;">
                  <th>Nama Unit</th>
                  <td>
                      <textarea name="dt[nama_unit]" class="form-control"><?php echo $data->nama_unit ?></textarea>
                  </td>
                </tr>
                <tr>
                    <th>No. SK Pendirian</th>
                    <td>
                      <textarea name="dt[no_sk_pendirian]" class="form-control"><?php echo $data->no_sk_pendirian ?></textarea>
                    </td>
                </tr>
                <tr>
                    <th>Fasilitas</th>
                    <td>
                      <textarea name="dt[fasilitas]" class="form-control"><?php echo $data->fasilitas ?></textarea>
                    </td>
                </tr>
                <tr>
                    <th>Status Penunjang</th>
                    <td>
                      <textarea name="dt[status_penunjang]" class="form-control"><?php echo $data->status_penunjang ?></textarea>
                    </td>
                </tr>
                <tr>
                    <th>Keterangan Invalid</th>
                    <td>
                      <textarea name="dt[keterangan_invalid]" class="form-control"><?php echo $data->keterangan_invalid ?></textarea>
                    </td>
                </tr>
            </table>
            <div class="text-right link">
              <a href="<?php echo site_url('penunjang-penelitian/remove/'.$data->id_penunjang) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus ini? Jika Anda memilih YA, proses tidak dapat dibatalkan')">
                <button class="btn btn-danger" type="button">
                  <i class="fa fa-trash"></i> Hapus
                </button>
              </a>
              <button class="btn btn-primary" type="submit">
                
                <i class="fa fa-edit"></i> Simpan Perubahan
              </button>
            </div>
          </form>
        </div>
      </div>
      <!-- End Panel -->
    </div>
</div>

<?php $this->load->view('themes/footer-script'); ?>
<?php $this->load->view('themes/footer'); ?>