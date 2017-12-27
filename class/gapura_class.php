<?php
	// Turn off error reporting
	error_reporting(0);
	class Database {
	private $dbHost="localhost";
	private $dbUser="root";
	private $dbPass="";
	private $dbName="sdm_gapura";
	function connectMySQL() {
	mysql_connect($this->dbHost, $this->dbUser, $this->dbPass);
	mysql_select_db($this->dbName) or die ("Database Tidak Ditemukan di Server"); 
	}
	}
	class User
	{
		function cek_login($username, $password) 
			{
				$password = md5($password);
				$result = mysql_query("SELECT * FROM ms_user WHERE username='$username' AND password='$password'");
				$user_data = mysql_fetch_array($result);
				$no_rows = mysql_num_rows($result);
				if ($no_rows == 1) 
				{
					$_SESSION['login'] = TRUE;
					$_SESSION['username'] = $user_data['username'];
					$_SESSION['fullname'] = $user_data['fullname'];
					return TRUE;
				}
					else 
						{
							return FALSE;
						}
			}
		// Ambil Sesi 
		function get_sesi() 
			{
				return $_SESSION['login'];
			}
	
		// Logout 
		function user_logout()
			{
				$_SESSION['login'] = FALSE;
				session_destroy();
			}

		function tampilUser(){
			$query = mysql_query("SELECT a.*,b.* FROM ms_user a, ms_jabatan b WHERE a.id_jabatan=b.id_jabatan");
			while($row=mysql_fetch_array($query))
				$data[]=$row;
			if(isset($data)){
				return $data;
			}
			}
		function tambahUser($username,$id_jabatan, $password,$email,$fullname,$blokir,$picture) {
			$query = "INSERT INTO ms_user (username,id_jabatan, password,email,fullname,blokir,picture)
			          VALUES ('$username','$id_jabatan', '$password','$email','$fullname','$blokir','$picture')";
			          move_uploaded_file($_FILES['picture']['tmp_name'],"photos/".$picture);
			$hasil = mysql_query($query);
		}
	function bacaUser($username)
	        {
				$query=mysql_query("SELECT * FROM ms_user WHERE username='$username'");
				$data=mysql_fetch_array($query);
				$data[]=$row;
				if(isset($data)){
					return $data;
				}
			}
		function cek_idu($username) {
				$datauser = mysql_query("SELECT * FROM ms_user WHERE username='$username'");			
				$no_rows = mysql_num_rows($datauser);
				if ($no_rows == 1) {
					return TRUE;
				}
				else {
				  return FALSE;
				}
				}

		function comboJabatan(){
			$query =	mysql_query("SELECT * FROM ms_jabatan");
			while($row=mysql_fetch_array($query))
				$data[]=$row;
			if(isset($data)){
				return $data;
			}
		}
	}
	/**
	* class devloper operasari data devloper
	*/
class menu{
	function tampilMenu(){
		$query = mysql_query("SELECT * FROM ms_menu ORDER BY id_menu desc");
		while($row=mysql_fetch_array($query))
			$data[]=$row;
		if(isset($data)){
			return $data;
		}
	}
	function bacaMenu($id_menu)
	    {
			$query=mysql_query("SELECT * FROM ms_menu WHERE id_menu='$_GET[id_menu]'");
			$data=mysql_fetch_array($query);
			$data[]=$row;
			if(isset($data)){
				return $data;
			}
		}
	function cek_idm($id_menu) {
			$datam = mysql_query("SELECT * FROM ms_menu WHERE id_menu='$id_menu'");			
			$no_rows = mysql_num_rows($datam);
			if ($no_rows == 1) {
				return TRUE;
			}
			else {
			  return FALSE;
			}
			}
	function comboParent(){
		$query =	mysql_query("SELECT * FROM ms_menu WHERE parent='0'");
		while($row=mysql_fetch_array($query))
			$data[]=$row;
		if(isset($data)){
			return $data;
		}
	}
	function tambahMenu($id_menu,$judul,$folder,$link,$id_akses,$parent, $icon, $urut) {
		$query = "INSERT INTO ms_menu (id_menu, judul, folder, link, id_akses, parent, icon, urut)
		          VALUES ('$id_menu','$judul', '$folder', '$link', '$id_akses', '$parent', '$icon', '$urut')";
		$hasil = mysql_query($query);
	}

	function updatemenu($id_menu,$judul, $folder,$link,$id_akses,$parent, $icon, $urut) {
		$query = mysql_query("UPDATE ms_menu SET judul='$judul', folder='$folder', link='$link', id_akses='$id_akses', parent='$parent', icon='$icon', urut='$urut' WHERE id_menu='$id_menu'");
	}

	function menuNavigasi($user){
		//$menu = mysql_query("select * from ms_menu where parent='0' order by urut asc");
		$menu = mysql_query("select * from ms_menu where parent='0' order by urut asc");
		while($row=mysql_fetch_array($menu))
			$data[]=$row;
		if (isset($data)){
			return($data);
		}
	}
	function subMenuNavigasi($menu,$user){
		//$smenu = mysql_query("select * from ms_menu where parent='$menu' order by urut asc");
		$smenu = mysql_query("select * from ms_menu where parent='$menu' order by urut asc");
		$ada		= mysql_num_rows($smenu);
		if($ada==0){
			$data[]=$ada;
			if (isset($data)){
				return false;
			} 
		}else{
			while($row=mysql_fetch_array($smenu))
				$data[]=$row;
			if (isset($data)){
				return($data);
			}
		}
	}
}
class training{
	function tampiltraining(){
		$query = mysql_query("SELECT * FROM training");
		while($row=mysql_fetch_array($query))
			$data[]=$row;
		if(isset($data)){
			return $data;
		}
	}
	function bacatraining($id_training)
	        {
				$query=mysql_query("
				SELECT * FROM training WHERE id_training='$id_training'");
				$data=mysql_fetch_array($query);
				$data[]=$row;
				if(isset($data)){
					return $data;
				}
			}
	function cek_training($id_training) {
		$dataSales = mysql_query("SELECT * FROM training WHERE id_training='$id_training'");
		$no_rows = mysql_num_rows($dataSales);
		if ($no_rows == 1) {
			return TRUE;
		}
		else {
		  return FALSE;
		}
	}
	function updatetraining($id_training,$nama_training,$penyelenggara,$instruktur,$tgl_training,$durasi,$lokasi,$ketua_kelas,$stat_training) {
		$query = mysql_query("UPDATE training SET
				  nama_training = '$nama_training', penyelenggara = '$penyelenggara', instruktur = '$instruktur', tgl_training = '$tgl_training', durasi = '$durasi', lokasi = '$lokasi', ketua_kelas = '$ketua_kelas', stat_training = '$stat_training' WHERE id_training = '$id_training'");	
	}
	function tambahtraining($id_training,$nama_training,$penyelenggara,$instruktur,$tgl_training,$durasi,$lokasi,$ketua_kelas,$stat_training) {
		$query = "INSERT INTO training (id_training,nama_training,penyelenggara,instruktur,tgl_training,durasi,lokasi,ketua_kelas,stat_training)
		          VALUES ('$id_training','$nama_training','$penyelenggara','$instruktur','$tgl_training','$durasi','$lokasi','$ketua_kelas','$stat_training')";
		$hasil = mysql_query($query);
	}
}

class Akses{
	function tampilakses(){
		$query = mysql_query("SELECT * FROM akses");
		while($row=mysql_fetch_array($query))
			$data[]=$row;
		if(isset($data)){
			return $data;
		}
	}
	function bacaakses($id_akses)
	        {
				$query=mysql_query("
				SELECT * FROM akses WHERE id_akses='$_GET[id_akses]'");
				$data=mysql_fetch_array($query);
				$data[]=$row;
				if(isset($data)){
					return $data;
				}
			}
	function cek_akses($id_akses) {
		$dataSales = mysql_query("SELECT * FROM akses WHERE id_akses='$id_akses'");
		$no_rows = mysql_num_rows($dataSales);
		if ($no_rows == 1) {
			return TRUE;
		}
		else {
		  return FALSE;
		}
	}
	function updateakses($id_akses,$nama_akses,$ket_akses) {
		$query = mysql_query("UPDATE akses SET nama_akses='$nama_akses', ket_akses='$ket_akses' WHERE id_akses='$id_akses'");	
	}
	
	function tambahakses($id_akses,$nama_akses,$ket_akses) {
		$query = "INSERT INTO akses (id_akses,nama_akses,ket_akses)
		          VALUES ('$id_akses','$nama_akses','$ket_akses')";
		$hasil = mysql_query($query);
	}
}

class Unit{
	function tampilunit(){
		$query = mysql_query("SELECT * FROM unit_kerja");
		while($row=mysql_fetch_array($query))
			$data[]=$row;
		if(isset($data)){
			return $data;
		}
	}
	function bacaunit($id_akses)
	        {
				$query=mysql_query("
				SELECT * FROM unit_kerja WHERE id_unit='$_GET[id_unit]'");
				$data=mysql_fetch_array($query);
				$data[]=$row;
				if(isset($data)){
					return $data;
				}
			}
	function cek_unit($id_unit) {
		$dataSales = mysql_query("SELECT * FROM unit_kerja WHERE id_unit='$id_unit'");
		$no_rows = mysql_num_rows($dataSales);
		if ($no_rows == 1) {
			return TRUE;
		}
		else {
		  return FALSE;
		}
	}
	function updateunit($id_unit,$nama_unit,$ket_unit,$i_by,$i_date,$e_by,$e_date) {
		$query = mysql_query("UPDATE unit_kerja SET nama_unit='$nama_unit', ket_unit='$ket_unit', i_by='$i_by', i_date='$i_date'
		, e_by='$e_by', e_date='$e_date' WHERE id_unit='$id_unit'");	
	}
	function tambahunit($id_unit,$nama_unit,$ket_unit,$i_by,$i_date,$e_by,$e_date) {
		$query = "INSERT INTO unit_kerja (id_unit,nama_unit,ket_unit,i_by,i_date,e_by,e_date) VALUES
		('$id_unit','$nama_unit','$ket_unit','$i_by','$i_date','$e_by','$e_date')";
		$hasil = mysql_query($query);
	}
}
class Posisi{
	function tampilposisi(){
		$query = mysql_query("SELECT * FROM posisi_kerja");
		while($row=mysql_fetch_array($query))
			$data[]=$row;
		if(isset($data)){
			return $data;
		}
	}
	function bacaposisi($id_akses)
	        {
				$query=mysql_query("
				SELECT * FROM posisi_kerja WHERE id_posisi='$_GET[id_posisi]'");
				$data=mysql_fetch_array($query);
				$data[]=$row;
				if(isset($data)){
					return $data;
				}
			}
	function cek_posisi($id_posisi) {
		$dataSales = mysql_query("SELECT * FROM posisi_kerja WHERE id_posisi='$id_posisi'");
		$no_rows = mysql_num_rows($dataSales);
		if ($no_rows == 1) {
			return TRUE;
		}
		else {
		  return FALSE;
		}
	}
	function updateposisi($id_posisi,$nm_posisi,$ket_posisi,$i_by,$i_date,$e_by,$e_date) {
		$query = mysql_query("UPDATE posisi_kerja SET nm_posisi='$nm_posisi', ket_posisi='$ket_posisi', i_by='$i_by', i_date='$i_date', e_by='$e_by', e_date='$e_date' WHERE id_posisi='$id_posisi'");	
	}
	function tambahposisi($id_posisi,$nm_posisi,$ket_posisi,$i_by,$i_date,$e_by,$e_date) {
		$query = "INSERT INTO posisi_kerja (id_posisi,nm_posisi,ket_posisi,i_by,i_date,e_by,e_date) VALUES
		('$id_posisi','$nm_posisi','$ket_posisi','$i_by','$i_date','$e_by','$e_date')";
		$hasil = mysql_query($query);
	}
}

class Pendidikan{
	function tampilpendidikan(){
		$query = mysql_query("SELECT * FROM pendidikan");
		while($row=mysql_fetch_array($query))
			$data[]=$row;
		if(isset($data)){
			return $data;
		}
	}
	function bacapendidikan($id_pend)
	        {
				$query=mysql_query("
				SELECT * FROM pendidikan WHERE id_pend='$_GET[id_pend]'");
				$data=mysql_fetch_array($query);
				$data[]=$row;
				if(isset($data)){
					return $data;
				}
			}
	function cekpendidikan($id_pend) 
	{
		$data = mysql_query("SELECT * FROM pendidikan WHERE id_pend='$id_pend'");
		$no_rows = mysql_num_rows($data);
		if ($no_rows == 1) {
			return TRUE;
		}
		else {
		  return FALSE;
		}
	}
	function updatepend($id_pend,$nip,$pend_terakhir,$prodi,$thn_lulus,$pend_asal,$i_by,$i_date,$e_by,$e_date) {
		$query = mysql_query("UPDATE pendidikan SET nip='$nip', pend_terakhir='$pend_terakhir',prodi='$prodi',thn_lulus='$thn_lulus', pend_asal='$pend_asal', i_by='$i_by', i_date='$i_date', e_by='$e_by', e_date='$e_date' WHERE id_pend='$id_pend'");	
	}
	function tambahpendidikan($id_pend,$nip,$pend_terakhir,$prodi,$thn_lulus,$pend_asal,$i_by,$i_date,$e_by,$e_date) {
		$query = "INSERT INTO pendidikan (id_pend,nip,pend_terakhir,prodi,thn_lulus,pend_asal,i_by,i_date,e_by,e_date) VALUES
		('$id_pend','$nip','$pend_terakhir','$prodi','$thn_lulus','$pend_asal','$i_by','$i_date','$e_by','$e_date')";
		$hasil = mysql_query($query);
	}
}


class menuUser{
	function tambahMenuUser($id_menu_user,$id_menu,$username,$baca,$tulis){
		$query = "INSERT INTO ms_menu_user (id_menu_user,id_menu, username, baca, tulis)
		          VALUES ('$id_menu_user','$id_menu','$username','$baca','$tulis')";
		$hasil = mysql_query($query);
	}
}
	class Provider
	{
		
		function tampilprovider()
			 {
				$query = mysql_query("SELECT * FROM provider ORDER BY id_provider");
				while($row=mysql_fetch_array($query))
				$data[]=$row;
				if(isset($data)){
					return $data;
				}
			 }
		function tambahprovider($id_provider,$nama_provider,$alamat,$telpon,$web,$email,$direktur)
			 {
				$query="INSERT INTO provider (id_provider,nama_provider,alamat,telpon,web,email,direktur)
				VALUES('$id_provider','$nama_provider','$alamat','$telpon','$web','$email','$direktur')";
				$hasil= mysql_query($query);
	      	}
		function bacaprovider($id_provider)
	        {
				$query=mysql_query("SELECT * FROM provider WHERE id_provider='$id_provider'");
				$data=mysql_fetch_array($query);
				$data[]=$row;
				if(isset($data)){
					return $data;
				}
			}
		function bacaDevloper ($id_dev)
	        {
				$query=mysql_query(" SELECT * FROM ms_devloper WHERE id_dev='$id_dev'");
				$data=mysql_fetch_array($query);
				$data[]=$row;
				if(isset($data)){
					return $data;
				}
				}
		function cek_provider($id_provider) {
				$data = mysql_query("SELECT * FROM provider WHERE id_provider='$id_provider'");			
				$no_rows = mysql_num_rows($data);
				if ($no_rows == 1) {
					return TRUE;
				}
				else {
				  return FALSE;
				}
				}
		function updateprovider($id_provider,$nama_provider,$alamat,$telpon,$web,$email,$direktur)
			{
				$query=mysql_query("UPDATE provider SET	nama_provider='$nama_provider',alamat='$alamat',telpon='$telpon',web='$web',email='$email',direktur='$direktur' WHERE id_provider='$id_provider'");
			}

	}


class Pgw {
	function tampilpgw(){
		$query = mysql_query("SELECT * FROM pegawai");
		while($row=mysql_fetch_array($query))
			$data[]=$row;
		if(isset($data)){
			return $data;
		}
	}
	function bacapgw($nip)
	        {
				$query=mysql_query("
				SELECT * FROM pegawai WHERE nip='$_GET[nip]'");
				$data=mysql_fetch_array($query);
				$data[]=$row;
				if(isset($data)){
					return $data;
				}
			}
	function cekpgw($nip) {
		$datapgw = mysql_query("SELECT * FROM pegawai WHERE nip='$nip'");
		$no_rows = mysql_num_rows($datapgw);
		if ($no_rows == 1) {
			return TRUE;
		}
		else {
		  return FALSE;
		}
	}
	function updatepgw($nip,$nama,$jekel,$kota_lahir,$tgl_lahir) {
		$query = mysql_query("UPDATE pegawai SET nama='$nama', jekel='$jekel', kota_lahir='$kota_lahir', tgl_lahir='$tgl_lahir' WHERE nip='$nip'");	
	}
	
	function tambahpgw($nip,$nama,$jekel,$kota_lahir,$tgl_lahir) {
		$query = "INSERT INTO pegawai (nip,nama,jekel,kota_lahir,tgl_lahir)
		          VALUES ('$nip','$nama','$jekel','$kota_lahir','$tgl_lahir')";
		$hasil = mysql_query($query);
	}
}


	?>