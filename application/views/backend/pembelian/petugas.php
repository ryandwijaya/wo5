<form action="<?= base_url() ?>add/petugas/<?= $pembelian['pembelian_id'] ?>" class="form-oce" method="POST">
                                	<div class="form-group">
                                		<label>Petugas 1</label>
                                		<select name="petugas1" class="form-control">
                                			<option disabled selected>- Pilih Petugas -</option>
                                            <?php foreach ($petugas as $value): ?>
                                                <option value="<?= $value['petugas_id'] ?>"><?= $value['petugas_nama'] ?></option>
                                            <?php endforeach ?>
                                		</select>
                                	</div>
                                	<div class="form-group">
                                		<label>Petugas 2</label>
                                		<select name="petugas2" class="form-control">
                                			<option disabled selected>- Pilih Petugas -</option>
                                            <?php foreach ($petugas as $value): ?>
                                                <option value="<?= $value['petugas_id'] ?>"><?= $value['petugas_nama'] ?></option>
                                            <?php endforeach ?>
                                		</select>
                                	</div>
                                	<div class="form-group">
                                		<label>Petugas 3</label>
                                		<select name="petugas3" class="form-control">
                                			<option disabled selected>- Pilih Petugas -</option>
                                            <?php foreach ($petugas as $value): ?>
                                                <option value="<?= $value['petugas_id'] ?>"><?= $value['petugas_nama'] ?></option>
                                            <?php endforeach ?>
                                		</select>
                                	</div>
                                	<div class="form-group">
                                		<label>Petugas 4</label>
                                		<select name="petugas4" class="form-control">
                                			<option disabled selected>- Pilih Petugas -</option>
                                            <?php foreach ($petugas as $value): ?>
                                                <option value="<?= $value['petugas_id'] ?>"><?= $value['petugas_nama'] ?></option>
                                            <?php endforeach ?>
                                		</select>
                                	</div>
                            </div>

                            <div class="modal-footer">
                                <button type="submit" name="pilih" class="btn btn-primary float-right">Pilih</button>
                                
                            </div>
                                </form>