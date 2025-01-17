<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'landing';
$route['404_override'] = 'notfound';
$route['translate_uri_dashes'] = FALSE;
$route['login'] = 'auth/login';
$route['register'] = 'auth/create_user';
$route['forgot_password'] = 'auth/forgot_password';
$route['sso_hmj'] = 'auth/index';
$route['change_password'] = 'auth/change_password';
$route['create_group'] = 'auth/create_group';
$route['admin/edit_user/(:num)'] = 'auth/edit_user/$1';
$route['admin/edit_group/(:num)'] = 'auth/edit_group/$1';
$route['auth/edit_group'] = 'notfound';
$route['auth/edit_user'] = 'notfound';
$route['admin/tambah_user'] = 'auth/create_user';
$route['admin/tambah_group'] = 'auth/create_group';
$route['admin/ubah_password'] = 'auth/change_password';

//Routes tambah user Mahasiswa
$route['admin/tambah_user_mahasiswa'] = 'auth/create_user_mahasiswa';
// Marsel routes ke halaman upload
$route['mahasiswa/upload/(:num)'] = 'krs/upload_bukti/$1';
$route['formulir'] = 'krs/halaman_bukti';
$route['status_validasi'] = 'krs/pilih_validasi';
$route['mahasiswa/bukti/(:any)'] = 'assets/upload/Folder_krs/$1';


// Route Untuk KRS Dosen
// nama route yang dipanggil = controller/method
$route['krs/validasi_mahasiswa'] = 'krs/viewValidasiMahasiswa';
$route['krs/minta_bukti'] = 'krs/viewMintaBukti';
$route['krs/detail_bukti'] = 'krs/viewDetailBukti';
$route['krs/buat_bukti'] = 'krs/viewFormBuatBukti';

// Routes Bendahara
// nama route yang dipanggil = controller/method
$route['krs/buat_iuran'] = 'krs/tambahIuran';
$route['krs/validasi_mahasiswa'] = 'krs/viewValidasiMahasiswa';
$route['krs/minta_bukti'] = 'krs/viewMintaBukti';
