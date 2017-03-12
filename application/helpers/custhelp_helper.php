<?php 

	function createPassword($string)
	{
		return password_hash($string, PASSWORD_BCRYPT, ['cost'=>12]);
	}
	function checkPassword($string, $hash)
	{
		return password_verify($string, $hash);
	}
	function showAlertSuccess($string = ''){
		
		$str = '<div class="alert alert-success alert-dismissible slideup" role="alert">';
		$str .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
		$str .= '<strong>Berhasil!</strong> '.(empty($string) ? 'Proses berhasil dieksekusi.' : $string).'</div>';
		return $str;
	}
	function showAlertDanger($string = ''){
		$str =  '<div class="alert alert-danger alert-dismissible slideup" role="alert">';
		$str .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
		$str .= '<strong>Kesalahan!</strong> '.(empty($string) ? 'Terjadi sesuatu kesalahan silakan coba lagi.' : $string).'</div>';
		return $str;
	}
    function showAlert($status, $msg = '')
    {
        if ($status == 'error') {
            return showAlertDanger($msg);
        } else {
            return showAlertSuccess($msg);
        }
    }
    function loading($id, $txt = 'Sedang mengambil data')
    {
        $str = '<div id="'.$id.'" style="display: none" class="text-center">'.
          '<i class="fa fa-refresh fa-spin"></i> '.$txt.'...'.
        '</div>';
        return $str;
    }
	function notHavePermission()
	{
		echo "Sorry, you dont have permission to access this page";
	}
	function loader($size = '')
	{
		$str = '<div class="loader-wrapper '.$size.' active">
                            <div class="loader-layer loader-blue">
                                <div class="loader-circle-left">
                                    <div class="circle"></div>
                                </div>
                                <div class="loader-circle-gap"></div>
                                <div class="loader-circle-right">
                                    <div class="circle"></div>
                                </div>
                            </div>
                            <div class="loader-layer loader-red">
                                <div class="loader-circle-left">
                                    <div class="circle"></div>
                                </div>
                                <div class="loader-circle-gap"></div>
                                <div class="loader-circle-right">
                                    <div class="circle"></div>
                                </div>
                            </div>
                            <div class="loader-layer loader-green">
                                <div class="loader-circle-left">
                                    <div class="circle"></div>
                                </div>
                                <div class="loader-circle-gap"></div>
                                <div class="loader-circle-right">
                                    <div class="circle"></div>
                                </div>
                            </div>
                            <div class="loader-layer loader-yellow">
                                <div class="loader-circle-left">
                                    <div class="circle"></div>
                                </div>
                                <div class="loader-circle-gap"></div>
                                <div class="loader-circle-right">
                                    <div class="circle"></div>
                                </div>
                            </div>
                        </div>';
        return $str;
	}
    function header_json()
    {
        header('Content-Type: application/json');
    }
    function seo_url($value, $id = '')
    {
        return url_title($value, 'dash', TRUE).(!empty($id) ? '-'.$id : '');
    }
    function statusPembayaran($id)
    {
        if ($id == 1) {
            return '<label class="label label-warning">Pending</label>';
        } else if ($id == 2) {
            return '<label class="label label-info">Dibayar</label>';
        } else if ($id == 3) {
            return '<label class="label label-danger">Gagal</label>';
        } else if ($id == 4) {
            return '<label class="label label-success">Selesai</label>';
        }
    }
    function metodePembayaran($id)
    {
        if ($id == 1) {
            return '<label class="label label-warning">Transfer</label>';
        } else if ($id == 2) {
            return '<label class="label label-info">Setor Tunai</label>';
        }
    }
    function jenisIdentitas($id)
    {
        if ($id == 1) {
            return 'NIDN';
        } else if ($id == 2) {
            return 'NUPT';
        }
    }
    function filterInput($string)
    {
        return htmlentities(strip_tags($string));
    }
    function emptyIsDash($value='')
    {
        return empty($value) ? '-' : $value;
    }
 ?>