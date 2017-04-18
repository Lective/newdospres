<?php $this->load->view('themes/webmin/header'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>private/plugins/jqplot/jquery.jqplot.min.css">
<?php $this->load->view('themes/webmin/sidebar'); ?>

<div class="page animsition">
    <div class="page-header noprint">
        <h1 class="page-title">Laporan Hasil Voting Kaprodi Berprestasi </h1>
        <ol class="breadcrumb">
            <li class="active">Laporan Kaprodi</li>
        </ol>
    </div>
    <div class="page-content">
        <!-- Panel -->
        <div class="panel panel-bordered panel-primary">
            <div class="panel-heading noprint">
                <h3 class="panel-title">
                    <select class="form-control" style="width: 150px;" onchange="window.location.href='<?php echo site_url('laporan/dosen-berprestasi?tahun=') ?>'+this.value">
                        <option value="">-- pilih tahun --</option>
                        <?php foreach ($tahun_list as $d): ?>
                            <option value="<?php echo $d->tahun ?>" <?php echo ($d->tahun == $selectTahun?'selected':'') ?>>tahun <?php echo $d->tahun ?></option>
                        <?php endforeach ?>
                    </select>
                </h3>
                <div class="panel-actions">
                    <button class="btn btn-info" onclick="window.print()">
                        <i class="fa fa-print"></i> Cetak
                    </button>
                </div>
            </div>
            <div class="panel-body">
                <center>
                    <table class='pad5'>
                      <tr>
                        <td>
                          <img src="<?php echo base_url() ?>public/img/logo_umm_white.jpg" alt="hitam_putih_logo" height="80" width="80"/>
                        </td>
                        <td width='30'>&nbsp;</td>
                        <td align='center'>
                          <h4 class='text-uppercase'>Universitas Muhammadiyah Malang</h4>
                          <h4 class='text-uppercase'>Badan Kendali Mutu Akademik</h4>
                          Kampus III: Jl. Raya Tlogomas No. 246 Malang Tlp. (0341) 464318 Psw. 230<br />
                          Fax. 460783 Malang / e-mail: bkma@umm.ac.id
                        </td>
                        
                      </tr>
                    </table>
                </center>
                <hr class="single" />
                <strong>
                    <p align="center" class="text-uppercase" style="font-size: 13px">Laporan Hasil Voting Kaprodi Berprestasi</p>
                </strong>
                <table class="table">
                  <tr>
                      <td>Tahun Akademik</td>
                      <td style="width:10px">:</td>
                      <td><?php echo $selectTahun ?></td>

                      <td>Semester</td>
                      <td style="width:10px">:</td>
                      <td>Genap</td>
                  </tr>
                </table>
                <table class="table table-bordered table-striped table-print" style="width: 100%">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 80px;">Peringkat</th>
                            <th>Kaprodi</th>
                            <th>Nilai</th>
                            <th class="noprint">Aksi</th>
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
                                <td class="link noprint">
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
                <br>
                <div id="grafik"></div>
                <br>
                <div class="generated-by">
                    <p>Dokumen ini dicetak melalui Sistem Informasi Manajemen Dosen Berprestasi (<?php echo gmdate('dmyhis', 7*3600+time()) ?>).</p>
                </div>
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