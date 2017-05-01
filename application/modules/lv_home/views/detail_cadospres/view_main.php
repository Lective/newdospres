<?php $this->load->view('themes/home/header'); ?><br><br>
<body class="page-profile">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-primary">
            		<div class="panel-heading">
			            <h2 class="panel-title text-center">Detail Calon Dosen Berprestasi</h2>
			        </div>
				</div>
			</div>

        	<div class="col-md-3">
        		<div class="panel">
        			<div class="panel-heading nav-tabs-animate">
        			<!-- Page Widget -->
	          			<div class="widget widget-shadow text-center">
	            			<div class="widget-header">
	              				<div class="widget-header-content">
                          <a class="avatar avatar-lg" href="javascript:void(0)">
                            <?php if(!empty($dosen->foto) && is_file('private/uploads/foto-dosen/'.$dosen->foto)){ ?>
                              <img class="img-responsive img-circle" src="<?php echo base_url() ?>private/uploads/foto-dosen/<?php echo $dosen->foto ?>" alt="...">
                            <?php } else { ?>
                              <img class="img-responsive img-circle" src="<?php echo base_url() ?>public/img/default-user.png" alt="...">
                            <?php } ?>
                          </a>
	                				<h4 class="profile-user"><?php echo $dosen->nama_lengkap ?></h4>
	                				<p><?php echo $dosen->nidn ?></p>
                          <br>
                          <button class="btn btn-warning" type="button" onclick="goBack()">Kembali</button>
                          <script>
                            function goBack() {
                                window.history.back()
                            }
                            </script>
	              				</div>
	            			</div>
	          			</div>
          				<!-- End Page Widget -->
        			</div>
        		</div>	
        	</div>
         
        <div class="col-md-9">
          <!-- Panel -->
          <div class="panel">
            <div class="panel-body nav-tabs-animate">
              <ul class="nav nav-tabs nav-tabs-line" data-plugin="nav-tabs" role="tablist">
                <li class="active" role="presentation"><a data-toggle="tab" href="#bukuAjar" aria-controls="bukuAjar" role="tab" aria-expanded="true">Buku Ajar</a></li>
                <li role="presentation" class=""><a data-toggle="tab" href="#penelitianEksternal" aria-controls="penelitianEksternal" role="tab" aria-expanded="false">Penelitian Eksternal</a></li>
                <li role="presentation" class=""><a data-toggle="tab" href="#luaranLain" aria-controls="luaranLain" role="tab" aria-expanded="false">Luaran Lain</a></li>
                <li role="presentation" class=""><a data-toggle="tab" href="#pemakalahForum" aria-controls="pemakalahForum" role="tab" aria-expanded="false">Pemakalah Forum</a></li>
                <li role="presentation" class=""><a data-toggle="tab" href="#hki" aria-controls="hki" role="tab" aria-expanded="false">Hak Kekayaan Intelektual</a></li>

              <li class="nav-tabs-autoline" style="transition-duration: 0.5s, 1s; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1), cubic-bezier(0.4, 0, 0.2, 1); left: 0px; width: 122px;"></li></ul>
              <div class="tab-content">
                <div class="tab-pane animation-slide-left active" id="bukuAjar" role="tabpanel">
                  <h1>Data Buku Ajar Dosen</h1>
                  <div class="panel-body">
                  <?=$this->session->flashdata('notif')?>
                    <table class="table table-hover table-striped dataTable" role="grid" data-plugin="dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul Buku Ajar</th>
                                <th>ISBN</th>
                                <th>Penerbit</th>
                                <th>Tahun</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; ?>
                            <?php foreach ($bukjar as $bk): ?>
                                <tr>
                                    <td><?php echo $no ?></td>
                                    <td><?php echo $bk->judul ?></td>
                                    <td><?php echo $bk->isbn ?></td>
                                    <td><?php echo $bk->penerbit ?></td>
                                    <td><?php echo $bk->tahun ?></td> 
                                </tr>
                                <?php $no++ ?>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                  </div>

                </div>
                <div class="tab-pane animation-slide-left" id="penelitianEksternal" role="tabpanel">
                  <h1>Data Penelitian Eksternal  Dosen Sebagai Ketua</h1>
                          <div class="panel-body">
                          <?=$this->session->flashdata('notif')?>
                            <table class="table table-hover table-striped dataTable" role="grid" data-plugin="dataTable">
                              <thead>
                                <tr>
                                  <th class="text-center" valign="middle" width="20">No</th>
                                  <th>Skim</th>
                                  <th>Judul</th>
                                  <th>Dana</th> 
                                  <th>Bidang</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php $no=0; foreach ($penx as $px) : ?>
                                <tr>
                                  <td class="text-center"><?php echo ++$no; ?></td>
                                  <td><?php echo $px->nama_skim ?></td>
                                  <td><?php echo $px->judul ?></td>
                                  <td>Rp. <?php echo number_format($px->jumlah_dana)?></td>
                                  <td><?php echo $px->bidang_penelitian ?></td>
                                </tr>
                                <?php endforeach; ?>
                              </tbody>
                            </table>
                          </div>
                </div>
                <div class="tab-pane animation-slide-left" id="luaranLain" role="tabpanel">
				          <h1>Data Luaran Lain Dosen</h1>
                  <div class="panel-body">
                  <?=$this->session->flashdata('notif')?>
                    <table class="table table-hover table-striped dataTable" role="grid" data-plugin="dataTable">
                      <thead>
                        <tr>
                          <th class="text-center" valign="middle">No</th>
                          <th valign="middle">Judul</th>
                          <th valign="middle">Jenis</th>
                          <th valign="middle">Keterangan</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no=0; foreach ($dataLuaran as $dl) : ?>
                        <tr>
                          <td><?php echo ++$no; ?></td>
                          <td><?php echo $dl->judul_luaran ?></td>
                          <td><?php echo $dl->jenis_luaran_lain ?></td>
                          <td><?php echo $dl->keterangan_invalid ?></td>
                        </tr>
                      <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="tab-pane animation-slide-left" id="pemakalahForum" role="tabpanel">
				        <h1>Data Pemakalah Forum Ilmiah Dosen</h1>
                <div class="panel-body">
                <?=$this->session->flashdata('notif')?>
                  <table class="table table-hover table-striped dataTable" role="grid" data-plugin="dataTable">
                    <thead>
                      <tr>
                        <th class="text-center" valign="middle" width="20">No</th>
                        <th>Judul</th>
                        <th>Nama Forum</th>
                        <th>Penyelenggara</th> 
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no=0; foreach ($dataPemakalah as $dp) : ?>
                      <tr>
                        <td  class="text-center"><?php echo ++$no; ?></td>
                        <td><?php echo $dp->judul_pemakalah ?></td>
                        <td><?php echo $dp->nama_forum ?></td>
                        <td><?php echo $dp->institusi_penyelenggara ?></td>
                      </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
                </div>
                <div class="tab-pane animation-slide-left" id="hki" role="tabpanel">
          				  <h1>Data Hak Kekayaan Intelektual Dosen</h1>
                    <div class="panel-body">
                    <?=$this->session->flashdata('notif')?>
                    <table class="table table-hover table-striped dataTable" role="grid" data-plugin="dataTable">
                      <thead>
                        <tr>
                          <th class="text-center" width="20">No</th>
                          <th>Judul</th>
                          <th>Jenis</th>
                          <th>No. Pendaftaran</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no=0; foreach ($datahki as $dh) : ?>
                        <tr>
                          <td class="text-center"><?php echo ++$no; ?></td>
                          <td><?php echo $dh->judul_hki ?></td>
                          <td><?php echo $dh->jenis_hki ?></td>
                          <td><?php echo $dh->no_pendaftaran ?></td>
                          <td><?php echo $dh->status_hki ?></td>
                        </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Panel -->
        </div>
      </div>
	</div>
<script type="text/javascript" src="<?php echo base_url() ?>private/plugins/jqplot/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>public/global/vendor/bootstrap/bootstrap.min.js"></script>
</body>
</html>
