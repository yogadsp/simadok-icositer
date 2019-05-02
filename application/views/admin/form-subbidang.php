<!-- Modal -->
<div class="modal fade" id="sub_bidang" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						  <div class="modal-dialog modal-dialog-centered" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title text-center" id="exampleModalLongTitle">TAMBAH SUB BIDANG</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">
						        <form id="frm_subbidang" method="post">
                                    <!-- untuk mendapatkan url sekarang -->
						        	<input type="hidden" name="urlskrg" value="<?php echo current_url();?>" 
						        	id="urlskrg1">
                          <center>

														<div class="form-group">
																<label>Nama Bidang		:</label>
																<!-- mengulang data berdasarkan data yang telah diambil dari controller -->
																<select id="bidang2" name="bidang">
																		<?php foreach ($bidang_->result() as $row ) { ?>
																				<option value="<?php echo $row->id_bidang; ?>">
																						<?php echo $row->nama_bidang; ?>
																				</option>
																		<?php } ?>
																</select>
																<!-- <div id="id_bidang"></div> -->
														</div>

														<div class="form-group">
																<label>Nama Sub Bidang		:</label>
																<input type="text" name="sub_bidang" id="sub_bidang1">
														</div>

						        	<input type="submit" class="btn btn-primary" value="SUBMIT">
                          </center>
						        </form>
						      </div>
						      <div class="modal-footer">
						      
						      
						        
						      </div>
						    </div>
						  </div>
						</div>