<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'lv_home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;

/* re-route */

#############################################################################
################################### AUTH ####################################
#############################################################################

$route['login'] 											= 'lv_auth/login';
$route['login/process'] 									= 'lv_auth/login/process';
$route['signout'] 									= 'lv_auth/login/signout';

$route['dashboard'] 									= 'lv_dashboard';

####################Cadospres#############################################################
// $route['webmin/cadospres-berprestasi']                  = 'lv_webmin/cadospres';
// $route['webmin/cadospres-berprestasi/(:any)']           = 'lv_webmin/cadospres/$1';
// $route['webmin/cadospres-berprestasi/(:any)/(:any)']    = 'lv_webmin/cakaprodi/$1/$2';

// ####################Cakaprodi#############################################################
// $route['webmin/cakaprodi-berprestasi']                  = 'lv_webmin/cakaprodi';
// $route['webmin/cakaprodi-berprestasi/(:any)']           = 'lv_webmin/cakaprodi/$1';
// $route['webmin/cakaprodi-berprestasi/(:any)/(:any)']    = 'lv_webmin/cakaprodi/$1/$2';

###############################################################################
################################# SET-DOSEN #######################################
###############################################################################
$route['dosen/setting']									= 'lv_dosen/setting';
$route['dosen/setting/(:any)']									= 'lv_dosen/setting/$1';
$route['dosen/setting/(:any)/(:any)']							= 'lv_dosen/setting/$1/$2';
$route['dosen/setting/(:any)/(:any)/(:any)']					= 'lv_dosen/setting/$1/$2/$3';

###############################################################################
################################# ADMIN #######################################
###############################################################################
$route['webmin']											= 'lv_webmin/dashboard';
$route['webmin/(:any)']									= 'lv_webmin/$1';
$route['webmin/(:any)/(:any)']							= 'lv_webmin/$1/$2';
$route['webmin/(:any)/(:any)/(:any)']					= 'lv_webmin/$1/$2/$3';
// $route['webmin/dashboard']							= 'lv_webmin/dashboard';
// $route['webmin/laporan']								= 'lv_webmin/laporan';
// $route['webmin/prestasi-unggul']						= 'lv_webmin/prestasi_unggul';
// $route['webmin/kaprodi-berprestasi']					= 'lv_webmin/kaprodi';
// $route['webmin/dosen-berprestasi']					= 'lv_webmin/dosen';
// $route['webmin/managemen-akun']						= 'lv_webmin/managemen_akun';
	

############################### LAPORAN #####################################
// $route['laporan']										= 'lv_laporan/$1';
$route['laporan/(:any)']									= 'lv_laporan/$1';
$route['laporan/(:any)/(:any)']							= 'lv_laporan/$1/$2';
$route['laporan/(:any)/(:any)/(:any)']					= 'lv_laporan/$1/$2/$3';
$route['laporan/(:any)/(:any)/(:any)/(:any)']			= 'lv_laporan/$1/$2/$3/$4';

###############################################################################
################################# DOSEN #######################################
###############################################################################
// $route['dashboard']									= 'lv_dosen/dashboard';

############################### BUKU AJAR #####################################
$route['buku-ajar']										= 'lv_dosen/buku_ajar';
$route['buku-ajar/(:any)']								= 'lv_dosen/buku_ajar/$1';
$route['buku-ajar/(:any)/(:any)']						= 'lv_dosen/buku_ajar/$1/$2';
$route['buku-ajar/(:any)/(:any)/(:any)']					= 'lv_dosen/buku_ajar/$1/$2/$3';
// $route['buku-ajar/add']								= 'lv_dosen/buku_ajar/tambahData';
// $route['buku-ajar/delete/(:any)']						= 'lv_dosen/buku_ajar/hapusData/$1';
// $route['buku-ajar/update/(:any)']						= 'lv_dosen/buku_ajar/updateData/$1';

####################### FAS. PENUNJANG PENELITIA###############################
$route['penunjang-penelitian']							= 'lv_dosen/penunjang_penelitian';
$route['penunjang-penelitian/(:any)']					= 'lv_dosen/penunjang_penelitian/$1';
$route['penunjang-penelitian/(:any)/(:any)']				= 'lv_dosen/penunjang_penelitian/$1/$2';
$route['penunjang-penelitian/(:any)/(:any)/(:any)']		= 'lv_dosen/penunjang_penelitian/$1/$2/$3';
// $route['penunjang-penelitian/add']					= 'lv_dosen/fasilitas_penunjang_penelitian/tambahData';
// $route['penunjang-penelitian/delete/(:any)']			= 'lv_dosen/fasilitas_penunjang_penelitian/hapusData/$1';
// $route['penunjang-penelitian/update/(:any)']			= 'lv_dosen/fasilitas_penunjang_penelitian/editData/$1';

################################### HKI #######################################
$route['hki']											= 'lv_dosen/hki';
$route['hki/(:any)']										= 'lv_dosen/hki/$1';
$route['hki/(:any)/(:any)']								= 'lv_dosen/hki/$1/$2';
$route['hki/(:any)/(:any)/(:any)']						= 'lv_dosen/hki/$1/$2/$3';
// $route['hki/add']										= 'lv_dosen/hki/tambahData';
// $route['hki/delete/(:any)']							= 'lv_dosen/hki/hapusData/$1';
// $route['hki/update/(:any)']							= 'lv_dosen/hki/editData/$1';

############################### LUARAN LAIN ###################################
$route['luaran-lain']									= 'lv_dosen/luaran_lain';
$route['luaran-lain/(:any)']								= 'lv_dosen/luaran_lain/$1';
$route['luaran-lain/(:any)/(:any)']						= 'lv_dosen/luaran_lain/$1/$2';
$route['luaran-lain/(:any)/(:any)/(:any)']				= 'lv_dosen/luaran_lain/$1/$2/$3';
// $route['luaran-lain/add']								= 'lv_dosen/luaran_lain/tambahData';
// $route['luaran/delete/(:any)']						= 'lv_dosen/luaran_lain/hapusData/$1';
// $route['luaran/update/(:any)']						= 'lv_dosen/luaran_lain/editData/$1';


############################### FORUM ILMIAH ###################################
$route['forum-ilmiah']									= 'lv_dosen/pemakalah_forum_ilmiah';
$route['forum-ilmiah/(:any)']							= 'lv_dosen/pemakalah_forum_ilmiah/$1';
$route['forum-ilmiah/(:any)/(:any)']						= 'lv_dosen/pemakalah_forum_ilmiah/$1/$2';
$route['forum-ilmiah/(:any)/(:any)/(:any)']				= 'lv_dosen/pemakalah_forum_ilmiah/$1/$2/$3';
// $route['forum-ilmiah/add']							= 'lv_dosen/pemakalah_forum_ilmiah/tambahData';
// $route['forum-ilmiah/delete/(:any)']					= 'lv_dosen/pemakalah_forum_ilmiah/hapusData/$1';
// $route['forum-ilmiah/update/(:any)']					= 'lv_dosen/pemakalah_forum_ilmiah/editData/$1';

####################### PENELITIAN EKSTERNAL ############################
$route['penelitian-eksternal']							= 'lv_dosen/penelitian_eksternal';
$route['penelitian-eksternal/(:any)']					= 'lv_dosen/penelitian_eksternal/$1';
$route['penelitian-eksternal/(:any)/(:any)']				= 'lv_dosen/penelitian_eksternal/$1/$2';
$route['penelitian-eksternal/(:any)/(:any)/(:any)']		= 'lv_dosen/penelitian_eksternal/$1/$2/$3';
// $route['hibah-ditlitabmas/add']						= 'lv_dosen/penelitian_hibah_ditlitabmas/tambahData';
// $route['hibah-ditlitabmas/delete/(:any)']				= 'lv_dosen/penelitian_hibah_ditlitabmas/hapusData/$1';
// $route['hibah-ditlitabmas/update/(:any)']				= 'lv_dosen/penelitian_hibah_ditlitabmas/editData/$1';

##################### PENELITIAN HIBAH NON DITLITABMAS ############################
$route['penelitian-internal']							= 'lv_dosen/penelitian_internal';
$route['penelitian-internal/(:any)']						= 'lv_dosen/penelitian_internal/$1';
$route['penelitian-internal/(:any)/(:any)']				= 'lv_dosen/penelitian_internal/$1/$2';
$route['penelitian-internal/(:any)/(:any)/(:any)']		= 'lv_dosen/penelitian_internal/$1/$2/$3';
// $route['hibah-non-ditlitabmas/add']					= 'lv_dosen/penelitian_hibah_non_ditlitabmas/tambahData';
// $route['hibah-non-ditlitabmas/delete/(:any)']			= 'lv_dosen/penelitian_hibah_non_ditlitabmas/hapusData/$1';
// $route['hibah-non-ditlitabmas/update/(:any)']			= 'lv_dosen/penelitian_hibah_non_ditlitabmas/editData/$1';
// 
##################### PUBLIC ############################
$route['voting']											= 'lv_voting/voting';
$route['voting/add']										= 'lv_voting/voting/addVoting';
$route['voting/view/(:any)']								= 'lv_voting/voting/view/$1';
$route['voting/viewinfo/(:any)']							= 'lv_voting/voting/viewinfo/$1';
$route['voting-dospres']									= 'lv_voting/dospres_voting';
$route['voting-dospres/add']								= 'lv_voting/dospres_voting/addVoting';
$route['voting-dospres/view/(:any)']						= 'lv_voting/dospres_voting/view/$1';
$route['voting-dospres/viewinfo/(:any)']					= 'lv_voting/dospres_voting/viewinfo/$1';

##################### KAPRODI BERPRESTASI #################
$route['kaprodi-berprestasi']							= 'lv_webmin/kaprodi';
$route['kaprodi-berprestasi/(:any)']						= 'lv_webmin/kaprodi/$1';
$route['kaprodi-berprestasi/(:any)/(:any)']				= 'lv_webmin/kaprodi/$1/$2';
$route['kaprodi-berprestasi/(:any)/(:any)/(:any)']		= 'lv_webmin/kaprodi/$1/$2/$3';

##################### DOSPRES ###########################
$route['dosen-berprestasi']								= 'lv_webmin/dosen';
$route['dosen-berprestasi/(:any)']						= 'lv_webmin/dosen/$1';
$route['dosen-berprestasi/(:any)/(:any)']				= 'lv_webmin/dosen/$1/$2';
$route['dosen-berprestasi/(:any)/(:any)/(:any)']			= 'lv_webmin/dosen/$1/$2/$3';

#####################Prestasi UNGGUL########################################
$route['prestasi-unggul']								= 'lv_webmin/prestasi_unggul';
$route['prestasi-unggul/(:any)']							= 'lv_webmin/prestasi_unggul/$1';
$route['prestasi-unggul/(:any)/(:any)']					= 'lv_webmin/prestasi_unggul/$1/$2';
$route['prestasi-unggul/(:any)/(:any)/(:any)']			= 'lv_webmin/prestasi_unggul/$1/$2/$3';

$route['cadospres/details'] 								= 'lv_home/detailcadospres';
$route['cakaprodi/details'] 								= 'lv_home/detailcakaprodi';



############## HOME- KAPRODI ##########
$route['detail-kaprodi/(:num)'] = 'lv_home/kaprodi/detail/$1';
$route['cadospres/details/(:any)'] 								= 'lv_home/detailcadospres/$1';

