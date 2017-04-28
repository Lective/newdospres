<?php $sess = $this->mauth->getSession() ?>
<?php $level = ($sess['login_level'] == 3 ? 'hki' : 'dosen'); // level 2 adalah dppm; 4 adalah dosen ?>
<?php $this->load->view('themes/'.$level.'/header'); ?>
<?php $this->load->view('themes/'.$level.'/sidebar'); ?>


<div class="page animsition">
    <div class="page-header">
        <h1 class="page-title">Kelola Hak Kekayaan Intelektual </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('dashboard')?>">Dashboard</a></li>
            <li><a href="<?php echo base_url('hki')?>">Luaran Lain</a></li>
            <li class="active">Detail</li>
        </ol>
    </div>
    <div class="page-content">
      <!-- Panel -->
      <div class="panel panel-bordered panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Detail Hak Kekayaan Intelektual</h3>
            <div class="panel-actions link">
                <a href="<?php echo base_url('hki')?>">
                <button class="btn btn-danger" type="button">
                  <i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali
                </button>
                </a>
            </div>
        </div>
        <div class="panel-body">
          <?=$this->session->flashdata('notif')?>
          <form action="<?php echo site_url('hki/edit/'.$data->id_hki) ?>" method="post" enctype="multipart/form-data">
            <table class="table table-bordered table-striped">
                <tr>
                  <th style="width: 120px;">Judul</th>
                  <td>
                      <textarea name="dt[judul_hki]" class="form-control"><?php echo $data->judul_hki ?></textarea>
                  </td>
                </tr>
                <tr>
                    <th>Dosen</th>
                    <td><?php echo $data->dosen ?></td>
                </tr>
                <tr>
                    <th>Jenis HKI</th>
                    <td>
                      <select name="dt[jenis_hki]" class="form-control" required>
                          <option value="">-- Pilih --</option>
                          <option value="Hak Cipta" <?php echo ($data->jenis_hki=='Hak Cipta'?'selected':'') ?>>Hak Cipta</option>
                          <option value="Paten" <?php echo ($data->jenis_hki=='Paten'?'selected':'') ?>>Paten</option>
                      </select>
                    </td>
                </tr>
                <tr>
                    <th>No. Pendaftaran</th>
                    <td>
                      <input type="text" name="dt[no_pendaftaran]" class="form-control" value="<?php echo $data->no_pendaftaran ?>">
                    </td>
                </tr>
                <tr>
                    <th>Status HKI</th>
                    <td>
                      <select name="dt[status_hki]" class="form-control" required>
                          <option value="">-- Pilih --</option>
                          <option value="Terdaftar" <?php echo ($data->status_hki=='Terdaftar'?'selected':'') ?>>Terdaftar</option>
                          <option value="Granted" <?php echo ($data->status_hki=='Granted'?'selected':'') ?>>Granted</option>
                      </select>
                    </td>
                </tr>
                <tr>
                    <th>No. HKI</th>
                    <td><input type="text" name="dt[no_hki]" class="form-control" value="<?php echo $data->no_hki ?>"></td>
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
                <tr>
                    <th>File Bukti</th>
                    <td class="link">
                      <input type="file" name="file" class="form-control">
                      <span class="help-block">
                        Sistem hanya menerima file yang berekstensi <strong>*.PDF</strong>
                      </span>
                      <?php if(!empty($data->file)){ ?>
                      <a href="<?php echo base_url('private/uploads/hki/'.$data->file) ?>" target="_blank"><i class="fa fa-file-pdf-o"></i> <?php echo $data->file ?></a>
                      <br> Jika Anda tidak ingin mengganti file bukti, abaikan form ini.
                      <?php } ?>
                    </td>
                </tr>
            </table>
            <div class="text-right link">
              <a href="<?php echo site_url('hki/remove/'.$data->id_hki) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus ini? Jika Anda memilih YA, proses tidak dapat dibatalkan')">
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

<?php $this->load->view('themes/footer'); ?>
<?php $this->load->view('themes/footer-script'); ?>