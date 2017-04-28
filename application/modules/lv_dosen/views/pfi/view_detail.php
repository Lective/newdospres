<?php $sess = $this->mauth->getSession() ?>
<?php $level = ($sess['login_level'] == 2 ? 'dppm' : 'dosen'); // level 2 adalah dppm; 4 adalah dosen ?>
<?php $this->load->view('themes/'.$level.'/header'); ?>
<?php $this->load->view('themes/'.$level.'/sidebar'); ?>

<div class="page animsition">
    <div class="page-header">
        <h1 class="page-title">Kelola Pemakalah Forum Ilmiah</h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('dashboard')?>">Dashboard</a></li>
            <li><a href="<?php echo base_url('forum-ilmiah')?>">Pemakalah Forum Ilmiah</a></li>
            <li class="active">Detail</li>
        </ol>
    </div>
    <div class="page-content">
      <!-- Panel -->
      <div class="panel panel-bordered panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Detail Pemakalah Forum Ilmiah</h3>
            <div class="panel-actions link">
                <a href="<?php echo base_url('forum-ilmiah')?>">
                <button class="btn btn-danger" type="button">
                  <i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali
                </button>
                </a>
            </div>
        </div>
        <div class="panel-body">
          <?=$this->session->flashdata('notif')?>
          <form action="<?php echo site_url('forum-ilmiah/edit/'.$data->id_pemakalah_forum_ilmiah) ?>" method="post" enctype="multipart/form-data">
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Dosen</th>
                    <td><?php echo $data->dosen ?></td>
                </tr>
                <tr>
                  <th style="width: 120px;">Judul Makalah</th>
                  <td>
                      <textarea name="dt[judul_pemakalah]" class="form-control"><?php echo $data->judul_pemakalah ?></textarea>
                  </td>
                </tr>
                <tr>
                    <th>Status Pemakalah</th>
                    <td>
                      <select name="dt[status_pemakalah]" class="form-control" required>
                        <option value="">-- Pilih --</option>
                        <option value="Pemakalah Biasa" <?php echo ($data->status_pemakalah=='Pemakalah Biasa'?'selected':'') ?>>Pemakalah Biasa</option>
                        <option value="Invited / Keynote Speaker" <?php echo ($data->status_pemakalah=='Invited / Keynote Speaker'?'selected':'') ?>>Invited / Keynote Speaker</option>
                    </select>
                    </td>
                </tr>
                <tr>
                  <th>Nama Forum</th>
                  <td>
                      <textarea name="dt[nama_forum]" class="form-control"><?php echo $data->nama_forum ?></textarea>
                  </td>
                </tr>
                <tr>
                  <th>Institusi Penyelenggara</th>
                  <td>
                      <textarea name="dt[institusi_penyelenggara]" class="form-control"><?php echo $data->institusi_penyelenggara ?></textarea>
                  </td>
                </tr>
                <tr>
                  <th>Tanggal Pelaksanaan</th>
                  <td>
                      <div class="input-daterange">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="icon md-calendar" aria-hidden="true"></i>
                          </span>
                          <input type="text" class="form-control datepicker" name="dt[tgl_mulai_pelaksanaan]" value="<?php echo $data->tgl_mulai_pelaksanaan ?>">
                        </div>
                        <div class="input-group">
                          <span class="input-group-addon">Sampai</span>
                          <input type="text" class="form-control datepicker" name="dt[tgl_akhir_pelaksanaan]" value="<?php echo $data->tgl_akhir_pelaksanaan ?>">
                        </div>
                      </div>
                  </td>
                </tr>
                <tr>
                  <th>Tempat Pelaksanaan</th>
                  <td>
                      <textarea name="dt[tempat_pelaksanaan]" class="form-control"><?php echo $data->tempat_pelaksanaan ?></textarea>
                  </td>
                </tr>
                <tr>
                    <th>Status Berkas Makalah</th>
                    <td>
                      <select name="dt[kd_sts_berkas_makalah]" class="form-control" required>
                        <option value="">-- Pilih --</option>
                        <option value="1" <?php echo ($data->kd_sts_berkas_makalah==1?'selected':'') ?>>Lengkap</option>
                        <option value="0" <?php echo ($data->kd_sts_berkas_makalah==0?'selected':'') ?>>Belum Lengkap</option>
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
                      <a href="<?php echo base_url('private/uploads/forum-ilmiah/'.$data->file) ?>" target="_blank"><i class="fa fa-file-pdf-o"></i> <?php echo $data->file ?></a>
                      <br> Jika Anda tidak ingin mengganti file bukti, abaikan form ini.
                      <?php } ?>
                    </td>
                </tr>
            </table>
            <div class="text-right link">
              <a href="<?php echo site_url('forum-ilmiah/remove/'.$data->id_pemakalah_forum_ilmiah) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus ini? Jika Anda memilih YA, proses tidak dapat dibatalkan')">
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
<script type="text/javascript">
  $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
        autoclose:true
    });
</script>
<?php $this->load->view('themes/footer'); ?>