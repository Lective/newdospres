<?php $this->load->view('themes/hki/header'); ?>
<?php $this->load->view('themes/hki/sidebar'); ?>

<div class="page animsition">
    <div class="page-header">
        <h1 class="page-title">Kelola Hak Kekayaan Intelektual</h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('dashboard')?>">Dashboard</a></li>
            <li class="active">Hak Kekayaan Intelektual</li>
        </ol>
    </div>
    <div class="page-content">
      <!-- Panel -->
      <div class="panel panel-bordered panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">
                <select class="form-control" style="width: 150px;" onchange="window.location.href='<?php echo site_url('hki?tahun=') ?>'+this.value">
                    <option value="">-- pilih tahun --</option>
                    <?php foreach ($tahun_list as $d): ?>
                        <option value="<?php echo $d->tahun ?>" <?php echo ($d->tahun == $selectTahun?'selected':'') ?>>tahun <?php echo $d->tahun ?></option>
                    <?php endforeach ?>
                </select>
            </h3>
            <div class="panel-actions link">
                <button class="btn btn-info" data-target="#tambahData" data-toggle="modal" type="button" >
                  <i class="icon wb-plus" aria-hidden="true"></i> Tambah Data
                </button>
                <a href="<?php echo site_url('hki/sync?tahun='.$selectTahun) ?>">
                    <button class="btn btn-success" type="button" >
                      <i class="fa fa-refresh" aria-hidden="true"></i> Sync
                    </button>
                </a>
            </div>
        </div>
        <div class="panel-body">
          <?=$this->session->flashdata('notif')?>
          <table class="table table-hover table-striped dataTable" role="grid" data-plugin="dataTable">
            <thead>
              <tr>
                <th class="text-center" width="20">No</th>
                <th>Judul</th>
                <th>Jenis</th>
                <th>Dosen</th>
                <th>No. Pendaftaran</th>
                <th>Status</th>
                <th width="15">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $no=0; foreach ($data as $dh) : ?>
              <tr>
                <td class="text-center"><?php echo ++$no; ?></td>
                <td><?php echo $dh->judul_hki ?></td>
                <td><?php echo $dh->jenis_hki ?></td>
                <td><?php echo $dh->dosen ?></td>
                <td><?php echo $dh->no_pendaftaran ?></td>
                <td><?php echo $dh->status_hki ?></td>
                <td class="link">
                  <a href="<?php echo base_url('hki/detail/'.$dh->id_hki);?>">
                      <button class="btn btn-success btn-sm">Detail</button>
                  </a>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
      <!-- End Panel -->
    </div>
</div>
<div class="modal fade modal-3d-sign modal-primary" id="tambahData" aria-hidden="false" aria-labelledby="tambahData" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title text-center">Tambah Data Hak Kekayaaan Intelektual</h4>
            </div>
            <div class="modal-body"><br>
                <form class="form-horizontal" id="formAdd" action="<?php echo base_url('hki/add')?>" method="post"
                      enctype="multipart/form-data" autocomplete="off">
                    <div class="form-group">
                        <label class="control-label col-sm-3">Dosen</label>
                        <div class="col-sm-8">
                            <select name="dosen" class="form-control" style="width: 100%" required>
                                <option value="">Pilih</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Judul HKI</label>
                        <div class="col-sm-8">
                            <input type="text" name="judul" class="form-control" placeholder="Masukkan Judul HKI" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Jenis HKI</label>
                        <div class="col-sm-8">
                            <select name="jenis" class="form-control" required>
                                <option value="">-- Pilih --</option>
                                <option value="Hak Cipta">Hak Cipta</option>
                                <option value="Paten">Paten</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">No. Pendaftaran</label>
                        <div class="col-sm-8">
                            <input type="text" name="no_pendaftaran" class="form-control" placeholder="Masukkan Nomor Pendaftaran" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Status HKI</label>
                        <div class="col-sm-8">
                            <select name="status" class="form-control" required>
                                <option value="">-- Pilih --</option>
                                <option value="Terdaftar">Terdaftar</option>
                                <option value="Granted">Granted</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">No. HKI</label>
                        <div class="col-sm-8">
                            <input type="number" name="no_hki" class="form-control" placeholder="Masukkan Nomor HKI" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Keterangan Invalid</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" name="keterangan" rows="4" placeholder="Masukkan Keterangan"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Tahun</label>
                        <div class="col-sm-4">
                            <input type="number" name="tahun" value="<?php echo date('Y')?>" class="form-control" placeholder="Masukkan Tahun" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">File Bukti</label>
                        <div class="col-sm-5">
                            <input type="file" name="file" class="form-control">
                            <span class="help-block">
                                Sistem hanya menerima file yang berekstensi <strong>*.PDF</strong>
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
<?php $this->load->view('themes/footer-script'); ?>
<script type="text/javascript">
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
</script>
<?php $this->load->view('themes/footer'); ?>