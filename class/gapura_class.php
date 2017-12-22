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
		$query = mysql_query("UPDATE posisi_kerja SET nm_posisi='$nm_posisi', ket_posisi='$ket_posisi', i_by='$i_by', i_date='$i_date'
		, e_by='$e_by', e_date='$e_date' WHERE id_posisi='$id_posisi'");	
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
	function cek_pendidikan($id_pend) 
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
	function updatependidikan($id_pend,$nip,$pend_terakhir,$prodi,$thn_lulus,$pend_asal,$i_by,$i_date,$e_by,$e_date) {
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
	/**
	* Kelas  kavling operasi data kavling
	*/
	
class blok{
	function tampilBlok(){
		$query = mysql_query("SELECT a.*,b.* FROM ms_blok a, ms_devloper b where a.id_dev=b.id_dev ORDER BY nm_dev asc");
		#$query = mysql_query("
		#	SELECT ms_blok.id_blok,ms_blok.id_dev,ms_blok.blok,
		#	ms_devloper.id_dev, ms_devloper.nm_dev, ms_devloper.nm_proyek FROM ms_blok LEFT JOIN ms_devloper
		#	ON ms_blok.id_dev=ms_devloper.id_dev WHERE ms_devloper.id_dev='1'");
		while($row=mysql_fetch_array($query))
			$data[]=$row;
		if(isset($data)){
			return $data;
		}
	}
	function comboBlok($id_dev){
		$query = mysql_query("SELECT a.*,b.* FROM ms_blok a LEFT JOIN ms_devloper b ON a.id_dev=b.id_dev WHERE a.id_dev='$_GET[id_dev]'  ORDER BY id_blok desc");
		#$query = mysql_query("SELECT * FROM ms_blok WHERE id_dev='$_GET[id_dev]'");
		while($row=mysql_fetch_array($query))
			$data[]=$row;
		if(isset($data)){
			return $data;
		}
	}
	function tambahBlok($id_blok,$id_dev, $blok) {
		$query = "INSERT INTO ms_blok (id_blok,id_dev, blok)
		          VALUES ('$id_blok','$id_dev', '$blok')";
		$hasil = mysql_query($query);
	}
	function bacaBlok($id_blok)
	        {
				$query=mysql_query("
				SELECT * FROM ms_blok WHERE id_blok='$id_blok'");
				$data=mysql_fetch_array($query);
				$data[]=$row;
				if(isset($data)){
					return $data;
				}
			}
	function cek_idb($id_blok) {
		$dataBlok = mysql_query("SELECT * FROM ms_blok WHERE id_blok='$id_blok'");
		//$user_data = mysql_fetch_array($result);
		$no_rows = mysql_num_rows($dataBlok);
		if ($no_rows == 1) {
			return TRUE;
		}
		else {
		  return FALSE;
		}
	}
	function updateBlok($id_blok, $id_dev, $blok) {
		$query = mysql_query("UPDATE ms_blok SET
				  id_dev = '$id_dev', blok = '$blok'
				  WHERE id_blok = '$id_blok'");	
	}
}

class Kavling {
		function tampilKavlingAll()
		
			# Besok kasi laporan padahal progra belooom selesa :( sedih kalo harus begadang gini  
			{	$query = mysql_query("SELECT a.*,b.*,c.*,d.*,SUM(a.um_std-a.diskon) AS diskon1,SUM(um_std-diskon+utj+strategis+adm+biaya_proses+materai+diskon2)AS total_kewajiban,SUM(um_std-diskon+utj+strategis+adm+biaya_proses+materai+diskon2+harga_jual+(kel*harga_kel))AS total_biaya FROM ms_kavling a, ms_blok b, ms_devloper c, ms_status d WHERE a.id_blok=b.id_blok AND b.id_dev=c.id_dev AND a.id_status=d.id_status GROUP BY id_kavling ORDER BY id_kavling ");
				#$query = mysql_query("SELECT * FROM ms_kavling ORDER BY id_kavling");
				while($row=mysql_fetch_array($query))
				$data[]=$row;
				return $data;
			}
	function tampilKavling($id_dev)
		
			{
				
				$query = mysql_query("select * from ms_kavling as k left join ms_blok as b on k.id_blok=b.id_blok where b.id_dev='$id_dev'");
				#$query = mysql_query("SELECT a.*,b.*,c.*,d.* FROM ms_devloper c, ms_status d, ms_kavling a LEFT JOIN ms_blok b,  WHERE a.id_blok=b.id_blok AND b.id_dev=c.id_dev AND b.id_dev='$_GET[$id_dev]' AND a.id_status=d.id_status GROUP BY id_kavling ORDER BY id_kavling ");
				while($row=mysql_fetch_array($query))
				$data[]=$row;
				return $data;
			}
			
	function tampilKavlingJual()
			{
				$query = mysql_query("SELECT a.*,b.*,c.*,d.*,SUM(a.um_std-a.diskon) AS diskon1,SUM(um_std-diskon+utj+strategis+adm+biaya_proses+materai+diskon2)AS total_kewajiban,SUM(um_std-diskon+utj+strategis+adm+biaya_proses+materai+diskon2+harga_jual+(kel*harga_kel))AS total_biaya FROM ms_kavling a, ms_blok b, ms_devloper c, ms_status d WHERE a.id_blok=b.id_blok AND b.id_dev=c.id_dev AND a.id_status=d.id_status GROUP BY id_kavling ORDER BY id_kavling ");
				while($row=mysql_fetch_array($query))
				$data[]=$row;
				return $data;
			}
			
		#hitung maksimal Kpr
		function makKpr($harga_jual,$um_std)	
			{
				$hitung=$harga_jual-$um_std;
				return $hitung;

			}
		
		function addKavling($id_blok,$no,$tipe,$kel,$harga_kel,$status_bangunan,$luas_tanah,$luas_bangunan,$posisi_bangunan,$harga_brosur,$harga_cash,$harga_jual,$um_std,$diskon,$utj,$strategis,$adm,$biaya_proses,$materai,$diskon2,$note,$input_on,$input_by,$edit_on,$edit_by,$del_on,$del_by,$del)
			 {
				$query="INSERT INTO ms_kavling (id_blok,no,tipe,kel,harga_kel,status_bangunan,luas_tanah,luas_bangunan,posisi_bangunan,harga_brosur,harga_cash,
							harga_jual,um_std,diskon,utj,strategis,adm,biaya_proses, materai,diskon2,note,input_on,input_by,edit_on,edit_by,del_on,del_by,del)
				VALUES('$id_blok','$no','$tipe','$kel','$harga_kel','$status_bangunan','$luas_tanah','$luas_bangunan','$posisi_bangunan','$harga_brosur','$harga_cash','$harga_jual','$um_std','$diskon','$utj','$strategis','$adm','$biaya_proses','$materai','$diskon2','$note','$input_on','$input_by','$edit_on','$edit_by','$del_on','$del_by','$del')";
				$hasil= mysql_query($query);
	      	}
	     function bacaKavling ($field,$id_kavling)
	        {
				$query=mysql_query("SELECT * FROM ms_kavling WHERE id_kavling='$id_kavling'");
				$data=mysql_fetch_array($query);
				return $data;
				#<?php $data = $kontrak->detileKontrak2('status', $kontrak_id); echo $data['status']; 
			}
		function bacaKavlingJ ($id_kavling)
	        {
				$query=mysql_query("SELECT a.*,b.*,c.*,d.*,SUM(a.um_std-a.diskon) AS diskon1,SUM(um_std-diskon+utj+strategis+adm+biaya_proses+materai+diskon2)AS total_kewajiban,SUM(um_std-diskon+utj+strategis+adm+biaya_proses+materai+diskon2+harga_jual+(kel*harga_kel))AS total_biaya FROM ms_kavling a, ms_blok b, ms_devloper c, ms_status d WHERE a.id_blok=b.id_blok AND b.id_dev=c.id_dev AND a.id_status=d.id_status AND id_kavling='$id_kavling' GROUP BY id_kavling ORDER BY id_kavling");
				$data=mysql_fetch_array($query);
				return $data; 
			}
		function updateKavling ($id_kavling,$id_blok,$no,$tipe,$kel,$harga_kel,$status_bangunan,$luas_tanah,$luas_bangunan,$posisi_bangunan,
							$harga_brosur,$harga_cash,$harga_jual,$um_std,$diskon,$utj,$strategis,$adm,$biaya_proses,$materai,$diskon2,$note,$input_on,$input_by,$edit_on,$edit_by,$del_on,$del_by,$del)
			{
				$query=mysql_query("UPDATE ms_kavling SET
				id_blok='$id_blok',	no='$no',tipe='$tipe',kel='$kel',harga_kel='$harga_kel',status_bangunan='$status_bangunan',	luas_tanah='$luas_tanah',
				luas_bangunan='$luas_bangunan',	posisi_bangunan='$posisi_bangunan', harga_brosur='$harga_brosur', harga_cash='$harga_cash', harga_jual='$harga_jual',um_std='$um_std',
				diskon='$diskon',utj='$utj',strategis='$strategis',adm='$adm',biaya_proses='$biaya_proses',materai='$materai',diskon2='$diskon2',note='$note',input_on='$input_on',
				input_by='$input_by',edit_on='$edit_on',edit_by='$edit_by',del_on='$del_on',del_by='$del_by',del='$del'	WHERE id_kavling='$id_kavling'");
			}
		
}
	/**
	* Class konsumen
	* Buatnya sambil negantuk , 
	*/
class Konsumen
	{
		
		function tampilKonsumen()
		{
			$query = mysql_query("SELECT * FROM ms_konsumen ORDER BY id_konsumen desc");
			while($row=mysql_fetch_array($query))
			$data[]=$row;
			if(isset($data)){
				return $data;
			}
			
		}
		function bacaKonsumen ($id_konsumen)
	        {
				$query=mysql_query("
				SELECT * FROM ms_konsumen WHERE id_konsumen='$id_konsumen'");
				$data=mysql_fetch_array($query);
				$data[]=$row;
				if(isset($data)){
					return $data;
				}
				}
		function tambahKonsumen($id_konsumen,$nama,$tgl_lahir,$jenis_kel,$alamat,$hp,$email,$ket,$ktp,$ft,$kk,$s_nikah,$skbmr,$npwp,$spt,$rek_listrik,$sk_skdu,$siup,$f_btn,$f1,$f4,$a1,$e1,$e2,$sp_listrik,$input_on,$input_by,$edit_on,$edit_by,$del_by,$del_on,$del) {
			
			$query = "INSERT INTO ms_konsumen (id_konsumen,nama,tgl_lahir,jenis_kel,alamat,hp,email,ket,ktp,ft,kk,s_nikah,skbmr,npwp,spt,rek_listrik,sk_skdu,siup,f_btn,f1,f4,a1,e1,e2,sp_listrik,input_on,input_by,edit_on,edit_by,del_by,del_on,del)
		          VALUES ('$id_konsumen','$nama','$tgl_lahir','$jenis_kel','$alamat','$hp','$email','$ket','$ktp','$ft','$kk','$s_nikah','$skbmr','$npwp','$spt','$rek_listrik','$sk_skdu','$siup','$f_btn','$f1','$f4','$a1','$e1','$e2','$sp_listrik','$input_on','$input_by','$edit_on','$edit_by','$del_by','$del_on','$del')";
			$hasil = mysql_query($query);
	}
}

class penjualan{
	function tampilPenjualan(){
		$query = mysql_query("SELECT a.*,b.nama as namaK,b.hp as hpK,b.alamat as alamatK,c.*,d.*,e.*,f.*, (SELECT SUM(jumlah_pembayaran) AS total_bayar FROM ms_pembayaran WHERE ms_pembayaran.id_penjualan=a.id_penjualan) total_bayar  FROM ms_penjualan a, ms_konsumen b, ms_kavling c, ms_sales d, ms_blok e, ms_devloper f where a.id_konsumen=b.id_konsumen AND a.id_kavling=c.id_kavling AND c.id_blok=e.id_blok AND f.id_dev=e.id_dev AND a.id_sales=d.id_sales ");
		while($row=mysql_fetch_array($query))
			#
			$data[]=$row;
		if(isset($data)){
			return $data;
		}
	}
	function detailPenjualan($id_penjualan){
		$query = mysql_query("SELECT a.*,b.nama as namaK,b.hp as hpK,b.alamat as alamatK,c.*,d.*,e.*,f.*, (SELECT SUM(jumlah_pembayaran) AS total_bayar FROM ms_pembayaran) total_bayar  FROM ms_penjualan a, ms_konsumen b, ms_kavling c, ms_sales d, ms_blok e, ms_devloper f where a.id_konsumen=b.id_konsumen AND a.id_kavling=c.id_kavling AND c.id_blok=e.id_blok AND f.id_dev=e.id_dev AND a.id_sales=d.id_sales AND id_penjualan='$id_penjualan' ");
		$data=mysql_fetch_array($query);
		return $data;
	}
	function tambahPenjualan($id_pjl,$id_kon, $id_kav, $id_sta, $id_sal, $harga_k,$harga_j, $total_k, $tgl_booking,$status_beli,$input_by, $input_on) {
		$query = "INSERT INTO ms_penjualan (id_penjualan,id_konsumen, id_kavling, id_status, id_sales, harga_kel, harga_jual, total_kewajiban, tgl_booking, status_beli, input_by, input_on)
		          VALUES ('$id_pjl','$id_kon', '$id_kav', '1', '$id_sal', '$harga_k','$harga_j', '$total_k', '$tgl_booking','-','$input_by', '$input_on')";
		$hasil = mysql_query($query);
	}
}
 /**
 * 
 */
 class pembayaran  {

 			function comboPembayaranjenis(){
			$query =	mysql_query("SELECT * FROM ms_pembayaran_jenis");
			while($row=mysql_fetch_array($query))
				$data[]=$row;
			if(isset($data)){
				return $data;
			}
		}
	function tambahPembayaran($id_pembayaran,$id_penjualan, $tgl_bayar, $tgl_tempo, $id_jenis, $pembayaran_ke, $jumlah_pembayaran, $telat, $denda, $ket_pembayaran,$input_on,$input_by,$edit_on,$edit_by,$del_by,$del_on,$del) {
			$query = "INSERT INTO ms_pembayaran (id_pembayaran,id_penjualan, tgl_bayar, tgl_tempo,id_jenis, pembayaran_ke, jumlah_pembayaran,telat,denda,ket_pembayaran,input_on,input_by,edit_on,edit_by,del_by,del_on,del)
		          VALUES ('$id_pembayaran','$id_penjualan','$tgl_bayar','$tgl_tempo','$id_jenis',' $pembayaran_ke','$jumlah_pembayaran','$telat',' $denda',' $ket_pembayaran','$input_on','$input_by','$edit_on','$edit_by','$del_by','$del_on','$del')";
			$hasil = mysql_query($query);
		}
	function updatePembayaran($id_pembayaran,$id_penjualan, $tgl_bayar, $tgl_tempo, $id_jenis, $pembayaran_ke, $jumlah_pembayaran, $telat, $denda, $ket_pembayaran,$input_on,$input_by,$edit_on,$edit_by,$del_by,$del_on,$del) {
			$query = "UPDATE ms_pembayaran SET id_penjualan='$id_penjualan', tgl_bayar='$tgl_bayar', tgl_tempo='$tgl_tempo', id_jenis='$id_jenis', pembayaran_ke='$pembayaran_ke', jumlah_pembayaran='$jumlah_pembayaran', telat='$telat', denda='$denda', ket_pembayaran='$ket_pembayaran', input_on='$input_on',input_by='$input_by',edit_on='$edit_on',edit_by='$edit_by',del_on='$del_on',del_by='$del_by',del='$del' WHERE id_pembayaran='$id_pembayaran'";
			$hasil = mysql_query($query);
		}
	function cek_idpem($id_pembayaran) {
			$dataPem = mysql_query("SELECT * FROM ms_pembayaran WHERE id_pembayaran='$id_pembayaran'");
			$no_rows = mysql_num_rows($dataPem);
			if ($no_rows == 1) {
				return TRUE;
			}
			else {
			  return FALSE;
			}
		}

	function tampilPembayaran($id_penjualan){
		
		$query = mysql_query("SELECT a.*,b.* FROM ms_pembayaran a, ms_pembayaran_jenis b where a.id_jenis=b.id_jenis AND a.id_penjualan='$_POST[id_penjualan]'");
		while($row=mysql_fetch_array($query))
			$data[]=$row;
		if(isset($data)){
			return $data;
		}
	}
	function bacaPembayaran ($id_pembayaran)
	        {
				$query=mysql_query("SELECT a.*,b.* FROM ms_pembayaran a, ms_pembayaran_jenis b where a.id_jenis=b.id_jenis AND a.id_pembayaran='$id_pembayaran'");
				$data=mysql_fetch_array($query);
				$data[]=$row;
				if(isset($data)){
					return $data;
				}
				}
		function tampilJenisPembayaran(){
		$query = mysql_query("SELECT * from ms_pembayaran_jenis");
		while($row=mysql_fetch_array($query))
			$data[]=$row;
		if(isset($data)){
			return $data;
		}
						}
		function hitungJenisPembayaran(){
			#35453
		$query = mysql_query("SELECT pembayaran_jenis, id_jenis,
		(SELECT SUM(jumlah_pembayaran) AS total_jenis FROM ms_pembayaran  WHERE ms_pembayaran.id_jenis=ms_pembayaran_jenis.id_jenis AND id_penjualan='$_POST[id_penjualan]')total_jenis
		 from ms_pembayaran_jenis");
		while($row=mysql_fetch_array($query))
			$data[]=$row;
		if(isset($data)){
			return $data;
		}
	
	}
		function tambahJenisPembayaran($id_jenis,$pembayaran_jenis, $note) {
		$query = "INSERT INTO ms_pembayaran_jenis (id_jenis,pembayaran_jenis,note)
		         VALUES ('$id_jenis','$pembayaran_jenis','$note')";
		$hasil = mysql_query($query);
	}
		function bacaJenispembayaran($id_jenis)
	        {
				$query=mysql_query("
				SELECT * FROM ms_pembayaran_jenis WHERE id_jenis='$id_jenis'");
				$data=mysql_fetch_array($query);
				$data[]=$row;
				if(isset($data)){
					return $data;
				}
			}
		function cek_idj($id_jenis) {
		$dataJenis = mysql_query("SELECT * FROM ms_pembayaran_jenis WHERE id_jenis='$id_jenis'");
		$no_rows = mysql_num_rows($dataJenis);
		if ($no_rows == 1) {
			return TRUE;
		}
		else {
		  return FALSE;
		}
	}
		function updateJenisPembayaran($id_jenis, $pembayaran_jenis, $note) {
		$query = mysql_query("UPDATE ms_pembayaran_jenis SET
				  pembayaran_jenis = '$pembayaran_jenis', note = '$note' WHERE id_jenis = '$id_jenis'");	
	}

 }


	?>