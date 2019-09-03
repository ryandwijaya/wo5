
<div class="card">
    <div class="card-header">
        <h4><?= $page_title ?></h4>
    </div>
    <!-- Card Body -->
    <div class="card-body">
        <?php if ($this->session->userdata('session_level')=='vendor'): ?>
            
       <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-petugas">
            Tambah Petugas
        </button>
        <?php endif ?>
        <hr>
        <!-- Tables -->
        <div class="table-responsive">

            <table id="data-table" class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Petugas</th>
                    <th>Nomor HP</th>
                    <th>Vendor</th>
                    <?php if ($this->session->userdata('session_level')=='vendor'): ?>
                        
                    <th class="text-center"><i class="fa fa-cog animation-customizer"></i></th>
                    <?php endif ?>
                </tr>
                </thead>
                <tbody>
				<?php
				$no = 1;
				foreach ($petugas as $key=>$value):
				?>
                <tr>
                    <td><?=$no?></td>
                    <td><?=$value['petugas_nama']?></td>
                    <td><?=$value['petugas_nope']?></td>
                    <td><?=$value['vendor_nama']?></td>
                    <?php if ($this->session->userdata('session_level')=='vendor'): ?>
                    <td class="text-center">
                       
                        <a href="<?=base_url('admin/petugas/hapus/'.$value['petugas_id'])?>" class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-html="true" title data-original-title="Hapus" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus ?')"><i class="fa fa-trash"></i></a>
                    </td>
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



    
