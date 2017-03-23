<?php
    $id             = $kaprodi->id_formulir_kaprodi;
    if ($this->input->post('is_submitted')) {
      $nidn                   = set_value('nidn');
      $nama_lengkap           = set_value('nama_lengkap');
      $jabatan_akademik       = set_value('jabatan_akademik');
      $pangkat_dan_golongan   = set_value('pangkat_dan_golongan');
      $tempat                 = set_value('tempat');
      $tanggal                 = set_value('tanggal');
      $jenis_kelamin          = set_value('jenis_kelamin');
      $bidang_keahlian        = set_value('bidang_keahlian');
      $no_hp                  = set_value('no_hp');
      $email                  = set_value('email');
      $file_makalah           = set_value('file_makalah');
      $tahun                  = set_value('tahun');
      $id_fakultas            = set_value('id_fakultas');
      $id_program_studi       = set_value('id_program_studi');
    } else {
      $nidn                   = $kaprodi->nidn;
      $nama_lengkap           = $kaprodi->nama_lengkap;
      $jabatan_akademik       = $kaprodi->jabatan_akademik;
      $pangkat_dan_golongan   = $kaprodi->pangkat_dan_golongan;
      $tempat                 = $kaprodi->tempat;
      $tanggal                = $kaprodi->tanggal;
      $jenis_kelamin          = $kaprodi->jenis_kelamin;
      $bidang_keahlian        = $kaprodi->bidang_keahlian;
      $no_hp                  = $kaprodi->no_hp;
      $email                  = $kaprodi->email;
      $file_makalah           = $kaprodi->file_makalah;
      $tahun                  = $kaprodi->tahun;
      $id_fakultas            = $kaprodi->id_fakultas;
      $id_program_studi       = $kaprodi->id_program_studi;
    }
?>

<?php $this->load->view('themes/dosen/header'); ?>
<?php $this->load->view('themes/dosen/sidebar'); ?>

<div class="page animsition">
    <div class="page-header">
        <h1 class="page-title">Kelola Data Kaprodi Berprestasi </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('dashboard')?>">Dashboard</a></li>
            <li class="active">Data Kaprodi Berpestasi</li>
        </ol>
    </div>
    <div class="page-content">
      <!-- Panel -->
      	<div class="panel">
        	<div class="panel-heading">
        		<h3 class="panel-title label-primary text-center" style="color: white;">Edit Data Kaprodi Berprestasi</h3>
        	</div><br>
        	<div class="panel-body">
                <?= validation_errors() ?>
        		<?= form_open('kaprodi-berprestasi/update/' . $id, ['class'=>'form-horizontal']) ?>
                    <div class="alert alert-warning bg-warning text-center" role="alert">
                        <b>Info!</b> Data yang telah di edit tidak dapat dikembalikan lagi.
                    </div>
                    <div class="col-md-2"></div>
                    <div class="form-group col-md-4">
                                    <label class="control-label">NIDN</label>
                                      
                                            <input type="text" name="nidn" class="form-control" value="<?= $nidn ?>" required>
                                        
                                    </div>
                      <div class="col-md-1"></div>
                      <div class="form-group col-md-4">
                                        <label class="control-label">Nama Lengkap</label>
                                        
                                            <input type="text" name="nama_lengkap" class="form-control" value="<?= $nama_lengkap ?>" required>
                                        
                                    </div>
                    <div class="col-md-2"></div>
                    <div class="form-group col-md-4">
                                        <label class="control-label">Jabatan Akademik</label>
                                        
                                            <input type="text" name="jabatan_akademik" class="form-control" value="<?= $jabatan_akademik ?>" required>
                                        
                                    </div>
                    <div class="col-md-1"></div>
                    <div class="form-group col-md-4">
                                        <label class="control-label">Pangkat/Golongan</label>
                                        
                                            <input type="text" name="pangkat_dan_golongan" class="form-control" value="<?= $pangkat_dan_golongan ?>" required>
                                        
                                    </div>
                     <div class="col-md-2"></div>
                    <div class="form-group col-md-4">
                                        <label class="control-label col-sm-3">Tempat Lahir</label>
                                       
                                            <input type="text" name="tempat_lahir" class="form-control" value="<?= $tempat ?>" required>
                                    </div>
                                     <div class="col-md-2"></div>
                    <div class="form-group col-md-4">
                                        <label class="control-label col-sm-3">Tanggal Lahir</label>
                                       
                                            <input type="text" name="tanggal_lahir" class="form-control" data-plugin="datepicker" value="<?= $tanggal ?>" required>
                                    </div>
                    <div class="col-md-1"></div>
                    <div class="form-group col-md-4">
                                        <label class="control-label">Jenis kelamin</label>
                                        <br>
                                            <input type="radio" name="jenis_kelamin" value="Laki-Laki" id="laki-laki" >
                                            <label for="laki-laki">Laki-Laki</label>
                                            <br>
                                            <input type="radio" name="jenis_kelamin" value="Perempuan" id="perempuan">
                                            <label for="perempuan">Perempuan</label>
                                        
                                    </div>
                    <div class="col-md-2"></div>
                    <div class="form-group col-md-4">
                                        <label class="control-label">Bidang Keahlian</label>
                                        
                                            <input type="text" name="bidang_keahlian" class="form-control" value="<?= $bidang_keahlian ?>" required>
                                        
                                    </div>
                                    
                    <div class="col-md-1"></div>
                    <div class="form-group col-md-4">
                                        <label class="control-label">NO HP/TLEP</label>
                                        
                                            <input type="text" name="no_hp" class="form-control" value="<?= $bidang_keahlian ?>" required>
                                        
                                    </div>
                    <div class="col-md-2"></div>
                    <div class="form-group col-md-4">
                                        <label class="control-label">Alamat E-mail</label>
                                        
                                            <input type="text" name="email" class="form-control" value="<?= $email ?>" required>
                                        
                                    </div>
                                    <!-- 
                                    Form input file makalah
                                    -->

                    <div class="col-md-1"></div>
                    <div class="form-group col-md-4">
                                        <label class="control-label">Tahun</label>
                                        
                                            <input type="number" name="tahun" value="<?php echo date('Y') ?>" class="form-control " value="<?= $tahun ?>">
                                        
                                    </div>
                    <div class="col-md-2"></div>
                    <div class="form-group col-md-4">
                                        <label class="control-label">fakultas</label>
                                            <select class="form-control" name="id_fakultas">
                                            <?php $no=0; foreach ($data_fakultas as $daf) { ?>
                                                <option value="<?php echo $daf['id_fakultas']?>" ><?php echo $daf['nama_fakultas']?></option>
                                                <?php } ?>
                                              </select>                                        
                                    </div>
                    <div class="col-md-1"></div>
                    <div class="form-group col-md-4">
                                        <label class="control-label">Program Studi</label>
                                            <select class="form-control" name="id_program_studi">
                                            <?php $no=0; foreach ($data_prodi as $dapodi) { ?>
                                                <option value="<?php echo $dapodi['id_program_studi']?>" ><?php echo $dapodi['nama_program_studi']?></option>
                                                <?php } ?>
                                              </select>
                                        
                                    </div>
                    <div class="form-group col-md-12 text-center"><br>
                       	<button type="submit" class="btn btn-primary"><i class="fa fa-send"></i>&nbsp; Edit Data</button>
                        <a href="<?php echo base_url('webmin/kaprodi-berprestasi')?>"><button type="button" class="btn btn-danger"><i class="fa fa-close"></i>&nbsp; Batal</button></a>
                    </div>
                <?= form_close() ?>


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