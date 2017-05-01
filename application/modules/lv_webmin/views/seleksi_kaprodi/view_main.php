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
                <select class="form-control" style="width: 150px;" onchange="window.location.href='<?php echo site_url('buku-ajar?tahun=') ?>'+this.value">
                    <option value="">-- pilih tahun --</option>
                    <?php foreach ($listTahun as $d): ?>
                        <option value="<?php echo $d->tahun ?>" <?php echo ($d->tahun == $selectTahun?'selected':'') ?>>tahun <?php echo $d->tahun ?></option>
                    <?php endforeach ?>
                </select>
            </h3>
            <div class="panel-actions link">
                <button class="btn btn-info" data-target="#tambahData" data-toggle="modal" type="button" >
                  <i class="icon wb-plus" aria-hidden="true"></i> Tambah Data
                </button>
            </div>
        </div>
        <div class="panel-body">
          <?php if($alert) echo ($alert->status == 'success' ? showAlertSuccess($alert->message) : showAlertDanger($alert->message));  ?>
          <table class="table table-hover table-striped dataTable" role="grid" data-plugin="dataTable">
            <thead>
              <tr>
                <th class="text-center" valign="middle" style="width: 30px;">No</th>
                <th>Dosen</th>
                <th>Kaprodi</th>
                <th>Fakultas</th>
                <th>Makalah</th>
                <th style="width: 150px">Aksi</th>
              </tr>
            </thead>
            <tbody>
             <?php $no=0; foreach ($data as $d) { ?>
              <tr>
                <td class="text-center"><?php echo ++$no; ?></td>
                <td><?php echo $d->dosen ?></td>
                <td><?php echo $d->nama_program_studi ?></td>
                <td><?php echo $d->nama_fakultas ?></td>
                <td class="link">
                    <a href="<?php echo base_url('private/uploads/formulir-kaprodi/'.$d->file_makalah) ?>" target="_blank">
                        <i class="fa fa-file-pdf-o"></i> Unduh
                    </a>
                </td>
                <td class="link">
                    <a href="<?php echo site_url('webmin/seleksi-kaprodi/detail/'.$d->id_formulir_kaprodi) ?>" class="btn btn-xs btn-warning">
                        <i class="fa fa-credit-card"></i> Detail
                    </a>
                    <a href="<?php echo site_url('webmin/seleksi-kaprodi/reg/'.$d->nidn) ?>" class="btn btn-xs btn-success">
                        <i class="fa fa-edit"></i> Daftarkan
                    </a>
                </td>
              </tr>
            <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
      <!-- End Panel -->
    </div>
</div>

<!-- Modal -->
<div class="modal fade modal-super-scaled modal-primary" id="tambahData" aria-hidden="true" aria-labelledby="tambahData" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title text-center">Tambah Data Seleksi Calon Kaprodi Berprestasi</h4>
            </div>
            <div class="modal-body"><br>
                <form action="<?php echo base_url('webmin/seleksi-kaprodi/add')?>" class="form-horizontal" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="control-label col-sm-3">Dosen</label>
                        <div class="col-sm-8">
                            <select name="nidn" class="form-control" style="width: 100%" required>
                                <option value="">Pilih</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Jabatan Akademik</label>
                        <div class="col-sm-8">
                            <input type="text" name="dt[jabatan_akademik]" class="form-control" placeholder="Masukkan jabatan Akademik" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Pangkat/Golongan</label>
                        <div class="col-sm-8">
                            <input type="text" name="dt[pangkat_golongan]" class="form-control" placeholder="Masukkan Pangkat & Golongan" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Tempat Lahir</label>
                        <div class="col-sm-8">
                            <input type="text" name="dt[tempat_lahir]" class="form-control" placeholder="Masukkan Tempat Lahir" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Tanggal Lahir</label>
                        <div class="col-sm-8">
                            <input type="text" name="dt[tanggal_lahir]" class="form-control" data-plugin="datepicker" data-date-format="yyyy-mm-dd" required>
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="control-label col-sm-3">Jenis kelamin</label>
                        <div class="col-sm-8">
                            <input type="radio" name="dt[jenis_kelamin]" value="Laki-Laki" required> 
                            <label for="laki-laki">Laki-Laki</label>
                            
                            <input type="radio" name="dt[jenis_kelamin]" value="Perempuan" required> 
                            <label for="perempuan">Perempuan</label>
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="control-label col-sm-3">Bidang Keahlian</label>
                        <div class="col-sm-8">
                            <input type="text" name="dt[bidang_keahlian]" class="form-control" placeholder="Masukkan Bidang Keahlian" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-sm-3">No. HP/Telp</label>
                        <div class="col-sm-4">
                            <input type="number" min="0" name="dt[no_hp]" class="form-control" placeholder="Masukkan No HP/Tlep" required>
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="control-label col-sm-3">Alamat E-mail</label>
                        <div class="col-sm-8">
                            <input type="email" name="dt[email]" class="form-control" placeholder="Masukkan Alamat E-mail" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">File Makalah</label>
                        <div class="col-sm-9">
                            <input type="file" name="file" class="form-control" required>
                            <span class="help-block">
                                Sistem hanya menerima file yang berekstensi <strong>*.PDF</strong> dan max <strong style="color: red">5 MB</strong>
                              </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-3">Tahun</label>
                        <div class="col-sm-4">
                            <input type="number" min="1945" name="dt[tahun]" value="<?php echo date('Y') ?>" class="form-control " placeholder="Masukkan Tahun" required> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Fakultas</label>
                        <div class="col-sm-4">
                            <select class="form-control" name="dt[id_fakultas]" required>
                                <option value="">-- Pilih --</option>
                            <?php $no=0; foreach ($fk as $daf) { ?>
                                <option value="<?php echo $daf->id_fakultas ?>" ><?php echo $daf->nama_fakultas ?></option>
                                <?php } ?>
                              </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Program Studi</label>
                        <div class="col-sm-4">
                            <select class="form-control" name="dt[id_program_studi]" required>
                                <option value="">-- Pilih --</option>
                            <?php $no=0; foreach ($prodi as $dapodi) { ?>
                                <option value="<?php echo $dapodi->id_program_studi ?>" ><?php echo $dapodi->nama_program_studi ?></option>
                                <?php } ?>
                              </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-9 col-sm-offset-3">
                            <div id="btnAction">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-send"></i>&nbsp; Tambah</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i>&nbsp; Batal</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->
<?php $this->load->view('themes/footer-script'); ?>
<script type="text/javascript">
    $("select[name=nidn]").select2({
        ajax: {
        url: "<?php echo api_url('caridosen') ?>",
        dataType: 'json',
        delay: 250,
        data: function (params) {
          return {
            q: params.term, // search term
            page: params.page
          };
        },
        processResults: function (data, params) {
          return {
            results: $.map(data.items, function(obj) {
                    return { id: obj.nidn, text: obj.nama };
                })
            };
        },
        cache: true
      },
    dropdownParent: $("#tambahData")
  });
</script>
<?php $this->load->view('themes/footer'); ?>