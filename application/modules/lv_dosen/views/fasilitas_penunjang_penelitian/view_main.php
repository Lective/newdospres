<?php $this->load->view('themes/dosen/header'); ?>
<?php $this->load->view('themes/dosen/sidebar'); ?>

<div class="page animsition">
    <div class="page-header">
        <h1 class="page-title">Kelola Fasilitas Penunjang Penelitian </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('dashboard')?>">Dashboard</a></li>
            <li class="active">Fasilitas Penunjang Penelitian</li>
        </ol>
    </div>
    <div class="page-content">
      <!-- Panel -->
      <div class="panel">
        <div class="panel-heading">
        <h3 class="panel-title label-primary" style="color: white">Data Fasilitas Penunjang Penelitian</h3>
        </div><br>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-6">
                  <div class="margin-bottom-15">
                    <button class="btn btn-primary" data-target="#tambahData" data-toggle="modal" type="button">
                      <i class="icon wb-plus" aria-hidden="true"></i> Tambah Data
                    </button>
                  </div>
                </div>
              </div>
              <!-- Modal -->
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
                                <form class="form-horizontal" id="formAdd" action="<?php echo base_url('penunjang-penelitian/add')?>" method="post"
                                      enctype="multipart/form-data" autocomplete="off">
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
                                        <div class="col-sm-4">
                                            <select name="status" class="form-control" required>
                                                <option value="">-- Pilih --</option>
                                                <option value="Terakreditasi">Terakreditasi</option>
                                                <option value="Belum Terakreditasi">Belum Terakreditasi</option>
                                            </select>
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
                  <!-- End Modal -->
                  <?=$this->session->flashdata('notif')?>
                <table class="table table-hover table-condensed table-bordered dataTable no-footer dtr-inline" role="grid" data-plugin="dataTable">
                  <thead class="bg-success" >
                    <tr>
                      <th style="color: white" class="text-center" valign="middle" width="20">No</th>
                      <th style="color: white" class="text-center" valign="middle">Nama Unit</th>
                      <th style="color: white" class="text-center" valign="middle">Nomor SK </th>
                      <th style="color: white" class="text-center" valign="middle">Fasilitas</th>
                      <th style="color: white" class="text-center" valign="middle">Status</th>
                      <th style="color: white" class="text-center" valign="middle">Keterangan Invalid</th>
                      <th style="color: white" class="text-center" valign="middle" width="20">Aksi</th> 
                    </tr>
                  </thead>
                  <tbody>
                   <?php $no=0; foreach ($dataFasilitas as $df) : ?>
                    <tr class="text-center">
                      <td><?php echo ++$no; ?></td>
                      <td><?php echo $df['nama_unit']?></td>
                      <td><?php echo $df['no_sk_pendirian']?></td>
                      <td><?php echo $df['fasilitas']?></td>
                      <td><?php echo $df['status_fasilitas_penunjang']?></td>
                      <td><?php echo $df['keterangan_invalid']?></td>
                      <td>
                          <a href="<?php echo base_url('penunjang-penelitian/update/'.$df['id_fasilitas_penunjang_penelitian']);?>" class="text-warning" ><i class="fa fa-wrench fa-2x" data-toggle="tooltip" data-original-title="Edit"></i></i></a>         
                      </td>
                    </tr>
                  <?php endforeach; ?>
                  </tbody>
                </table>
            </div>
          </div>
        </div>
      <!-- End Panel -->
    </div>
  </div>

<?php $this->load->view('themes/footer'); ?>
<?php $this->load->view('themes/footer-script'); ?>