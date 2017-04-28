<?php $sess = $this->mauth->getSession() ?>
<?php $level = ($sess['login_level'] == 2 ? 'dppm' : 'dosen'); // level 2 adalah dppm; 4 adalah dosen ?>
<?php $this->load->view('themes/'.$level.'/header'); ?>
<?php $this->load->view('themes/'.$level.'/sidebar'); ?>

<div class="page animsition">
    <div class="page-header">
        <h1 class="page-title">Kelola Penelitian Internal </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('dashboard')?>">Dashboard</a></li>
            <li><a href="<?php echo base_url('penelitian-internal')?>">Penelitian Internal</a></li>
            <li class="active">Detail</li>
        </ol>
    </div>
    <div class="page-content">
      <!-- Panel -->
      <div class="panel panel-bordered panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Detail Penelitian Internal</h3>
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
          <form action="<?php echo site_url('penelitian-internal/edit/'.$data->id_penelitian) ?>" method="post" enctype="multipart/form-data">
            <table class="table table-bordered table-striped">
                <tr style="width: 120px;">
                  <th>Judul</th>
                  <td>
                      <textarea name="dt[judul]" class="form-control"><?php echo $data->judul ?></textarea>
                  </td>
                </tr>
                <tr>
                    <th>Ketua</th>
                    <td><?php echo $data->dosen ?></td>
                </tr>
                <tr>
                    <th>Anggota</th>
                    <td>
                      <textarea name="dt[nama_anggota]" class="form-control"><?php echo $data->nama_anggota ?></textarea>
                    </td>
                </tr>
                <tr>
                    <th>Bidang Penelitian</th>
                    <td>
                      <textarea name="dt[bidang_penelitian]" class="form-control"><?php echo $data->bidang_penelitian ?></textarea>
                    </td>
                </tr>
                <tr>
                    <th>Bidang Penelitian Lain</th>
                    <td>
                      <textarea name="dt[bidang_penelitian_lain]" class="form-control"><?php echo $data->bidang_penelitian_lain ?></textarea>
                    </td>
                </tr>
                <tr>
                    <th>Tujuan Sosial Ekonomi</th>
                    <td>
                      <textarea name="dt[tujuan_sosial_ekonomi]" class="form-control"><?php echo $data->tujuan_sosial_ekonomi ?></textarea>
                    </td>
                </tr>
                <tr>
                    <th>Tujuan Sosial Ekonomi Lain</th>
                    <td>
                      <textarea name="dt[tujuan_sosial_ekonomi_lain]" class="form-control"><?php echo $data->tujuan_sosial_ekonomi_lain ?></textarea>
                    </td>
                </tr>
                <tr>
                    <th>Sumber Dana</th>
                    <td>
                      <select name="dt[sumber_dana]" class="form-control" required>
                        <option value="">-- Pilih --</option>
                        <option value="Dalam Negeri" <?php echo ($data->sumber_dana=='Dalam Negeri'?'selected':'') ?>>Dalam Negeri</option>
                        <option value="Luar Negeri / Asing" <?php echo ($data->sumber_dana=='Luar Negeri / Asing'?'selected':'') ?>>Luar Negeri / Asing</option>
                      </select>
                    </td>
                </tr>
                <tr>
                    <th>Jenis Penelitian</th>
                    <td>
                      <select name="dt[jenis_penelitian]" class="form-control" required>
                        <option value="">-- Pilih --</option>
                        <option value="Penelitian Dasar" <?php echo ($data->jenis_penelitian=='Penelitian Dasar'?'selected':'') ?>>Penelitian Dasar</option>
                        <option value="Penelitian Terapan" <?php echo ($data->jenis_penelitian=='Penelitian Terapan'?'selected':'') ?>>Penelitian Terapan</option>
                        <option value="Pengembangan Experimental" <?php echo ($data->jenis_penelitian=='Pengembangan Experimental'?'selected':'') ?>>Pengembangan Experimental</option>
                      </select>
                    </td>
                </tr>
                <tr>
                    <th>Institusi Sumber Dana</th>
                    <td>
                      <input type="text" name="dt[institusi_sumber_dana]" class="form-control" value="<?php echo $data->institusi_sumber_dana ?>">
                    </td>
                </tr>
                <tr>
                    <th>Tahun</th>
                    <td><input type="number" min="1945" name="dt[tahun]" class="form-control" value="<?php echo $data->tahun ?>"></td>
                </tr>
                <tr>
                    <th>File Bukti</th>
                    <td class="link">
                      <input type="file" name="file" class="form-control">
                      <span class="help-block">
                        Sistem hanya menerima file yang berekstensi <strong>*.PDF</strong>
                      </span>
                      <?php if(!empty($data->file)){ ?>
                      <a href="<?php echo base_url('private/uploads/penelitian-internal/'.$data->file) ?>" target="_blank"><i class="fa fa-file-pdf-o"></i> <?php echo $data->file ?></a>
                      <br> Jika Anda tidak ingin mengganti file bukti, abaikan form ini.
                      <?php } ?>
                    </td>
                </tr>
            </table>
            <div class="text-right link">
              <a href="<?php echo site_url('penelitian-internal/remove/'.$data->id_penelitian) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus ini? Jika Anda memilih YA, proses tidak dapat dibatalkan')">
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