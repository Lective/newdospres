<?php $this->load->view('themes/dosen/header'); ?>

<tbody>
<div class="page animsition">
  <div class="page-header">
    <h1 class="page-title">Voting</h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('dashboard')?>">Dashboard</a></li>
        <li class="active">Voting</li>
      </ol>
  </div>
  <div class="page-content">
    <div class="page-content container-fluid">
      <div class="row">
      <?php $no=0; foreach ($datadospres as $dasop) { ?>
        <div class="col-xlg-4 col-md-6">
      <!-- Panel -->
<!--data calkap-->
			<div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title"><?php echo $dasop['nidn']?>
              <br>
                <small>Panel Description Here..</small>
              </h3>
            </div>
            <div class="panel-body">
              <!-- Example Images - Bordered -->
              
                <div class="row">
                  <div class="col-sm-5">
                    <div class="example">
                      <img class="img-rounded img-bordered img-bordered-primary" width="150" height="150" src="<?php echo base_url('public/global/photos/placeholder.png')?>">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="example">
                                    <label class="control-label">NIDN :</label>
                                    <?php echo $dasop['nidn']?>
                           <br>
                                    <label class="control-label">Total Nilai :</label>
                                    <?php echo $dasop['nilai']?>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="example">
                      <div class="row" align="center">
                         <ul class="list-unstyled">
                          <li class="margin-bottom-20">
                            
                    <!-- Modal INFO -->
                <div class="modal fade modal-super-scaled modal-primary" id="info" aria-hidden="true" aria-labelledby="info" role="dialog" tabindex="-1">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <h4 class="modal-title text-center">Informasi Dosen</h4>
                            </div>
                            <div class="modal-body"><br>
                                 <div class="col-sm-4">
                                    <div class="example">
                                      <img class="img-rounded img-bordered img-bordered-primary" width="150" height="150" src="<?php echo base_url('public/global/photos/placeholder.png')?>" alt="...">

                                    </div>
                                  </div>
                                  
                            <div class="example" align="left">
                                    <label class="control-label">
                                    nidn             :</label>
                                    <?php echo $dasop['nidn']?>
                           <br>
                                    <label class="control-label">
                                    Nilai Total    :</label>
                                    <?php echo $dasop['nilai']?>
                           <br>
                                    <label class="control-label">
                                    Nilai Abstrak:</label>
                                    <?php echo $dasop['abstrak']?>
                           <br>
                                    <label class="control-label">
                                    Nilai Latar belakang :</label>
                                    <?php echo $dasop['latar_belakang']?>
                           <br>
                                    <label class="control-label">
                                    nilai Metode             :</label>
                                    <?php echo $dasop['metode']?>
                          <br>
                                    <label class="control-label">
                                    nilai Prestasi   :</label>
                                    <?php echo $dasop['prestasi']?>
                          <br>  
                                   <label class="control-label">
                                   nilai Kemanfaatan   :</label>
                                    <?php echo $dasop['kemanfaatan']?>
                          <br> 
                                    <label class="control-label">
                                    nilai deseminasi         :</label>
                                    <?php echo $dasop['deseminasi']?>
                          <br>       
                                    <label class="control-label">
                                    nilai pengakuan pihak    :</label>
                                    <?php echo $dasop['pengakuan_pihak']?>
                          <br>
                                    <label class="control-label">
                                    Tahun   :</label>
                                    <?php echo $dasop['tahun']?>
                          <br>
                          
                        
                          </div>     
                          </div>
                          </div>
                        </div>
                    </div>
                
                <!-- End Modal -->
                  
                        <!-- Modal -->
                <div class="modal fade modal-super-scaled modal-primary" id="vote" aria-hidden="true" aria-labelledby="vote" role="dialog" tabindex="-1">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <h4 class="modal-title text-center">Voting Dosen</h4>
                            </div>
                            <div class="modal-body"><br>
                                <form action="<?php echo base_url('voting-dospres/add')?>" class="form-horizontal" method="post">
                                
                                    <div class="form-group">
                                        <label class="control-label col-sm-3">NIDN</label>
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

                                            <input type="radio" name="nilai value="3" id="nilai3">
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

                          </li>
                         </ul>
                      </div>
                    </div>
                  </div>
                </div>
              <!-- End Example Images - Bordered -->
            </div>
            <div class="row" align="center">
              <li class="margin-bottom-20">
                <button class="btn btn-primary" data-target="#vote" data-toggle="modal" type="button" > VOTE</button>
                <button class="btn btn-primary" data-target="#info" data-toggle="modal" type="button" >INFO</button>
              </li>
            </div>
              <!-- End Example Thumbnalis - Custom -->               
<!--enddatacakap-->
<!--endpanel-->
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
</tbody>




<?php $this->load->view('themes/footer'); ?>
<?php $this->load->view('themes/footer-script'); ?>