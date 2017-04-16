<?php $this->load->view('themes/webmin/header'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>private/plugins/jqplot/jquery.jqplot.min.css">
<?php $this->load->view('themes/webmin/sidebar'); ?>

<div class="page animsition">
    <div class="page-header">
        <h1 class="page-title">Laporan Hasil Voting Dosen Berprestai </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo site_url('laporan/dosen-berprestasi?tahun='.$selectTahun) ?>">Laporan Dosen</a></li>
            <li class="active">Detail Laporan Dosen</li>
        </ol>
    </div>
    <div class="page-content">
        <!-- Panel -->
        <div class="panel panel-bordered panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">
                    Detail Hasil Voting Dosen Berprestasi
                </h3>
                <div class="panel-actions">
                    <button class="btn btn-primary" onclick="window.print()">
                        <i class="fa fa-print"></i> Cetak
                    </button>
                </div>
            </div>
            <div class="panel-body">
                <?php if($alert) echo ($alert->status == 'success' ? showAlertSuccess() : showAlertDanger());  ?>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Dosen</th>
                        <td><?php echo $data[0]->dosen ?></td>
                    </tr>
                    <tr>
                        <th>Tahun</th>
                        <td><?php echo $selectTahun ?></td>
                    </tr>
                </table>
                <table class="table table-bordered table-striped" data-plugin="datatables">
                    <thead>
                        <tr>
                            <th>Voter</th>
                            <th style="width: 400px">Alasan</th>
                            <th>Nilai</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $total = 0; ?>
                        <?php foreach ($data as $d): ?>
                            <tr>
                                <td><?php echo $d->dosen_vote ?></td>
                                <td><?php echo $d->alasan ?></td>
                                <td><?php echo $d->nilai ?></td>
                            </tr>
                            <?php $total += $d->nilai ?>
                        <?php endforeach ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="2" class="text-right">Nilai rata-rata</th>
                            <td>
                                <?php echo ($total / count($data)) ?>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <!-- End Panel -->
    </div>
</div>
<?php $this->load->view('themes/footer-script'); ?>
<?php $this->load->view('themes/footer'); ?>