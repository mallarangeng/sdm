<?php
include'../class/gapura_class.php';
include'../class/gapura_function.php';
session_start();
$db = new Database();
$db->connectMySQL();
$pgw = new pgw();
$userSes = userSes();
$timeSkrg = timeSkrg();
$password = md5($_GET['tgl_lahir']);
$nip2 = $_GET['nip'];
if($_GET['aksi']=='tambah'){
	$cek_id	= $pgw->cekpgw($_GET['nip']);
	if($cek_id){
		$pgw->updatepgw($_GET['nip'],$_GET['nama'],$_GET['jekel'],$_GET['kota_lahir'],$_GET['tgl_lahir'],$_GET['alamat'],$_GET['no_hp'],$_GET['id_unit'],$_GET['id_posisi'],$_GET['id_provider'],$_GET['tmt_kerja'],$_GET['jenis_kontrak'],$_GET['cabang'],$_GET['stat_peg'],$_GET['jw_kerja'],$_GET['pend_terakhir'],$_GET['prodi'],$_GET['thn_lulus'],$_GET['aktif'],$_GET['tgl_aktif'],$_GET['note_aktif'],$_GET['id_akses'],$password,$_GET['i_by'],$_GET['i_date'],$userSes,$timeSkrg);
		echo "<div class='alert alert-warning alert-dismissable'>";
		echo "<button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button>";
		echo "NIP ".$_GET['nip']." Berhasil diubah ";
		echo "</div>";
	}else{
		
		$pgw->tambahpgw($nip2,$_GET['nama'],$_GET['jekel'],$_GET['kota_lahir'],$_GET['tgl_lahir'],$_GET['alamat'],$_GET['no_hp'],$_GET['id_unit'],$_GET['id_posisi'],$_GET['id_provider'],$_GET['tmt_kerja'],$_GET['jenis_kontrak'],$_GET['cabang'],$_GET['stat_peg'],$_GET['jw_kerja'],$_GET['pend_terakhir'],$_GET['prodi'],$_GET['thn_lulus'],$_GET['aktif'],$_GET['tgl_aktif'],$_GET['note_aktif'],$_GET['id_akses'],$password,$userSes,$timeSkrg,$_GET['e_by'],$_GET['e_date']);
		
		echo "<div class='alert alert-success alert-dismissable'>";
		echo "<button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button>";
		echo "NIP ".$_GET['nip']." Berhasil disimpan ";
		echo "</div>";
	}
}
?>