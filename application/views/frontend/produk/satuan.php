
            <div class="row mt-5">
                <div class="col-lg-12">
                    <!--=======  page wrapper  =======-->
                    <div class="page-wrapper">
                        <div class="page-content-wrapper">
                            <!--=======  single product main content area  =======-->
                            <div class="single-product-main-content-area section-space">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <!--=======  product details slider area  =======-->

                                        <div class="product-details-slider-area">


                                            <div class="big-image-wrapper">

                                                <div class="product-details-big-image-slider-wrapper product-details-big-image-slider-wrapper--bottom-space ht-slick-slider" 
                                                >
                                                    <div class="single-image text-center p-5">
                                                        <img src="<?= base_url() ?>assets/upload/images/paket/<?= $paket['paket_foto'] ?>" class="img-fluid" alt="" style="width: 80%; margin:0 auto;">
                                                    </div>
                                                    
                                                </div>
                                            </div>


                                            
                                        </div>

                                        <!--=======  End of product details slider area  =======-->
                                    </div>
                                    <div class="col-lg-4">
                                        <!--=======  single product content description  =======-->
                                        <div class="single-product-content-description">
                                            <h4 class="product-title"><?= $paket['paket_nama'] ?></h4>
                                            

                                            <p class="single-grid-product__price"><span class="discounted-price text-success">Rp. <?= nominal($paket['paket_harga']) ?></span></p>

                                            <a href="<?= base_url() ?>pesan/<?= $paket['paket_id'] ?>"><button class="btn btn-success btn-sm"><i class="fa fa-money"></i> Pesan Sekarang</button></a>
    <hr style="width: 59%;">
                                            <h3>Deskripsi Paket</h3>
                                            <p class="product-description">
                                                <?php
                                                     $deskripsi= explode('-',$paket['paket_deskripsi']);
                                                ?>

                   
                    
                                                    <?php for ($i = 0; $i < count($deskripsi)-1 ; $i++) {
                                                    echo '-'.$deskripsi[$i+1].'<br>';
                                                } ?>
                                            </p>

                                                
                                            <h3>Nama WO : <?= $paket['vendor_nama'] ?></h3>
                                            

                                            <!-- <div class="product-countdown" data-countdown="2019/09/01"></div> -->
                                            <div class="row mb-5">
                                                <div class="col-md-12 mb-5">
                                                   
                                                </div>
                                            </div>

                                        </div>
                                        <!--=======  End of single product content description  =======-->
                                    </div>
                                    <div class="col-lg-4">
                                        <!--=======  single product content description  =======-->
                                        <div class="single-product-content-description bg-secondary p-3 mr-5">
                                            <h3 style="color: white;">Tanggal yang sudah dipesan</h3>
                                                <hr>
                                                <?php 
                                                $no=1;
                                                $pembelian = $this->PembelianModel->cek_pembelian_tgl($paket['paket_id']); ?>
                                                <?php if (count($pembelian)>0){ ?>
                                                    <?php foreach ($pembelian as $va): ?>
                                                    <span style="color: white;"><b><?=  $no.'. '.date_indo($va['pembelian_tgl_acara']); ?> </b></span><br>
                                                <?php $no++; endforeach ?>
                                                <?php }else{ ?>
                                                    <p style="color: white;">Produk ini belum dipesan oleh siapapun.</p>
                                                <?php } ?>
                                                

                                        </div>
                                        <!--=======  End of single product content description  =======-->
                                    </div>

                                </div>
                            </div>
                            <!--=======  End of single product main content area  =======-->
                            
                        </div>
                    </div>
                    <!--=======  End of page wrapper  =======-->
                </div>
            </div>
       
    <!--====================  End of page content area  ====================-->