<?php $this->load->view('themes/webmin/header'); ?>
<?php $this->load->view('themes/webmin/sidebar'); ?>

<div class="page animsition">
    <div class="page-header">
        <h1 class="page-title">Dashboard </h1>
        <ol class="breadcrumb">
            <li><a href="#">Menu Kelola</a></li>
            <li class="active">Calon Dosen Berprestasi</li>
        </ol>
    </div>
    <div class="page-content">
        <!-- Panel -->
        <div class="panel panel-bordered panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Data Calon Dosen Berprestasi</h3>
                <div class="panel-actions">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#modal-add">
                        <i class="fa fa-plus"></i> Tambah Calon Dosen Berprestasi
                    </button>
                </div>
            </div>
            <div class="panel-body">
                <?php if($alert) echo ($alert->status == 'success' ? showAlertSuccess() : showAlertDanger());  ?>
                <table class="table table-bordered table-striped" data-plugin="datatables">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nidn</th>
                            <th>Nama Lengkap</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; ?>
                        <?php foreach ($data as $d): ?>
                            <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo $d->nidn ?></td>
                                <td><?php echo $d->nama_lengkap ?></td>
                                <td class="link">
                                    <a href="<?php echo site_url('webmin/cadospres-berprestasi/hapus/'.$d->nidn) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus ini ?');">
                                        <button class="btn btn-danger btn-xs" type="button">
                                            <i class="fa fa-times"></i> Hapus
                                        </button>
                                    </a> 
                                    <a href="">
                                        <button class="btn btn-success btn-xs" type="button">
                                            <i class="fa fa-edit"></i> Edit
                                        </button>
                                    </a>
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
                <h4 class="modal-title text-center">Tambah Calon Dosen Berprestasi</h4>
            </div>
            <form action="<?php echo site_url('webmin/cadospres-berprestasi/tambah') ?>" method="post" class="form-horizontal" autocomplete="off">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="control-label col-sm-2">
                            input 1
                        </label>
                        <div class="col-sm-7">
                            <input type="text" name="" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2">
                            input 2
                        </label>
                        <div class="col-sm-7">
                            <input type="text" name="" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2">
                            input 3
                        </label>
                        <div class="col-sm-7">
                            <input type="password" name="" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $this->load->view('themes/footer'); ?>
<?php $this->load->view('themes/footer-script'); ?>