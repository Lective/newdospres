<?php
$nidn   =$votedospres->nidn;
if ($this->input->post('is_submitted')) {
    $nidn                   = set_value('nidn');
    $tahun                  = set_value('tahun');
} else{
$nama   = $votedospres->nama_lengkap;
$tahun  = $votedospres->tahun;
} 
 ?>
            <div class="modal-dialog modal-md modal-primary in">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                            <h4 class="modal-title text-center" style="color:white">Vote Calon Dosen Berprestasi</h4>
                    </div>
                <div class="modal-body">
                <form action="<?php echo base_url('lv_home/votedospres/'.$nidn)?>" class="form-horizontal" method="post">
                        <div class="form-group">
                            <label class="control-label col-sm-3">Dosen</label>
                            <div class="col-sm-9">
                                <label class="control-label"><?= $nama ?></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">NIDN</label>
                            <div class="col-sm-9">
                                <label class="control"><?= $nidn ?></label>
                            </div>
                        </div>  
                    <div class="form-group">
                        <label class="control-label col-sm-3">NIDN Anda</label>
                        <div class="col-sm-8">
                            <input type="text" name="nidn_vote" class="form-control" maxlength="10" minlength="10" placeholder="Masukkan NIDN" required>
                        </div>
                    </div>
                    <div class="hidden">
                        <label class="control-label col-sm-3">Program Studi</label>
                            <div class="col-sm-8">
                                <select class="form-control" name="id_program_studi" type="hidden">
                                    <option value="" >-- Pilih Program Studi --</option>
                                    <?php $no=0; foreach ($data_kaprodi as $dak) { ?>
                                    <option value="<?php echo $dak['id_program_studi']?>" disable><?php echo $dak['nama_program_studi']?></option>
                                    <?php } ?>
                                </select>
                            </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Email</label>
                        <div class="col-sm-8">
                            <input type="email" name="email_vote" id="email" class="form-control" onblur="validateEmail(this);" placeholder="Masukkan E-Mail" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Nilai</label>
                        <div class="col-sm-9" id="slider1">
                            <!-- Nilai value -->
                            <div class="range-slider">
                                <div class="col-sm-10">
                                    <input class="range-slider__range" type="range" name="nilai" id="nilai" min="10" max="100" step="10" value="10">
                                </div> 
                                <span class="range-slider__value" >10</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Alasan</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" name="alasan" class="alasan" rows="4" placeholder="Masukkan Alasan" required></textarea>
                            </div>
                    </div>
                        <div class="hidden">
                            <label class="control-label col-sm-3">Tahun</label>
                            <div class="col-sm-2">
                                <label class="control-label col-sm-3"><?php echo date('Y') ?></label>
                                <input type="hidden" name="tahun" class="form-control" value="<?php echo date('Y') ?>">
                            </div>
                        </div>                                          
                    <div class="form-group">
                        <div class="col-sm-9 col-sm-offset-3">
                            <div id="btnAction">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-bullhorn"></i>&nbsp; VOTE</button>
                               <a data-dismiss="modal"><button type="button" class="btn btn-danger"><i class="fa fa-close"></i>&nbsp; Batal</button></a>
                            </div>
                        </div>
                    </div>
                </form>
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

$(".range-slider__range").change(function(){
  var total = 0;
  $('.range-slider__value').each(function(){
    var nilai = $(this).html();
    total+=parseInt(nilai);
    $("input[name=nilai_total]").val(total);
  });
});

rangeSlider();

function validateEmail(emailField){
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (reg.test(emailField.value) == false) 
        {
            alert('Masukkan E-Mail yang Benar');
            return false;
        }

        return true;

}
</script>
        </div>