<?php $this->load->view('themes/home/header'); ?><br><br>
<body class="page-profile">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-primary">
                <div class="panel-heading">
                  <h2 class="panel-title text-center">Detail Calon Ketua Program Studi Berprestasi</h2>
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
                            <?php if(!empty($data->foto) && is_file('private/uploads/foto-dosen/'.$data->foto)){ ?>
                              <img class="img-responsive img-circle" src="<?php echo base_url() ?>private/uploads/foto-dosen/<?php echo $data->foto ?>" alt="...">
                            <?php } else { ?>
                              <img class="img-responsive img-circle" src="<?php echo base_url() ?>public/img/default-user.png" alt="...">
                            <?php } ?>
                          </a>
                          <h4 class="profile-user"><?php echo $data->dosen ?></h4>
                          <p>NIDN. <?php echo $data->nidn ?></p>
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
                <li class="active" role="presentation"><a data-toggle="tab" href="#bukuAjar" aria-controls="bukuAjar" role="tab" aria-expanded="true">Profil</a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane animation-slide-left active" id="bukuAjar" role="tabpanel">
                  <table class="table table-stiped">
                    <tr>
                      <th style="width: 150px">
                        Nama dan Gelar
                      </th>
                      <td>
                        <?php echo $data->dosen ?>
                      </td>
                    </tr>
                    <tr>
                      <th>
                        Jabatan Akademik
                      </th>
                      <td>
                        <?php echo $data->jabatan_akademik ?>
                      </td>
                    </tr>
                    <tr>
                      <th>Pangkat &amp; Golongan</th>
                      <td><?php echo $data->pangkat_golongan ?></td>
                    </tr>
                    <tr>
                      <th>Bidang Keahlian</th>
                      <td><?php echo $data->bidang_keahlian ?></td>
                    </tr>
                    <tr>
                      <th>Kaprodi</th>
                      <td><?php echo $data->nama_program_studi ?></td>
                    </tr>
                    <tr>
                      <th>Fakultas</th>
                      <td><?php echo $data->nama_fakultas ?></td>
                    </tr>
                  </table>
                </div>
              </div>
              <br>
              <div class="text-center">
                <a href="<?php echo site_url('/') ?>">
                  <button class="btn btn-danger" type="button">Kembali</button>
                </a>
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
