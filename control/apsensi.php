<?php
session_start();
include'../class/gapura_class.php';
include'../class/gapura_function.php';
$db = new Database();
$db->connectMySQL();
$apsensi = new apsensi();
$userSes = userSes();
$timeSkrg = timeSkrg();
if($_GET['aksi']=='tambah'){
	$cek_id	= $apsensi->cek_apsen($_GET['id_apsensi']);
	if($cek_id){
		$apsensi->updateapsen($_GET['id_apsensi'],$_GET['nip'],$_GET['id_training'],$_GET['i_by'],$_GET['i_date'],$userSes,$timeSkrg);
		echo "<div class='alert alert-warning alert-dismissable'>";
		echo "<button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button>";
		echo "Data Apsensi Berhasil diUbah ";
		echo "</div>";
	}else{		
		$apsensi->tambahapsen($_GET['id_apsensi'],$_GET['nip'],$_GET['id_training'],$userSes,$timeSkrg);
		echo "<div class='alert alert-success alert-dismissable'>";
		echo "<button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button>";
		echo "Data Apsensi Berhasil disimpan ";
		echo "</div>";
	}
}
?>