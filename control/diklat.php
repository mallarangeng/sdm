<?php
include'../class/gapura_class.php';
include'../class/gapura_function.php';
$db = new Database();
$db->connectMySQL();
$diklat = new diklat();
$id_diklat=kdauto('diklat');
if($_GET['aksi']=='tambah'){
	$cek_id = $diklat->cek_diklat($_GET['id_diklat']);
	if ($cek_id){
	$diklat->updatediklat($_GET['id_diklat'],$_GET['nama_diklat'],$_GET['penyelenggara'],$_GET['instruktur'],$_GET['tgl_diklat'],$_GET['durasi'],$_GET['lokasi'],$_GET['ketua_kelas'],$_GET['stat_diklat']);
	echo "<div class='alert alert-success alert-dismissable'>";
	echo "<button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button>";
	echo "Berhasil diupdate";
	echo "</div>";
	}
	else {
	$diklat->tambahDiklat($id_diklat,$_GET['nama_diklat'],$_GET['penyelenggara'],$_GET['instruktur'],$_GET['tgl_diklat'],$_GET['durasi'],$_GET['lokasi'],$_GET['ketua_kelas'],$_GET['stat_diklat']);
	echo "<div class='alert alert-success alert-dismissable'>";
	echo "<button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button>";
	echo "Berhasil disimpan ";
	echo "</div>";
	}
}
?>