<?php
include'../class/gapura_class.php';
include'../class/gapura_function.php';
$db = new Database();
$db->connectMySQL();
$menu = new menu();
if($_GET['aksi']=='tambah'){
	$id_menu = kdauto2('ms_menu');
	$cek_id = $menu->cek_idm($_GET['id_menu']);
	if ($cek_id){
	$menu->updatemenu($_GET['id_menu'],$_GET['judul'],$_GET['folder'],$_GET['link'],$_GET['id_akses'],$_GET['parent'],$_GET['icon'],$_GET['urut']);
	echo "<div class='alert alert-success alert-dismissable'>";
	echo "<button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button>";
	echo "Berhasil diupdate ";
	echo "</div>";
	}
	else {
	$menu->tambahMenu($id_menu,$_GET['judul'],$_GET['folder'],$_GET['link'],$_GET['id_akses'],$_GET['parent'],$_GET['icon'],$_GET['urut']);
	echo "<div class='alert alert-success alert-dismissable'>";
	echo "<button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button>";
	echo "Berhasil disimpan ";
	echo "</div>";
	}
}
?>