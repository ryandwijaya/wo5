 </div>
      </div>

    </div>
    </section>
    </div>
       
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2019 <div class="bullet"></div> Design By <a href="#">Digtive</a>
        </div>
        <div class="footer-right">
        </div>
      </footer>
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="<?= base_url() ?>assets/backend/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="<?= base_url() ?>assets/backend/bundles/echart/echarts.js"></script>
  <script src="<?= base_url() ?>assets/backend/bundles/chartjs/chart.min.js"></script>
  
  	
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?php echo base_url() ?>assets/backend/js/multiscale.js"></script>
<script>
	$(document).ready(function() {
    $('#data-table').DataTable();
} );
</script>
<script>
$(function() {
var timeout = 5000; // in miliseconds (3*1000)

$('.hide-it').delay(timeout).fadeOut(200);
});

</script>

  <!-- Page Specific JS File -->
  <script src="<?= base_url() ?>assets/backend/js/page/datatables.js"></script>
  <!-- Page Specific JS File -->
  <script src="<?= base_url() ?>assets/backend/js/page/index.js"></script>
  <!-- Template JS File -->
  <script src="<?= base_url() ?>assets/backend/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="<?= base_url() ?>assets/backend/js/custom.js"></script>
</body>
<!-- Modal -->
                                    <div class="modal fade" id="modal-vendor" tabindex="-1" role="dialog"
                                         aria-labelledby="model-1"
                                         aria-hidden="true">
                                        <div class="modal-dialog" role="document">

                                            <!-- Modal Content -->
                                            <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h3 class="modal-title" id="model-1">Tambah Vendor</h3>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <!-- /modal header -->

                                                <!-- Modal Body -->
                                                <div class="modal-body">
                                                    <form action="<?= base_url() ?>admin/vendor/tambah" method="POST">
                                                        <div class="form-group">
                                                            <label>Username</label>
                                                            <input type="text" name="username" class="form-control" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Password</label>
                                                            <input type="password" name="password" class="form-control" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Nama Vendor</label>
                                                            <input type="text" name="nama" class="form-control" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Alamat</label>
                                                            <textarea name="alamat" required class="form-control"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Nomor HP</label>
                                                            <input type="text" name="nope" class="form-control" required>
                                                        </div>
                                                        
                                                </div>
                                                <!-- /modal body -->

                                                <!-- Modal Footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary btn-sm"
                                                            data-dismiss="modal">Close
                                                    </button>
                                                    <button type="submit" class="btn btn-primary btn-sm">
                                                        Tambah
                                                    </button>
                                                    </form>
                                                </div>
                                                <!-- /modal footer -->

                                            </div>
                                            <!-- /modal content -->

                                        </div>
                                    </div>
                                    <!-- /modal -->

        <!-- ======================================================== -->


<!-- Modal -->
                                    <div class="modal fade" id="modal-petugas" tabindex="-1" role="dialog"
                                         aria-labelledby="model-1"
                                         aria-hidden="true">
                                        <div class="modal-dialog" role="document">

                                            <!-- Modal Content -->
                                            <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h3 class="modal-title" id="model-1">Tambah Petugas</h3>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <!-- /modal header -->

                                                <!-- Modal Body -->
                                                <div class="modal-body">
                                                    <form action="<?= base_url() ?>admin/petugas/tambah" method="POST">
                                                        <div class="form-group">
                                                            <label>Nama Petugas</label>
                                                            <input type="text" name="nama" class="form-control" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Nomor HP</label>
                                                            <input type="text" name="nope" class="form-control" required>
                                                        </div>
                                                        
                                                </div>
                                                <!-- /modal body -->

                                                <!-- Modal Footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary btn-sm"
                                                            data-dismiss="modal">Close
                                                    </button>
                                                    <button type="submit" class="btn btn-primary btn-sm">
                                                        Tambah
                                                    </button>
                                                    </form>
                                                </div>
                                                <!-- /modal footer -->

                                            </div>
                                            <!-- /modal content -->

                                        </div>
                                    </div>
                                    <!-- /modal -->

        <!-- ======================================================== -->

        <!-- Modal Delete -->
                <div class="modal fade bd-example-modal-sm" id="modal_delete_m_n" tabindex="-1" role="dialog"
                     aria-labelledby="mySmallModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Bayar DP?</h5>

                            </div>

                            <div class="modal-body">
                                <div class="alert alert-info alert-has-icon">
                      <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                      <div class="alert-body">
                        <div class="alert-title">Info</div>
                        Pembayaran DP minimal 30% dari Harga Paket
                      </div>
                    </div>

                                <!-- <form action="" id="form-ok" method="POST"> -->
                                	<?= form_open('',array('enctype'=>'multipart/form-data','id'=>'form-ok')) ?>

                                	<div class="form-group">
                                		<input type="hidden" name="pembayaran_pembelian" id="pembelian" class="form-control" required>
                                	</div>
                                	<div class="form-group">
                                		<label>Bank</label>
                                		<input type="text" name="pembayaran_bank" class="form-control" required>
                                	</div>
                                	<div class="form-group">
                                		<label>Jumlah Bayar</label>
                                		<input type="number" name="pembayaran_jumlah" class="form-control" required>
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
                                <button type="submit"  class="btn btn-primary btn-sm">Bayar</button>
                                
                            </div>
                                </form>

                        </div>
                    </div>
                </div>
        <!-- ======================================================== -->

<div class="modal fade bd-example-modal-sm" id="modal_petugas" tabindex="-1" role="dialog"
                     aria-labelledby="mySmallModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Petugas</h5>
                            </div>

                            <div class="modal-body">
                                <!-- <form action="" id="form-ok" method="POST"> -->
                                	<form action="" class="form-oce" method="POST">
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
                                <button type="submit"  class="btn btn-primary btn-sm">Bayar</button>
                                
                            </div>
                                </form>

                        </div>
                    </div>
                </div>

</html>