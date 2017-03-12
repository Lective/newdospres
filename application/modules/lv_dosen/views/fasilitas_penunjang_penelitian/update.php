<?php
    $id               = $penunjang->id_fasilitas_penunjang_penelitian;
    if ($this->input->post('is_submitted')) {
      $nama_unit        = set_value('nama_unit');
      $no_sk_pendirian  = set_value('no_sk_pendirian');
      $fasilitas        = set_value('fasilitas');
      $status_fasilitas_penunjang = set_value('status_fasilitas_penunjang');
      $keterangan       = set_value('keterangan');
    } else {
      $nama_unit         = $penunjang->nama_unit;
      $no_sk_pendirian   = $penunjang->no_sk_pendirian;
      $fasilitas         = $penunjang->fasilitas;
      $status_fasilitas_penunjang = $penunjang->status_fasilitas_penunjang;
      $keterangan_invalid= $penunjang->keterangan_invalid;
    }
?>

<?php $this->load->view('themes/dosen/header'); ?>
<?php $this->load->view('themes/dosen/sidebar'); ?>

<div class="page animsition">
    <div class="page-header">
        <h1 class="page-title">Kelola Fasilitas Penunjang Penelitian </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('dashboard')?>">Dashboard</a></li>
            <li class="active">Buku Ajar</li>
        </ol>
    </div>
    <div class="page-content">
      <!-- Panel -->
      	<div class="panel">
        	<div class="panel-heading">
        		<h3 class="panel-title label-primary text-center" style="color: white;">Edit Data Buku Ajar</h3>
        	</div><br>
        	<div class="panel-body">
                <?= validation_errors() ?>
        		<?= form_open('penunjang-penelitian/update/' . $id, ['class'=>'form-horizontal']) ?>
                        <div class="alert alert-warning bg-warning text-center" role="alert">
                        <b>Info!</b> Data yang telah di edit tidak dapat dikembalikan lagi.
                        </div>
                    <div class="col-md-2"></div>
                    <div class="form-group col-md-4">
                        <label class="control-label">Nama Unit </label>
                        <input type="text" name="nama_unit" class="form-control" value="<?= $nama_unit ?>" required>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="form-group col-md-4">
                        <label class="control-label">No SK Pendirian </label>
                        <input type="text" name="no_sk_pendirian" class="form-control" value="<?= $no_sk_pendirian ?>" required>
                    </div>

                    <div class="col-md-2"></div>
					         <div class="form-group col-md-4">
                        <label class="control-label">Fasilitas </label>
                        <input type="text" name="fasilitas" class="form-control" value="<?= $fasilitas ?>" required>
                    </div>
                    <div class="col-md-1"></div>
					         <div class="form-group col-md-4">
                        <label class="control-label">Status </label>
                        <input type="text" name="status_fasilitas_penunjang" class="form-control" value="<?= $status_fasilitas_penunjang ?>" required>
                    </div>

                    <div class="col-md-2"></div>
					         <div class="form-group col-md-4">
                        <label class="control-label">Keterangan Invalid </label>
                        <textarea name="keterangan_invalid" class="form-control" rows="4" required><?= $keterangan_invalid ?></textarea>
                    </div>
                    <div class="form-group col-md-12 text-center"><br>
                       	<button type="submit" class="btn btn-primary"><i class="fa fa-send"></i>&nbsp; Edit Data</button>
                        <a href="<?php echo base_url('penunjang-penelitian')?>"><button type="button" class="btn btn-danger"><i class="fa fa-close"></i>&nbsp; Batal</button></a>
                    </div>
                <?= form_close() ?>


        	</div>
       	</div>
    </div>
      <!-- End Panel -->
</div>


<script>
    function sweet(){
        swal("Good job!", "You clicked the button!", "success");
    }
</script>

<?php $this->load->view('themes/footer'); ?>
<?php $this->load->view('themes/footer-script'); ?>