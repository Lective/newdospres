<?php $this->load->view('themes/dosen/header'); ?>
<?php $this->load->view('themes/dosen/sidebar'); ?>

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

			<div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">[Nama Dosen]
                <small>Panel Description Here..</small>
              </h3>
            </div>
            <div class="panel-body">
              <!-- Example Images - Bordered -->
              
                <div class="row">
                  <div class="col-sm-6">
                    <div class="example">
                      <img class="img-rounded img-bordered img-bordered-primary" width="150" height="150" src="<?php echo base_url('public/global/photos/placeholder.png')?>" alt="...">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="example">
                    Data Dosen
                    <br>
                    
                    </div>
                  </div>
                   <div class="col-sm-6">
                    <div class="example">
                      <div class="row" align="center">
                         <ul class="list-unstyled">
                          <li class="margin-bottom-20">

                    <button class="btn btn-info" id="exampleBootboxCustomDialog" type="button">INFO</button>

                    <button class="btn btn-info" id="exampleBootboxCustomDialog" type="button">VOTE</button>
                          </li>
                         </ul>

                    </div>


                    </div>
                  </div>
                </div>
              <!-- End Example Images - Bordered -->
            </div>





             
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