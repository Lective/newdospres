<?php $this->load->view('themes/webmin/header'); ?>
<?php $this->load->view('themes/webmin/sidebar'); ?>

<div class="page animsition">
    <div class="page-header">
        <h1 class="page-title">Calon Kaprodi Berprestasi </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('dashboard')?>">Kaprodi Berprestasi</a></li>
            <li class="active">Calon Kaprodi Berprestasi</li>
        </ol>
    </div>
    <div class="page-content">
        <!-- Panel -->
        <div class="panel panel-bordered panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <select class="form-control" style="width: 150px;" onchange="window.location.href='<?php echo site_url('webmin/cakaprodi?tahun=') ?>'+this.value">
                        <option value="">-- pilih tahun --</option>
                        <?php for ($i=date('Y'); $i>=2010; $i--): ?>
                            <option value="<?php echo $i ?>" <?php echo ($i == $selectTahun?'selected':'') ?>>tahun <?php echo $i ?></option>
                        <?php endfor ?>
                    </select>
                </h3>
                <div class="panel-actions">
                    <button class="btn btn-info" data-toggle="modal" data-target="#tambahData">
                        <i class="fa fa-plus"></i> Tambah
                    </button>
                </div>
            </div>
            <div class="panel-body">
                <?php if($alert) echo ($alert->status == 'success' ? showAlertSuccess() : showAlertDanger());  ?>
                <table class="table table-hover table-striped dataTable" role="grid" data-plugin="dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nidn</th>
                            <th>Nama Lengkap</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; ?>
                        <?php foreach ($datav as $d): ?>
                            <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo $d->nidn ?></td>
                                <td><?php echo $d->nama_lengkap ?></td>
                                <td class="link">
                                    <a href="<?php echo site_url('webmin/cakaprodi/hapus/'.$d->nidn) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus ini ?');">
                                        <button class="btn btn-danger btn-xs" type="button">
                                            <i class="fa fa-times"></i> Hapus
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            <?php $no++ ?>
                        <?php endforeach ?>
                    </tbody>
                </table>
                <p class="help-block">
                    Data yang ditambahkan disini akan ditampilkan pada halaman depan sistem, dan dapat dilakukan vote oleh pengunjung sistem ini.
                </p>
            </div>
        </div>
        <!-- End Panel -->
    </div>
</div>

<!-- Modal -->
<div class="modal fade modal-super-scaled modal-primary" id="tambahData" aria-hidden="true" aria-labelledby="tambahData" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title text-center">Tambah Calon Ketua Program Studi Berprestasi</h4>
            </div>
            <div class="modal-body"><br>
                <form action="<?php echo base_url('webmin/cakaprodi/add')?>" class="form-horizontal" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="control-label col-sm-3">Dosen</label>
                        <div class="col-sm-8">
                            <select name="dt[nidn]" class="form-control" style="width: 100%" required>
                                <option value="">Pilih</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Fakultas</label>
                            <div class="col-sm-8">
                                <select class="form-control" name="id_fakultas">
                                    <option value="">Pilih</option>
                                    <?php foreach ($dataf as $dak): ?>
                                    <option value="<?php echo $dak->id_fakultas?>" ><?php echo $dak->nama_fakultas?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Program Studi</label>
                            <div class="col-sm-8">
                                <select class="form-control" name="id_program_studi">
                                    <option value="">Pilih</option>
                                    <?php foreach ($datap as $dap): ?>
                                        <option value="<?php echo $dap->id_program_studi?>" ><?php echo $dap->nama_program_studi?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Tahun</label>
                        <div class="col-sm-3">
                            <input type="number" min="1945" name="dt[tahun]" value="<?php echo date('Y') ?>" class="form-control">
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
<!-- End Modal -->
<?php $this->load->view('themes/footer-script'); ?>
<script type="text/javascript">
    $("select[name='dt[nidn]']").select2({
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