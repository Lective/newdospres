<?php $this->load->view('themes/dosen/header'); ?>
<?php $this->load->view('themes/dosen/sidebar'); ?>

<div class="page animsition">
    <div class="page-header">
        <h1 class="page-title">Kelola Penelitian Hibah Ditlitabmas </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('dashboard')?>">Dashboard</a></li>
            <li class="active">Penelitian Hibah Ditlitabmas</li>
        </ol>
    </div>
    <div class="page-content">
      <!-- Panel -->
      <div class="panel">
        <div class="panel-heading">
        <h3 class="panel-title bg-primary" style="color: white;">Data Penelitian Hibah Ditlitabmas</h3>
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
                <div class="modal fade modal-3d-flip-vertical modal-primary" id="tambahData" aria-hidden="false" aria-labelledby="tambahData" role="dialog" tabindex="-1">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <h4 class="modal-title text-center">Tambah Data Penelitian Hibah Ditlitabmas</h4>
                            </div>
                            <div class="modal-body">
                                <form class="" id="formAdd" action="<?php echo base_url('hibah-ditlitabmas/add')?>" method="post"
                                      enctype="multipart/form-data" autocomplete="off">
                                    <div class="form-group col-md-6">
                                      <label class="control-label">Nama Skim</label>
                                      <input type="text" class="form-control" name="nama"
                                      placeholder="Masukkan Nama Skim" autocomplete="off" />
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label class="control-label">Judul</label>
                                      <input type="text" class="form-control" name="judul"
                                      placeholder="Masukkan Judul Penelitian " autocomplete="off" />
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label class="control-label">Jumlah Dana</label>
                                      <input type="number" class="form-control" name="jumlah_dana"
                                      placeholder="Masukkan Jumlah Dana" autocomplete="off" />
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label class="control-label">Nama Ketua</label>
                                      <input type="text" class="form-control" name="nama_ketua"
                                      placeholder="Masukkan Nama Ketua" autocomplete="off" />
                                    </div>
                                    <div class="form-group col-md-9">
                                      <label class="control-label">Nama Anggota</label>
                                      <input type="text" class="form-control" name="nama_anggota"
                                      placeholder="Masukkan Nama Anggota" autocomplete="off" />
                                    </div>
                                    <div class="form-group col-md-3">
                                      <label class="control-label" area="hidden">.</label>
                                      <button type="button" class="form-control btn btn-primary">Tambah</button>
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label class="control-label">Bidang Penelitian</label>
                                      <input type="text" class="form-control" name="penelitian"
                                      placeholder="Masukkan Bidang Penelitian" autocomplete="off" />
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label class="control-label">Bidang Penelitan Lain</label>
                                      <input type="text" class="form-control" name="penelitian_lain" placeholder="Masukkan Bidang Penelitian Lain" autocomplete="off" />
                                    </div>
                                    <div class="form-group col-md-12">
                                      <label class="control-label">Tujuan Sosial Ekonomi</label>
                                      <input type="text" class="form-control" name="sosial_ekonomi"
                                      placeholder="Masukkan Tujuan Sosial Ekonomi" autocomplete="off" />
                                    </div>
                                    <div class="form-group col-md-12">
                                      <label class="control-label">Tujuan Sosial Ekonomi Lain</label>
                                      <input type="text" class="form-control" name="sosial_ekonomi_lain"
                                      placeholder="Masukkan Tujuan Sosial Ekonomi Lain" autocomplete="off" />
                                    </div>
                                    <div class="form-group col-sm-12">
                                      <label class="control-label">Tahun</label>
                                      <input type="number" class="form-control" value="<?php echo date('Y')?>" name="tahun"
                                      placeholder="Masukkan Tahun" autocomplete="off" />
                                    </div>
                                    <div class="form-group text-center">
                                            <div id="btnAction">
                                                <button type="submit" class="btn btn-primary"><i class="fa fa-send"></i>&nbsp; Tambah</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i>&nbsp; Batal</button>
                                            </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Modal -->
                <?=$this->session->flashdata('notif')?>
          <table class="table table-responsive table-bordered table-hover table-striped" data-plugin="dataTable">
            <thead>
              <tr>
                <th class="text-center" valign="middle" width="20">No</th>
                <th class="text-center" valign="middle">Nama Skim</th>
                <th class="text-center" valign="middle">Judul</th>
                <th class="text-center" valign="middle">Jumlah Dana</th> 
                <th class="text-center" valign="middle">Nama Ketua</th>
                <th class="text-center" valign="middle">Bidang Penelitian</th>
                <th class="text-center" valign="middle">Tujuan Sosial Ekonomi</th>
                <th class="text-center" valign="middle">Tahun</th>
                <th class="text-center" valign="middle">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $no=0; foreach ($dataDitlitabmas as $dd) : ?>
              <tr class="text-center">
                <td><?php echo ++$no; ?></td>
                <td><?php echo $dd['nama_skim']?></td>
                <td><?php echo $dd['judul']?></td>
                <td>Rp. <?php echo number_format($dd['jumlah_dana'],0,',','.')?>,-</td>
                <td><?php echo $dd['nama_ketua']?></td>
                <td><?php echo $dd['bidang_penelitian']?></td>
                <td><?php echo $dd['tujuan_sosial_ekonomi']?></td>
                <td><?php echo $dd['tahun']?></td>
                <td>
                  <a href="javascript:void" data-target="#detailData" data-toggle="modal" class="text-primary" ><i class="fa fa-list-alt fa-2x" data-toggle="tooltip" data-original-title="Detail"></i></a> &nbsp;
                  <a href="<?php echo base_url('hibah-ditlitabmas/delete/'.$dd['id_penelitian_hibah_ditlitabmas']);?> " class="text-danger" onClick="return confirm('Anda yakin ingin menghapus data ini?')"><i class="fa fa-trash fa-2x" data-toggle="tooltip" data-original-title="Hapus"></i></a> &nbsp;
                  <a href="" class="text-warning" ><i class="fa fa-wrench fa-2x" data-toggle="tooltip" data-original-title="Edit"></i></i></a>
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