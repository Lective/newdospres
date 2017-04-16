<?php $this->load->view('themes/webmin/header'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>private/plugins/jqplot/jquery.jqplot.min.css">
<?php $this->load->view('themes/webmin/sidebar'); ?>

<div class="page animsition">
    <div class="page-header noprint">
        <h1 class="page-title">Laporan Hasil Voting Dosen Berprestasi </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo site_url('laporan/dosen-berprestasi?tahun='.$selectTahun) ?>">Laporan Dosen</a></li>
            <li class="active">Detail Laporan Dosen</li>
        </ol>
    </div>
    <div class="page-content">
        <!-- Panel -->
        <div class="panel panel-bordered panel-primary">
            <div class="panel-heading noprint">
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
                    <p align="center" class="text-uppercase" style="font-size: 13px">Laporan Hasil Voting Dosen Berprestasi</p>
                </strong>
                <table class="table">
                  <tr>

                      <td>Dosen</td>
                      <td style="width:10px">:</td>
                      <td><?php echo $data[0]->dosen ?></td>

                      <td>Tahun Akademik</td>
                      <td style="width:10px">:</td>
                      <td><?php echo $selectTahun ?></td>

                  </tr>
                </table>
                <table class="table table-bordered table-striped table-print" data-plugin="datatables">
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
<?php $this->load->view('themes/footer'); ?>