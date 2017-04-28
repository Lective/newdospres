<?php $sess = $this->mauth->getSession() ?>
<?php $this->load->view('themes/dosen/header'); ?>
<?php $this->load->view('themes/dosen/sidebar'); ?>

<div class="page animsition">
    <div class="page-header">
        <h1 class="page-title">Kelola Luaran Lain</h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('dashboard')?>">Dashboard</a></li>
            <li class="active">Luaran Lain</li>
        </ol>
    </div>
    <div class="page-content">
      <!-- Panel -->
      <div class="panel panel-bordered panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">
                <select class="form-control" style="width: 150px;" onchange="window.location.href='<?php echo site_url('luaran-lain?tahun=') ?>'+this.value">
                    <option value="">-- pilih tahun --</option>
                    <?php foreach ($tahun_list as $d): ?>
                        <option value="<?php echo $d->tahun ?>" <?php echo ($d->tahun == $selectTahun?'selected':'') ?>>tahun <?php echo $d->tahun ?></option>
                    <?php endforeach ?>
                </select>
            </h3>
            <div class="panel-actions link">
                <button class="btn btn-info" data-target="#tambahData" data-toggle="modal" type="button" >
                  <i class="icon wb-plus" aria-hidden="true"></i> Tambah Data
                </button>
            </div>
        </div>
        <div class="panel-body">
          <?=$this->session->flashdata('notif')?>
          <table class="table table-hover table-striped dataTable" role="grid" data-plugin="dataTable">
            <thead>
              <tr>
                <th class="text-center" valign="middle">No</th>
                <th valign="middle">Judul</th>
                <th valign="middle">Jenis</th>
                <th valign="middle">Keterangan</th>
                <th width="15">Aksi</th> 
              </tr>
            </thead>
            <tbody>
              <?php $no=0; foreach ($dataLuaran as $dl) : ?>
              <tr>
                <td><?php echo ++$no; ?></td>
                <td><?php echo $dl->judul_luaran ?></td>
                <td><?php echo $dl->jenis_luaran_lain ?></td>
                <td><?php echo $dl->keterangan_invalid ?></td>
                <td class="link">
                    <a href="<?php echo base_url('luaran-lain/detail/'.$dl->id_luaran_lain);?>">
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
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title text-center">Tambah Data Luaran Lain</h4>
            </div>
            <div class="modal-body"><br>
                <form class="form-horizontal" id="formAdd" action="<?php echo base_url('luaran-lain/add')?>" method="post"
                      enctype="multipart/form-data" autocomplete="off">
                    <div class="form-group">
                        <label class="control-label col-sm-3">Judul</label>
                        <div class="col-sm-8">
                            <input type="text" name="judul" class="form-control" placeholder="Masukkan Judul Luaran Lain" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Jenis</label>
                        <div class="col-sm-8">
                            <select name="jenis" class="form-control" required>
                                <option value="">-- Pilih --</option>
                                <option value="Model">Model</option>
                                <option value="Teknologi Tepat Guna (TTG)">Teknologi Tepat Guna (TTG)</option>
                                <option value="Desain">Desain</option>
                                <option value="Prototype">Prototype</option>
                                <option value="Rekayasa Sosial">Rekayasa Sosial</option>
                                <option value="Kebijakan">Kebijakan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Deskripsi</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" name="deskripsi" rows="4" placeholder="Masukkan Deskripsi"></textarea>
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
                        <div class="col-sm-3">
                            <input type="number" name="tahun" value="<?php echo date('Y')?>" class="form-control" placeholder="Masukkan Tahun" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Status Berkas Pendukung</label>
                        <div class="col-sm-5">
                            <select name="status" class="form-control" required>
                                <option value="">-- Pilih --</option>
                                <option value="1">Lengkap</option>
                                <option value="0">Belum Lengkap</option>
                            </select>
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
                    <div class="form-group">
                        <div class="col-sm-9 col-sm-offset-3">
                            <div id="btnAction">
                                <input type="hidden" name="dosen" value="<?php echo $sess['login_username'] ?>">
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
<?php $this->load->view('themes/footer-script'); ?>
<?php $this->load->view('themes/footer'); ?>