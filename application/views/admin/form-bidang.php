<!-- Modal -->
<div class="modal fade" id="bidang" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						  <div class="modal-dialog modal-dialog-centered" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title text-center" id="exampleModalLongTitle">TAMBAH BIDANG</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">
						        <form id="frm_bidang" method="post">
                                    <!-- untuk mendapatkan url sekarang -->
						        	<input type="hidden" name="urlskrg" value="<?php echo current_url();?>" 
						        	id="urlskrg1">
                                    <center>
                                        <div class="form-group">
                                            <label>Nama Bidang		:</label>
                                            <input type="text" name="bidang" id="bidang1">
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