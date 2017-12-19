<?php
include'../class/gapura_class.php';
include'../class/gapura_function.php';
$db = new Database();
$db->connectMySQL();
$provider = new provider();
$id_provider=kdauto("provider","9");
if($_GET['aksi']=='tambah'){
	$cek_id = $provider->cek_provider($_GET['id_provider']);
	if ($cek_id){
	$provider->updateprovider($_GET['id_provider'],$_GET['nama_provider'],$_GET['alamat'],$_GET['telpon'],$_GET['web'],$_GET['email'],$_GET['direktur']);
	echo "<div class='alert alert-warning alert-dismissable'>";
	echo "<button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button>";
	echo "Berhasil diupdate";
	echo "</div>";
	}
	else {
	$provider->tambahprovider($id_provider,$_GET['nama_provider'],$_GET['alamat'],$_GET['telpon'],$_GET['web'],$_GET['email'],$_GET['direktur']);
	echo "<div class='alert alert-success alert-dismissable'>";
	echo "<button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button>";
	echo "Berhasil disimpan ";
	echo "</div>";
	}
}
?>