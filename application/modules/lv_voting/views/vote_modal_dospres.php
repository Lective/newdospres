<?php
    $nidn                       = $data_info->nidn;
    if ($this->input->post('is_submitted')) {
      $nidn                   = set_value('nidn');
      $tahun                  = set_value('tahun');
      $id_program_studi       = set_value('id_program_studi');
    } else {
      $nidn                   = $data_info->nidn;
      $tahun                  = $data_info->tahun;
      //$id_program_studi       = $data_info->id_program_studi;
    }
?>

<?php $this->load->view('themes/dosen/header'); ?>

<div class="page animsition">
    <div class="page-header">
        <h1 class="page-title">Kelola Data Dosen Berprestasi </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('dashboard')?>">Dashboard</a></li>
            <li class="active">Data Kaprodi Berpestasi</li>
        </ol>
    </div>
    <div class="page-content">
      <!-- Panel -->
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title label-primary text-center" style="color: white;">Voting Data Dosen Berprestasi</h3>
            </div><br>
            <div class="panel-body">
                            <form action="<?php echo base_url('voting-dospres/add')?>" class="form-horizontal" method="post">
                                  <div class="form-group">
                                        <label class="control-label col-sm-3">NIDN yang akan di pilih :</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="nidn" class="form-control" value="<?= $nidn ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3">Tahun</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="tahun" class="form-control" value="<?= $tahun ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3">Program Studi</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="id_program_studi" class="form-control" value="" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3">NIDN Pemilih</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="nidn_vote" class="form-control" placeholder="NIDN" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3">email</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="email_vote" class="form-control" placeholder="Masukkan E-Mail" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3">Rating</label>
                                        <div class="col-sm-8">
                                            <input type="radio" name="nilai" value="1" id="nilai1" >
                                            <label for="nilai1">1 </label>
                                            
                                            <input type="radio" name="nilai" value="2" id="nilai2">
                                            <label for="nilai2">2 </label>

                                            <input type="radio" name="nilai" value="3" id="nilai3">
                                            <label for="nilai3">3 </label>

                                            <input type="radio" name="nilai" value="4" id="nilai4">
                                            <label for="nilai4">4 </label>

                                            <input type="radio" name="nilai" value="5" id="nilai5">
                                            <label for="nilai5">5 </label>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3">Alasan</label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="alasan" class="alasan" rows="4" placeholder="Masukkan Alasan"></textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="col-sm-9 col-sm-offset-3">
                                            <div id="btnAction">
                                                <button type="submit" class="btn btn-primary"><i class="fa fa-send"></i>&nbsp; VOTE!</button>
                                                <a href="<?php echo base_url('voting-dospres')?>"><button type="button" class="btn btn-danger"><i class="fa fa-close"></i>&nbsp; Batal</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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
