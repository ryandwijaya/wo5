<div class="card">
	
	<div class="card-header">
		<h4>Lihat Data Paket</h4>
	</div>
<div class="card-body">

	<!-- Form -->
	<?= form_open('admin/paket/update/'.$paket['paket_id'],array('enctype'=>'multipart/form-data')) ?>

	<!-- Form Row -->
	<div class="form-row">
		<label class="col-md-2 col-sm-3 col-form-label text-sm-right"
			   for="normal-input-1">Nama paket</label>

		<div class="col-md-10 col-sm-9">
			<input type="text" class="form-control" id="normal-input-1"
				   placeholder="Nama paket" name="nama" readonly value="<?=$paket['paket_nama']?>" autocomplete="off">
		</div>
	</div>
	<!-- /form row -->

	

	<!-- Separator -->
	<hr class="border-dashed my-8">
	<!-- /separator -->

	<!-- Form Row -->
	<div class="row">
		<label class="col-md-2 col-sm-3 col-form-label text-sm-right"
			   for="text-area-1-1">Deskripsi</label>

		<div class="col-md-10 col-sm-9">
			<?php
                        $deskripsi= explode('-',$paket['paket_deskripsi']);
                        ?>

                   
                    
             <?php for ($i = 0; $i < count($deskripsi)-1 ; $i++) {
                        echo '-'.$deskripsi[$i+1].'<br>';
                    } ?>
		</div>
	</div>
	<!-- /form row -->

	<!-- Separator -->
	<hr class="border-dashed my-8">
	<!-- /separator -->

	<!-- Form Row -->
	<div class="form-row">
		<label class="col-md-2 col-sm-3 col-form-label text-sm-right"
			   for="normal-input-1">Harga</label>

		<div class="col-md-10 col-sm-9">
			<input type="text" class="form-control" id="normal-input-1" name="harga"
				   placeholder="Harga" readonly value="Rp. <?=nominal($paket['paket_harga'])?>" autocomplete="off">
		</div>
	</div>
	<!-- /form row -->

	<!-- Separator -->
	<hr class="border-dashed my-8">
	<!-- /separator -->

	<!-- Form Row -->
	<div class="form-row">
		<label class="col-md-2 col-sm-3 col-form-label text-sm-right"
			   for="file-field">Foto</label>

		<div class="col-md-10 col-sm-9">
			<img src="<?=base_url('assets/upload/images/paket/'.$paket['paket_foto'])?>" width="100%" alt="Foto">

		</div>
	</div>
	<!-- /form row -->

	<!-- Separator -->
	<hr class="border-dashed my-8">
	<!-- /separator -->

	<!-- Form Group -->
	<div class="form-group form-row">
		<div class="col-xl-10 offset-xl-2">
			<a href="<?=base_url('admin/paket')?>" class="btn btn-outline-primary text-uppercase" name="update"><i class="fa fa-backward"></i> &nbsp;Kembali</a>
			<a href="<?=base_url('admin/paket/update/'.$paket['paket_id'])?>" class="btn btn-success text-uppercase" name="update"><i class="fa fa-edit"></i> &nbsp;Update
			</a>
		</div>
	</div>
	<!-- /form group -->


	<?= form_close() ?>
	<!-- /form -->

</div>
</div>
