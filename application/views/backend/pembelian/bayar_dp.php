
                                <div class="alert alert-info alert-has-icon">
                      <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                      <div class="alert-body">
                        <div class="alert-title">Info</div>
                        Pembayaran DP minimal 30% dari Harga Paket
                      </div>
                    </div>

                                <!-- <form action="" id="form-ok" method="POST"> -->
                                	<?= form_open('bayar/'.$pembelian['pembelian_id'],array('enctype'=>'multipart/form-data','id'=>'form-ok')) ?>

                                	<div class="form-group">
                                		<input type="hidden" name="pembayaran_pembelian" id="pembelian" class="form-control" required>
                                	</div>
                                	<div class="form-group">
                                		<label>Bank</label>
                                		<input type="text" name="pembayaran_bank"  class="form-control" required>
                                	</div>
                                	<div class="form-group">
                                		<label>Jumlah Bayar (min: 30%)</label>
                                		<input type="number" name="pembayaran_jumlah" min="<?= $pembelian['paket_harga']*30/100 ?>" value="<?= $pembelian['paket_harga']*30/100 ?>" class="form-control" required>
                                	</div>
                                	<div class="form-group">
                                		<label>Tgl Bayar</label>
                                		<input type="date" name="pembayaran_tgl" class="form-control" required>
                                	</div>
                                	<div class="form-group">
                                		<label>Bukti</label>
                                		<input type="file" class="form-control"  name="foto" required>
                                	</div>
                            </div>

                            <div class="modal-footer">
                                <button type="submit" name="bayar" class="btn btn-primary btn-sm">Bayar</button>
                                
                            </div>
                                </form>

        <!-- ======================================================== -->