<section id="home" class="hero-section bd-bottom">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-md-8">
                        <div class="hero-content">
                            <h1>Wedding Organizer  <br>Pesan paket weddingmu disini <br> dengan mudah.</h1>
                            <p>Siwedor yaitu layanan penyedia paket wedding online.</p>
                            <a href="#products" class="default-btn">Lihat Sekarang</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="<?= base_url() ?>assets/frontend/img/okok.png" class="hero-cam" alt="">
                    </div>
                </div>
                
                <!-- <img src="<?= base_url() ?>assets/frontend/img/hero-cam.png" class="hero-cam" alt=""> -->
                <!-- <div class="hero-cam"></div> -->
            </div>
        </section><!-- Hero Section-->
  

<section id="products" class="product-section bg-grey bd-bottom padding">
            <div class="container">
                <div class="section-heading text-center mb-40">
                    <h2>Paket Pernikahan.</h2>
                    <p>Silahkan Pilih Paket Pesanan Dibawah ini.</p>
                </div><!-- Section Heading -->
                
                <div class="row">
                    <div class="col-md-12">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <?php foreach ($vendor as $key => $r): ?>
                                    
                                <a class="nav-item nav-link text-light bg-primary mr-2" id="<?= $r['vendor_username'] ?>" data-toggle="tab" href="#<?= 'paket'.$key ?>" role="tab" aria-controls="<?= 'paket'.$key ?>" aria-selected="true"><?= $r['vendor_nama'] ?></a>
                                <?php endforeach ?>
                               
                            </div>
                        </nav>
                        <hr><hr>
                        <div class="tab-content" id="nav-tabContent">
                            <?php foreach ($vendor as $k => $a): ?>

                            <div class="tab-pane fade show <?php if($k==0){ ?> active <?php } ?>" id="<?= 'paket'.$k ?>" role="tabpanel" aria-labelledby="<?= $a['vendor_username'] ?>">
                                <?php 
                                  $paket = $this->PaketModel->lihat_paket_vendor($a['vendor_id']);
                                 ?>

                                <div class="row mt-4">
                                 <?php foreach ($paket as $value): ?>

                                <div class="col-md-4 mt-2">
                                    <div class="card" style="width: 18rem;">
                                      <img src="<?= base_url() ?>assets/upload/images/paket/<?= $value['paket_foto'] ?>" height="150px" class="card-img-top" alt="...">
                                      <div class="card-body">
                                        <h5 class="card-title"><a href="<?= base_url() ?>paket/<?= $value['paket_id'] ?>"><?= $value['paket_nama'] ?></a></h5>
                                        <p class="card-text">WO : <span class="text-info"><?= $value['vendor_nama'] ?></span></p>
                                        <a href="<?= base_url() ?>paket/<?= $value['paket_id'] ?>" class="btn btn-success form-control">Lihat</a>
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
            </div>
        </section><!-- Product Section -->