<?php
include'../class/gapura_class.php';
include'../class/gapura_function.php';
$db = new Database();
$db->connectMySQL();
$akses = new akses();
$id_akses = kdauto2('akses');
if($_GET['aksi']=='tambah'){
	$cek_id	= $akses->cek_akses($_GET['id_akses']);
	if($cek_id){
		
		$akses->updateakses($_GET['id_akses'],$_GET['nama_akses'],$_GET['ket_akses']);
		echo "<div class='alert alert-warning alert-dismissable'>";
		echo "<button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button>";
		echo "ID akses ".$_GET['id_akses']." Berhasil diUbah ";
		echo "</div>";
	}else{
		
		$akses->tambahakses($id_akses,$_GET['nama_akses'],$_GET['ket_akses']);
		echo "<div class='alert alert-success alert-dismissable'>";
		echo "<button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button>";
		echo "ID Akses ".$id_akses." Berhasil disimpan ";
		echo "</div>";
	}
}
?>