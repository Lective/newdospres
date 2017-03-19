<?php $this->load->view('themes/webmin/header'); ?>
<?php $this->load->view('themes/webmin/sidebar'); ?>

<div class="page animsition">
    <div class="page-header">
        <h1 class="page-title">Dashboard </h1>
        <ol class="breadcrumb">
            <li><a href="#">Menu Kelola</a></li>
            <li class="active">Dosen Berprestasi</li>
        </ol>
    </div>
    <div class="page-content">
      	<!-- Panel -->
      	<div class="panel">
        	<div class="panel-heading">
        	<h3 class="panel-title label-primary" style="color: white;">Data Dosen Berprestasi</h3>
        	</div><br>
        	<div class="panel-body">
            	<div class="row">
<!-- Panel -->
                <div class="col-sm-6">
                  <div class="margin-bottom-15">
                    <button class="btn btn-primary" data-target="#tambahData" data-toggle="modal" type="button" >
                      <i class="icon wb-plus" aria-hidden="true"></i> Tambah Data
                    </button>
                  </div>
                </div>
              </div>
                    <!-- Modal -->
                <div class="modal fade modal-super-scaled modal-primary" id="tambahData" aria-hidden="true" aria-labelledby="tambahData" role="dialog" tabindex="-1">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <h4 class="modal-title text-center">Tambah Data Dosen Berprestasi</h4>
                            </div>
                            <div class="modal-body"><br>
                                <form action="<?php echo base_url('dosen-berprestasi/add')?>" class="form-horizontal" method="post">
                                    <div class="form-group">
                                        <label class="control-label col-sm-3">NIDN</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="nidn" class="form-control" placeholder="Masukkan NIDN" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3">Nilai abstrak</label>
                                        <div class="col-sm-8" id="slider1">
                                          <!-- Nilai value -->
                                          <div class="range-slider">
                                            <div class="col-sm-8">
                                            <input class="range-slider__range" type="range" name="abstrak" id="abstrak" min="1" max="5" value="1">
                                            </div> 
                                            <span class="range-slider__value" >1</span>
                                          </div>
                                        </div>
                                      </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3">Nilai Latar Belakang</label>
                                        <div class="col-sm-8" id="slider2">
                                          <!-- Nilai value -->
                                          <div class="range-slider">
                                            <div class="col-sm-8">
                                            <input class="range-slider__range" type="range" name="latar_belakang" id="latar_belakang" min="1" max="10" value="1">
                                            </div> 
                                            <span class="range-slider__value">1</span>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="control-label col-sm-3">Nilai Metode pencapaian unggulan</label>
                                        <div class="col-sm-8" id="slider3">
                                          <!-- Nilai value -->
                                          <div class="range-slider">
                                            <div class="col-sm-8">
                                            <input class="range-slider__range" type="range" name="metode" id="metode" min="1" max="15" value="1">
                                            </div> 
                                            <span class="range-slider__value">1</span>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="control-label col-sm-3">Nilai Prestasi yang di unggulkan</label>
                                        <div class="col-sm-8" id="slider4">
                                          <!-- Nilai value -->
                                          <div class="range-slider">
                                            <div class="col-sm-8">
                                            <input class="range-slider__range" type="range" name="prestasi" id="prestasi" min="1" max="20" value="1">
                                            </div> 
                                            <span class="range-slider__value">1</span>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="control-label col-sm-3">Nilai Kemanfaatan</label>
                                        <div class="col-sm-8" id="slider5">
                                          <!-- Nilai value -->
                                          <div class="range-slider">
                                            <div class="col-sm-8">
                                            <input class="range-slider__range" type="range" name="Kemanfaatan" id="Kemanfaatan" min="1" max="20" value="1">
                                            </div> 
                                            <span class="range-slider__value">1</span>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="control-label col-sm-3">Nilai Disemisasi</label>
                                        <div class="col-sm-8" id="slider6">
                                          <!-- Nilai value -->
                                          <div class="range-slider">
                                            <div class="col-sm-8">
                                            <input class="range-slider__range" type="range" name="deseminasi" id="deseminasi" min="1" max="15" value="1">
                                            </div> 
                                            <span class="range-slider__value">1</span>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="control-label col-sm-3">Nilai Pengakuan pihak terkait</label>
                                        <div class="col-sm-8" id="slider7">
                                          <!-- Nilai value -->
                                          <div class="range-slider">
                                            <div class="col-sm-8">
                                            <input class="range-slider__range" type="range" name="pengakuan_pihak" id="pengakuan_pihak" min="1" max="15" value="1">
                                            </div> 
                                            <span class="range-slider__value">1</span>
                                          </div>
                                        </div>
                                      </div>
                                 <div class="form-group">
                                        <label class="control-label col-sm-3">Nilai Total</label>
                                        <div class="col-sm-8">
                                            <input type="number" name="nilai">
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
          <table class="table table-hover table-striped table-bordered table-responsive table-hover table-condensed" data-plugin="dataTable">
            <thead>
              <tr>
                <th class="text-center" valign="middle" width="20">No</th>
                <th class="text-center" valign="middle">NIDN</th>
                <th class="text-center" valign="middle">Nilai</th>
              </tr>
            </thead>
            <tbody>
             <?php $no=0; foreach ($data_dospres as $dosp) { ?>
              <tr class="text-center">
                <td><?php echo ++$no; ?></td>
                <td><?php echo $dosp['nidn']?></td>
                <td><?php echo $dosp['nilai']?></td>

                <td>
                    <a href="<?php echo base_url('dosen-berprestasi/delete/'.$dosp['id_calon_dospres']);?> " class="text-danger" onClick="return confirm('Anda yakin ingin menghapus data ini?')" onClick="return confirm('Anda yakin ingin menghapus data ini?')"><i class="fa fa-trash fa-2x" data-toggle="tooltip" data-original-title="Hapus"></i></a> &nbsp;
                </td>
              </tr>
            <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
              
				<!-- Isi Disini -->

            	</div>
        	</div>
      	</div>
      	<!-- End Panel -->
    </div>
</div>

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
    $("input[name=nilai]").val(total);
  });
});

rangeSlider();
</script>

<?php $this->load->view('themes/footer'); ?>
<?php $this->load->view('themes/footer-script'); ?>

