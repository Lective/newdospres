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
        <div class="col-xlg-4 col-md-6">
    
      <!-- Panel -->
<!--data calkap-->
<?php $no=0; foreach ($data_kaprodi as $kap) { ?>
			<div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title"><?php echo $kap['nama_lengkap']?>
              <br>
                <small>Panel Description Here..</small>
              </h3>
            </div>
            <div class="panel-body">
              <!-- Example Images - Bordered -->
              
                <div class="row">
                  <div class="col-sm-4">
                    <div class="example">
                      <img class="img-rounded img-bordered img-bordered-primary" width="150" height="150" src="<?php echo base_url('public/global/photos/placeholder.png')?>">
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="example">
                                    <label class="control-label">NIDN</label>
                                    <?php echo $kap['nidn']?>
                           <br>
                                    <label class="control-label">Nama Lengkap</label>
                                    <?php echo $kap['nama_lengkap']?>
                           <br>
                                    <label class="control-label">Jabatan Akademik</label>
                                    <?php echo $kap['jabatan_akademik']?>
                           <br>
                                    <label class="control-label">Pangkat/Golongan</label>
                                    <?php echo $kap['pangkat_dan_golongan']?>
                           <br>
                                    <label class="control-label">TTL</label>
                                    <?php echo $kap['ttl']?>
                          <br>
                                    <label class="control-label">Jenis Kelamin</label>
                                   <?php echo $kap['jenis_kelamin']?>
                          <br>  
                                   <label class="control-label">Bidang Keahlian</label>
                                    <?php echo $kap['bidang_keahlian']?>
                          <br> 
                                    <label class="control-label">Fakultas</label>
                                    <?php echo $kap['id_fakultas']?>
                          <br>       
                                    <label class="control-label">Program Studi</label>
                                    <?php echo $kap['id_program_studi']?>
                          <br>      
                                   
                    
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
                                    <?php echo $kap['nidn']?>
                           <br>
                                    <label class="control-label">
                                    Nama Lengkap     :</label>
                                    <?php echo $kap['nama_lengkap']?>
                           <br>
                                    <label class="control-label">
                                    Jabatan Akademik :</label>
                                    <?php echo $kap['jabatan_akademik']?>
                           <br>
                                    <label class="control-label">
                                    Pangkat/Golongan :</label>
                                    <?php echo $kap['pangkat_dan_golongan']?>
                           <br>
                                    <label class="control-label">
                                    TTL              :</label>
                                    <?php echo $kap['ttl']?>
                          <br>
                                    <label class="control-label">
                                    Jenis Kelamin    :</label>
                                   <?php echo $kap['jenis_kelamin']?>
                          <br>  
                                   <label class="control-label">
                                   Bidang Keahlian   :</label>
                                    <?php echo $kap['bidang_keahlian']?>
                          <br> 
                                    <label class="control-label">
                                    Fakultas         :</label>
                                    <?php echo $kap['id_fakultas']?>
                          <br>       
                                    <label class="control-label">
                                    Program Studi    :</label>
                                    <?php echo $kap['id_program_studi']?>
                          <br>
                          
                        
                          </div>     
                          </div>
                          </div>
                        </div>
                    </div>
                
                <!-- End Modal -->
                    <?php } ?>
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
                                <form action="<?php echo base_url('')?>" class="form-horizontal" method="post">
                                    <div class="form-group">
                                        <label class="control-label col-sm-3">NIDN</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="nidn" class="form-control" placeholder="NIDN" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3">email</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="email" class="form-control" placeholder="Masukkan E-Mail" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="example-wrap">
                                          <h4 class="example-title">Beri Bintang</h4>
                                            <div class="example">
                                              <div class="rating" data-plugin="rating"></div>
                                            </div>
                                          </div>  
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3">Alasan</label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="keterangan" class="keterangan" rows="4" placeholder="Masukkan Alasan"></textarea>
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
</div>
</li>
              </div>
              </div>
              </div>
              <!-- End Example Thumbnalis - Custom -->             
          </div>   
<!--enddatacakap-->
<!--endpanel-->
</div>
</div>
</div>
</div>
</div>
</p>
</tbody>




<?php $this->load->view('themes/footer'); ?>
<?php $this->load->view('themes/footer-script'); ?>