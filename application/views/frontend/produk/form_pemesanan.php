<section id="faq" class="faq-section bd-bottom mt-4 mb-4">
            <div class="container">
<div class="row">
	<div class="col-md-12 text-center">
		
	<h2>Form Pemesanan Paket</h2>
	</div>
</div>

<div class="row">
	<div class="col-md-12 text-center">
		
	<marquee class="text-info">Silahkan lengkapi form pendaftaran untuk melanjutkan pemesanan, Pastikan tanggal yang anda pilih selain tanggal yang sudah di pesan !</marquee>
	</div>
</div>


<div class="card">
	<div class="card-body">


<div class="row">
<div class="col-md-9">


<hr>
<div class="row">
	<div class="col-md-5">
		<form action="<?= base_url() ?>pesan/<?= $paket['paket_id'] ?>" method="POST">
		<table class=" table">
			<tr>
				<td colspan="2"><h3><?= $paket['paket_nama'] ?></h3></td>
			</tr>
			<tr>
				
				<td colspan="2"><img src="<?=base_url('assets/upload/images/paket/'.$paket['paket_foto'])?>" alt="Foto" width="100%"></td>
				<input type="hidden" name="paket_id" value="<?= $paket['paket_id'] ?>">
			</tr>
			
			<tr>
				 <?php
                        $deskripsi= explode('-',$paket['paket_deskripsi']);
                        ?>
				<td colspan="2">
					<h3>Deskripsi :</h3>
					<?php for ($i = 0; $i < count($deskripsi)-1 ; $i++) {
                        echo '-'.$deskripsi[$i+1].'<br>';
                    } ?>
                    	
                 </td>
			</tr>
			
			<tr>
				
				<input type="hidden" name="total" value="<?= $paket['paket_harga'] ?>">
				<td></td>
				<td><b><h3 class="text-primary">Rp. <?= nominal($paket['paket_harga']) ?> ,- </h3></b> </td>
			</tr>
			
			
		</table>
		
	</div>
	<div class="col-md-7">
		
			<div class="form-group">
				<label class="text-primary">Silahkan Pilih Tanggal Acara</label>
				<input type="date" name="tgl_acara" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Nama Pemesan</label>
				<input type="hidden" name="pelanggan_id" value="<?= $pelanggan['pelanggan_id'] ?>">
				<input type="text" name="nama" class="form-control" readonly value="<?= $pelanggan['pelanggan_nama'] ?>">
			</div>
			
			<hr class="border-dashed my-8">
			<div class="form-group">
				<label>Email Pemesan</label>
				<input type="text" name="email" class="form-control" readonly value="<?= $pelanggan['pelanggan_email'] ?>">
			</div>
			<hr class="border-dashed my-8">
			<div class="form-group">
				<label>Nomor HP Pemesan</label>
				<input type="text" name="nope" class="form-control" readonly value="<?= $pelanggan['pelanggan_nope'] ?>">
			</div>
	</div>
	

	</div>

	<div class="row">
		<div class="col-md-12">
			<button type="submit" name="beli" class="btn btn-success  float-right  mb-3"><i class="fa fa-money"></i> Pesan</button>
		</div>
	</div>
	</form>
	</div>
	<div class="col-md-3 border">
		<div class="row pt-4">
			<div class="col-md-12">
				<h3>Tanggal yang sudah dipesan</h3>
				<hr>
				<?php 
                $no=1;
                $pembelian = $this->PembelianModel->cek_pembelian_tgl($paket['paket_id']); ?>
                <?php if (count($pembelian)>0){ ?>
                	<?php foreach ($pembelian as $va): ?>
                    <span class="text-primary"><b><?=  $no.'. '.date_indo($va['pembelian_tgl_acara']); ?> </b></span><br>
                <?php $no++; endforeach ?>
                <?php }else{ ?>
					<p>Produk ini belum dipesan oleh siapapun.</p>
                <?php } ?>
                

			</div>
		</div>
	</div>
</div>

</div>
</div>
</section>
