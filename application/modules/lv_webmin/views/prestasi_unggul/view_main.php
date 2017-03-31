<?php $this->load->view('themes/webmin/header'); ?>
<?php $this->load->view('themes/webmin/sidebar'); ?>

<div class="page animsition">
    <div class="page-header">
        <h1 class="page-title">Dashboard </h1>
        <ol class="breadcrumb">
            <li><a href="#">Menu Kelola</a></li>
            <li class="active">Prestasi Unggul</li>
        </ol>
    </div>
    <div class="page-content">

        <!-- Panel -->
        <div class="panel">
            <div class="panel-heading">
            <h3 class="panel-title label-primary" style="color: white;">Data Prestasi Unggul</h3>
            </div><br>
            <div class="panel-body">
                <div class="row">
                <table class="table table-hover table-striped table-bordered table-responsive table-hover table-condensed" data-plugin="dataTable">
            <thead>
              <tr>
                <th class="text-center" valign="middle" width="20">No</th>
                <th class="text-center" valign="middle">NIDN/NIP</th>
                <th class="text-center" valign="middle">Nama Lengkap</th>
                <th class="text-center" valign="middle">Fakultas</th>
                <th class="text-center" valign="middle">Jurusan</th>
                <th class="text-center" valign="middle">Total Nilai</th>
                <th class="text-center" valign="middle">Action</th>
              </tr>
            </thead>
            <tbody>
             <?php $no=0; foreach ($data_unggul as $pu) { ?>
              <tr class="text-center">
                <td><?php echo ++$no; ?></td>
                <td><?php echo $pu['nidn']?></td>
                <td><?php echo $pu['nama_lengkap']?></td>
                <td><?php echo $pu['id_fakultas']?></td>
                <td><?php echo $pu['id_program_studi']?></td>
                <td><?php echo $pu['nilai_total']?></td>
                <td>
                    <a href="<?php echo base_url('prestasi-unggul/delete/'.$pu['id_prestasi_unggul']);?> " class="text-danger" onClick="return confirm('Anda yakin ingin menghapus data ini?')" onClick="return confirm('Anda yakin ingin menghapus data ini?')"><i class="fa fa-trash fa-2x" data-toggle="tooltip" data-original-title="Hapus"></i></a> &nbsp;
                    <a href="<?php echo base_url('prestasi-unggul/detail/'.$pu['id_prestasi_unggul']);?>" class="text-warning" ><i class="fa fa-more-vertical fa-2x" data-toggle="tooltip" data-original-title="Details"></i></i></a>
                </td>
              </tr>
            <?php } ?>
            </tbody>
          </table>                <!-- Isi Disini -->

                </div>
            </div>
        </div>
        <!-- End Panel -->
    </div>
</div>

<?php $this->load->view('themes/footer'); ?>
<?php $this->load->view('themes/footer-script'); ?>