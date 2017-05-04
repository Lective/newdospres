<?php $this->load->view('themes/webmin/header'); ?>
<?php $this->load->view('themes/webmin/sidebar'); ?>

<div class="page animsition">
    <div class="page-header">
        <h1 class="page-title">Managemen Akun </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('dashboard')?>">Menu Lain</a></li>
            <li class="active">Managemen Akun</li>
        </ol>
    </div>
    <div class="page-content">
        <!-- Panel -->
        <div class="panel panel-bordered panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Data Managemen Akun</h3>
                <div class="panel-actions">
                    <button class="btn btn-info" data-toggle="modal" data-target="#modal-add">
                        <i class="fa fa-plus"></i> Tambah Pengguna
                    </button>
                </div>
            </div>
            <div class="panel-body">
                <?php if($alert) echo ($alert->status == 'success' ? showAlertSuccess() : showAlertDanger());  ?>
                <table class="table table-bordered table-striped" data-plugin="datatables">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>Alias</th>
                            <th>Level</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; ?>
                        <?php foreach ($data as $d): ?>
                            <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo $d->username ?></td>
                                <td><?php echo $d->fullname ?></td>
                                <td><?php echo showUserLevel($d->level) ?></td>
                                <td class="link">
                                    <a href="<?php echo site_url('webmin/managemen-akun/hapus/'.$d->id_user) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus ini ?');">
                                        <button class="btn btn-danger btn-xs" type="button">
                                            <i class="fa fa-times"></i> Hapus
                                        </button>
                                    </a> 
                                    <!-- <a href="">
                                        <button class="btn btn-success btn-xs" type="button">
                                            <i class="fa fa-edit"></i> Edit
                                        </button>
                                    </a> -->
                                </td>
                            </tr>
                            <?php $no++ ?>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- End Panel -->
    </div>
</div>
<div class="modal fade modal-super-scaled modal-primary" id="modal-add" aria-hidden="true" aria-labelledby="tambahData" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title text-center">Tambah Pengguna</h4>
            </div>
            <form action="<?php echo site_url('webmin/managemen-akun/tambah') ?>" method="post" class="form-horizontal" autocomplete="off">
                <div class="modal-body"><br>
                    <div class="form-group">
                        <label class="control-label col-sm-4">
                            Username
                        </label>
                        <div class="col-sm-6">
                            <input type="text" name="dt[username]" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4">
                            Alias
                        </label>
                        <div class="col-sm-6">
                            <input type="text" name="dt[fullname]" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4">
                            Password
                        </label>
                        <div class="col-sm-6">
                            <input type="password" name="dt[password]" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4">
                            Level
                        </label>
                        <div class="col-sm-5">
                            <select name="dt[level]" class="form-control" required>
                                <option value="">-- Pilih --</option>
                                <?php foreach (listUserLevel() as $d => $v): ?>
                                    <option value="<?php echo $d ?>"><?php echo $v ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer text-center">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-send"></i>&nbsp; Tambah</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i>&nbsp;Batal</button>
                </div><br>
            </form>
        </div>
    </div>
</div>
<?php $this->load->view('themes/footer'); ?>
<?php $this->load->view('themes/footer-script'); ?>