
<div class="card">
    <div class="card-header">
        <h4>Data paket</h4>
    </div>
    <!-- Card Body -->
    <div class="card-body">
        <?php if ($this->session->userdata('session_level')=='vendor'): ?>
            
        <a href="<?=base_url('admin/paket/tambah')?>" class="btn btn-outline-primary btn-sm" style=""><i class="fa fa-plus"></i> Tambah paket</a><hr>
        <?php endif ?>
        <!-- Tables -->
        <div class="table-responsive">

            <table id="data-table" class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama paket</th>
                    <th>Harga</th>
                    <th>Kategori</th>
                    <th>Pemilik</th>
                    <th class="text-center"><i class="fa fa-cog animation-customizer"></i></th>
                </tr>
                </thead>
                <tbody>
				<?php
				$no = 1;
				foreach ($paket as $key=>$value):
				?>
                <tr>
                    <td><?=$no?></td>
                    <td><?=$value['paket_nama']?></td>
                    <td>Rp. <?=nominal($value['paket_harga'])?></td>

                    <?php
                        $deskripsi= explode('-',$value['paket_deskripsi']);
                        ?>

                    <td>
                    <?php for ($i = 0; $i < count($deskripsi)-1 ; $i++) {
                        echo '-'.$deskripsi[$i+1].'<br>';
                    } ?>
                    </td>
                    <td><?=$value['vendor_nama']?></td>


                    <td class="text-center">
                        <a href="<?=base_url('admin/paket/lihat/'.$value['paket_id'])?>" class="btn btn-outline-info btn-sm" data-toggle="tooltip" data-html="true" title data-original-title="Lihat"><i class="fa fa-eye"></i></a>
                        <a href="<?=base_url('admin/paket/update/'.$value['paket_id'])?>" class="btn btn-outline-success btn-sm" data-toggle="tooltip" data-html="true" title data-original-title="Edit"><i class="fa fa-edit"></i></a>
                        <a href="<?=base_url('admin/paket/hapus/'.$value['paket_id'])?>" class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-html="true" title data-original-title="Hapus" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus ?')"><i class="fa fa-trash"></i></a>
                    </td>
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
</div>
    <!-- /card body -->
