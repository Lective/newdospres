
<?php $this->load->view('themes/webmin/header'); ?>
<?php $this->load->view('themes/webmin/sidebar'); ?>

<div class="page animsition">
    <div class="page-header">
        <h1 class="page-title">Tambah Data Prestasi Unggul</h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('dashboard')?>">Dashboard</a></li>
            <li class="active">Prestasi Unggul</li>
        </ol>
    </div>
    <div class="page-content">
      <!-- Panel -->
      	<div class="panel">
        	<div class="panel-heading">
        		<h3 class="panel-title label-primary text-center" style="color: white;">Tambah Data Prestasi Unggul</h3>
        	</div><br>
        	<div class="panel-body">
          <form action="<?php echo base_url('prestasi-unggul/add')?>" class="form-horizontal" method="post" enctype="multipart/form-data">
          <div class="panel-body">
            <div class="form-group">
              <label class="control-label col-sm-3">Dosen</label>
                <div class="col-sm-8">
                  <select name="dosen" class="form-control" style="width: 100%" required>
                    <option value="">Pilih</option>
                  </select>
                </div>
            </div>
            <br>
            <div class="form-group">
              <label class="control-label col-sm-3">Fakultas</label>
                <div class="col-sm-8">
                  <select name="id_fakultas" class="form-control" style="width: 100%" required>
                    <option value="">Pilih</option>
                    <?php foreach ($data_fak as $fak): ?>
                    <option value="<?php echo $fak['id_fakultas'] ?>"><?php echo $fak['nama_fakultas']; ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
            </div>
            <br>
            <div class="form-group">
              <label class="control-label col-sm-3">Program Studi</label>
                <div class="col-sm-8">
                  <select name="id_program_studi" class="form-control" style="width: 100%" required>
                    <option value="">Pilih</option>
                    <?php foreach ($data_prodi as $pro): ?>
                    <option value="<?php echo $pro['id_program_studi'] ?>"><?php echo $pro['nama_program_studi']; ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
            </div>
            <br>
            <div class="form-group">
              <label class="control-label col-sm-3">Tahun</label>
                <div class="col-sm-4">
                  <input type="number" min="1945" name="tahun" value="<?php echo date('Y') ?>" class="form-control " placeholder="Masukkan Tahun">
                </div>
            </div>
            <br>
          </div>  
          <div class="panel-body">
            <div class="form-group">
              <label class="control-label col-sm-3">isi Abstrak</label>
                <div class="col-sm-14">
                  <textarea id="abstrak" name="abstrak">
                  </textarea>
                  <script type="text/javascript">
                    CKEDITOR.replace( 'abstrak' );
                  </script>
                </div>
            </div>
            <br>
            <div class="form-group">
              <label class="control-label col-sm-3">isi Latar Belakang</label>
                <div class="col-sm-14">
                  <textarea id="latar_belakang" name="latar_belakang">
                  </textarea>
                    <script type="text/javascript">
                      CKEDITOR.replace( 'latar_belakang' );
                    </script>
                </div>
            </div>
            <br>
            <div class="form-group">
              <label class="control-label col-sm-3">isi Metode Capaian Unggulan</label>
                <div class="col-sm-14">
                  <textarea id="metodeCapaian" name="metode_pencapaian_unggulan">                 
                  </textarea>
                  <script type="text/javascript">
                    CKEDITOR.replace( 'metodeCapaian' );
                  </script>
                </div>
            </div>
            <br>
            <div class="form-group">
              <label class="control-label col-sm-3">isi Prestasi yang di Unggulkan</label>
                <div class="col-sm-14">
                  <textarea id="prestasi_unggul" name="prestasi_yang_diunggulkan">        
                  </textarea>
                  <script type="text/javascript">
                    CKEDITOR.replace( 'prestasi_unggul' );
                  </script>
                </div>
            </div>
            <br>
            <div class="form-group">
              <label class="control-label col-sm-3">isi Kemanfaatan</label>
                <div class="col-sm-14">
                  <textarea id="kemanfaatan" name="kemanfaatan">              
                  </textarea>
                  <script type="text/javascript">
                    CKEDITOR.replace( 'kemanfaatan' );
                  </script>
                </div>
            </div>
            <br>
            <div class="form-group">
              <label class="control-label col-sm-3">isi Diseminasi</label>
                <div class="col-sm-14">
                  <textarea id="diseminasi" name="diseminasi">
                  </textarea>
                  <script type="text/javascript">
                    CKEDITOR.replace( 'diseminasi' );
                  </script>
                </div>
            </div>
            <br>
            <div class="form-group">
              <label class="control-label col-sm-3">isi Pengakuan Pihak Terkait</label>
                <div class="col-sm-14">
                  <textarea id="pengakuan" name="pengakuan_pihak_terkait">                  
                  </textarea>
                  <script type="text/javascript">
                    CKEDITOR.replace( 'pengakuan' );
                  </script>
                </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3">isi Catatan</label>
                <div class="col-sm-14">
                  <textarea id="catatan" name="catatan">                  
                  </textarea>
                  <script type="text/javascript">
                    CKEDITOR.replace( 'catatan' );
                  </script>
                </div>
            </div>
            <br>
          </div>
            <div class="panel-body">
              <div class="form-group">
                <label class="control-label col-sm-4">Nilai abstrak</label>
                  <div class="col-sm-8" id="slider1">
                  <!-- Nilai value -->
                    <div class="range-slider">
                      <div class="col-sm-8">
                        <input class="range-slider__range" type="range" name="nilai_abstrak" id="nilai_abstrak" min="1" max="5" >
                      </div> 
                      <span class="range-slider__value" >1</span>
                    </div>
                  </div>
                </div>
            <br>
            <div class="form-group">
              <label class="control-label col-sm-4">Nilai Latar Belakang</label>
                <div class="col-sm-8" id="slider2">
                <!-- Nilai value -->
                  <div class="range-slider">
                    <div class="col-sm-8">
                      <input class="range-slider__range" type="range" name="nilai_latar_belakang" id="nilai_latar_belakang" min="1" max="10">
                    </div> 
                    <span class="range-slider__value">1</span>
                  </div>
                </div>
              </div>
              <br>
              <div class="form-group">
                <label class="control-label col-sm-4">Nilai Metode pencapaian unggulan</label>
                  <div class="col-sm-8" id="slider3">
                  <!-- Nilai value -->
                    <div class="range-slider">
                      <div class="col-sm-8">
                        <input class="range-slider__range" type="range" name="nilai_metode_pencapaian_unggulan" id="nilai_metode_pencapaian_unggulan" min="1" max="15" >
                      </div> 
                      <span class="range-slider__value">1</span>
                    </div>
                  </div>
              </div>
              <br>
              <div class="form-group">
                <label class="control-label col-sm-4">Nilai Prestasi yang diunggulkan</label>
                  <div class="col-sm-8" id="slider4">
                  <!-- Nilai value -->
                    <div class="range-slider">
                      <div class="col-sm-8">
                        <input class="range-slider__range" type="range" name="nilai_prestasi_yang_diunggulkan" id="nilai_prestasi_yang_diunggulan" min="1" max="20" >
                      </div> 
                      <span class="range-slider__value">1</span>
                    </div>
                  </div>
              </div>
              <br>
              <div class="form-group">
                <label class="control-label col-sm-4">Nilai Kemanfaatan</label>
                  <div class="col-sm-8" id="slider5">
                  <!-- Nilai value -->
                    <div class="range-slider">
                      <div class="col-sm-8">
                        <input class="range-slider__range" type="range" name="nilai_kemanfaatan" id="nilai_kemanfaatan" min="1" max="20" >
                      </div> 
                      <span class="range-slider__value">1</span>
                    </div>
                  </div>
              </div>
              <br>
              <div class="form-group">
                <label class="control-label col-sm-4">Nilai Disemisasi</label>
                  <div class="col-sm-8" id="slider6">
                  <!-- Nilai value -->
                    <div class="range-slider">
                      <div class="col-sm-8">
                        <input class="range-slider__range" type="range" name="nilai_diseminasi" id="nilai_diseminasi" min="1" max="15" >
                      </div> 
                      <span class="range-slider__value">1</span>
                    </div>
                  </div>
              </div>
              <br>
              <div class="form-group">
                <label class="control-label col-sm-4">Nilai Pengakuan pihak terkait</label>
                  <div class="col-sm-8" id="slider7">
                  <!-- Nilai value -->
                    <div class="range-slider">
                      <div class="col-sm-8">
                        <input class="range-slider__range" type="range" name="nilai_pengakuan_pihak_terkait" id="nilai_pengakuan_pihak_terkait" min="1" max="15" >
                      </div> 
                      <span class="range-slider__value">1</span>
                    </div>
                  </div>
              </div>
              <br>
              <div class="form-group">
                <label class="control-label col-sm-4">Nilai Total</label>
                  <div class="col-sm-8">
                    <input type="number" name="nilai_total">
                                            <!-- hitung nilai total -->
                                            <!-- post nilai total -->
                  </div>
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
        <?=$this->session->flashdata('notif')?>
    </div>
    
      <!-- End Panel -->
</div>



<script>
    function sweet(){
        swal("Good job!", "You clicked the button!", "success");
    }
</script>
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
    $("input[name=nilai_total]").val(total);
  });
});

rangeSlider();

$("select[name=dosen]").select2({
        ajax: {
        url: "<?php echo api_url('caridosen') ?>",
        dataType: 'json',
        delay: 250,
        data: function (params) {
          return {
            q: params.term, // search term
            page: params.page
          };
        },
        processResults: function (data, params) {
          return {
            results: $.map(data.items, function(obj) {
                    return { id: obj.nidn, text: obj.nama };
                })
            };
        },
        cache: true
      },
    dropdownParent: $("#tambahData")
  });
</script>

<?php $this->load->view('themes/footer'); ?>
<?php $this->load->view('themes/footer-script'); ?>