<?php
session_start();
include'../class/gapura_class.php';
include'../class/gapura_function.php';
$db = new Database();
$db->connectMySQL();
$training = new training();
$userSes = userSes();
$timeSkrg = timeSkrg();
$id_training=kdauto("training","1");
if($_GET['aksi']=='tambah'){
	$cek_id = $training->cek_training($_GET['id_training']);
	if ($cek_id){
	$training->updatetraining($_GET['id_training'],$_GET['nama_training'],$_GET['penyelenggara'],$_GET['instruktur'],$_GET['tgl_training'],$_GET['durasi'],$_GET['lokasi'],$_GET['ketua_kelas'],$_GET['stat_training'],$_GET['i_by'],$_GET['i_date'],$userSes,$timeSkrg);
	echo "<div class='alert alert-warning alert-dismissable'>";
	echo "<button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button>";
	echo "ID ".$_GET['id_training']." Berhasil diupdate";
	echo "</div>";
	}
	else {
	$training->tambahtraining($id_training,$_GET['nama_training'],$_GET['penyelenggara'],$_GET['instruktur'],$_GET['tgl_training'],$_GET['durasi'],$_GET['lokasi'],$_GET['ketua_kelas'],$_GET['stat_training'],$userSes,$timeSkrg);
	echo "<div class='alert alert-success alert-dismissable'>";
	echo "<button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button>";
	echo "ID ".$id_training." Berhasil disimpan ";
	echo "</div>";
	}
}
?>