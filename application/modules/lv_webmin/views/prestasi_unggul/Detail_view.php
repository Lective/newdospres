<<?php 
$nidn                       = $data_unggul->nidn;
$nama_lengkap               = $data_unggul->nama_lengkap;
$fakultas                   = $data_unggul->id_fakultas;
$program_studi              = $data_unggul->id_program_studi;
$abstrak                    = $data_unggul->abstrak;
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
            <img class="img-rounded img-bordered img-bordered-primary" width="130" height="160" src="<?php echo base_url('public/global/photos/placeholder.png')?>">
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
            <!-- Modal Collection -->
            <!-- Modal Abstrak -->
            <!-- Modal -->
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
                                <form action="<?php echo base_url('')?>" class="form-horizontal" method="post">
                                  <div class="panel-body">
                                  <div id="summernote" data-plugin="summernote" style="display: none;">
                                    
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
            <!-- End Modal Abstrak-->
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

<?php $this->load->view('themes/footer'); ?>
<?php $this->load->view('themes/footer-script'); ?>