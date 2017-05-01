<?php $this->load->view('themes/webmin/header'); ?>
<?php $this->load->view('themes/webmin/sidebar'); ?>

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
                <h3 class="panel-title">Pengaturan Sistem</h3>
            </div>
            <div class="panel-body">
                <?php if($alert) echo ($alert->status == 'success' ? showAlertSuccess() : showAlertDanger());  ?>
                <form action="<?php echo site_url('webmin/pengaturan/process') ?>" method="post" class="form-horizontal" autocomplete="off">
                    <div class="form-group">
                        <label class="control-label col-sm-5">
                            Tahun
                        </label>
                        <div class="col-sm-3">
                            <input type="number" min="1945" name="dt[tahun]" class="form-control" value="<?php echo $data->tahun ?>" required>
                            <?php if(date('Y') != $data->tahun){ ?>
                            <span class="help-block">
                                Jangan lupa untuk mengubah tahun sesuai tahun sekarang: <strong><?php echo date('Y') ?></strong>
                            </span>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-5">  
                        </label>
                        <div class="col-sm-2">
                            <h3><span class="label label-warning">Fitur Voting</span></h3>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-5">
                            Tanggal Buka
                        </label>
                        <div class="col-sm-3">
                            <input type="text" name="dt[tanggal_buka]" class="form-control datepicker" value="<?php echo $data->tanggal_buka ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-5">
                            Tanggal Tutup
                        </label>
                        <div class="col-sm-3">
                            <input type="text" name="dt[tanggal_tutup]" class="form-control datepicker" value="<?php echo $data->tanggal_tutup ?>" required>
                        </div>
                    </div><br>
                    <div class="form-group text-center">
                        <div class="col-sm-5 col-sm-offset-3">
                            <button class="btn btn-primary" type="submit"><i class="fa fa-send"></i>&nbsp; Simpan</button>
                            <button type="button" onclick="goBack()" class="btn btn-danger"><i class="fa fa-arrow-left"></i>&nbsp; Kembali</button>
                            <script>
                              function goBack() {
                                window.history.back();
                              }
                            </script>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- End Panel -->
    </div>
</div>
<?php $this->load->view('themes/footer-script'); ?>
<script type="text/javascript">
    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
        autoclose:true
    });
</script>
<?php $this->load->view('themes/footer'); ?>