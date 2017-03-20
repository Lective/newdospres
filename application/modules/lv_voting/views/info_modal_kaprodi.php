<?php
    $id                       = $data_info->id_formulir_kaprodi;
    if ($this->input->post('is_submitted')) {
      $nidn                   = set_value('nidn');
      $nama_lengkap           = set_value('nama_lengkap');
      $jabatan_akademik       = set_value('jabatan_akademik');
      $pangkat_dan_golongan   = set_value('pangkat_dan_golongan');
      $ttl                    = set_value('ttl');
      $jenis_kelamin          = set_value('jenis_kelamin');
      $bidang_keahlian        = set_value('bidang_keahlian');
      $no_hp                  = set_value('no_hp');
      $email                  = set_value('email');
      $file_makalah           = set_value('file_makalah');
      $tahun                  = set_value('tahun');
      $id_fakultas            = set_value('id_fakultas');
      $id_program_studi       = set_value('id_program_studi');
    } else {
      $nidn                   = $data_info->nidn;
      $nama_lengkap           = $data_info->nama_lengkap;
      $jabatan_akademik       = $data_info->jabatan_akademik;
      $pangkat_dan_golongan   = $data_info->pangkat_dan_golongan;
      $ttl                    = $data_info->ttl;
      $jenis_kelamin          = $data_info->jenis_kelamin;
      $bidang_keahlian        = $data_info->bidang_keahlian;
      $no_hp                  = $data_info->no_hp;
      $email                  = $data_info->email;
      $file_makalah           = $data_info->file_makalah;
      $tahun                  = $data_info->tahun;
      $id_fakultas            = $data_info->id_fakultas;
      $id_program_studi       = $data_info->id_program_studi;
    }
?>
<?php $this->load->view('themes/dosen/header'); ?>

<div class="page animsition">
    <div class="page-header">
        <h1 class="page-title">Kaprodi Berprestasi </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('dashboard')?>">Dashboard</a></li>
            <li class="active">Data Kaprodi Berpestasi</li>
        </ol>
    </div>
    <div class="page-content">
      <!-- Panel -->
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title label-primary text-center" style="color: white;">info Data Kaprodi Berprestasi</h3>
            </div><br>
            <div class="panel-body">
                                  <div class="form-group">
                                        <label class="control-label col-sm-3">NIDN Kaprodi</label>
                                        <div class="col-sm-8">
                                            <?php echo $nidn?>
                                        </div>
                                  </div>
                                  <div class="form-group">
                                        <label class="control-label col-sm-3">Nama Lengkap</label>
                                        <div class="col-sm-8">
                                            <?php echo $nama_lengkap?>
                                        </div>
                                  </div>
                                  <div class="form-group">
                                        <label class="control-label col-sm-3">Jabatan Akademik</label>
                                        <div class="col-sm-8">
                                            <?php echo $jabatan_akademik?>
                                        </div>
                                  </div>
                                  <div class="form-group">
                                        <label class="control-label col-sm-3">Pangkat Golongan</label>
                                        <div class="col-sm-8">
                                            <?php echo $pangkat_dan_golongan?>
                                        </div>
                                  </div>
                                  <div class="form-group">
                                        <label class="control-label col-sm-3">Tempat Tgl Lahir</label>
                                        <div class="col-sm-8">
                                            <?php echo $ttl?>
                                        </div>
                                  </div> 
                                  <div class="form-group">
                                        <label class="control-label col-sm-3">Jenis Kelamin</label>
                                        <div class="col-sm-8">
                                            <?php echo $jenis_kelamin?>
                                        </div>
                                  </div> 
                                  <div class="form-group">
                                        <label class="control-label col-sm-3">Bidang keahlian</label>
                                        <div class="col-sm-8">
                                            <?php echo $bidang_keahlian?>
                                        </div>
                                  </div>
                                  <div class="form-group">
                                        <label class="control-label col-sm-3">Email</label>
                                        <div class="col-sm-8">
                                            <?php echo $email?>
                                        </div>
                                  </div>
                                  <div class="form-group">
                                        <label class="control-label col-sm-3">id Fakultas</label>
                                        <div class="col-sm-8">
                                            <?php echo $id_fakultas?>
                                        </div>
                                  </div>
                                  <div class="form-group">
                                        <label class="control-label col-sm-3">id Kaprodi</label>
                                        <div class="col-sm-8">
                                            <?php echo $id_program_studi?>
                                        </div>
                                  </div>

                                  <a href="<?php echo base_url('voting')?>"><button type="button" class="btn btn-danger"><i class="fa fa-close"></i>&nbsp; Batal</button></a> 
                                
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
