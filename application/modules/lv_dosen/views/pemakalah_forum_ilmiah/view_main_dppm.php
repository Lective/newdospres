<?php $this->load->view('themes/dppm/header'); ?>
<?php $this->load->view('themes/dppm/sidebar'); ?>

<div class="page animsition">
    <div class="page-header">
        <h1 class="page-title">Kelola Pemakalah Forum Ilmiah</h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('dashboard')?>">Dashboard</a></li>
            <li class="active">Pemakalah Forum Ilmiah</li>
        </ol>
    </div>
    <div class="page-content">
      <!-- Panel -->
      <div class="panel panel-bordered panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">
                <select class="form-control" style="width: 150px;" onchange="window.location.href='<?php echo site_url('forum-ilmiah?tahun=') ?>'+this.value">
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
                <a href="<?php echo site_url('forum-ilmiah/sync') ?>">
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
                <th class="text-center" valign="middle">Judul</th>
                <th class="text-center" valign="middle">Nama Forum</th>
                <th class="text-center" valign="middle">Institusi Penyelenggara</th> 
                <th class="text-center" valign="middle">Tempat</th>
                <th class="text-center" valign="middle">Tahun</th>
                <th class="text-center" valign="middle">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $no=0; foreach ($dataPemakalah as $dh) : ?>
              <tr class="text-center">
                <td><?php echo ++$no; ?></td>
                <td><?php echo $dh['judul_pemakalah']?></td>
                <td><?php echo $dh['nama_forum']?></td>
                <td><?php echo $dh['institusi_penyelenggara']?></td>
                <td><?php echo $dh['tempat_pelaksanaan']?></td>
                <td><?php echo $dh['tahun']?></td>
                <td class="link">
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
<!-- Modal -->
<div class="modal fade" id="tambahData" aria-hidden="true" aria-labelledby="tambahData" role="dialog" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title text-center">Tambah Pemakalah Forum Ilmiah</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" id="formAdd" action="<?php echo base_url('forum-ilmiah/add')?>" method="post"
              enctype="multipart/form-data" autocomplete="off">
            <div class="form-group">
                <label class="control-label col-sm-3">Status Pemakalah</label>
                <div class="col-sm-8">
                    <select name="status" class="form-control" required>
                        <option value="">-- Pilih --</option>
                        <option value="Pemakalah Biasa">Pemakalah Biasa</option>
                        <option value="Invited / Keynote Speaker">Invited / Keynote Speaker</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3">Judul Pemakalah</label>
                <div class="col-sm-8">
                    <input type="text" name="judul" class="form-control" placeholder="Masukkan Judul Pemakalah" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3">Nama Forum</label>
                <div class="col-sm-8">
                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Forum" required>
                </div> 
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3">Institusi </label>
                <div class="col-sm-8">
                    <input type="text" name="institusi" class="form-control" placeholder="Masukkan Institusi Penyelenggara" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3">Tanggal Mulai</label>
                <div class="col-sm-8">
                    <div class="input-daterange" data-plugin="datepicker">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="icon md-calendar" aria-hidden="true"></i>
                        </span>
                        <input type="text" class="form-control" name="tgl_mulai">
                      </div>
                      <div class="input-group">
                        <span class="input-group-addon">Sampai</span>
                        <input type="text" class="form-control" name="tgl_selesai">
                      </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3">Tempat</label>
                <div class="col-sm-8">
                    <input type="text" name="tempat" class="form-control" placeholder="Masukkan Tempat Pelaksanaan" required>
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
                    <input type="number" value="<?php echo date('Y')?>" name="tahun" class="form-control" placeholder="Masukkan Tahun" required>
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
<?php $this->load->view('themes/footer'); ?>
