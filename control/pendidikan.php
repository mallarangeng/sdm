<?php
include'../class/gapura_class.php';
include'../class/gapura_function.php';
session_start();
$db = new Database();
$db->connectMySQL();
$pendidikan = new pendidikan();
$userSes = userSes();
$timeSkrg = timeSkrg();
$id_pend = kdauto('pendidikan');
if($_GET['aksi']=='tambah'){
	$cek_id	= $pendidikan->cek_pendidikan($_GET['id_pend']);
	if($cek_id){
		$pendidikan->updatependidikan($_GET['id_pend'],$_GET['nip'],$_GET['pend_terakhir'],$_GET['prodi'],$_GET['thn_lulus'],$_GET['pend_asal'],$_GET['i_by'],$_GET['i_date'],$userSes,$timeSkrg);
		echo "<div class='alert alert-warning alert-dismissable'>";
		echo "<button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button>";
		echo "Berhasil diubah ";
		echo "</div>";
	}
	else
	{
		$pendidikan->tambahpendidikan($id_pend,$_GET['nip'],$_GET['pend_terakhir'],$_GET['prodi'],$_GET['thn_lulus'],$_GET['pend_asal'],$userSes,$timeSkrg,$_GET['e_by'],$_GET['e_date']);
		echo "<div class='alert alert-success alert-dismissable'>";
		echo "<button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button>";
		echo "Berhasil disimpan ";
		echo "</div>";
	}
}
?>