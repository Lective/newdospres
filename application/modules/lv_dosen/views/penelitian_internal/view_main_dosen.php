<?php $sess = $this->mauth->getSession() ?>
<?php $this->load->view('themes/dosen/header'); ?>
<?php $this->load->view('themes/dosen/sidebar'); ?>

<div class="page animsition">
    <div class="page-header">
        <h1 class="page-title">Kelola Penelitian Internal</h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('dashboard')?>">Dashboard</a></li>
            <li class="active">Penelitian Internal</li>
        </ol>
    </div>
    <div class="page-content">
      <!-- Panel -->
      <div class="panel panel-bordered panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">
                <select class="form-control" style="width: 150px;" onchange="window.location.href='<?php echo site_url('penelitian-internal?tahun=') ?>'+this.value">
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
                <th class="text-center" valign="middle" width="20">No</th>
                <th>Judul</th>
                <th>Bidang</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $no=0; foreach ($data as $d) : ?>
              <tr>
                <td class="text-center"><?php echo ++$no; ?></td>
                <td><?php echo $d->judul ?></td>
                <td><?php echo $d->bidang_penelitian ?></td>
                <td class="link">
                    <a href="<?php echo base_url('penelitian-internal/detail/'.$d->id_penelitian);?>">
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
              <h4 class="modal-title text-center">Tambah Data Penelitian Internal</h4>
          </div>
          <div class="modal-body">
              <form class="" id="formAdd" action="<?php echo base_url('penelitian-internal/add')?>" method="post"
                    enctype="multipart/form-data" autocomplete="off">
                  <div class="form-group col-md-12">
                    <label class="control-label">Judul Penelitian</label>
                    <input type="text" class="form-control" name="judul"
                    placeholder="Masukkan Judul " autocomplete="off" />
                  </div>
                  <div class="form-group col-md-12">
                    <label class="control-label">Nama Anggota</label>
                    <textarea class="form-control" name="nama_anggota" placeholder="Masukkan Nama Anggota" autocomplete="off"></textarea>
                      <span class="help-block">Berikan tanda <strong>;</strong> (titik koma) untuk pemisah jika anggota lebih dari satu.</span>
                  </div>
                  <div class="form-group col-md-6">
                    <label class="control-label">Sumber Dana</label>
                    <select name="sumber_dana" class="form-control" required>
                      <option value="">-- Pilih --</option>
                      <option value="Dalam Negeri">Dalam Negeri</option>
                      <option value="Luar Negeri / Asing">Luar Negeri / Asing</option>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label class="control-label">Jenis Penelitian</label>
                    <select name="jenis" class="form-control" required>
                      <option value="">-- Pilih --</option>
                      <option value="Penelitian Dasar">Penelitian Dasar</option>
                      <option value="Penelitian Terapan">Penelitian Terapan</option>
                      <option value="Pengembangan Experimental">Pengembangan Experimental</option>
                    </select>
                  </div>
                  <div class="form-group col-md-12">
                    <label class="control-label">Institusi Sumber Dana</label>
                    <input type="text" class="form-control" name="institusi_sumber_dana"
                    placeholder="Masukkan Institusi Sumber Dana" autocomplete="off" />
                  </div>
                  
                  <div class="form-group col-md-12">
                    <label class="control-label"> Bidang Penelitian</label>
                    <input type="text" class="form-control" name="penelitian"
                    placeholder="Masukkan Bidang Penelitian" autocomplete="off" />
                  </div>
                  <div class="form-group col-md-12">
                    <label class="control-label">Bidang Penelitian Lain</label>
                    <input type="text" class="form-control" name="penelitian_lain"
                    placeholder="Masukkan Bidang Penelitian Lain" autocomplete="off" />
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

                  <div class="form-group col-sm-6">
                    <label class="control-label">Tahun</label>
                    <input type="number" class="form-control" value="<?php echo date('Y')?>" name="tahun"
                    placeholder="Masukkan Tahun" autocomplete="off" />
                  </div>
                  <div class="form-group col-md-6">
                    <label class="control-label">Jumlah Dana</label>
                    <input type="number" class="form-control" name="jml_dana"
                    placeholder="Masukkan Jumlah Dana" autocomplete="off" />
                  </div>
                  <div class="form-group col-md-12">
                    <label class="control-label">Keterangan Invalid</label>
                    <textarea type="text" class="form-control" name="keterangan" placeholder="Masukkan Jumlah Dana" rows="4" autocomplete="off" /></textarea>
                  </div>
                  <div class="form-group col-md-12">
                      <label class="control-label">File Bukti</label>
                      <input type="file" name="file" class="form-control">
                      <span class="help-block">
                          Sistem hanya menerima file yang berekstensi <strong>*.PDF</strong>
                      </span>
                  </div>
                  <div class="form-group text-center">
                          <div id="btnAction">
                               <input type="hidden" name="dosen" value="<?php echo $sess['login_username'] ?>">
                              <button type="submit" class="btn btn-primary"><i class="fa fa-send"></i>&nbsp; Tambah</button>
                              <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i>&nbsp; Batal</button>
                          </div>
                  </div>
              </form>
          </div>
      </div>
  </div>
</div>
<?php $this->load->view('themes/footer-script'); ?>
<?php $this->load->view('themes/footer'); ?>