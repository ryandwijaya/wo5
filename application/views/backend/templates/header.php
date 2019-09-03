<!DOCTYPE html>
<html lang="en">



<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Wedding Organizer</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/backend/css/app.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/backend/bundles/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/backend/bundles/weather-icon/css/weather-icons.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/backend/bundles/weather-icon/css/weather-icons-wind.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/backend/bundles/summernote/summernote-bs4.css">

  <link rel="stylesheet" href="<?= base_url() ?>assets/backend/bundles/datatables/datatables.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/backend/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/backend/css/style.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/backend/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/backend/css/custom.css">
  <link href="<?= base_url() ?>assets/backend/css/animated.css" rel="stylesheet">
  <link rel='shortcut icon' type='image/x-icon' href='<?= base_url() ?>assets/backend/img/favicon.ico' />
</head>

<body class="dark-sidebar theme-black">
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
                                    collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>
            
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
          
          
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="<?= base_url() ?>assets/backend/img/profile_av.png"
                class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown text-center">
              <div class="dropdown-title">Hello <?= $this->session->userdata('session_nama') ?></div>
              <span class="text-success text-center"><?= $this->session->userdata('session_level') ?></span>
              
              <div class="dropdown-divider"></div>
              <a href="<?= base_url() ?>logout" class="dropdown-item has-icon text-danger" onclick="return confirm('Yakin ingin keluar?')"> <i class="fas fa-sign-out-alt"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html"> <img alt="image" src="<?= base_url() ?>assets/backend/img/logo.png" class="header-logo" /> <span
                class="logo-name">SIWEDOR</span>
            </a>
          </div>
          <div class="sidebar-user">
            <div class="sidebar-user-picture">
              <img alt="image" src="<?= base_url() ?>assets/backend/img/profile_av.png">
            </div>
            <div class="sidebar-user-details">
              <div class="user-name"><?= $this->session->userdata('session_nama') ?></div>
              <div class="user-role"><?= $this->session->userdata('session_level') ?></div>
            </div>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li><a class="nav-link" href="<?= base_url('admin') ?>"><i data-feather="monitor"></i><span>Dashboard</span></a></li>

            
            <?php if ($this->session->userdata('session_level')!='pelanggan'): ?>
              
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i data-feather="grid"></i><span>Data</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?= base_url('admin/paket') ?>">Paket</a></li>
                <li><a class="nav-link" href="<?= base_url('admin/petugas') ?>">Petugas</a></li>
                <li><a class="nav-link" href="<?= base_url('admin/vendor') ?>">Vendor</a></li>
              </ul>
            </li>
            <?php endif ?>

            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i data-feather="minimize-2"></i><span>Transaksi</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?= base_url('admin/pembelian') ?>">Pembelian</a></li>
                <li><a class="nav-link" href="<?= base_url('admin/pembayaran') ?>">Pembayaran</a></li>
              </ul>
            </li>
            <?php if ($this->session->userdata('session_level')=='vendor'): ?>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i data-feather="file-text"></i><span>Laporan</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?= base_url('admin/laporan/harian') ?>">Harian</a></li>
                <li><a class="nav-link" href="<?= base_url('admin/laporan/bulanan') ?>">Bulanan</a></li>
                <li><a class="nav-link" href="<?= base_url('admin/laporan/tahunan') ?>">Tahunan</a></li>
              </ul>
            </li>
            <?php endif ?>
           
            
          </ul>
        </aside>
      </div>
    <div class="main-content">
        <section class="section">
            
            
    <div class="section-body">
      <div class="row">
          <div class="col-12">

           <?php if ($this->session->flashdata('alert') == 'success_post') { ?>
                        <div class="alert alert-success animated shake hide-it">
                            <strong>SUKSES!!!</strong> Data berhasil ditambahkan.
                        </div>
                    <?php } ?>
                    
                    <?php if ($this->session->flashdata('alert') == 'success_delete') { ?>
                        <div class="alert alert-warning animated shake hide-it">
                            <strong>SUKSES!!!</strong> Data berhasil dihapus.
                        </div>
                    <?php } ?>
                    <?php if ($this->session->flashdata('alert') == 'success_change') { ?>
                        <div class="alert alert-info animated shake hide-it">
                            <strong>SUKSES!!!</strong> Data berhasil diubah.
                        </div>
                    <?php } ?>
                    <?php if ($this->session->flashdata('alert') == 'fail_edit') { ?>
                        <div class="alert alert-danger animated shake hide-it">
                            <strong>GAGAL!!!</strong> Terjadi kesalahan saat menyimpan.
                        </div>
                    <?php } ?>
              
         