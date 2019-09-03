<div class="card">
	<div class="card-header">
		<?= $page_title ?>
	</div>
	<div class="card-body">
		
	
<div class="row">
	<div class="col-md-8">
		<h4><?= $pembelian['paket_nama'] ?></h4><br>
		<div class="row">
			<div class="col-md-6">
				
		<img src="<?= base_url() ?>assets/upload/images/paket/<?= $pembelian['paket_foto'] ?>" alt="foto" width="320" height="280">
			</div>
			<div class="col-md-6">
				<table class="table table-striped table-hover">
					<tr>
						<td>Nama Pembeli</td>
						<td>:</td>
						<td><?= $pembelian['pelanggan_nama'] ?></td>
					</tr>
					<tr>
						<td>Deskripsi</td>
						<td>:</td>
						<td><?= $pembelian['paket_deskripsi'] ?></td>
					</tr>
					<tr>
						<td>Harga</td>
						<td>:</td>
						<td>Rp. <?= nominal($pembelian['paket_harga']) ?></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	<div class="col-md-4 bg-info p-3" style="border-radius: 10px;">
		<h4 style="color: white">List Petugas</h4>
		<table class="table table-striped">
			<tr>
				<th>No</th>
				<th>Nama Petugas</th>
				<th>Nomor Hp</th>
			</tr>
			<?php $tugas=$this->PembelianModel->cek_petugas($pembelian['pembelian_id']); ?>
			<?php $no=1;
			foreach ($tugas as $value): ?>
				<tr>
					<td><?= $no ?></td>
					<td><?= $value['petugas_nama'] ?></td>
					<td><?= $value['petugas_nope'] ?></td>
				</tr>
			<?php $no++; endforeach ?>
					
		</table>
	</div>
</div>

</div>
</div>