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
      <?php $no=0; foreach ($data_kaprodi as $kap) { ?>
        <div class="col-xlg-4 col-md-6">
         <!-- Panel -->
<!--data calkap-->
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
                  <div class="col-sm-5">
                    <div class="example">
                      <img class="img-rounded img-bordered img-bordered-primary" width="150" height="150" src="<?php echo base_url('public/global/photos/placeholder.png')?>">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="example">
                                    <label class="control-label">NIDN :</label>
                                    <?php echo $kap['nidn']?>
                           <br>
                                    <label class="control-label">Nama Lengkap :</label>
                                    <?php echo $kap['nama_lengkap']?>
                           <br>
                                    <label class="control-label">Jabatan Akademik :</label>
                                    <?php echo $kap['jabatan_akademik']?>
                           <br>
                                   <label class="control-label">Bidang Keahlian :</label>
                                    <?php echo $kap['bidang_keahlian']?>
                          <br> 
                                    <label class="control-label">Fakultas :</label>
                                    <?php echo $kap['id_fakultas']?>
                          <br>       
                                    <label class="control-label">Program Studi :</label>
                                    <?php echo $kap['id_program_studi']?>
                          <br>      
                    </div>
                  </div>
                   <div class="col-sm-4">
                    <div class="example">
                      <div class="row" align="center">
                         <ul class="list-unstyled">
                          <li class="margin-bottom-20">
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
                    <a href="<?php echo base_url('voting/view/'.$kap['nidn']);?>" class="btn btn-primary" >VOTE</a> &nbsp;
                    <a href="<?php echo base_url('voting/viewinfo/'.$kap['id_formulir_kaprodi']);?>" class="btn btn-primary" >INFO</a>
              </li>
            </div>
          </div>
        </div>
          <?php } ?> 
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
</tbody>




<?php $this->load->view('themes/footer'); ?>
<?php $this->load->view('themes/footer-script'); ?>