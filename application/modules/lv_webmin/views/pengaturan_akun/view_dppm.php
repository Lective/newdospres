<?php $this->load->view('themes/dppm/header'); ?>
<?php $this->load->view('themes/dppm/sidebar'); ?>

<div class="page animsition">
    <div class="page-header">
        <h1 class="page-title">Pengaturan </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('dashboard')?>">Dashboard</a></li>
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
                <form action="<?php echo site_url('webmin/pengaturan-akun/save-password') ?>" method="post" class="form-horizontal" autocomplete="off">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <h2 class="panel-title text-center"><span class="label label-warning label-lg">Ganti Password</span></h2>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-5">
                            Password saat ini
                        </label>
                        <div class="col-sm-3">
                            <input type="password" name="pass_ini" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-5">
                            Password baru
                        </label>
                        <div class="col-sm-3">
                            <input type="password" name="pass_baru" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-5">
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
                        <div class="col-sm-5 col-sm-offset-5">
                            <button class="btn btn-primary" type="submit" onclick="return confirm('Apakah Anda yakin ingin mengubah password? Jika berhasil maka Anda akan langsung diarahkan ke halaman login dan silakan Anda login dengan password baru Anda.')"><i class="fa fa-send">&nbsp; </i>Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- End Panel -->
    </div>
</div>
<?php $this->load->view('themes/footer-script'); ?>
<?php $this->load->view('themes/footer'); ?>