<<?php 
$nidn                       = $data_unggul->nidn;
$nama_lengkap               = $data_unggul->nama_lengkap;
$fakultas                   = $data_unggul->id_fakultas;
$program_studi              = $data_unggul->id_program_studi;
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
          <div class="col-sm-3">
          <div class="row-md-2"> 
            <img class="img-rounded img-bordered img-bordered-primary" width="150" height="150" src="<?php echo base_url('public/global/photos/placeholder.png')?>">
            </div>
            <br>
          <div class="row-md-3"> 
            <a href="<?php echo base_url('webmin/prestasi-unggul');?>">
              <button type="button" class="btn btn-danger"><i class="fa fa-close"></i>&nbsp; Batal</button>  
             </a>
            </div>
          </div> 
            <div class="col-sm-3"> 
              <label class="control-label">NIDN   :</label>
            <?= $nidn ?>
            <br>
            <label class="control-label">Nama Lengkap   :</label>
            <?= $nama_lengkap ?>
            <br>
              <label class="control-label">Fakultas   :</label>
            <?= $fakultas ?>
            <br>
            <label class="control-label">Program Studi   :</label>
            <?= $program_studi ?>
            <br>
            </div>
            <!-- Modal Button-->
            <div class="col-sm-3"> 
            <div class="margin-bottom-15">
              <button class="btn btn-primary" data-target="#abstrak" data-toggle="modal" type="button" >
                <i class="icon wb-plus" aria-hidden="true"></i> isi Abstrak
              </button>
            </div>
              <div class="margin-bottom-15">
              <button class="btn btn-primary" data-target="#latarbelakang" data-toggle="modal" type="button" >
                <i class="icon wb-plus" aria-hidden="true"></i> isi Latar Belakang
              </button>
            </div>
            <div class="margin-bottom-15">
              <button class="btn btn-primary" data-target="#metode" data-toggle="modal" type="button" >
                <i class="icon wb-plus" aria-hidden="true"></i> isi Metode Capaian
              </button>
            </div>
            <div class="margin-bottom-15">
              <button class="btn btn-primary" data-target="#pretasi" data-toggle="modal" type="button" >
                <i class="icon wb-plus" aria-hidden="true"></i> isi Prestasi Unggulan
              </button>
            </div>
            <div class="margin-bottom-15">
              <button class="btn btn-primary" data-target="#kemanfaatan" data-toggle="modal" type="button" >
                <i class="icon wb-plus" aria-hidden="true"></i> isi Kemanfaatan
              </button>
            </div>
            <div class="margin-bottom-15">
              <button class="btn btn-primary" data-target="#disemisasi" data-toggle="modal" type="button" >
                <i class="icon wb-plus" aria-hidden="true"></i> isi Disemisasi
              </button>
            </div>
            <div class="margin-bottom-15">
              <button class="btn btn-primary" data-target="#pengakuan" data-toggle="modal" type="button" >
                <i class="icon wb-plus" aria-hidden="true"></i> isi Pengakuan
              </button>
            </div>
            </div>
            <!-- end Modal button -->
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