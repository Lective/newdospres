<?php
$id                         = $data_unggul->id_prestasi_unggul;

if ($this->input->post('is_submitted')) {
    $abstrak = set_value('abstrak');
}else{
$nidn                       = $data_unggul->nidn;
$nama_lengkap               = $data_unggul->nama_lengkap;
$fakultas                   = $data_unggul->id_fakultas;
$program_studi              = $data_unggul->id_program_studi;
$abstrak                    = $data_unggul->abstrak;
$latar_belakang             = $data_unggul->latar_belakang;
$metode_pencapaian_unggulan = $data_unggul->metode_pencapaian_unggulan;
$prestasi_yang_diunggulkan  = $data_unggul->prestasi_yang_diunggulkan;
$kemanfaatan                = $data_unggul->kemanfaatan;
$diseminasi                 = $data_unggul->diseminasi;
$pengakuan_pihak_terkait    = $data_unggul->pengakuan_pihak_terkait;
$nilai_abstrak              = $data_unggul->nilai_abstrak;
$nilai_latar_belakang       = $data_unggul->nilai_latar_belakang;
$nilai_metode_pencapaian_unggulan = $data_unggul->nilai_metode_pencapaian_unggulan;
$nilai_prestasi_yang_diunggulkan = $data_unggul->nilai_prestasi_yang_diunggulkan;
$nilai_kemanfaatan = $data_unggul->nilai_kemanfaatan;
$nilai_diseminasi = $data_unggul->nilai_diseminasi;
$nilai_pengakuan_pihak_terkait = $data_unggul->nilai_pengakuan_pihak_terkait;
$nilai_total = $data_unggul->nilai_total;
$catatan = $data_unggul->catatan;
$tahun = $data_unggul->tahun;
}
 ?>
<?php $this->load->view('themes/webmin/header'); ?>
<?php $this->load->view('themes/webmin/sidebar'); ?>

<div class="page animsition">
    <div class="page-header">
        <h1 class="page-title">Data Detail Prestasi Unggul</h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('dashboard')?>">Dashboard</a></li>
            <li class="active">Prestasi Unggul</li>
        </ol>
    </div>
    <div class="page-content">
      <!-- Panel -->
      	<div class="panel">
        	<div class="panel-heading">
        		<h3 class="panel-title label-primary text-center" style="color: white;">Detail Data Prestasi Unggul</h3>
        	</div><br>
        	<div class="panel-body">
          <div class="col-md-2">
          <div class="row-md-2"> 
            <img class="img-rounded img-bordered img-bordered-primary" width="130" height="160" src="<?php echo base_url('public/global/photos/')?><?= $nidn ?>.jpg">
            </div>
            <br>
          <div class="row-md-2">
            <div class="margin-bottom-15"> 
                <label class="control-label">NIDN   :</label>
                <?= $nidn ?>
              </div>
              <div class="margin-bottom-15">
                <label class="control-label">Nama Lengkap   :</label>
                <?= $nama_lengkap ?>
              </div>
              <div class="margin-bottom-15">
                <label class="control-label">Fakultas   :</label>
                <?= $fakultas ?>
              </div>
              <div class="margin-bottom-15">
                <label class="control-label">Program Studi   :</label>
                <?= $program_studi ?>
              </div>
          </div>
          <div class="row-md-2"> 
            <a href="<?php echo base_url('webmin/prestasi-unggul');?>">
              <button type="button" class="btn btn-danger btn-block"><i class="fa fa-close"></i>&nbsp; Batal</button>  
             </a>
            </div>
          </div> 
            <div class="col-sm-3">
              <div class="margin-bottom-15">
                <label class="control-label">Nilai Abstrak   : </label>
              </div>
              <div class="margin-bottom-15">
                <label class="control-label">Nilai Latar Belakang   : </label>
              </div>
              <div class="margin-bottom-15">
                <label class="control-label">Nilai Metode Capaian   : </label>
              </div>
              <div class="margin-bottom-15">
                <label class="control-label">Nilai Prestasi Unggulan   : </label>
              </div>
              <div class="margin-bottom-15">
                <label class="control-label">Nilai Kemanfaatan   : </label>
              </div>
              <div class="margin-bottom-15">
                <label class="control-label">Nilai Disemisasi   : </label>
              </div>
              <div class="margin-bottom-15">
                <label class="control-label">Nilai Pengakuan Pihak   : </label>
              </div>
              <div class="margin-bottom-15">
                <button class="btn btn-primary btn-block" data-target="#isiNilai" data-toggle="modal" type="button" >
                  <i class="icon wb-plus" aria-hidden="true"></i> isi Nilai
                </button>
              </div>
                <div class="margin-bottom-15">
                    <button class="btn btn-primary btn-block" data-target="#isicatatan" data-toggle="modal" type="button" >
                        <i class="icon wb-plus" aria-hidden="true"></i>Catatan
                    </button>
              </div>
            </div> 
            <!-- Modal isi Button-->
            <div class="col-sm-4"> 
            <div class="margin-bottom-15">
                <button class="btn btn-primary btn-block waves-effect waves-light" data-target="#isiabstrak" data-toggle="modal" type="button" >
                  <i class="icon wb-plus" aria-hidden="true"></i>isi Abstrak 
                </button>
              </div>
            <div class="margin-bottom-15">
                <button class="btn btn-primary btn-block waves-effect waves-light" data-target="#isilatarbelakang" data-toggle="modal" type="button" >
                  <i class="icon wb-plus" aria-hidden="true"></i>isi Latar Belakang 
                </button>
            </div>
            <div class="margin-bottom-15">
                  <button class="btn btn-primary btn-block waves-effect waves-light" data-target="#isimetode" data-toggle="modal" type="button" >
                    <i class="icon wb-plus" aria-hidden="true"></i>isi Metode Capaian 
                  </button>
              </div>
            <div class="margin-bottom-15">
                <button class="btn btn-primary btn-block waves-effect waves-light" data-target="#isiprestasi" data-toggle="modal" type="button" >
                  <i class="icon wb-plus" aria-hidden="true"></i>isi Prestasi Capaian 
                </button>
            </div>
            <div class="margin-bottom-15">
                <button class="btn btn-primary btn-block waves-effect waves-light" data-target="#isikemanfaatan" data-toggle="modal" type="button" >
                  <i class="icon wb-plus" aria-hidden="true"></i>isi Kemanfaatan 
                </button>
            </div>
            <div class="margin-bottom-15">
                <button class="btn btn-primary btn-block waves-effect waves-light" data-target="#isidiseminasi" data-toggle="modal" type="button" >
                  <i class="icon wb-plus" aria-hidden="true"></i>isi Diseminasi
                </button>
            </div>
            <div class="margin-bottom-15">
                  <button class="btn btn-primary btn-block waves-effect waves-light" data-target="#isipengakuan" data-toggle="modal" type="button" >
                    <i class="icon wb-plus" aria-hidden="true"></i>isi Pengakuan
                  </button>
            </div>
          </div>
            <!-- end Modal button -->
            <!-- Modal isi Button-->
            <div class="col-sm-3"> 
            <div class="margin-bottom-15">
                <button class="btn btn-primary btn-block waves-effect waves-light" data-target="#bacaabstrak" data-toggle="modal" type="button" >
                  <i class="icon wb-book" aria-hidden="true"></i>Baca Abstrak 
                </button>
              </div>
            <div class="margin-bottom-15">
                <button class="btn btn-primary btn-block waves-effect waves-light" data-target="#bacalatarbelakang" data-toggle="modal" type="button" >
                  <i class="icon wb-book" aria-hidden="true"></i>Baca Latar Belakang 
                </button>
            </div>
            <div class="margin-bottom-15">
                  <button class="btn btn-primary btn-block waves-effect waves-light" data-target="#bacametode" data-toggle="modal" type="button" >
                    <i class="icon wb-book" aria-hidden="true"></i>Baca Metode Capaian 
                  </button>
              </div>
            <div class="margin-bottom-15">
                <button class="btn btn-primary btn-block waves-effect waves-light" data-target="#bacaprestasi" data-toggle="modal" type="button" >
                  <i class="icon wb-book" aria-hidden="true"></i>Baca Prestasi Capaian 
                </button>
            </div>
            <div class="margin-bottom-15">
                <button class="btn btn-primary btn-block waves-effect waves-light" data-target="#bacakemanfaatan" data-toggle="modal" type="button" >
                  <i class="icon wb-book" aria-hidden="true"></i>Baca Kemanfaatan
                </button>
            </div>
            <div class="margin-bottom-15">
                <button class="btn btn-primary btn-block waves-effect waves-light" data-target="#bacadiseminasi" data-toggle="modal" type="button" >
                  <i class="icon wb-book" aria-hidden="true"></i>Baca Diseminasi
                </button>
            </div>
            <div class="margin-bottom-15">
                  <button class="btn btn-primary btn-block waves-effect waves-light" data-target="#bacapengakuan" data-toggle="modal" type="button" >
                    <i class="icon wb-book" aria-hidden="true"></i>Baca Pengakuan
                  </button>
            </div>
          </div>
            <!-- end Modal button -->
            <!-- Modal Collection isi -->
            <!-- Modal Abstrak -->
            <!-- Modal-->
                <div class="modal fade modal-super-scaled modal-primary" id="isiabstrak" aria-hidden="true" aria-labelledby="isiabstrak" role="dialog" tabindex="-1">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <h4 class="modal-title text-center">isi Formulir Abstrak</h4>
                            </div>
                            <div class="modal-body"><br>
                                <form action="<?php echo base_url('webmin/prestasi_unggul/insertAbstrak/' .$id)?>" class="form-horizontal" method="post">
                                  <div class="panel-body">
                                    <textarea id="abstrak" name="abstrak">
                                       <?= $abstrak ?>
                                      </textarea>
                                     <script type="text/javascript">
                                        CKEDITOR.replace( 'abstrak' );
                                     </script>
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
            <!-- End Modal Abstrak-->
            <!-- Modal Latar Belakang -->
            <!-- Modal-->
                <div class="modal fade modal-super-scaled modal-primary" id="isilatarbelakang" aria-hidden="true" aria-labelledby="isilatarbelakang" role="dialog" tabindex="-1">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <h4 class="modal-title text-center">isi Formulir Latar Belakang</h4>
                            </div>
                            <div class="modal-body"><br>
                                <form action="<?php echo base_url('webmin/prestasi_unggul/insertLatarBelakang/' .$id)?>" class="form-horizontal" method="post">
                                  <div class="panel-body">
                                    <textarea id="latar_belakang" name="latar_belakang">
                                       <?= $latar_belakang ?>
                                      </textarea>
                                     <script type="text/javascript">
                                        CKEDITOR.replace( 'latar_belakang' );
                                     </script>
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
            <!-- End Modal Latar Belakang-->
            <!-- Modal metode capaian -->
            <!-- Modal-->
                <div class="modal fade modal-super-scaled modal-primary" id="isimetode" aria-hidden="true" aria-labelledby="isimetode" role="dialog" tabindex="-1">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <h4 class="modal-title text-center">isi Formulir Metode Capaian</h4>
                            </div>
                            <div class="modal-body"><br>
                                <form action="<?php echo base_url('webmin/prestasi_unggul/insertMetodeCapaian/' .$id)?>" class="form-horizontal" method="post">
                                  <div class="panel-body">
                                    <textarea id="metodeCapaian" name="metode_pencapaian_unggulan">
                                       <?= $metode_pencapaian_unggulan ?>
                                      </textarea>
                                     <script type="text/javascript">
                                        CKEDITOR.replace( 'metodeCapaian' );
                                     </script>
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
            <!-- End Modal metode capaian-->
                <!-- Modal prestasi -->
            <!-- Modal-->
                <div class="modal fade modal-super-scaled modal-primary" id="isiprestasi" aria-hidden="true" aria-labelledby="isiprestasi" role="dialog" tabindex="-1">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <h4 class="modal-title text-center">isi Formulir Prestasi Yang Diuggulkan</h4>
                            </div>
                            <div class="modal-body"><br>
                                <form action="<?php echo base_url('webmin/prestasi_unggul/insertPrestasiUnggul/' .$id)?>" class="form-horizontal" method="post">
                                  <div class="panel-body">
                                    <textarea id="prestasi_unggul" name="prestasi_yang_diunggulkan">
                                       <?= $prestasi_yang_diunggulkan ?>
                                      </textarea>
                                     <script type="text/javascript">
                                        CKEDITOR.replace( 'prestasi_unggul' );
                                     </script>
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
            <!-- End Modal prestasi-->
                <!-- Modal kemanfaatan -->
            <!-- Modal-->
                <div class="modal fade modal-super-scaled modal-primary" id="isikemanfaatan" aria-hidden="true" aria-labelledby="isikemanfaatan" role="dialog" tabindex="-1">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <h4 class="modal-title text-center">isi Formulir Kemanfaatan</h4>
                            </div>
                            <div class="modal-body"><br>
                                <form action="<?php echo base_url('webmin/prestasi_unggul/insertKemanfaatan/' .$id)?>" class="form-horizontal" method="post">
                                  <div class="panel-body">
                                    <textarea id="kemanfaatan" name="kemanfaatan">
                                       <?= $kemanfaatan ?>
                                      </textarea>
                                     <script type="text/javascript">
                                        CKEDITOR.replace( 'kemanfaatan' );
                                     </script>
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
            <!-- End Modal kemanfaatan-->
                <!-- Modal Diseminasi -->
            <!-- Modal-->
                <div class="modal fade modal-super-scaled modal-primary" id="isidiseminasi" aria-hidden="true" aria-labelledby="isidiseminasi" role="dialog" tabindex="-1">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <h4 class="modal-title text-center">isi Formulir Diseminasi</h4>
                            </div>
                            <div class="modal-body"><br>
                                <form action="<?php echo base_url('webmin/prestasi_unggul/insertDiseminasi/' .$id)?>" class="form-horizontal" method="post">
                                  <div class="panel-body">
                                    <textarea id="diseminasi" name="diseminasi">
                                       <?= $diseminasi ?>
                                      </textarea>
                                     <script type="text/javascript">
                                        CKEDITOR.replace( 'diseminasi' );
                                     </script>
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
            <!-- End Modal diseminasi-->
                <!-- Modal pengakuan -->
            <!-- Modal-->
                <div class="modal fade modal-super-scaled modal-primary" id="isipengakuan" aria-hidden="true" aria-labelledby="isipengakuan" role="dialog" tabindex="-1">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <h4 class="modal-title text-center">isi Formulir Pengakuan</h4>
                            </div>
                            <div class="modal-body"><br>
                                <form action="<?php echo base_url('webmin/prestasi_unggul/insertPengakuan/' .$id)?>" class="form-horizontal" method="post">
                                  <div class="panel-body">
                                    <textarea id="pengakuan" name="pengakuan_pihak_terkait">
                                       <?= $pengakuan_pihak_terkait ?>
                                      </textarea>
                                     <script type="text/javascript">
                                        CKEDITOR.replace( 'pengakuan' );
                                     </script>
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
            <!-- End Modal pengakuan-->
            <!-- Modal isi Nilai-->
                <div class="modal fade modal-super-scaled modal-primary" id="isiNilai" aria-hidden="true" aria-labelledby="isiNilai" role="dialog" tabindex="-1">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <h4 class="modal-title text-center">Nilai Prestasi Unggul</h4>
                            </div>
                            <div class="modal-body"><br>
                                <form action="<?php echo base_url('webmin/prestasi_unggul/insertNilai/' .$id)?>" class="form-horizontal" method="post">
                                    <div class="form-group">
                                        <label class="control-label col-sm-3">NIDN</label>
                                        <div class="col-sm-8">
                                            <label class="control-label"><?= $nidn ?></label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3">Nilai abstrak</label>
                                        <div class="col-sm-8" id="slider1">
                                          <!-- Nilai value -->
                                          <div class="range-slider">
                                            <div class="col-sm-8">
                                            <input class="range-slider__range" type="range" name="nilai_abstrak" id="nilai_abstrak" min="1" max="5" value="<?= $nilai_abstrak ?>">
                                            </div> 
                                            <span class="range-slider__value" ><?= $nilai_abstrak ?></span>
                                          </div>
                                        </div>
                                      </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3">Nilai Latar Belakang</label>
                                        <div class="col-sm-8" id="slider2">
                                          <!-- Nilai value -->
                                          <div class="range-slider">
                                            <div class="col-sm-8">
                                            <input class="range-slider__range" type="range" name="nilai_latar_belakang" id="nilai_latar_belakang" min="1" max="10" value="<?= $nilai_latar_belakang ?>">
                                            </div> 
                                            <span class="range-slider__value"><?= $nilai_latar_belakang ?></span>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="control-label col-sm-3">Nilai Metode pencapaian unggulan</label>
                                        <div class="col-sm-8" id="slider3">
                                          <!-- Nilai value -->
                                          <div class="range-slider">
                                            <div class="col-sm-8">
                                            <input class="range-slider__range" type="range" name="nilai_metode_pencapaian_unggulan" id="nilai_metode_pencapaian_unggulan" min="1" max="15" value="<?= $nilai_metode_pencapaian_unggulan ?>">
                                            </div> 
                                            <span class="range-slider__value"><?= $nilai_metode_pencapaian_unggulan ?></span>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="control-label col-sm-3">Nilai Prestasi yang di unggulkan</label>
                                        <div class="col-sm-8" id="slider4">
                                          <!-- Nilai value -->
                                          <div class="range-slider">
                                            <div class="col-sm-8">
                                            <input class="range-slider__range" type="range" name="nilai_prestasi_yang_diunggulkan" id="nilai_prestasi_yang_diunggulan" min="1" max="20" value="<?= $nilai_prestasi_yang_diunggulkan ?>">
                                            </div> 
                                            <span class="range-slider__value"><?= $nilai_prestasi_yang_diunggulkan ?></span>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="control-label col-sm-3">Nilai Kemanfaatan</label>
                                        <div class="col-sm-8" id="slider5">
                                          <!-- Nilai value -->
                                          <div class="range-slider">
                                            <div class="col-sm-8">
                                            <input class="range-slider__range" type="range" name="nilai_kemanfaatan" id="nilai_kemanfaatan" min="1" max="20" value="<?= $nilai_kemanfaatan?>">
                                            </div> 
                                            <span class="range-slider__value"><?= $nilai_kemanfaatan?></span>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="control-label col-sm-3">Nilai Disemisasi</label>
                                        <div class="col-sm-8" id="slider6">
                                          <!-- Nilai value -->
                                          <div class="range-slider">
                                            <div class="col-sm-8">
                                            <input class="range-slider__range" type="range" name="nilai_diseminasi" id="nilai_diseminasi" min="1" max="15" value="<?= $nilai_diseminasi ?>">
                                            </div> 
                                            <span class="range-slider__value"><?= $nilai_diseminasi ?></span>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="control-label col-sm-3">Nilai Pengakuan pihak terkait</label>
                                        <div class="col-sm-8" id="slider7">
                                          <!-- Nilai value -->
                                          <div class="range-slider">
                                            <div class="col-sm-8">
                                            <input class="range-slider__range" type="range" name="nilai_pengakuan_pihak_terkait" id="nilai_pengakuan_pihak_terkait" min="1" max="15" value="<?= $nilai_pengakuan_pihak_terkait ?>">
                                            </div> 
                                            <span class="range-slider__value"><?= $nilai_pengakuan_pihak_terkait ?></span>
                                          </div>
                                        </div>
                                      </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3">Nilai Total</label>
                                        <div class="col-sm-8">
                                            <input type="number" name="nilai_total" value="<?= $nilai_total ?>">
                                            <!-- hitung nilai total -->
                                            <!-- post nilai total -->
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
            <!-- End Modal Collection-->
          </div>
       	</div>
    </div>
      <!-- End Panel -->
</div>


<script>
    function sweet(){
        swal("Good job!", "You clicked the button!", "success");
    }
</script>
<script type="text/javascript">
  var rangeSlider = function(){
  var slider = $('.range-slider'),
      range = $('.range-slider__range'),
      value = $('.range-slider__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $(this).next(value).html(this.value);
    });
  });
};

$('#slider1 .range-slider__range').change(function () {
  $('#slider1 .range-slider__value').html(($(this).val()));
});

$('#slider2 .range-slider__range').change(function () {
  $('#slider2 .range-slider__value').html(($(this).val()));
})
$('#slider3 .range-slider__range').change(function () {
  $('#slider3 .range-slider__value').html(($(this).val()));
})
$('#slider4 .range-slider__range').change(function () {
  $('#slider4 .range-slider__value').html(($(this).val()));
})
$('#slider5 .range-slider__range').change(function () {
  $('#slider5 .range-slider__value').html(($(this).val()));
})
$('#slider6 .range-slider__range').change(function () {
  $('#slider6 .range-slider__value').html(($(this).val()));
})
$('#slider7 .range-slider__range').change(function () {
  $('#slider7 .range-slider__value').html(($(this).val()));
})
$(".range-slider__range").change(function(){
  var total = 0;
  $('.range-slider__value').each(function(){
    var nilai = $(this).html();
    total+=parseInt(nilai);
    $("input[name=nilai_total]").val(total);
  });
});

rangeSlider();
</script>

<?php $this->load->view('themes/footer'); ?>
<?php $this->load->view('themes/footer-script'); ?>