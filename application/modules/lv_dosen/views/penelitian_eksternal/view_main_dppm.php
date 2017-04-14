<?php $this->load->view('themes/dppm/header'); ?>
<?php $this->load->view('themes/dppm/sidebar'); ?>

<div class="page animsition">
    <div class="page-header">
        <h1 class="page-title">Kelola Penelitian Eksternal</h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('dashboard')?>">Dashboard</a></li>
            <li class="active">Penelitian Eksternal</li>
        </ol>
    </div>
    <div class="page-content">
      <!-- Panel -->
      <div class="panel panel-bordered panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">
                <select class="form-control" style="width: 150px;" onchange="window.location.href='<?php echo site_url('penelitian-eksternal?tahun=') ?>'+this.value">
                    <option value="">-- pilih tahun --</option>
                    <?php foreach ($tahun_list as $d): ?>
                        <option value="<?php echo $d->tahun ?>" <?php echo ($d->tahun == $selectTahun?'selected':'') ?>>tahun <?php echo $d->tahun ?></option>
                    <?php endforeach ?>
                </select>
            </h3>
            <div class="panel-actions link">
                <button class="btn btn-primary" data-target="#tambahData" data-toggle="modal" type="button" >
                  <i class="icon wb-plus" aria-hidden="true"></i> Tambah Data
                </button>
                <a href="<?php echo site_url('penelitian-eksternal/sync') ?>">
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
                <th class="text-center" valign="middle" width="20">No</th>
                <th>Skim</th>
                <th>Judul</th>
                <th>Dana</th> 
                <th>Ketua</th>
                <th>Bidang</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $no=0; foreach ($data as $d) : ?>
              <tr>
                <td class="text-center"><?php echo ++$no; ?></td>
                <td><?php echo $d->nama_skim ?></td>
                <td><?php echo $d->judul ?></td>
                <td>Rp. <?php echo number_format($d->jumlah_dana)?></td>
                <td><?php echo $d->dosen ?></td>
                <td><?php echo $d->bidang_penelitian ?></td>
                <td class="link">
                    <a href="<?php echo base_url('penelitian-eksternal/detail/'.$d->id_penelitian);?>">
                        <button type="button" class="btn btn-success btn-sm">Detail</button>
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
<div class="modal fade modal-3d-flip-vertical modal-primary" id="tambahData" aria-hidden="false" aria-labelledby="tambahData" role="dialog" tabindex="-1">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button>
              <h4 class="modal-title text-center">Tambah Data Penelitian Hibah Ditlitabmas</h4>
          </div>
          <div class="modal-body">
              <form class="form-horizontal" id="formAdd" action="<?php echo base_url('penelitian-eksternal/add')?>" method="post"
                    enctype="multipart/form-data" autocomplete="off">
                  <div class="form-group">
                    <label class="control-label col-sm-3">Skim</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Skim" autocomplete="off" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-3">Judul</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="judul" placeholder="Masukkan Judul Penelitian " autocomplete="off" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-3">Dosen</label>
                    <div class="col-sm-8">
                        <select name="ketua" class="form-control" style="width: 100%" required>
                            <option value="">Pilih</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-3">Jumlah Dana</label>
                    <div class="col-md-5">
                      <input type="number" min="1" class="form-control" name="jumlah_dana" placeholder="Masukkan Jumlah Dana" autocomplete="off" />
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="control-label col-sm-3">Anggota</label>
                    <div class="col-sm-9">
                      <textarea class="form-control" name="nama_anggota" placeholder="Masukkan Nama Anggota" autocomplete="off"></textarea>
                      <span class="help-block">Berikan tanda <strong>;</strong> (titik koma) untuk pemisah jika anggota lebih dari satu.</span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-3">Bidang Penelitian</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="penelitian" placeholder="Masukkan Bidang Penelitian" autocomplete="off" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-3">Bidang Penelitan Lain</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="penelitian_lain" placeholder="Masukkan Bidang Penelitian Lain" autocomplete="off" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-3">Tujuan Sosial Ekonomi</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="sosial_ekonomi" placeholder="Masukkan Tujuan Sosial Ekonomi" autocomplete="off" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-3">Tujuan Sosial Ekonomi Lain</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="sosial_ekonomi_lain" placeholder="Masukkan Tujuan Sosial Ekonomi Lain" autocomplete="off" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-3">Tahun</label>
                    <div class="col-sm-3">
                      <input type="number" class="form-control" value="<?php echo date('Y')?>" name="tahun" placeholder="Masukkan Tahun" autocomplete="off" />
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
                  <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-send"></i>&nbsp; Tambah</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i>&nbsp; Batal</button>
                  </div>
              </form>
          </div>
      </div>
  </div>
</div>
<?php $this->load->view('themes/footer-script'); ?>
<script type="text/javascript">
  $("select[name=ketua]").select2({
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