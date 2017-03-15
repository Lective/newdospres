<?php $this->load->view('themes/webmin/header'); ?>
<?php $this->load->view('themes/webmin/sidebar'); ?>

<div class="page animsition">
    <div class="page-header">
        <h1 class="page-title">Dashboard </h1>
        <ol class="breadcrumb">
            <li><a href="#">Menu Kelola</a></li>
            <li class="active">Kaprodi Berprestasi</li>
        </ol>
    </div>
    <div class="page-content">
        <!-- Panel -->
        <div class="panel">
            <div class="panel-heading">
            <h3 class="panel-title label-primary" style="color: white;">Data Kaprodi Berprestasi</h3>
            </div><br>
            <div class="panel-body">
                <div class="row">
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
                                <h4 class="modal-title text-center">Tambah Data Kaprodi Berprestasi</h4>
                            </div>
                            <div class="modal-body"><br>
                                <form action="<?php echo base_url('kaprodi-berprestasi/add')?>" class="form-horizontal" method="post">
                                    <div class="form-group">
                                        <label class="control-label col-sm-3">NIDN</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="nidn" class="form-control" placeholder="Masukkan NIDN" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3">Nama Lengkap</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="nama_lengkap" class="form-control" placeholder="Masukkan Nama Lengkap" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3">Jabatan Akademik</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="jabatan_akademik" class="form-control" placeholder="Masukkan jabatan Akademik" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3">Pangkat/Golongan</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="pangkat_dan_golongan" class="form-control" placeholder="Masukkan Pangkat & Golongan" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3">Tempat & Tanggal Lahir</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="ttl" class="form-control" placeholder="Masukkan Tempat & Tanggal Lahir" required>
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label class="control-label col-sm-3">Jenis kelamin</label>
                                        <div class="col-sm-8">
                                            <input type="radio" name="jenis_kelamin" value="Laki-Laki" id="laki-laki" >
                                            <label for="laki-laki">Laki-Laki</label>
                                            
                                            <input type="radio" name="jenis_kelamin" value="Perempuan" id="perempuan">
                                            <label for="perempuan">Perempuan</label>
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label class="control-label col-sm-3">Bidang Keahlian</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="bidang_keahlian" class="form-control" placeholder="Masukkan Bidang Keahlian" required>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="control-label col-sm-3">NO HP/TLEP</label>
                                        <div class="col-sm-4">
                                            <input type="text" name="no_hp" class="form-control" placeholder="Masukkan No HP/Tlep" required>
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label class="control-label col-sm-3">Alamat E-mail</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="email" class="form-control" placeholder="Masukkan Alamat E-mail" required>
                                        </div>
                                    </div>
                                    <!-- 
                                    Form input file makalah
                                    -->

                                    <div class="form-group">
                                        <label class="control-label col-sm-3">Tahun</label>
                                        <div class="col-sm-4">
                                            <input type="number" name="tahun" value="<?php echo date('Y') ?>" class="form-control " placeholder="Masukkan Tahun">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3">fakultas</label>
                                        <div class="col-sm-4">
                                            <select class="form-control" name="id_fakultas">
                                                <option value="1" >Fakultas Teknik</option>
                                                <option value="2" >Fakultas Kedokteran</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                              </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3">Program Studi</label>
                                        <div class="col-sm-4">
                                            <select class="form-control" name="id_program_studi">
                                                <option value="1" >Teknik Informatika</option>
                                                <option value="2" >Teknik Sipil</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                              </select>
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
                <th class="text-center" valign="middle">Nama Lengkap</th>
                <th class="text-center" valign="middle">Jabatan Akademik</th>
                <th class="text-center" valign="middle">Pangkat dan Golongan</th>
                <th class="text-center" valign="middle">TTL</th>
                <th class="text-center" valign="middle">Jenis Kelamin</th>
                <th class="text-center" valign="middle">Bidang Keahlian</th>
                <th class="text-center" valign="middle">No HP/Tlep</th>
                <th class="text-center" valign="middle">E-mail</th>
                <th class="text-center" valign="middle">File makalah</th>
                <th class="text-center" valign="middle">Fakultas</th>
                <th class="text-center" valign="middle">Program Studi</th>
                <th class="text-center" valign="middle">Aksi</th>
              </tr>
            </thead>
            <tbody>
             <?php $no=0; foreach ($data_kaprodi as $kap) { ?>
              <tr class="text-center">
                <td><?php echo ++$no; ?></td>
                <td><?php echo $kap['nidn']?></td>
                <td><?php echo $kap['nama_lengkap']?></td>
                <td><?php echo $kap['jabatan_akademik']?></td>
                <td><?php echo $kap['pangkat_dan_golongan']?></td>
                <td><?php echo $kap['ttl']?></td>
                <td><?php echo $kap['jenis_kelamin']?></td>
                <td><?php echo $kap['bidang_keahlian']?></td>
                <td><?php echo $kap['no_hp']?></td>
                <td><?php echo $kap['email']?></td>
                <td>FILE MAKALAH</td>
                <td><?php echo $kap['id_fakultas']?></td>
                <td><?php echo $kap['id_program_studi']?></td>

                <td>
                    <a href="<?php echo base_url('kaprodi-berprestasi/delete/'.$kap['id_formulir_kaprodi']);?> " class="text-danger" onClick="return confirm('Anda yakin ingin menghapus data ini?')" onClick="return confirm('Anda yakin ingin menghapus data ini?')"><i class="fa fa-trash fa-2x" data-toggle="tooltip" data-original-title="Hapus"></i></a> &nbsp;
                    <a href="<?php echo base_url('kaprodi-berprestasi/update/'.$kap['id_formulir_kaprodi']);?>" class="text-warning" ><i class="fa fa-wrench fa-2x" data-toggle="tooltip" data-original-title="Edit"></i></i></a>
                </td>
              </tr>
            <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
                <!-- Isi Disini -->
                <!-- Isi Disini -->

                </div>
            </div>
        </div>
        <!-- End Panel -->
    </div>
</div>

<?php $this->load->view('themes/footer'); ?>
<?php $this->load->view('themes/footer-script'); ?>