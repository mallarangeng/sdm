<?php
include'../class/gapura_class.php';
include'../class/gapura_function.php';
$db = new Database();
$db->connectMySQL();
$pgw = new pgw();
$nip2 = $_GET['nip'];
if($_GET['aksi']=='tambah'){
	$cek_id	= $pgw->cekpgw($_GET['nip']);
	if($cek_id){
		$pgw->updatepgw($_GET['nip'],$_GET['nama'],$_GET['jekel'],$_GET['kota_lahir'],$_GET['tgl_lahir']);
		echo "<div class='alert alert-warning alert-dismissable'>";
		echo "<button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button>";
		echo "NIP ".$_GET['nip']." Berhasil diUbah ";
		echo "</div>";
	}else{
		
		$pgw->tambahpgw($nip2,$_GET['nama'],$_GET['jekel'],$_GET['kota_lahir'],$_GET['tgl_lahir']);
		echo "<div class='alert alert-success alert-dismissable'>";
		echo "<button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button>";
		echo "NIP ".$nip." Berhasil disimpan ";
		echo "</div>";
	}
}
?>