<?php
defined('BASEPATH') OR exit('No direct script access allowed');


    //backend
	$route['admin'] = 'backend/DashboardController';
	




	$route['admin/paket'] = 'backend/PaketController';
	$route['admin/paket/tambah'] = 'backend/PaketController/tambah';
	$route['admin/paket/lihat/(:any)'] = 'backend/PaketController/lihat/$1';
	$route['admin/paket/update/(:any)'] = 'backend/PaketController/update/$1';
	$route['admin/paket/hapus/(:any)'] = 'backend/PaketController/hapus/$1';

	$route['admin/pembelian'] = 'backend/PembelianController';
	$route['pembelian/detail/(:any)'] = 'backend/PembelianController/lihat/$1';

	$route['admin/banner'] = 'backend/BannerController';
	$route['admin/banner/tambah'] = 'backend/BannerController/tambah';
	$route['admin/banner/update/(:any)'] = 'backend/BannerController/update/$1';
	$route['admin/banner/hapus/(:any)'] = 'backend/BannerController/hapus/$1';

	//frontend
			$route['contact'] = 'frontend/ContactController/index';
			$route['contact/send'] = 'frontend/ContactController/send_pesan';

			//produk
			$route['paket/(:any)'] = 'Welcome/paket/$1';
			$route['pesan/(:any)'] = 'frontend/ProductController/pesan/$1';

  	
	$route['admin/petugas'] = 'backend/PetugasController';
	$route['admin/petugas/tambah'] = 'backend/PetugasController/tambah';
	$route['admin/petugas/hapus/(:any)'] = 'backend/PetugasController/hapus/$1';


	$route['admin/vendor'] = 'backend/VendorController';
	$route['admin/vendor/tambah'] = 'backend/VendorController/tambah';
	$route['admin/vendor/hapus/(:any)'] = 'backend/VendorController/hapus/$1';

	
	$route['admin/laporan'] = 'backend/LaporanController';
	$route['admin/laporan/harian'] = 'backend/LaporanController/harian';
	$route['admin/laporan/bulanan'] = 'backend/LaporanController/bulanan';
	$route['admin/laporan/tahunan'] = 'backend/LaporanController/tahunan';

	$route['admin/pembayaran'] = 'backend/PembayaranController/index';
	$route['pembayaran/konfirmasi/(:any)'] = 'backend/PembayaranController/konfirmasi/$1';
	$route['bayar/(:any)'] = 'backend/PembayaranController/bayar/$1';
	$route['add/petugas/(:any)'] = 'backend/PembelianController/add_petugas/$1';


  	//default
			$route['daftar'] = 'Welcome/daftar';

  	$route['login'] = 'AuthController/index';
  	$route['logout'] = 'AuthController/logout';
  	$route['auth/login'] = 'AuthController/login';
  	$route['default_controller'] = 'Welcome';
	$route['404_override'] = '';
	$route['translate_uri_dashes'] = FALSE;

