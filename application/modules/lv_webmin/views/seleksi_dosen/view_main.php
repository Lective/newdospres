<?php $this->load->view('themes/webmin/header'); ?>
<?php $this->load->view('themes/webmin/sidebar'); ?>

<div class="page animsition">
    <div class="page-header">
        <h1 class="page-title">Seleksi Calon Dosen Berprestasi</h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('dashboard')?>">Dosen Berprestasi</a></li>
            <li class="active">Seleksi Dosen Berprestasi</li>
        </ol>
    </div>
    <div class="page-content">
      <!-- Panel -->
      <div class="panel panel-bordered panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">
                <select class="form-control" style="width: 150px;" onchange="window.location.href='<?php echo site_url('webmin/seleksi-dosen?tahun=') ?>'+this.value">
                    <option value="">-- pilih tahun --</option>
                    <?php for ($i=date('Y'); $i>=2010; $i--): ?>
                        <option value="<?php echo $i ?>" <?php echo ($i == $selectTahun?'selected':'') ?>>tahun <?php echo $i ?></option>
                    <?php endfor ?>
                </select>
            </h3>
            <!-- <div class="panel-actions link">
                <button class="btn btn-info" data-target="#tambahData" data-toggle="modal" type="button" >
                  <i class="icon wb-plus" aria-hidden="true"></i> Tambah Data
                </button>
                <a href="<?php echo site_url('buku-ajar/sync') ?>">
                    <button class="btn btn-success" type="button" >
                      <i class="fa fa-refresh" aria-hidden="true"></i> Sync
                    </button>
                </a>
            </div> -->
        </div>
        <div class="panel-body">
          <?php if($alert) echo ($alert->status == 'success' ? showAlertSuccess($alert->message) : showAlertDanger($alert->message));  ?>
          <table class="table table-hover table-striped dataTable" role="grid" data-plugin="dataTable">
            <thead>
              <tr>
                <th class="text-center" valign="middle" style="width: 30px;">Peringkat</th>
                <th>Dosen</th>
                <th>Kinerja</th>
                <th>Nilai</th>
                <th width="25">Aksi</th>
              </tr>
            </thead>
            <tbody>
             <?php $no=0; foreach ($data as $d) { ?>
              <tr>
                <td class="text-center"><?php echo ++$no; ?></td>
                <td><?php echo $d['dosen'] ?></td>
                <td>
                    Buku Ajar: <?php echo $d['kinerja']['jml_buku'] ?><br>
                    HKI: <?php echo $d['kinerja']['jml_hki'] ?><br>
                    Pemakalah Forum Ilmiah: <?php echo $d['kinerja']['jml_pemakalah'] ?><br>
                    Luaran Lain: <?php echo $d['kinerja']['jml_luaran'] ?><br>
                    Penelitian Eksternal: <?php echo $d['kinerja']['jml_pen_eks'] ?><br>
                    Penelitian Internal: <?php echo $d['kinerja']['jml_pen_int'] ?>
                </td>
                <td><?php echo $d['poin']*100 ?></td>
                <td class="link">
                    <a href="<?php echo site_url('webmin/seleksi-dosen/reg/'.$d['nidn']) ?>" class="btn btn-xs btn-success">
                        <i class="fa fa-edit"></i> Daftarkan
                    </a>
                </td>
              </tr>
            <?php } ?>
            </tbody>
          </table>
          <br>
          <p class="help-block">
              Fitur seleksi calon dosen berprestasi ini menggunakan metode <i>Simple Additive Weighting (SAW)</i> dalam perangkingan kinerja dosen, sebagai pendukung keputusan.
          </p>
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
                <h4 class="modal-title text-center">Tambah Data Buku Ajar</h4>
            </div>
            <div class="modal-body"><br>
                <form action="<?php echo base_url('buku-ajar/add')?>" class="form-horizontal" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="control-label col-sm-3">Dosen</label>
                        <div class="col-sm-8">
                            <select name="dosen" class="form-control" style="width: 100%" required>
                                <option value="">Pilih</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Judul</label>
                        <div class="col-sm-8">
                            <input type="text" name="judul" class="form-control" placeholder="Masukkan Judul" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">ISBN</label>
                        <div class="col-sm-8">
                            <input type="text" name="isbn" class="form-control" placeholder="Masukkan ISBN" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Penerbit</label>
                        <div class="col-sm-8">
                            <input type="text" name="penerbit" class="form-control" placeholder="Masukkan Penerbit" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Keterangan Invalid</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" name="keterangan" class="keterangan" rows="4" placeholder="Masukkan Keterangan"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Jumlah Halaman</label>
                        <div class="col-sm-4">
                            <input type="number" min="1" name="jml_halaman" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Tahun</label>
                        <div class="col-sm-4">
                            <input type="number" min="1945" name="tahun" value="<?php echo date('Y') ?>" class="form-control " placeholder="Masukkan Tahun">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">File Bukti</label>
                        <div class="col-sm-9">
                            <input type="file" name="file" class="form-control">
                            <span class="help-block">
                                Scan buku atau cover buku, sistem hanya menerima file yang berekstensi <strong>*.PDF</strong>
                              </span>
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
<!-- <script type="text/javascript">
    $("select[name=dosen]").select2({
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
</script> -->
<?php $this->load->view('themes/footer'); ?>