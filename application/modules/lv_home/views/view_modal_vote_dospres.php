<?php
$nidn   =$votedospres->nidn;
if ($this->input->post('is_submitted')) {
    $nidn                   = set_value('nidn');
    $tahun                  = set_value('tahun');
} else{
$nama   = $votedospres->nama_lengkap;
$tahun  = $votedospres->tahun;
} 
 ?>
            <div class="modal-dialog modal-md modal-primary in">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                            <h4 class="modal-title text-center" style="color:white">Vote <?= $nama ?></h4>
                    </div>
                <div class="modal-body">
                <form action="<?php echo base_url('Lv_home/votedospres')?>" class="form-horizontal" method="post">
                        <div class="form-group">
                            <label class="control-label col-sm-3">NIDN</label>
                            <div class="col-sm-3">
                                <label class="control-label col-sm-3"><?= $nidn ?></label>
                                <input type="hidden" name="nidn" class="form-control" value="<?= $nidn ?>">
                            </div>
                        </div>  
                    <div class="form-group">
                        <label class="control-label col-sm-3">NIDN Pemilih</label>
                        <div class="col-sm-8">
                            <input type="text" name="nidn_vote" class="form-control" placeholder="Masukkan NIDN" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Program Studi</label>
                            <div class="col-sm-8">
                                <select class="form-control" name="id_program_studi">
                                    <option value="" >-- Pilih Program Studi --</option>
                                    <?php $no=0; foreach ($data_kaprodi as $dak) { ?>
                                    <option value="<?php echo $dak['id_program_studi']?>" ><?php echo $dak['nama_program_studi']?></option>
                                    <?php } ?>
                                </select>
                            </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">email</label>
                        <div class="col-sm-8">
                            <input type="text" name="email_vote" class="form-control" placeholder="Masukkan E-Mail" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Rating</label>
                            <div class="col-sm-8">
                                <div class="radio-custom radio-primary radio-inline">
                                    <input type="radio" name="nilai" value="1" id="nilai1">
                                    <label for="nilai1">1</label> &nbsp;
                                </div>
                                <div class="radio-custom radio-default radio-inline">
                                    <input type="radio" name="nilai" value="2" id="nilai2">
                                    <label for="nilai2">2</label> &nbsp;
                                </div>
                                <div class="radio-custom radio-default radio-inline">
                                    <input type="radio" name="nilai" value="3" id="nilai3">
                                    <label for="nilai3">3</label> &nbsp;
                                </div>
                                <div class="radio-custom radio-default radio-inline">
                                    <input type="radio" name="nilai" value="4" id="nilai4">
                                    <label for="nilai4">4</label> &nbsp;
                                </div>
                                <div class="radio-custom radio-default radio-inline">
                                    <input type="radio" name="nilai" value="5" id="nilai5">
                                    <label for="nilai5">5</label>
                                </div>
                            </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Alasan</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" name="alasan" class="alasan" rows="4" placeholder="Masukkan Alasan"></textarea>
                            </div>
                    </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">Tahun</label>
                            <div class="col-sm-2">
                                <label class="control-label col-sm-3"><?php echo date('Y') ?></label>
                                <input type="hidden" name="tahun" class="form-control" value="<?php echo date('Y') ?>">
                            </div>
                        </div>                                          
                    <div class="form-group">
                        <div class="col-sm-9 col-sm-offset-3">
                            <div id="btnAction">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-bullhorn"></i>&nbsp; VOTE</button>
                               <a data-dismiss="modal"><button type="button" class="btn btn-danger"><i class="fa fa-close"></i>&nbsp; Batal</button></a>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>