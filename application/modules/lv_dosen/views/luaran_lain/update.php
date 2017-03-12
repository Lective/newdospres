<?php
    $id             = $buku->id_buku_ajar;
    if ($this->input->post('is_submitted')) {
      $judul        = set_value('judul');
      $isbn         = set_value('isbn');
      $penerbit     = set_value('penerbit');
      $jml_halaman  = set_value('jml_halaman');
      $tahun        = set_value('tahun');
    } else {
      $judul         = $buku->judul;
      $isbn          = $buku->isbn;
      $penerbit      = $buku->penerbit;
      $jml_halaman   = $buku->jml_halaman;
      $tahun         = $buku->tahun;
    }
?>

<?php $this->load->view('themes/dosen/header'); ?>
<?php $this->load->view('themes/dosen/sidebar'); ?>

<div class="page animsition">
    <div class="page-header">
        <h1 class="page-title">Kelola Buku Ajar </h1>
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
        		    <?= form_open('luaran-lain/update/' . $id, ['class'=>'form-horizontal']) ?>
                    <div class="alert alert-warning bg-warning text-center" role="alert">
                        <b>Info!</b> Data yang telah di edit tidak dapat dikembalikan lagi.
                    </div>
                    <div class="col-md-2"></div>
                    <div class="form-group col-md-4">
                        <label class="control-label">Judul </label>
                        <input type="text" name="" class="form-control" value="<?= $judul ?>" required>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="form-group col-md-4">
                        <label class="control-label">Deskripsi </label>
                        <textarea class="form-control" name="deskripsi" rows="4"><?= $deskripsi ?></textarea>
                    </div>

                    <div class="col-md-2"></div>
                    <div class="form-group col-md-4">
                        <label class="control-label">Jenis </label>
                        <select name="jenis" class="form-control" required >
                          <option value="">-- Pilih --</option>
                          <option value="Model">Model</option>
                          <option value="Teknologi">Teknologi Tepat Guna</option>
                          <option value="Desain">Desain</option>
                          <option value="Prototype">Prototype</option>
                          <option value="Rekayasa">Rekayasa Sosial</option>
                          <option value="Kebijakan">Kebijakan</option>
                        </select>
                    </div>
                    <div class="col-md-1"></div>
					          <div class="form-group col-md-4">
                        <label class="control-label">Keterangan Invalid</label>
                        <textarea class="form-control" name="keterangan" rows="4"><?= $keterangan_invalid ?></textarea>
                    </div>

                    <div class="form-group col-md-12 text-center"><br>
                       	<button type="submit" class="btn btn-primary"><i class="fa fa-send"></i>&nbsp; Edit Data</button>
                        <a href="<?php echo base_url('buku-ajar')?>"><button type="button" class="btn btn-danger"><i class="fa fa-close"></i>&nbsp; Batal</button></a>
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