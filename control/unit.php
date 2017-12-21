<?php
include'../class/gapura_class.php';
include'../class/gapura_function.php';
session_start();
$db = new Database();
$db->connectMySQL();
$unit = new unit();
$userSes = userSes();
$timeSkrg = timeSkrg();
$id_unit = kdauto2('unit_kerja');
if($_GET['aksi']=='tambah'){
	$cek_id	= $unit->cek_unit($_GET['id_unit']);
	if($cek_id){
		$unit->updateunit($_GET['id_unit'],$_GET['nama_unit'],$_GET['ket_unit'],$_GET['i_by'],$_GET['i_date'],$userSes,$timeSkrg);
		echo "<div class='alert alert-warning alert-dismissable'>";
		echo "<button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button>";
		echo "Berhasil diubah ";
		echo "</div>";
	}else{
		
		$unit->tambahunit($id_unit,$_GET['nama_unit'],$_GET['ket_unit'],$userSes,$timeSkrg,$_GET['e_by'],$_GET['e_date']);
		echo "<div class='alert alert-success alert-dismissable'>";
		echo "<button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button>";
		echo "Berhasil disimpan ";
		echo "</div>";
	}
}
?>