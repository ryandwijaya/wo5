<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Sintex product landing page template">
        <meta name="author" content="ThemeEaster">
       
        <title>Wedding Organizer Shop</title>
        
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
        
        <!-- Font Awesome CSS -->
        <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/font-awesome.min.css">
        <!-- Themify Icons CSS -->
        <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/themify-icons.css">
        <!-- Elegant Font Icons CSS -->
        <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/elegant-font-icons.css">
        <!-- Elegant Line Icons CSS -->
        <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/elegant-line-icons.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/bootstrap.min.css">
        <!-- Venobox CSS -->
        <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/venobox/venobox.css">
        <!-- Slicknav CSS -->
        <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/slicknav.min.css">
        <!-- animate CSS -->
        <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/animate.min.css">
        <!-- OWL-Carousel CSS -->
        <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/owl.carousel.css">
        <!-- Main CSS -->
        <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/main.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/responsive.css">

        <script src="<?= base_url() ?>assets/frontend/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body data-spy="scroll" data-target="#navmenu" data-offset="70">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <div class="site-preloader-wrap">
            <div class="spinner"></div>
        </div><!-- Preloader -->
        
        <header id="header" class="header-section">
            <div class="container">
                <nav class="navbar">
                    <a href="<?= base_url() ?>" class="navbar-brand text-secondary">Siwedor</a>
                    <div class="d-flex menu-wrap">
                       <div id="navmenu" class="mainmenu">
                           <ul class="nav">
                                <li ><a data-scroll class="nav-link active" href="<?= base_url() ?>">Home <span class="sr-only">(current)</span></a></li>
                                
                            </ul>
                            <a href="<?= base_url() ?>login" class="default-btn">Login</a>
                       </div>
                    </div>
                </nav>
            </div>
        </header><!-- Header Section--> 
                     <?php if ($this->session->flashdata('alert') == 'success_mail') { ?>
                <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success hide-it">
                        <span>SUSKES!! Pesan anda sudah terkirim, kami akan merespon pesan anda melalui email. Pastikan email yang tertera adalah email aktif, Thx.</span>
                    </div>
                </div>
            </div>
            <?php } ?>
            <?php if ($this->session->flashdata('alert') == 'success_daftar') { ?>
                <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success hide-it">
                        <span>SUSKES!! Pendaftaran Berhasil.</span>
                    </div>
                </div>
            </div>
            <?php } ?>
             <?php if ($this->session->flashdata('alert') == 'success_mesan') { ?>
                <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success hide-it">
                        <span>SUSKES!! Pemesanan Berhasil.Silahkan Login untuk membayar DP ! </span>
                    </div>
                </div>
            </div>
            <?php } ?>
            <?php if ($this->session->flashdata('alert') == 'fail_daftar') { ?>
                <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-danger hide-it">
                        <span>GAGAL!! Pendaftaran gagal, silahkan coba lagi.</span>
                    </div>
                </div>
            </div>
            <?php } ?>
            <?php if ($this->session->flashdata('alert') == 'pemesanan_gagal') { ?>
                <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-danger">
                        <span>GAGAL!! Pemesanan gagal, Paket telah dipesan pada tanggal tersebut, Silahkan pilih tanggal lain.</span>
                    </div>
                </div>
            </div>
            <?php } ?>
            <?php if ($this->session->flashdata('alert') == 'fail_mesan') { ?>
                <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-danger hide-it">
                        <span>GAGAL!! Terjadi kesalahan silahkan coba lagi.</span>
                    </div>
                </div>
            </div>
            <?php } ?>
        
        
       
                                 
       