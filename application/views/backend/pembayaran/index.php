<div class="card">
	<div class="card-header">
		<h4><?= $page_title ?></h4>
	</div>
	<!-- Card Body -->
	<div class="card-body">

		<!-- Tables -->
		<div class="table-responsive">

			<table id="data-table" class="table table-striped table-bordered table-hover">
				<thead>
				<tr>
					<th>No</th>
					<th>Pembelian</th>
					<th>Nama</th>
					<th>Bank</th>
					<th>Harga</th>
					<th>Jumlah Bayar</th>
					<th>Tanggal Bayar</th>
					<th>Bukti</th>
					<th class="text-center">status</th>
					<?php if ($this->session->userdata('session_level')=='vendor'): ?>
						
					<th>Aksi</th>
					<?php endif ?>
				</tr>
				</thead>
				<tbody>
				
				<?php
				$no = 1;
				foreach ($pembayaran as $key=>$value):
				?>
				<tr>
					<td><?= $no ?></td>
					<td><?= $value['paket_nama'] ?></td>
					<td><?= $value['pembayaran_nama'] ?></td>
					<td><?= $value['pembayaran_bank'] ?></td>
					<td>Rp. <?= nominal($value['paket_harga']) ?> ,-</td>
					<td>Rp. <?= nominal($value['pembayaran_jumlah']) ?> ,-</td>
					<td><?= date_indo($value['pembayaran_tgl']) ?></td>
					
					<td><a href="<?= base_url() ?>assets/upload/bukti/<?= $value['pembayaran_bukti'] ?>"><?= $value['pembayaran_bukti'] ?></a></td>
					
					<td class="text-center">
						<?php 
						$total =  $value['paket_harga']-$value['pembayaran_jumlah'];
						 ?>
						 <?php if ($total==0){ ?>
						 	<span class="text-success">Lunas</span>
						 <?php }elseif($total>0){ ?>
						 	<?php if ($value['pembayaran_status']=='dikonfirmasi'){ ?>
						 		
						 <span class="text-success">Lunas</span>
						 	<?php }else{ ?>
						 <span class="text-danger">Sisa <br>Rp. <?= nominal($total) ?> ,-</span>

						 	<?php } ?>
						 <?php } ?>
					</td>
					<?php if ($this->session->userdata('session_level')=='vendor' ): ?>
						<?php if ($value['pembayaran_status']=='dikonfirmasi'){ ?>
							<td><span class="text-success">Sudah dikonfirmasi</span></td>
						<?php }else{ ?>
						<td><a href="<?= base_url() ?>pembayaran/konfirmasi/<?= $value['pembayaran_id'] ?>" onclick="return confirm('Tekan ya untuk melanjutkan')" class="btn btn-success btn-sm"><i class="fa fa-check"></i></a></td>
						<?php } ?>
					<?php endif ?>
				</tr>
				<?php 
					$no++;
				endforeach;
				?>
				</tbody>
			</table>

		</div>
		<!-- /tables -->

	</div>
	<!-- /card body -->

