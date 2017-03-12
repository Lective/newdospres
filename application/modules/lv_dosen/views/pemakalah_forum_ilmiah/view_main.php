<?php $this->load->view('themes/dosen/header'); ?>
<?php $this->load->view('themes/dosen/sidebar'); ?>

<div class="page animsition">
    <div class="page-header">
        <h1 class="page-title">Kelola Pemakalah Forum Ilmiah </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('dashboard')?>">Dashboard</a></li>
            <li class="active">Pemakalah Forum Ilmiah</li>
        </ol>
    </div>
    <div class="page-content">
      <!-- Panel -->
      <div class="panel">
        <div class="panel-heading">
        <h3 class="panel-title">Data Pemakalah Forum Ilmiah</h3>
        </div>
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
                <div class="modal fade" id="tambahData" aria-hidden="true" aria-labelledby="tambahData" role="dialog" tabindex="-1">
                          <div class="modal-dialog modal-sidebar modal-md">
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
                                                <i class="icon wb-calendar" aria-hidden="true"></i>
                                              </span>
                                              <input type="text" class="form-control" name="tgl_start" />
                                              <span class="input-group-addon">Sampai</span>
                                              <input type="text" class="form-control" name="tgl_end" />
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
                <?=$this->session->flashdata('notif')?>
          <table class="table table-responsive table-condensed table-hover table-striped" data-plugin="dataTable">
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
                <td>
                  <a href="javascript:void" data-target="#detailData" data-toggle="modal" class="text-primary" ><i class="fa fa-list-alt fa-2x" data-toggle="tooltip" data-original-title="Detail"></i></a> &nbsp;
                  <a href="<?php echo base_url('forum-ilmiah/delete/'.$dh['id_pemakalah_forum_ilmiah']);?> " class="text-danger" onClick="return confirm('Anda yakin ingin menghapus data ini?')"><i class="fa fa-trash fa-2x" data-toggle="tooltip" data-original-title="Hapus"></i></a> &nbsp;
                  <a href="" class="text-warning" ><i class="fa fa-wrench fa-2x" data-toggle="tooltip" data-original-title="Edit"></i></i></a>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>

              <!-- Modal -->
                <div class="modal fade modal-3d-flip-vertical modal-success" id="detailData" aria-hidden="false" aria-labelledby="tambahData" role="dialog" tabindex="-1">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <h4 class="modal-title text-center">Detail Data Penelitian Hibah Ditlitabmas</h4>
                            </div>
                            <div class="modal-body">
                                <form class="" id="formAdd" action="" method="post"
                                      enctype="multipart/form-data" autocomplete="off">
                                    <div class="form-group col-md-6">
                                      <label class="control-label" for="inputBasicEmail">Status Pemakalah</label>
                                      <input type="text" class="form-control" id="inputDisabled" value="<?php echo $dh['status_pemakalah']?>" disabled>
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label class="control-label" for="inputBasicEmail">Judul Pemakalah</label>
                                      <input type="text" class="form-control" id="inputDisabled" value="<?php echo $dh['judul_pemakalah']?>" disabled>
                                    </div>
                                    <div class="form-group col-md-12">
                                      <label class="control-label" for="inputBasicEmail">Nama Forum</label>
                                      <input type="text" class="form-control" id="inputDisabled" value="<?php echo $dh['nama_forum']?>" disabled>
                                    </div>
                                    <div class="form-group col-md-12">
                                      <label class="control-label" for="inputBasicEmail">Institusi Penyelenggara</label>
                                      <input type="text" class="form-control" id="inputDisabled" value="<?php echo $dh['institusi_penyelenggara']?>" disabled>
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label class="control-label" for="inputBasicEmail">Tanggal Mulai</label>
                                      <input type="text" class="form-control" id="inputDisabled" value="<?php echo $dh['tgl_mulai_pelaksanaan']?>" disabled>
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label class="control-label" for="inputBasicEmail">Tanggal Selesai</label>
                                      <input type="text" class="form-control" id="inputDisabled" value="<?php echo $dh['tgl_akhir_pelaksanaan']?>" disabled>
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label class="control-label" for="inputBasicEmail">Tempat Pelaksanaan</label>
                                      <input type="text" class="form-control" id="inputDisabled" value="<?php echo $dh['tempat_pelaksanaan']?>" disabled>
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label class="control-label" for="inputBasicEmail">Tahun</label>
                                      <input type="text" class="form-control" id="inputDisabled" value="<?php echo $dh['tahun']?>" disabled>
                                    </div>
                                    <div class="form-group col-md-12">
                                      <label class="control-label" for="inputBasicEmail">Keterangan</label>
                                      <textarea type="text" class="form-control" id="inputDisabled" value="<?php echo $dh['keterangan_invalid']?>" disabled></textarea>
                                    </div>
                                    <div class="form-group text-center">
                                            <div id="btnAction">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class=""></i> Kembali</button>
                                            </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Modal -->

        </div>
      </div>
      <!-- End Panel -->
    </div>
</div>

<?php $this->load->view('themes/footer'); ?>
<?php $this->load->view('themes/footer-script'); ?>