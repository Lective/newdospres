<?php $this->load->view('themes/dppm/header'); ?>
<?php $this->load->view('themes/dppm/sidebar'); ?>

<div class="page animsition">
    <div class="page-header">
        <h1 class="page-title">Kelola Penunjang Penelitian</h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('dashboard')?>">Dashboard</a></li>
            <li class="active">Penunjang Penelitian</li>
        </ol>
    </div>
    <div class="page-content">
      <!-- Panel -->
      <div class="panel panel-bordered panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">
              Data Penunjang Penelitian
            </h3>
            <div class="panel-actions link">
                <button class="btn btn-info" data-target="#tambahData" data-toggle="modal" type="button" >
                  <i class="icon wb-plus" aria-hidden="true"></i> Tambah Data
                </button>
                <!-- <a href="<?php echo site_url('penunjang-penelitian/sync') ?>">
                    <button class="btn btn-success" type="button" >
                      <i class="fa fa-refresh" aria-hidden="true"></i> Sync
                    </button>
                </a> -->
            </div>
        </div>
        <div class="panel-body">
          <?=$this->session->flashdata('notif')?>
          <table class="table table-hover table-striped" role="grid" data-plugin="dataTable">
            <thead >
              <tr>
                <th class="text-center" width="20">No</th>
                <th>Nama Unit</th>
                <th>Nomor SK </th>
                <th>Fasilitas</th>
                <th width="20">Aksi</th> 
              </tr>
            </thead>
            <tbody>
             <?php $no=0; foreach ($data as $df) : ?>
              <tr>
                <td class="text-center"><?php echo ++$no; ?></td>
                <td><?php echo $df->nama_unit ?></td>
                <td><?php echo $df->no_sk_pendirian ?></td>
                <td><?php echo $df->fasilitas ?></td>
                <td class="link">
                    <a href="<?php echo base_url('penunjang-penelitian/detail/'.$df->id_penunjang);?>">
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
<div class="modal fade modal-3d-sign modal-primary" id="tambahData" aria-hidden="false" aria-labelledby="tambahData" role="dialog" tabindex="-1">
  <div class="modal-dialog modal-md">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button>
              <h4 class="modal-title text-center">Tambah Data Fasilitas Penunjang Penelitian</h4>
          </div>
          <div class="modal-body"><br>
              <form class="form-horizontal" id="formAdd" action="<?php echo base_url('penunjang-penelitian/add')?>" method="post" enctype="multipart/form-data" autocomplete="off">
                  <div class="form-group">
                      <label class="control-label col-sm-3">Nama Unit</label>
                      <div class="col-sm-8">
                          <input type="text" name="nama_unit" class="form-control" placeholder="Masukkan Nama Unit" required>
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="control-label col-sm-3">No. SK Pendirian</label>
                      <div class="col-sm-8">
                          <input type="text" name="no_sk" class="form-control" placeholder="Masukkan Nomor SK Pendirian" required>
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="control-label col-sm-3">Fasilitas</label>
                      <div class="col-sm-8">
                          <input type="text" name="fasilitas" class="form-control" placeholder="Masukkan Fasilitas" required>
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="control-label col-sm-3">Status</label>
                      <div class="col-sm-8">
                          <input type="text" name="status" class="form-control" placeholder="Masukkan Fasilitas" required>
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="control-label col-sm-3">Keterangan Invalid</label>
                      <div class="col-sm-8">
                          <textarea name="keterangan" class="form-control" rows="4" placeholder="Masukkan Keterangan"></textarea>
                      </div>
                  </div>
                  <div class="form-group">
                      <div class="col-sm-9 col-sm-offset-3">
                          <div id="btnAction">
                              <button type="submit" class="btn btn-primary"><i class="fa fa-send" onclick="sweet()"></i>&nbsp; Tambah</button>
                              <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i>&nbsp; Batal</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $this->load->view('themes/footer-script'); ?>
<?php $this->load->view('themes/footer'); ?>