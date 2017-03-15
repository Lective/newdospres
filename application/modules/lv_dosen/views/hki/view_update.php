<?php
    $id                   = $hak->id_hki;
    if ($this->input->post('is_submitted')) {
      $judul_hki          = set_value('judul_hki');
      $jenis_hki          = set_value('jenis_hki');
      $no_pendaftaran     = set_value('no_pendaftaran');
      $status_hki         = set_value('status_hki');
      $no_hki             = set_value('no_hki');
      $keterangan_invalid = set_value('keterangan_invalid');
      $tahun              = set_value('tahun');
    } else {
      $judul_hki          = $hak->judul_hki;
      $jenis_hki          = $hak->jenis_hki;
      $no_pendaftaran     = $hak->no_pendaftaran;
      $status_hki         = $hak->status_hki;
      $no_hki             = $hak->no_hki;
      $keterangan_invalid = $hak->keterangan_invalid;
      $tahun              = $hak->tahun;
    }
?>

<?php $this->load->view('themes/dosen/header'); ?>
<?php $this->load->view('themes/dosen/sidebar'); ?>

<div class="page animsition">
    <div class="page-header">
        <h1 class="page-title">Kelola Hak Kekayaan Intelektual </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('dashboard')?>">Dashboard</a></li>
            <li class="active">Hak Kekayaan Intelektual</li>
        </ol>
    </div>
    <div class="page-content">
      <!-- Panel -->
      	<div class="panel">
        	<div class="panel-heading">
        		<h3 class="panel-title label-primary text-center" style="color: white;">Edit Data Hak Kekayaan Intelektual</h3>
        	</div><br>
        	<div class="panel-body">
                <?= validation_errors() ?>
        		<?= form_open('hki/update/' . $id, ['class'=>'form-horizontal']) ?>
                    <div class="alert alert-warning bg-warning text-center" role="alert">
                        <b>Info!</b> Data yang telah di edit tidak dapat dikembalikan lagi.
                    </div>
                    <div class="col-md-2"></div>
                    <div class="form-group col-md-4">
                        <label class="control-label">Judul </label>
                        <input type="text" name="judul_hki" class="form-control" value="<?= $judul_hki ?>" required>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="form-group col-md-4">
                        <label class="control-label">Jenis </label>
                        <select name="jenis_hki" class="form-control" required>
                          <option value="">-- Pilih --</option>
                          <option value="Hak Cipta">Hak Cipta</option>
                          <option value="Paten">Paten</option>
                        </select>
                    </div>

                    <div class="col-md-2"></div>
					          <div class="form-group col-md-4">
                        <label class="control-label">No. Pendaftaran </label>
                        <input type="text" name="no_pendaftaran" class="form-control" value="<?= $no_pendaftaran ?>" required>
                    </div>
                    <div class="col-md-1"></div>
					          <div class="form-group col-md-4">
                        <label class="control-label">Status </label>
                        <select name="status_hki" class="form-control" required>
                          <option value="">-- Pilih --</option>
                          <option value="Terdaftar">Terdaftar</option>
                          <option value="Granted">Granted</option>
                        </select>
                    </div>

                    <div class="col-md-2"></div>
					          <div class="form-group col-md-4">
                        <label class="control-label">No. HKI </label>
                        <input type="number" name="no_hki" class="form-control" value="<?= $no_hki ?>" required>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="form-group col-md-4">
                        <label class="control-label">Tahun </label>
                        <input type="number" name="tahun" class="form-control" value="<?= $tahun ?>" required>
                    </div>

                    <div class="col-md-2"></div>
                    <div class="form-group col-md-4">
                        <label class="control-label">Keterangan Invalid</label>
                        <textarea class="form-control" name="keterangan_invalid" rows="4" required><?= $keterangan_invalid ?></textarea>
                    </div>
                    

                    <div class="form-group col-md-12 text-center"><br>
                       	<button type="submit" class="btn btn-primary"><i class="fa fa-send"></i>&nbsp; Edit Data</button>
                        <a href="<?php echo base_url('hki')?>"><button type="button" class="btn btn-danger"><i class="fa fa-close"></i>&nbsp; Batal</button></a>
                    </div>
                <?= form_close() ?>


        	</div>
       	</div>
    </div>
      <!-- End Panel -->
</div>

<?php $this->load->view('themes/footer'); ?>
<?php $this->load->view('themes/footer-script'); ?>