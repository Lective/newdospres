<?php $this->load->view('themes/webmin/header'); ?>
<?php $this->load->view('themes/webmin/sidebar'); ?>

<div class="page animsition">
    <div class="page-header">
        <h1 class="page-title">Dashboard </h1>
        <ol class="breadcrumb">
            <li><a href="#">Menu Kelola</a></li>
            <li class="active">Managemen Akun</li>
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
                        <label class="control-label col-sm-2">
                            Tahun
                        </label>
                        <div class="col-sm-2">
                            <input type="number" min="1945" name="dt[tahun]" class="form-control" value="<?php echo $data->tahun ?>" required>
                            <?php if(date('Y') != $data->tahun){ ?>
                            <span class="help-block">
                                Jangan lupa untuk mengubah tahun sesuai tahun sekarang: <strong><?php echo date('Y') ?></strong>
                            </span>
                            <?php } ?>
                        </div>
                    </div>
                    <h4 class="panel-title" style="color:#3f51b5">Fitur Voting</h4>
                    <div class="form-group">
                        <label class="control-label col-sm-2">
                            Tanggal Buka
                        </label>
                        <div class="col-sm-3">
                            <input type="text" name="dt[tanggal_buka]" class="form-control datepicker" value="<?php echo $data->tanggal_buka ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2">
                            Tanggal Tutup
                        </label>
                        <div class="col-sm-3">
                            <input type="text" name="dt[tanggal_tutup]" class="form-control datepicker" value="<?php echo $data->tanggal_tutup ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-5 col-sm-offset-3">
                            <button class="btn btn-primary" type="submit">Simpan</button>
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