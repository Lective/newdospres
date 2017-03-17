<?php $this->load->view('themes/webmin/header'); ?>
<?php $this->load->view('themes/webmin/sidebar'); ?>

<div class="page animsition">
    <div class="page-header">
        <h1 class="page-title">Dashboard </h1>
        <ol class="breadcrumb">
            <li><a href="#">Menu Kelola</a></li>
            <li class="active">Dosen Berprestasi</li>
        </ol>
    </div>
    <div class="page-content">
      	<!-- Panel -->
      	<div class="panel">
        	<div class="panel-heading">
        	<h3 class="panel-title label-primary" style="color: white;">Data Dosen Berprestasi</h3>
        	</div><br>
        	<div class="panel-body">
            	<div class="row">
<!-- Panel -->
                <div class="col-sm-6">
                  <div class="margin-bottom-15">
                    <button class="btn btn-primary" data-target="#tambahData" data-toggle="modal" type="button" >
                      <i class="icon wb-plus" aria-hidden="true"></i> Tambah Data
                    </button>
                  </div>
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
                                <h4 class="modal-title text-center">Tambah Data Dosen Berprestasi</h4>
                            </div>
                            <div class="modal-body"><br>
                                <form action="<?php echo base_url('dosen-berprestasi/add')?>" class="form-horizontal" method="post">
                                    <div class="form-group">
                                        <label class="control-label col-sm-3">NIDN</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="nidn" class="form-control" placeholder="Masukkan NIDN" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3">Nilai Abstrak</label>
                                        <div class="col-sm-8">
                                          <div class="asRange" data-plugin="asRange" data-namespace="rangeUi" data-step="1"
                                          data-min="0" data-tip=true data-max="5" data-value="0" name="abstrak"></div>
                                        </div>
                                      </div>
                                 <div class="form-group">
                                        <label class="control-label col-sm-3">Nilai</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="nilai" class="form-control" placeholder="Masukkan Nilai Total" required>
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
          <table class="table table-hover table-striped table-bordered table-responsive table-hover table-condensed" data-plugin="dataTable">
            <thead>
              <tr>
                <th class="text-center" valign="middle" width="20">No</th>
                <th class="text-center" valign="middle">NIDN</th>
                <th class="text-center" valign="middle">Nilai</th>
              </tr>
            </thead>
            <tbody>
             <?php $no=0; foreach ($data_dospres as $dosp) { ?>
              <tr class="text-center">
                <td><?php echo ++$no; ?></td>
                <td><?php echo $dosp['nidn']?></td>
                <td><?php echo $dosp['nilai']?></td>

                <td>
                    <a href="<?php echo base_url('dospres/delete/'.$dosp['id_calon_dospres']);?> " class="text-danger" onClick="return confirm('Anda yakin ingin menghapus data ini?')" onClick="return confirm('Anda yakin ingin menghapus data ini?')"><i class="fa fa-trash fa-2x" data-toggle="tooltip" data-original-title="Hapus"></i></a> &nbsp;
                </td>
              </tr>
            <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
              
				<!-- Isi Disini -->

            	</div>
        	</div>
      	</div>
      	<!-- End Panel -->
    </div>
</div>

<?php $this->load->view('themes/footer'); ?>
<?php $this->load->view('themes/footer-script'); ?>