<div class="row">
                    <div class="col-md-12">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <?php foreach ($vendor as $key => $r): ?>
                                    
                                <a class="nav-item nav-link" id="<?= $r['vendor_username'] ?>" data-toggle="tab" href="#<?= 'paket'.$key ?>" role="tab" aria-controls="<?= 'paket'.$key ?>" aria-selected="true"><?= $r['vendor_nama'] ?></a>
                                <?php endforeach ?>
                               
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <?php foreach ($vendor as $k => $a): ?>

                            <div class="tab-pane fade show <?php if($k==0){ ?> active <?php } ?>" id="<?= 'paket'.$k ?>" role="tabpanel" aria-labelledby="<?= $a['vendor_username'] ?>">
                                <?php 
                                  $paket = $this->PaketModel->lihat_paket_vendor($a['vendor_id']);
                                 ?>

                                <div class="row mt-4 p-2">
                                 <?php foreach ($paket as $value): ?>

                                <div class="col-md-3 mt-2">
                                    <div class="card" style="width: 18rem;">
                                      <img src="<?= base_url() ?>assets/upload/images/paket/<?= $value['paket_foto'] ?>" height="150px" class="card-img-top" alt="...">
                                      <div class="card-body">
                                        <h5 class="card-title"><a href="<?= base_url() ?>paket/<?= $value['paket_id'] ?>"><?= $value['paket_nama'] ?></a></h5>
                                        <p class="card-text">WO : <span class="text-info"><?= $value['vendor_nama'] ?></span></p>
                                        <a href="<?= base_url() ?>paket/<?= $value['paket_id'] ?>" class="btn btn-primary form-control">Lihat</a>
                                      </div>
                                    </div>
                                </div>

                                 <?php endforeach ?>
                                </div>



                            </div>
                            <?php endforeach ?>
                            
                        </div>
                    </div>
</div>