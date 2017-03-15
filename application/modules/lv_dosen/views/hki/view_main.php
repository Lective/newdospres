<?php $this->load->view('themes/dosen/header'); ?>
<?php $this->load->view('themes/dosen/sidebar'); ?>

<div class="page animsition">
    <div class="page-header">
        <h1 class="page-title">Kelola Hak Kekayaan Intelektual </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('dashboard')?>">Dashboard</a></li>
            <li class="active">Hak Kekayaan Intelektual</li>
        </ol>
    </div>
    <div class="page-content">
      <!-- Panel -->
      <div class="panel">
        <div class="panel-heading" >
        <h3 class="panel-title label-primary" style="color: white">Data Hak Kekayaan Intelektual</h3>
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
                                <h4 class="modal-title text-center">Tambah Data Hak Kekayaaan Intelektual</h4>
                            </div>
                            <div class="modal-body"><br>
                                <form class="form-horizontal" id="formAdd" action="<?php echo base_url('hki/add')?>" method="post"
                                      enctype="multipart/form-data" autocomplete="off">
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
            <?=$this->session->flashdata('notif')?>
          <table class="table table-hover table-condensed table-bordered dataTable no-footer dtr-inline" role="grid" data-plugin="dataTable">
            <thead class="bg-success">
              <tr>
                <th style="color: white" class="text-center" valign="middle" width="20">No</th>
                <th style="color: white" class="text-center" valign="middle">Judul</th>
                <th style="color: white" class="text-center" valign="middle">Jenis</th>
                <th style="color: white" class="text-center" valign="middle">No. Pendaftaran</th>
                <th style="color: white" class="text-center" valign="middle">Status</th>
                <th style="color: white" class="text-center" valign="middle">No. HKI</th>
                <th style="color: white" class="text-center" valign="middle">Keterangan Invalid</th>
                <th style="color: white" class="text-center" valign="middle" width="15">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $no=0; foreach ($dataHki as $dh) : ?>
              <tr class="text-center">
                <td><?php echo ++$no; ?></td>
                <td><?php echo $dh['judul_hki']?></td>
                <td><?php echo $dh['jenis_hki']?></td>
                <td><?php echo $dh['no_pendaftaran']?></td>
                <td><?php echo $dh['status_hki']?></td>
                <td><?php echo $dh['no_hki']?></td>
                <td><?php echo $dh['keterangan_invalid']?></td>
                <td>
                  <a href="<?php echo base_url('hki/update/'.$dh['id_hki']);?>" class="text-warning" ><i class="fa fa-wrench fa-2x" data-toggle="tooltip" data-original-title="Edit"></i></a>
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

<?php $this->load->view('themes/footer'); ?>
<?php $this->load->view('themes/footer-script'); ?>