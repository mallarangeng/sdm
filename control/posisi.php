<?php
include'../class/gapura_class.php';
include'../class/gapura_function.php';
session_start();
$db = new Database();
$db->connectMySQL();
$posisi = new posisi();
$userSes = userSes();
$timeSkrg = timeSkrg();
$id_posisi = kdauto2('posisi_kerja');
if($_GET['aksi']=='tambah'){
	$cek_id	= $posisi->cek_posisi($_GET['id_posisi']);
	if($cek_id){
		$posisi->updateposisi($_GET['id_posisi'],$_GET['nm_posisi'],$_GET['ket_posisi'],$_GET['i_by'],$_GET['i_date'],$userSes,$timeSkrg);
		echo "<div class='alert alert-warning alert-dismissable'>";
		echo "<button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button>";
		echo "Berhasil diubah ";
		echo "</div>";
	}else{
		
		$posisi->tambahposisi($id_posisi,$_GET['nm_posisi'],$_GET['ket_posisi'],$userSes,$timeSkrg,$_GET['e_by'],$_GET['e_date']);
		echo "<div class='alert alert-success alert-dismissable'>";
		echo "<button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button>";
		echo "Berhasil disimpan ";
		echo "</div>";
	}
}
?>