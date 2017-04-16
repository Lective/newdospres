<?php $this->load->view('themes/webmin/header'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>private/plugins/jqplot/jquery.jqplot.min.css">
<?php $this->load->view('themes/webmin/sidebar'); ?>

<div class="page animsition">
    <div class="page-header">
        <h1 class="page-title">Laporan Hasil Voting Kaprodi Berprestai </h1>
        <ol class="breadcrumb">
            <li class="active">Laporan Kaprodi</li>
        </ol>
    </div>
    <div class="page-content">
        <!-- Panel -->
        <div class="panel panel-bordered panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <select class="form-control" style="width: 150px;" onchange="window.location.href='<?php echo site_url('laporan/dosen-berprestasi?tahun=') ?>'+this.value">
                        <option value="">-- pilih tahun --</option>
                        <?php foreach ($tahun_list as $d): ?>
                            <option value="<?php echo $d->tahun ?>" <?php echo ($d->tahun == $selectTahun?'selected':'') ?>>tahun <?php echo $d->tahun ?></option>
                        <?php endforeach ?>
                    </select>
                </h3>
                <div class="panel-actions">
                    <button class="btn btn-primary" onclick="window.print()">
                        <i class="fa fa-print"></i> Cetak
                    </button>
                </div>
            </div>
            <div class="panel-body">
                <?php if($alert) echo ($alert->status == 'success' ? showAlertSuccess() : showAlertDanger());  ?>
                <table class="table table-bordered table-striped" data-plugin="datatables">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 80px;">Peringkat</th>
                            <th>Kaprodi</th>
                            <th>Nilai</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; ?>
                        <?php $dataGrafik = array() ?>
                        <?php foreach ($data as $d): ?>
                            <tr>
                                <td class="text-center"><?php echo $no ?></td>
                                <td><?php echo $d->dosen ?></td>
                                <td><?php echo $d->nilai ?></td>
                                <td class="link">
                                    <a href="<?php echo site_url('laporan/kaprodi-berprestasi/detail/'.$d->nidn.'?tahun='.$selectTahun) ?>">
                                        <button class="btn btn-success btn-sm" type="button">
                                            Detail
                                        </button>
                                    </a> 
                                </td>
                            </tr>
                            <?php $no++ ?>
                            <?php 
                                $dataGrafik[] = array($d->dosen, (float)$d->nilai);
                            ?>
                        <?php endforeach ?>
                    </tbody>
                </table>
                <?php //echo json_encode($dataGrafik) ?>
                <div id="grafik"></div>
            </div>
        </div>
        <!-- End Panel -->
    </div>
</div>
<?php $this->load->view('themes/footer-script'); ?>
<script type="text/javascript" src="<?php echo base_url() ?>private/plugins/jqplot/jquery.jqplot.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>private/plugins/jqplot/plugins/jqplot.barRenderer.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>private/plugins/jqplot/plugins/jqplot.categoryAxisRenderer.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    var line1 = <?php echo (count($dataGrafik) > 0 ? json_encode($dataGrafik) : '[["Belum ada data", 0]]'); ?>;
    $('#grafik').jqplot([line1], {
        title: 'Grafik Hasil Voting Kaprodi Berprestasi',
        seriesDefaults:{
            renderer:$.jqplot.BarRenderer,
            rendererOptions: {
                varyBarColor: true
            }
        },
        axes:{
            xaxis:{
                renderer: $.jqplot.CategoryAxisRenderer
            }
        }
    });
});
</script>
<?php $this->load->view('themes/footer'); ?>