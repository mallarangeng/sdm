<?php
include'../class/gapura_class.php';
include'../class/gapura_function.php';
$db = new Database();
$db->connectMySQL();
$pegawai = new pegawai();
$nip = kdauto2('pegawai');
if($_GET['aksi']=='tambah'){
	$cek_peg = $pegawai->cek_pegawai($_GET['nip']);
	if($cek_peg){
		$pegawai->updatepegawai($_GET['nip'],$_GET['nama'],$_GET['jekel'],$_GET['kota_lahir']);
		echo "<div class='alert alert-warning alert-dismissable'>";
		echo "<button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button>";
		echo "Berhasil diubah ";
		echo "</div>";
	}
	else
	{
		$pegawai->tambahpegawai($nip,$_GET['nama'],$_GET['jekel'],$_GET['kota_lahir']);
		echo "<div class='alert alert-success alert-dismissable'>";
		echo "<button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button>";
		echo "Berhasil disimpan ";
		echo "</div>";
	}
}
?>