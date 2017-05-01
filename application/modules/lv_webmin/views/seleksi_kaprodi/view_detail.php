<?php $this->load->view('themes/webmin/header'); ?>
<?php $this->load->view('themes/webmin/sidebar'); ?>

<div class="page animsition">
    <div class="page-header">
        <h1 class="page-title">Seleksi Kaprodi Berprestasi</h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('dashboard')?>">Kaprodi Berprestasi</a></li>
            <li class="active">Seleksi Kaprodi Berprestasi</li>
        </ol>
    </div>
    <div class="page-content">
      <!-- Panel -->
      <div class="panel panel-bordered panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">
                Detail Seleksi Calon Kaprodi Berprestasi
            </h3>
            <div class="panel-actions link">
                <a href="<?php echo site_url('webmin/seleksi-kaprodi') ?>">
                <button class="btn btn-danger" type="button">
                  <i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali
                </button>
                </a>
            </div>
        </div>
        <div class="panel-body">
          <?php if($alert) echo ($alert->status == 'success' ? showAlertSuccess($alert->message) : showAlertDanger($alert->message));  ?>
          <form action="<?php echo base_url('webmin/seleksi-kaprodi/edit/'.$data->id_formulir_kaprodi)?>" class="form-horizontal" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="control-label col-sm-3">Dosen</label>
                        <div class="col-sm-8">
                            <label class="control-label">
                                <?php echo $data->dosen ?>
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Jabatan Akademik</label>
                        <div class="col-sm-8">
                            <input type="text" name="dt[jabatan_akademik]" class="form-control" placeholder="Masukkan jabatan Akademik" value="<?php echo $data->jabatan_akademik ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Pangkat/Golongan</label>
                        <div class="col-sm-8">
                            <input type="text" name="dt[pangkat_golongan]" class="form-control" placeholder="Masukkan Pangkat & Golongan" value="<?php echo $data->pangkat_golongan ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Tempat Lahir</label>
                        <div class="col-sm-8">
                            <input type="text"  name="dt[tempat_lahir]" class="form-control" placeholder="Masukkan Tempat Lahir" value="<?php echo $data->tempat_lahir ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Tanggal Lahir</label>
                        <div class="col-sm-8">
                            <input type="text" name="dt[tanggal_lahir]" class="form-control" data-plugin="datepicker" data-date-format="yyyy-mm-dd" value="<?php echo $data->tanggal_lahir ?>" required>
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="control-label col-sm-3">Jenis kelamin</label>
                        <div class="col-sm-8">
                            <select name="dt[jenis_kelamin]" class="form-control" required> 
                                <option value="Laki-Laki" <?php echo ($data->jenis_kelamin=='Laki-Laki'?'selected':'') ?>>Laki-Laki</option>
                            
                                <option value="Perempuan" <?php echo ($data->jenis_kelamin=='Perempuan'?'selected':'') ?>>Perempuan</option>
                            </select>
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="control-label col-sm-3">Bidang Keahlian</label>
                        <div class="col-sm-8">
                            <input type="text" name="dt[bidang_keahlian]" class="form-control" placeholder="Masukkan Bidang Keahlian" value="<?php echo $data->bidang_keahlian ?>" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-sm-3">No. HP/Telp</label>
                        <div class="col-sm-4">
                            <input type="number" min="0" name="dt[no_hp]" class="form-control" placeholder="Masukkan No HP/Tlep" value="<?php echo $data->no_hp ?>" required>
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="control-label col-sm-3">Alamat E-mail</label>
                        <div class="col-sm-8">
                            <input type="email" name="dt[email]" class="form-control" placeholder="Masukkan Alamat E-mail" value="<?php echo $data->email ?>" required>
                        </div>
                    </div>
                    <div class="form-group link">
                        <label class="control-label col-sm-3">File Makalah</label>
                        <div class="col-sm-9">
                            <input type="file" name="file" class="form-control">
                            
                            
                            <span class="help-block">
                                <a href="<?php echo base_url('private/uploads/formulir-kaprodi/'.$data->file_makalah) ?>" target="_blank"><i class="fa fa-file-pdf-o"></i> <?php echo $data->file_makalah ?></a><br>
                                Sistem hanya menerima file yang berekstensi <strong>*.PDF</strong> dan max <strong style="color: red">5 MB</strong>. Abaikan form ini jika Anda tidak ingin mengganti file makalah
                              </span>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-3">Tahun</label>
                        <div class="col-sm-4">
                            <input type="number" name="dt[tahun]" value="<?php echo date('Y') ?>" class="form-control " placeholder="Masukkan Tahun" value="<?php echo $data->tahun ?>" min="1945" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Fakultas</label>
                        <div class="col-sm-4">
                            <select class="form-control" data-plugin="select2" name="dt[id_fakultas]" required>
                                <option value="">-- Pilih --</option>
                            <?php foreach ($fk as $daf) { ?>
                                <option value="<?php echo $daf->id_fakultas ?>" <?php echo ($data->id_fakultas==$daf->id_fakultas?'selected':'') ?>><?php echo $daf->nama_fakultas ?></option>
                                <?php } ?>
                              </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Program Studi</label>
                        <div class="col-sm-4">
                            <select class="form-control" data-plugin="select2" name="dt[id_program_studi]" required>
                                <option value="">-- Pilih --</option>
                            <?php foreach ($prodi as $dapodi) { ?>
                                <option value="<?php echo $dapodi->id_program_studi ?>" <?php echo ($data->id_program_studi==$dapodi->id_program_studi?'selected':'') ?>><?php echo $dapodi->nama_program_studi ?></option>
                                <?php } ?>
                              </select>
                        </div>
                    </div>
                    <div class="form-group link">
                        <div class="col-sm-9 col-sm-offset-3">
                            <div id="btnAction">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-send"></i>&nbsp; Simpan</button> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                <a href="<?php echo site_url('webmin/seleksi-kaprodi/remove/'.$data->id_formulir_kaprodi) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus ini? eksekusi ini tidak dapat dibatalkan jika sudah dihapus.');">
                                    <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i>&nbsp; Hapus</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
        </div>
      </div>
      <!-- End Panel -->
    </div>
</div>

<?php $this->load->view('themes/footer-script'); ?>
<?php $this->load->view('themes/footer'); ?>