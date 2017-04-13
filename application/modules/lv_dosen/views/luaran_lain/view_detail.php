<?php $this->load->view('themes/dppm/header'); ?>
<?php $this->load->view('themes/dppm/sidebar'); ?>

<div class="page animsition">
    <div class="page-header">
        <h1 class="page-title">Kelola Luaran Lain </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('dashboard')?>">Dashboard</a></li>
            <li><a href="<?php echo base_url('luaran-lain')?>">Luaran Lain</a></li>
            <li class="active">Detail</li>
        </ol>
    </div>
    <div class="page-content">
      <!-- Panel -->
      <div class="panel panel-bordered panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Detail Luaran Lain</h3>
            <div class="panel-actions link">
                <a href="<?php echo base_url('luaran-lain')?>">
                <button class="btn btn-danger" type="button">
                  <i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali
                </button>
                </a>
            </div>
        </div>
        <div class="panel-body">
          <?=$this->session->flashdata('notif')?>
          <form action="<?php echo site_url('luaran-lain/edit/'.$data->id_luaran_lain) ?>" method="post" enctype="multipart/form-data">
            <table class="table table-bordered table-striped">
                <tr>
                  <th style="width: 120px;">Judul</th>
                  <td>
                      <textarea name="dt[judul_luaran]" class="form-control"><?php echo $data->judul_luaran ?></textarea>
                  </td>
                </tr>
                <tr>
                    <th>Dosen</th>
                    <td><?php echo $data->dosen ?></td>
                </tr>
                <tr>
                    <th>Jenis Luaran</th>
                    <td>
                      <select name="dt[jenis_luaran_lain]" class="form-control" required>
                          <option value="">-- Pilih --</option>
                          <option value="Model" <?php echo ($data->jenis_luaran_lain=='Model'?'selected':'') ?>>Model</option>
                          <option value="Teknologi Tepat Guna (TTG)" <?php echo ($data->jenis_luaran_lain=='Teknologi Tepat Guna (TTG)'?'selected':'') ?>>Teknologi Tepat Guna (TTG)</option>
                          <option value="Desain" <?php echo ($data->jenis_luaran_lain=='Desain'?'selected':'') ?>>Desain</option>
                          <option value="Prototype" <?php echo ($data->jenis_luaran_lain=='Prototype'?'selected':'') ?>>Prototype</option>
                          <option value="Rekayasa Sosial" <?php echo ($data->jenis_luaran_lain=='Rekayasa Sosial'?'selected':'') ?>>Rekayasa Sosial</option>
                          <option value="Kebijakan" <?php echo ($data->jenis_luaran_lain=='Kebijakan'?'selected':'') ?>>Kebijakan</option>
                      </select>
                    </td>
                </tr>
                <tr>
                    <th>Deskripsi</th>
                    <td>
                      <textarea name="dt[deskripsi]" class="form-control"><?php echo $data->deskripsi ?></textarea>
                    </td>
                </tr>
                <tr>
                    <th>Status Berkas Pendukung</th>
                    <td>
                      <select name="dt[kd_sts_berkas_pendukung]" class="form-control" required>
                        <option value="">-- Pilih --</option>
                        <option value="1" <?php echo ($data->kd_sts_berkas_pendukung==1?'selected':'') ?>>Lengkap</option>
                        <option value="0" <?php echo ($data->kd_sts_berkas_pendukung==0?'selected':'') ?>>Belum Lengkap</option>
                      </select>
                    </td>
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
                      <a href="<?php echo base_url('private/uploads/luaran-lain/'.$data->file) ?>" target="_blank"><i class="fa fa-file-pdf-o"></i> <?php echo $data->file ?></a>
                      <br> Jika Anda tidak ingin mengganti file bukti, abaikan form ini.
                      <?php } ?>
                    </td>
                </tr>
            </table>
            <div class="text-right link">
              <a href="<?php echo site_url('luaran-lain/remove/'.$data->id_luaran_lain) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus ini? Jika Anda memilih YA, proses tidak dapat dibatalkan')">
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