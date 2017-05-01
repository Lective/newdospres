<?php $this->load->view('themes/dosen/header'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>private/plugins/alertify/css/alertify.min.css">
<style type="text/css">
    .cropit-preview {
      /* You can specify preview size in CSS */
      width: 200px;
      height: 200px;
      margin:0 auto;
    }
    /* Show load indicator when image is being loaded */
    .cropit-preview.cropit-image-loading .spinner {
      opacity: 1;
    }

    /* Show move cursor when image has been loaded */
    .cropit-preview.cropit-image-loaded .cropit-preview-image-container {
      cursor: move;
    }

    /* Gray out zoom slider when the image cannot be zoomed */
    .cropit-image-zoom-input[disabled] {
      opacity: .2;
    }

    /* Hide default file input button if you want to use a custom button */
    input.cropit-image-input {
      visibility: hidden;
    }

    /* The following styles are only relevant to when background image is enabled */

    /* Translucent background image */
    .cropit-preview-background {
      opacity: .2;
    }

    /*
     * If the slider or anything else is covered by the background image,
     * use non-static position on it
     */
    input.cropit-image-zoom-input {
      position: relative;
    }

    /* Limit the background image by adding overflow: hidden */
    #image-cropper {
      overflow: hidden;
    }
    .cropit-preview {
        background-color: #eee;
    }
    .cropit-image-zoom-input{margin:0 20px;}
    
    .slider-wrapper {
        position: relative;
        top: 10px;
    }
    .slider-wrapper * {

        display: inline!important;
    }
</style>
<?php $this->load->view('themes/dosen/sidebar'); ?>

<div class="page animsition">
    <div class="page-header">
        <h1 class="page-title">Pengaturan </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('dashboard')?>">Menu Lain</a></li>
            <li class="active">Pengaturan</li>
        </ol>
    </div>
    <div class="page-content">
        <!-- Panel -->
        <div class="panel panel-bordered panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Pengaturan Akun</h3>
            </div>
            <div class="panel-body">
                <?php if($alert) echo ($alert->status == 'success' ? showAlertSuccess($alert->message) : showAlertDanger($alert->message));  ?>
                <h4 class="panel-title" style="color:#3f51b5">Ganti Foto Akun</h4>
                <div class="text-center">
                    <div id="image-cropper">
                          <div class="cropit-preview">
                              <!-- Background image container is absolute positioned -->
                              <div class="cropit-preview-background-container">
                                <img class="cropit-preview-background" />
                              </div>
                              <!-- Image container is also absolute positioned -->
                              <div class="cropit-preview-image-container">
                                <img class="cropit-preview-image" />
                              </div>
                            </div>
                          
                          <div class="slider-wrapper" style="display: none;">
                                <i class="fa fa-photo"></i>
                              <input type="range" class="cropit-image-zoom-input" style="width: 120px" />
                              <i class="fa fa-photo" style="font-size: 1.5em"></i>
                          </div>
                          
                          <!-- The actual file input will be hidden -->
                          <input type="file" class="cropit-image-input" />
                          <!-- And clicking on this button will open up select file dialog -->
                          <button class="btn btn-success select-image-btn"><i class="fa fa-photo"></i> Pilih Gambar Baru</button>
                          <button class="btn btn-primary export" style="display: none;"><i class="fa fa-upload"></i> Upload</button>
                    </div>
                </div>
                <form action="<?php echo site_url('dosen/setting/save-password') ?>" method="post" class="form-horizontal" autocomplete="off">
                    <h4 class="panel-title" style="color:#3f51b5">Ganti Password</h4>
                    <div class="form-group">
                        <label class="control-label col-sm-2">
                            Password saat ini
                        </label>
                        <div class="col-sm-3">
                            <input type="password" name="pass_ini" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2">
                            Password baru
                        </label>
                        <div class="col-sm-3">
                            <input type="password" name="pass_baru" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2">
                            Ulangi Password baru
                        </label>
                        <div class="col-sm-3">
                            <input type="password" name="u_pass" class="form-control" required>
                            <p class="help-block">
                                Tanda ketika Anda berhasil mengubah password, Anda akan diarahkan kembali ke halaman login, silakan Anda login dengan password baru Anda.
                            </p>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-5 col-sm-offset-3">
                            <button class="btn btn-primary" type="submit" onclick="return confirm('Apakah Anda yakin ingin mengubah password? Jika berhasil maka Anda akan langsung diarahkan ke halaman login dan silakan Anda login dengan password baru Anda.')">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- End Panel -->
    </div>
</div>
<?php $this->load->view('themes/footer-script'); ?>
<script src="<?php echo base_url() ?>private/plugins/cropit/dist/jquery.cropit.js"></script>
<script src="<?php echo base_url() ?>private/plugins/alertify/alertify.min.js"></script>
<script type="text/javascript">
    $(function() {
    var $imageCropper = $('#image-cropper').cropit();
    <?php $path = FCPATH.'private/uploads/foto-dosen/';
            if(!empty($data->foto) && file_exists($path.$data->foto)){ ?>
    $imageCropper.cropit('imageSrc', '<?php echo base_url("private/uploads/foto-dosen/".$data->foto) ?>');

    <?php } ?>

    $imageCropper.cropit('export', {
      type: 'image/jpeg',
      quality: .5,
      originalSize: true
    });
    $('.select-image-btn').click(function() {
      $('.cropit-image-input').click();
    });
    $(".cropit-image-input").change(function() {
        var file = $(this).val();
        if (file.length >= 4) {
            $(".export, .slider-wrapper").show();
        }
    });


    $('.export').click(function() {
        var file = $(".cropit-image-input").val();
        if (file.length >= 4) {
            $(this).prop('disabled', true);
          var imageData = $imageCropper.cropit('export');
          $.ajax({
              type: "POST",
              url: "<?php echo site_url('dosen/setting/save-image') ?>",
              data: { 
                 image: imageData
              },
              dataType: "json",
              beforeSend: function() {
                  alertify.success('<font color="white">Sedang mengupload, <br>akan ada pemberitahuan selanjutnya</font>');
              },
              success: function(res) {
                  if (res.status == 'success') {
                    alertify.success('<font color="white">' + res.message + '</font>'); 
                    setTimeout(function() {
                        window.location.reload();
                    }, 1000);
                  } else {
                    alertify.error('<font color="white">' + res.message + '</font>');
                    $(this).prop('disabled', false);

                  }
              }
            });
        } else {
            alertify.error('<font color="white">Gagal mengupload</font>');
        }
    });
  });
</script>
<?php $this->load->view('themes/footer'); ?>