<?php 
error_reporting(0) ?>



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
					<th>Nama Pembeli</th>
					<th>Nama Produk</th>
					<th>Total Harga</th>
					<th>Tgl Beli</th>
                    <th>Tgl Acara</th>
                    <?php if ($this->session->userdata('session_level')!='pelanggan'): ?>
                    	
                    <th>PPN Admin(10%)</th>
                    <?php endif ?>
                    <?php if ($this->session->userdata('session_level')!='admin'): ?>
					<th class="text-center"><i class="fa fa-cog animation-customizer"></i></th>
                    <?php endif ?>
                    
				</tr>
				</thead>
				<tbody>
				
				<?php
				$no = 1;
				$total_pajak = 0;
				foreach ($pembelian as $key=>$value):
				?>
				<tr>
					<td><?= $no ?></td>
					<td><?= $value['pelanggan_nama'] ?></td>
					<td><?= $value['paket_nama'] ?></td>
					<td>Rp. <?= nominal($value['paket_harga']) ?> ,-</td>
					<td><?php
						$waktu = explode(' ',$value['pembelian_tgl']);
						?>
						<?= date_indo($waktu[0]) ?> | <?= $waktu[1] ?>
					</td>
                    <td class="text-center"><?= date_indo($value['pembelian_tgl_acara']) ?></td>
					<?php if ($this->session->userdata('session_level')!='pelanggan'): ?>
					<?php $pajak = $value['paket_harga']*10/100; ?>
					<td class="text-right">Rp. <?=  nominal($pajak) ?> ,-</td>
					<?php endif ?>
					<?php if ($this->session->userdata('session_level')!='admin'): ?>
					<td class="text-center">
						<?php if ($this->session->userdata('session_level')=='pelanggan'){ ?>
							     <?php $c_bayar= $this->PembelianModel->cek_pembayaran($value['pembelian_id']); ?>
                                 <?php if ($c_bayar>0){ ?>
                                     <span class="text-success">DP sudah dibayar</span>
                                 <?php }else{ ?>
						              <!-- <a href="" data-toggle="modal"
                                       onclick="confirm_modal('<?php echo site_url("bayar/" . $value['pembelian_id']); ?>','Bayar','<?= $value['pembelian_id'] ?>');"
                                       data-target=".bd-example-modal-sm" class="btn btn-outline-success btn-sm"><i class="fas fa-money-check" title="Bayar"></i></a> -->
                                       <a href="<?= base_url() ?>bayar/<?= $value['pembelian_id'] ?>" > <button class="btn btn-sm btn-success">Bayar DP</button></a>
                                <?php } ?>
						<?php }else{ ?>
                        <?php $tugas=$this->PembelianModel->cek_petugas($value['pembelian_id']); ?>
                        <?php if (count($tugas)>0){ ?>
                            <a href="<?= base_url() ?>pembelian/detail/<?= $value['pembelian_id'] ?>" class="btn btn-outline-info btn-sm" ><i class="fa fa-eye"></i></a>
                        <?php }else{ ?>
                        <a href="<?= base_url() ?>add/petugas/<?= $value['pembelian_id'] ?>" class="btn btn-outline-primary btn-sm" title="Pilih Petugas"
                                        ><i data-feather="users"></i></a>
                                    <?php } ?>
                    	<?php } ?>
						 
					</td>
						
					<?php endif ?>
					
				</tr>
				<?php 
					$no++;
					$total_pajak = $total_pajak+$pajak;
				endforeach;
				?>
				</tbody>
				<?php if ($this->session->userdata('session_level')!='pelanggan'): ?>
					
				<tfoot>
					<tr>
						<td colspan="6" class="text-center"><b>Total Pajak</b></td>
						<td colspan="1" class="text-right"><b>Rp. <?= $total_pajak ?> ,-</b></td>
					</tr>
				</tfoot>
				<?php endif ?>
				
			</table>

		</div>
		<!-- /tables -->

	</div>
	<!-- /card body -->


                 
                <script>
                    function confirm_modal(delete_url, title,data_id) {
                        jQuery('#modal_delete_m_n').modal('show', {backdrop: 'static', keyboard: false});
                        jQuery("#modal_delete_m_n .grt").text(title);
                        document.getElementById('form-ok').setAttribute("action", delete_url);
                        document.getElementById('form-ok').focus();
                        document.getElementById('pembelian').setAttribute("value", data_id);
                        document.getElementById('pembelian').focus();

                    }
                     function add_petugas(urll,title) {
                        jQuery('#modal_petugas').modal('show', {backdrop: 'static', keyboard: false});
                        jQuery("#modal_petugas .grt").text(title);
                        $(".form-oce").attr("action", urll);

                    }
                </script>
