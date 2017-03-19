                <div class="modal fade modal-super-scaled modal-primary" id="vote" aria-hidden="true" aria-labelledby="vote" role="dialog" tabindex="-1">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <h4 class="modal-title text-center">Voting Dosen</h4>
                            </div>
                            <div class="modal-body"><br>
                                <form action="<?php echo base_url('voting/add')?>" class="form-horizontal" method="post">
                                  <div class="form-group">
                                        <label class="control-label col-sm-3">NIDN yang akan di pilih :</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="nidn_vote" class="form-control" value="" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3">NIDN</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="nidn_vote" class="form-control" value="" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3">NIDN</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="nidn_vote" class="form-control" value="" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3">NIDN Pemilih</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="nidn_vote" class="form-control" placeholder="NIDN" required>
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
                                            <input type="radio" name="nilai" value="1" id="nilai1" >
                                            <label for="nilai1">1 </label>
                                            
                                            <input type="radio" name="nilai" value="2" id="nilai2">
                                            <label for="nilai2">2 </label>

                                            <input type="radio" name="nilai" value="3" id="nilai3">
                                            <label for="nilai3">3 </label>

                                            <input type="radio" name="nilai" value="4" id="nilai4">
                                            <label for="nilai4">4 </label>

                                            <input type="radio" name="nilai" value="5" id="nilai5">
                                            <label for="nilai5">5 </label>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3">Alasan</label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="alasan" class="alasan" rows="4" placeholder="Masukkan Alasan"></textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="col-sm-9 col-sm-offset-3">
                                            <div id="btnAction">
                                                <button type="submit" class="btn btn-primary"><i class="fa fa-send"></i>&nbsp; VOTE!</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i>&nbsp; Batal</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Modal -->