<?php $this->load->view('themes/dppm/header'); ?>
<?php $this->load->view('themes/dppm/sidebar'); ?>

<div class="page animsition">
    <div class="page-header">
        <h1 class="page-title">Kelola Buku Ajar </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('dashboard')?>">Dashboard</a></li>
            <li class="active">Buku Ajar</li>
        </ol>
    </div>
    <div class="page-content">
      <!-- Panel -->
      <div class="panel panel-bordered panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">
                <select class="form-control" style="width: 150px;" onchange="window.location.href='<?php echo site_url('buku-ajar?tahun=') ?>'+this.value">
                    <option value="">-- pilih tahun --</option>
                    <?php foreach ($tahun_bk as $d): ?>
                        <option value="<?php echo $d->tahun ?>" <?php echo ($d->tahun == $selectTahun?'selected':'') ?>>tahun <?php echo $d->tahun ?></option>
                    <?php endforeach ?>
                </select>
            </h3>
            <div class="panel-actions link">
                <button class="btn btn-primary" data-target="#tambahData" data-toggle="modal" type="button" >
                  <i class="icon wb-plus" aria-hidden="true"></i> Tambah Data
                </button>
                <a href="<?php echo site_url('buku-ajar/sync') ?>">
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
                <th class="text-center" valign="middle" style="width: 30px;">No</th>
                <th style="width: 300px">Buku</th>
                <th>Penulis</th>
                <th>Penerbit/Tahun</th>
                <th width="25">Aksi</th>
              </tr>
            </thead>
            <tbody>
             <?php $no=0; foreach ($dataBuku as $bk) { ?>
              <tr>
                <td class="text-center"><?php echo ++$no; ?></td>
                <td><?php echo $bk->judul ?></td>
                <td><?php echo $bk->dosen ?></td>
                <td><?php echo $bk->penerbit.' / <strong>'.$bk->tahun.'</strong>' ?></td>
                <td class="link">
                    <a href="<?php echo base_url('buku-ajar/detail/'.$bk->id_buku_ajar);?>">
                    <button type="button" class="btn btn-success btn-sm">Detail</button>
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
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title text-center">Tambah Data Buku Ajar</h4>
            </div>
            <div class="modal-body"><br>
                <form action="<?php echo base_url('buku-ajar/add')?>" class="form-horizontal" method="post">
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
                            <input type="number" name="jml_halaman" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Tahun</label>
                        <div class="col-sm-4">
                            <input type="number" name="tahun" value="<?php echo date('Y') ?>" class="form-control " placeholder="Masukkan Tahun">
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
          // parse the results into the format expected by Select2
          // since we are using custom formatting functions we do not need to
          // alter the remote JSON data, except to indicate that infinite
          // scrolling can be used
          return {
            results: $.map(data.items, function(obj) {
                return { id: obj.nidn, text: obj.nama };
            })
            };
          // params.page = params.page || 1;

          // return {
          //   results: data.items,
          //   pagination: {
          //     more: (params.page * 30) < data.total_count
          //   }
          // };
        },
        cache: true
      },
    dropdownParent: $("#tambahData")
  });
</script>
<?php $this->load->view('themes/footer'); ?>