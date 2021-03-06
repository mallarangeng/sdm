$(function () {
    var main ="view/pendidikan/pendidikan_data.php";
    $("#data-pendidikan").load(main);
        $(".tambah-pendidikan").click(function(e){
        e.preventDefault();
        $("#modal-pendidikan-add").modal('show');
        $(".modal-title").html('Tambah pendidikan');
        $.post("view/pendidikan/pendidikan_form.php",
            {id_pend:$(this).attr('data-id')},
            function(html){
                $(".modal-body").html(html);
            }
        );
    });

    $("#simpan-pendidikan").click(function(e){ 
        e.preventDefault(); 
        var url             = "control/pendidikan.php"
        var id_pend         = $("#id_pend").val();
        var nip             = $("#nip").val();
        var pend_terakhir   = $("#pend_terakhir").val();
        var prodi           = $("#prodi").val();
        var thn_lulus       = $("#thn_lulus").val();
        var pend_asal       = $("#pend_asal").val();
        var i_by            = $("#i_by").val();
        var i_date          = $("#i_date").val();
        var e_by            = $("#e_by").val();
        var e_date          = $("#e_date").val();
        if (pend_terakhir==""){
            alert ("Pendidikan Terakhir Belum diisi");
            return false;
        }
        if (prodi==""){
            alert ("Program studi Belum diisi");
            return false;
        }
        $.ajax({
                  url: 'control/pendidikan.php',
                  type: 'GET',
                  data: 'aksi=tambah&id_pend='+id_pend+'&nip='+nip+'&pend_terakhir='+pend_terakhir+'&prodi='+prodi+'&thn_lulus='+thn_lulus+'&pend_asal='+pend_asal+'&i_by='+i_by+'&i_date='+i_date+'&e_by='+e_by+'&e_date='+e_date,
                    success: function(data) {
                    $('#hasil').html(data);
                    $("#data-pendidikan").load("view/pendidikan/pendidikan_data.php");
                    $('#modal-pendidikan-add').modal('hide');
                  },
                  error: function(e) {
                  }
                });
    });


    var main ="view/unit_kerja/unit_data.php";
    $("#data-unit").load(main);
        $(".tambah-unit").click(function(e){
        e.preventDefault();
        $("#modal-unit-add").modal('show');
        $(".modal-title").html('Tambah unit');
        $.post("view/unit_kerja/unit_form.php",
            {id_unit:$(this).attr('data-id')},
            function(html){
                $(".modal-body").html(html);
            }
        );
    });

    $("#simpan-unit").click(function(e){ 
        e.preventDefault(); 
        var url         = "control/unit.php"
        var id_unit     = $("#id_unit").val();
        var nama_unit   = $("#nama_unit").val();
        var ket_unit    = $("#ket_unit").val();
        var i_by        = $("#i_by").val();
        var i_date      = $("#i_date").val();
        var e_by        = $("#e_by").val();
        var e_date      = $("#e_date").val();
        if (nama_unit==""){
            alert ("Nama unit Belum diisi");
            return false;
        }
        if (ket_unit==""){
            alert ("Keterangan unit Belum diisi");
            return false;
        }
        $.ajax({
                  url: 'control/unit.php',
                  type: 'GET',
                  data: 'aksi=tambah&id_unit='+id_unit+'&nama_unit='+nama_unit+'&ket_unit='+ket_unit
                  +'&i_by='+i_by+'&i_date='+i_date+'&e_by='+e_by+'&e_date='+e_date,
                    success: function(data) {
                    $('#hasil').html(data);
                    $("#data-unit").load("view/unit_kerja/unit_data.php");
                    $('#modal-unit-add').modal('hide');
                  },
                  error: function(e) {
                  }
                });
    });

//JS POSISI KERJA
    var main ="view/apsen/apsen_data.php";
    $("#data-apsen").load(main);
        $(".tambah-apsen").click(function(e){
        e.preventDefault();
        $("#modal-apsen-add").modal('show');
        $(".modal-title").html('Tambah Apsensi Siswa');
        $.get("view/apsen/apsen_form.php",
            {id_training:$(this).attr('data-id')},
            function(html){
                $(".modal-body").html(html);
            }
        );
    });
        $(".ubah-apsen").click(function(e){
        e.preventDefault();
        $("#modal-apsen-add").modal('show');
        $(".modal-title").html('Ubah apsensi Siswa');
        $.get("view/apsen/apsen_form.php",
            {id_apsensi:$(this).attr('data-id')},
            function(html){
                $(".modal-body").html(html);
            }
        );
    });

      $(".lihat-sertifikat").click(function(e){
        e.preventDefault();
        $("#modal-lihat-sertifikat").modal('show');
        $(".modal-title").html('Sertifikat Training');
        $.get("view/apsen/sertifikat.php",
            {id_apsensi:$(this).attr('data-id')},
            function(html){
                $(".modal-body").html(html);
            }
        );
    });
       
        $("#simpan-apsensi").click(function(e){ 
        e.preventDefault(); 
        var url        = "control/apsensi.php"
        var id_apsensi   = $("#id_apsensi").val();
        var nip = $("#nip").val();
        var id_training  = $("#id_training").val();
        var i_by        = $("#i_by").val();
        var i_date      = $("#i_date").val();
        var e_by        = $("#e_by").val();
        var e_date      = $("#e_date").val();
        if (nip==""){
            alert ("Nama Belum dipilih :-(");
            return false;
        }
        if (id_training==""){
            alert ("Data Training Kosong !");
            return false;
        }
        $.ajax({
                  url: 'control/apsensi.php',
                  type: 'GET',
                  data: 'aksi=tambah&id_apsensi='+id_apsensi+'&nip='+nip+'&id_training='+id_training+'&i_by='+i_by+'&i_date='+i_date+'&e_by='+e_by+'&e_date='+e_date,
                    success: function(data) {
                    $('#hasil').html(data);
                    //$(location).attr('href','?r=apsen&pg=apsen&id');
                    $("#data-apsen").load("view/apsen/apsen_data.php");
                    $('#modal-apsen-add').modal('hide');
                  },
                  error: function(e) {
                  }
                });
    });

    var main ="view/posisi/posisi_data.php";
    $("#data-posisi").load(main);
        $(".tambah-posisi").click(function(e){
        e.preventDefault();
        $("#modal-posisi-add").modal('show');
        $(".modal-title").html('Tambah Posisi');
        $.post("view/posisi/posisi_form.php",
            {id_posisi:$(this).attr('data-id')},
            function(html){
                $(".modal-body").html(html);
            }
        );
    });

    $("#simpan-posisi").click(function(e){ 
        e.preventDefault(); 
        var url         = "control/posisi.php"
        var id_posisi   = $("#id_posisi").val();
        var nm_posisi   = $("#nm_posisi").val();
        var ket_posisi  = $("#ket_posisi").val();
        var i_by        = $("#i_by").val();
        var i_date      = $("#i_date").val();
        var e_by        = $("#e_by").val();
        var e_date      = $("#e_date").val();
        if (nm_posisi==""){
            alert ("Nama Posisi Belum diisi");
            return false;
        }
        if (ket_posisi==""){
            alert ("Keterangan Posisi Belum diisi");
            return false;
        }
        $.ajax({
                  url: 'control/posisi.php',
                  type: 'GET',
                  data: 'aksi=tambah&id_posisi='+id_posisi+'&nm_posisi='+nm_posisi+'&ket_posisi='+ket_posisi
                  +'&i_by='+i_by+'&i_date='+i_date+'&e_by='+e_by+'&e_date='+e_date,
                    success: function(data) {
                    $('#hasil').html(data);
                    $("#data-posisi").load("view/posisi/posisi_data.php");
                    $('#modal-posisi-add').modal('hide');
                  },
                  error: function(e) {
                  }
                });
    });

            $(document).on('click','.tambah-file',function(e){
                e.preventDefault();
                $("#modal-file-add").modal('show');
                $(".modal-title").html('Tambahkan File');
                $.get("view/file/file_form.php",
                    {nip:$(this).attr('data-id')},
                    function(html){
                        $(".modal-body").html(html);
                    }   
                );
            });

            $(document).on('click','.ubah-file',function(e){
                e.preventDefault();
                $("#modal-file-edit").modal('show');
                $(".modal-title").html('Ubah File');
                $.get("view/file/file_form.php",
                    {kode_file:$(this).attr('data-id')},
                    function(html){
                        $(".modal-body").html(html);
                    }   
                );
            });

    var main = "view/akses/akses_data.php";
    $("#data-akses").load(main);
        $(".tambah-akses").click(function(e){
        e.preventDefault();
        $("#modal-akses-add").modal('show');
        $(".modal-title").html('Tambah Akses');
        $.post("view/akses/akses_form.php",
            {id_akses:$(this).attr('data-id')},
            function(html){
                $(".modal-body").html(html);
            }
        );
    });

    $("#simpan-akses").click(function(e){ 
        e.preventDefault(); 
        var url        = "control/akses.php"
        var id_akses   = $("#id_akses").val();
        var nama_akses = $("#nama_akses").val();
        var ket_akses  = $("#ket_akses").val();
        if (nama_akses==""){
            alert ("Nama Akses Belum diisi");
            return false;
        }
        if (ket_akses==""){
            alert ("Keterangan Akses Belum diisi");
            return false;
        }
        $.ajax({
                  url: 'control/akses.php',
                  type: 'GET',
                  data: 'aksi=tambah&id_akses='+id_akses+'&nama_akses='+nama_akses+'&ket_akses='+ket_akses,
                    success: function(data) {
                    $('#hasil').html(data);
                    $("#data-akses").load("view/akses/akses_data.php");
                    $('#modal-akses-add').modal('hide');
                  },
                  error: function(e) {
                  }
                });
    });
// close js akses data
// Js untuk  pgw 
    var main = "view/pgw/pgw_data.php";
    $("#data-pgw").load(main);
        $(".tambah-pgw").click(function(e){
        e.preventDefault();
        $("#modal-pgw-add").modal('show');
        $(".modal-title").html('Tambah Pegawai');
        $.post("view/pgw/pgw_form.php",
            {simpan_data:$(this).attr('data-id')},
            function(html){
                $(".modal-body").html(html);
            }
        );
    });

    $("#simpan-pgw").click(function(e){ 
        e.preventDefault(); 
        var url         = "control/pgw.php"
        var nip         = $("#nip").val();
        var nama        = $("#nama").val();
        var jekel       = $("#jekel").val();
        var kota_lahir  = $("#kota_lahir").val();
        var tgl_lahir   = $("#tgl_lahir").val();
        var alamat      = $("#alamat").val();
        var no_hp       = $("#no_hp").val();
        var id_unit     = $("#id_unit").val();
        var id_posisi   = $("#id_posisi").val();
        var id_provider = $("#id_provider").val();
        var tmt_kerja   = $("#tmt_kerja").val();
        var jenis_kontrak = $("#jenis_kontrak").val();
        var cabang      = $("#cabang").val();
        var stat_peg    = $("#stat_peg").val();
        var jw_kerja    = $("#jw_kerja").val();
        var pend_terakhir    = $("#pend_terakhir").val();
        var prodi       = $("#prodi").val();
        var thn_lulus   = $("#thn_lulus").val();
        var aktif       = $("#aktif").val();
        var tgl_aktif   = $("#tgl_aktif").val();
        var note_aktif  = $("#note_aktif").val();
        var id_akses    = $("#id_akses").val();
        var password    = $("#password").val();
        var i_by        = $("#i_by").val();
        var i_date      = $("#i_date").val();
        var e_by        = $("#e_by").val();
        var e_date      = $("#e_date").val();
        $.ajax({
                  url: 'control/pgw.php',
                  type: 'GET',
                  data: 'aksi=tambah&nip='+nip+'&nama='+nama+'&jekel='+jekel+'&kota_lahir='+kota_lahir+
                  '&tgl_lahir='+tgl_lahir+'&alamat='+alamat+'&no_hp='+no_hp+'&id_unit='+id_unit+'&id_posisi='+id_posisi+'&id_provider='+id_provider
                  +'&tmt_kerja='+tmt_kerja+'&jenis_kontrak='+jenis_kontrak+'&cabang='+cabang+'&stat_peg='+stat_peg+'&jw_kerja='+jw_kerja+'&pend_terakhir='+pend_terakhir+'&prodi='+prodi+'&thn_lulus='+thn_lulus+'&aktif='+aktif+'&tgl_aktif='+tgl_aktif+'&note_aktif='+note_aktif+'&id_akses='+id_akses+'&password='+password+'&i_by='+i_by+'&i_date='+i_date+'&e_by='+e_by+'&e_date='+e_date,
                    success: function(data) {
                    $('#hasil').html(data);
                    $("#data-pgw").load("view/pgw/pgw_data.php");
                    $('#modal-pgw-add').modal('hide');
                  },
                  error: function(e) {
                  }
                });
    });
// close js akses data

    var main = "view/provider/provider_data.php";
    $("#data-provider").load(main);
        $(".tambah-provider").click(function(e){
        e.preventDefault();
        $("#modal-provider-add").modal('show');
        $(".modal-title").html('Tambah Provider');
        $.post("view/provider/provider_form.php",
            {id_provider:$(this).attr('data-id')},
            function(html){
                $(".modal-body").html(html);
            }
        );
    });
        $("#simpan-provider").click(function(e){ 
        e.preventDefault();   
        var url           = "control/provider.php"
        var id_provider   = $("#id_provider").val();
        var nama_provider = $("#nama_provider").val();
        var alamat        = $("#alamat").val();
        var telpon        = $("#telpon").val();
        var web           = $("#web").val();
        var email         = $("#email").val();
        var direktur      = $("#direktur").val();
        $.ajax({
                  url: 'control/provider.php',
                  type: 'GET',
                  data: 'aksi=tambah&id_provider='+id_provider+'&nama_provider='+nama_provider+'&alamat='+alamat+
                  '&telpon='+telpon+'&web='+web+'&email='+email+'&direktur='+direktur,
                  success: function(data) {
                    $('#hasil').html(data);
                    $("#data-provider").load("view/provider/provider_data.php");
                    $('#modal-provider-add').modal('hide');
                  },
                  error: function(e) {
                  }
                });
    });
     //modal tambah training
    var main = "view/training/training_data.php";
    $("#data-training").load(main);
        $(".tambah-training").click(function(e){
        e.preventDefault();
        $("#modal-training-add").modal('show');
        $(".modal-title").html('Tambah training');
        $.post("view/training/training_form.php",
            {id_training:$(this).attr('data-id')},
            function(html){
                $(".modal-body").html(html);
            }
        );
    });

    $("#simpan-training").click(function(e){ 
        e.preventDefault();   
        var url = "control/training.php"
        var id_training    = $("#id_training").val();
        var nama_training  = $("#nama_training").val();
        var penyelenggara  = $("#penyelenggara").val();
        var instruktur     = $("#instruktur").val();
        var tgl_training   = $("#tgl_training").val();
        var durasi         = $("#durasi").val();
        var lokasi         = $("#lokasi").val();
        var ketua_kelas    = $("#ketua_kelas").val();
        var stat_training  = $("#stat_training").val();
        var i_by           = $("#i_by").val();
        var i_date         = $("#i_date").val();
        var e_by           = $("#e_by").val();
        var e_date         = $("#e_date").val();
        
        if (nama_training==""){
            alert ("Nama Training Belum diisi");
            return false;
        }
        if (penyelenggara==""){
            alert ("penyelenggara Belum diisi");
            return false;
        }
        if (instruktur==""){
            alert ("instruktur Belum diisi");
            return false;
        }
        if (tgl_training==""){
            alert ("Tanggal training Belum diisi");
            return false;
        }
        if (durasi==""){
            alert ("Durasi training Belum diisi");
            return false;
        }
        if (lokasi==""){
            alert ("Lokasi Training Belum diisi");
            return false;
        }
        if (ketua_kelas==""){
            alert ("Ketua Kelas Belum diisi");
            return false;
        }
        if (stat_training==""){
            alert ("Status Trainig Belum diisi");
            return false;
        }
        $.ajax({
                  url: 'control/training.php',
                  type: 'GET',
                  data: 'aksi=tambah&id_training='+id_training+'&nama_training='+nama_training+'&penyelenggara='+penyelenggara+
                  '&instruktur='+instruktur+'&tgl_training='+tgl_training+'&durasi='+durasi+'&lokasi='+lokasi+'&ketua_kelas='+ketua_kelas+'&stat_training='+stat_training+'&i_by='+i_by+'&i_date='+i_date+'&e_by='+e_by+'&e_date='+e_date,
                  success: function(data) {
                    $('#hasil').html(data);
                    $("#data-training").load("view/training/training_data.php");
                    $('#modal-training-add').modal('hide');
                  },
                  error: function(e) {
                  }
                });
    });
	//modal tambah menu
	var main = "view/menu/menu_data.php";
	$("#data-menu").load(main);
		$(".tambah-menu").click(function(e){
        e.preventDefault();
		$("#modal-menu-add").modal('show');
        $(".modal-title").html('Tambah menu');
        $.post("view/menu/menu_form.php",
            {id:$(this).attr('data-id')},
            function(html){
                $(".modal-body").html(html);
            }
        );
    });
	
	$("#simpan-menu").click(function(e){ 
        e.preventDefault();   
        var url = "control/menu.php"
    	var id_menu = $("#id_menu").val();
        var judul = $("#judul").val();
        var folder = $("#folder").val();
        var link = $("#link").val();
        var id_akses = $("#id_akses").val();
        var parent  = $("#parent").val();
        var icon  = $("#icon").val();
        var urut  = $("#urut").val();

        if (judul==""){
            alert ("Judul menu Belum diisi");
            return false;
        }
        if (folder==""){
            alert ("folder menu Belum diisi");
            return false;
        }
        if (link==""){
            alert ("link menu Belum diisi");
            return false;
        }
        if (id_akses==""){
            alert ("ID Akses Belum diisi");
            return false;
        }
        if (parent==""){
            alert ("parent menu Belum diisi");
            return false;
        }
        if (icon==""){
            alert ("Icon Belum diisi");
            return false;
        }
        if (urut==""){
            alert ("Nomor urut menu Belum diisi");
            return false;
        }
		$.ajax({
                  url: 'control/menu.php',
                  type: 'GET',
                  data: 'aksi=tambah&id_menu='+id_menu+'&judul='+judul+'&folder='+folder+'&link='+link+'&id_akses='+id_akses+'&parent='+parent+'&icon='+icon+'&urut='+urut,
                  success: function(data) {
                    $('#hasil').html(data);
					$("#data-menu").load("view/menu/menu_data.php");
					$('#modal-menu-add').modal('hide');
                  },
                  error: function(e) {
                  }
                });
    });


    var main = "view/konsumen/konsumen_data.php";
    $("#data-konsumen").load(main);
        $(".tambah-konsumen").click(function(e){
        e.preventDefault();
       
        $("#modal-konsumen-add").modal('show');
        $(".modal-title").html('Tambah Konsumen');
        $.post("view/konsumen/konsumen_form.php",
            {id:$(this).attr('data-id')},
            function(html){
                $(".modal-body").html(html);
            }
        );
        //alert("sd");
    });
    //simpan menu
    $("#simpan-konsumen").click(function(e){ 
        e.preventDefault(); //mencegah action form biasa   
        //alert('dadsdsdsds');
        var url = "control/konsumen.php"
        //cara1 ambil value
        //var vSwitch = $('input:text[name=swtch]').val();

        //cara2 ambil value
        var id_konsumen = $("#id_konsumen").val();
        var nama = $("#nama").val();
        var thn = $("#thn").val();
        var bln = $("#bln").val();
        var tgl = $("#tgl").val();
        var jenis_kel = $("#jenis_kel").val();
        var alamat = $("#alamat").val();
        var hp = $("#hp").val();
        var email  = $("#email").val();
        var ket  = $("#ket").val();
	

        var ktp  = $("#ktp").val();
        var ft  = $("#ft").val();
        var kk  = $("#kk").val();
        var s_nikah  = $("#s_nikah").val();
        var skbmr  = $("#skbmr").val();
        var npwp  = $("#npwp").val();
        var spt  = $("#spt").val();
        var rek_listrik  = $("#rek_listrik").val();
        var sk_skdu  = $("#sk_skdu").val();
        var siup  = $("#siup").val();
        var f_btn  = $("#f_btn").val();
        var f1  = $("#f1").val();
        var f4  = $("#f4").val();
        var a1  = $("#a1").val();
        var e1  = $("#e1").val();
        var e2  = $("#e2").val();
        var sp_listrik  = $("#sp_listrik").val();
        var input_on  = $("#input_on").val();
        var input_by  = $("#input_by").val();
        var edit_on  = $("#edit_on").val();
        var edit_by  = $("#edit_by").val();
        var del_on  = $("#del_on").val();
        var del_by  = $("#del_by").val();
        var del  = $("#del").val();
        

        //$.post(url,{judul: judul, link: link, parent: parent, icon: icon, urutan: urutan},function(data){
         
        //$('#modal-menu-add').modal('hide'); 
        //$("#hasil").html(data);
        //$("#data-menu").load('view/menu/menu_data.php');
        //});
        $.ajax({
                  url: 'control/konsumen.php',
                  type: 'GET',
                  data: 'aksi=tambah&id_konsumen='+id_konsumen+'&nama='+nama+'&thn='+thn+'&bln='+bln+'&tgl='+tgl+'&jenis_kel='+jenis_kel+'&alamat='+alamat+'&hp='+hp+'&email='+email+'&ket='+ket+'&ktp='+ktp+'&ft='+ft+'&kk='+kk+'&s_nikah='+s_nikah+'&skbmr='+skbmr+'&npwp='+npwp+'&spt='+spt+'&rek_listrik='+rek_listrik+'&sk_skdu='+sk_skdu+'&siup='+siup+'&f_btn='+f_btn+'&f1='+f1+'&f4='+f4+'&a1='+a1+'&e1='+e1+'&e2='+e2+'&sp_listrik='+sp_listrik+'&input_on='+input_on+'&input_by='+input_by+'&edit_on='+edit_on+'&edit_by='+edit_by+'&del_by='+del_by+'&del_on='+del_on+'&del='+del,
                  success: function(data) {
                    //called jika sukses dan tampilkan di tag id username1
                     
                    $('#hasil').html(data);
                    $("#data-konsumen").load("view/konsumen/konsumen_data.php");
                    $('#modal-konsumen-add').modal('hide');
                  },
                  error: function(e) {
                    //called when there is an error
                    //console.log(e.message);
                  }
                });
    });	
		//modal tambah sales
	var main = "view/sales/sales_data.php";
	$("#data-sales").load(main);
		$(".tambah-sales").click(function(e){
        e.preventDefault();
		$("#modal-sales-add").modal('show');
        $(".modal-title").html('Tambah sales');
        $.post("view/sales/sales_form.php",
            {id:$(this).attr('data-id')},
            function(html){
                $(".modal-body").html(html);
            }
        );
        //alert("sd");
    });
	
		//simpan sales
	$("#simpan-sales").click(function(e){ 
        e.preventDefault(); //mencegah action form biasa   
        //alert('dadsdsdsds');
        var url = "control/sales.php"
        //cara1 ambil value
        //var vSwitch = $('input:text[name=swtch]').val();

        //cara2 ambil value
		var id_sales = $("#id_sales").val();
		var nama = $("#nama").val();
        var hp = $("#hp").val();
        var email = $("#email").val();
        var alamat  = $("#alamat").val();
		
		//post tanpa ajax
        //$.post(url,{judul: judul, link: link, parent: parent, icon: icon, urutan: urutan},function(data){
         
        //$('#modal-menu-add').modal('hide'); 
		//$("#hasil").html(data);
		//$("#data-menu").load('view/menu/menu_data.php');
        //});
		
		$.ajax({
                  url: 'control/sales.php',
                  type: 'GET',
                  data: 'aksi=tambah&id_sales='+id_sales+'&nama='+nama+'&hp='+hp+'&email='+email+'&alamat='+alamat,
                  success: function(data) {
                    //called jika sukses dan tampilkan di tag id username1
					 
                    $('#hasil-sales').html(data);
					$("#data-sales").load("view/sales/sales_data.php");
					$('#modal-sales-add').modal('hide');
                  },
                  error: function(e) {
                    //called when there is an error
                    //console.log(e.message);
                  }
                });
    });
	
	//tambah blok
	var main = "view/blok/blok_data.php";
	$("#data-blok").load(main);
		$(".tambah-blok").click(function(e){
        e.preventDefault();
		$("#modal-blok-add").modal('show');
        $(".modal-title").html('Tambah Blok');
        $.post("view/blok/blok_form.php",
            {id:$(this).attr('data-id')},
            function(html){
                $(".modal-body").html(html);
            }
        );
        //alert("sd");
    });
        //tambahan hendri 
        //tambahan hendri
	
	//ambil data developer di blok
	/*$("#dev").click(function(e){
		e.preventDefault();
            var id_dev = '4';
			alert (id_dev);
            $.ajax({
                url: "control/get_dev.php",
                data: "id_dev=" + id_dev,
                dataType: 'json',
                cache: false,
                success: function(data){
                    $("#tipe").html(data.tipe);
                    $("#t_luas").html(data.luas);
                }
            });
        });*/
	/*$("#test").click(function(e){
        e.preventDefault();
		alert('dsdsd');
		$('#modal-blok-add').modal('hide');
		$("#modal-blok-add").modal('show');
        $(".modal-title").html('Tambah Blok');
        $.post("view/blok/blok_form.php",
            {id:$(this).attr('data-id')},
            function(html){
                $(".modal-body").html(html);
            }
        );
        //alert("sd");
    });*/
	
	//batal blok
	$("#batal-simpan-blok").click(function(e){
        //alert("sd");
		$(location).attr('href','?r=blok&pg=blok');
        
        
    });
	//simpan blok
	$("#simpan-blok").click(function(e){ 
        e.preventDefault(); //mencegah action form biasa   
        //alert('dadsdsdsds');
        var url = "control/blok.php"
        //cara1 ambil value
        //var vSwitch = $('input:text[name=swtch]').val();

        //cara2 ambil value
		var id_blok = $("#id_blok").val();
		var blok = $("#blok").val();
        var id_dev = $("#id_dev").val();
		
		$.ajax({
                  url: 'control/blok.php',
                  type: 'GET',
                  data: 'aksi=tambah&id_blok='+id_blok+'&blok='+blok+'&id_dev='+id_dev,
                  success: function(data) {
                    //called jika sukses dan tampilkan di tag id username1
					 
                    $('#hasil-blok').html(data);
					//$("#data-blok").load("view/blok/blok_data.php");
					$(location).attr('href','?r=blok&pg=blok');
					$('#modal-blok-add').modal('hide');
                  },
                  error: function(e) {
                    //called when there is an error
                    //console.log(e.message);
                  }
                });
    });
        //modal user
    var main = "view/user/user_data.php";
    $("#data-user").load(main);
        $(".tambah-user").click(function(e){
        e.preventDefault();
        $("#modal-user-add").modal('show');
        $(".modal-title").html('Tambah User');
        $.post("view/user/user_form.php",
            {id:$(this).attr('data-id')},
            function(html){
                $(".modal-body").html(html);
            }
        );
        //alert("sd");
    });
    //simpan User
    $("#simpan-user").click(function(e){ 
        e.preventDefault(); //mencegah action form biasa   
        //alert('dadsdsdsds');
        var url = "control/user.php"
        //cara1 ambil value
        //var vSwitch = $('input:text[name=swtch]').val();

        //cara2 ambil value
        var username = $("#username").val();
        var id_jabatan = $("#id_jabatan").val();
        var password = $("#password").val();
        var email = $("#email").val();
        var fullname = $("#fullname").val();
        var blokir = $("#blokir").val();
        var picture = $("#picture").val();
        
        
        $.ajax({
                  url: 'control/user.php',
                  type: 'GET',
                  data: 'aksi=tambah&username='+username+'&id_jabatan='+id_jabatan+'&password='+password+'&email='+email+'&fullname='+fullname+'&blokir='+blokir+'&picture='+picture,
                  success: function(data) {
                    //called jika sukses dan tampilkan di tag id username1
                     
                    $('#hasil-user').html(data);
                    $("#data-user").load("view/user/user_data.php");
                    $('#modal-user-add').modal('hide');
                  },
                  error: function(e) {
                    //called when there is an error
                    //console.log(e.message);
                  }
                });
    });

    var main = "view/pembayaran/pembayaran_data.php";
    $("#data-pembayaran").load(main);
        $(".tambah-pembayaran").click(function(e){
        e.preventDefault();
        $("#modal-pembayaran-add").modal('show');
        $(".modal-title").html('Tambah Pembayaran');
        $.post("view/pembayaran/pembayaran_form.php",
            {id_penjualan:$(this).attr('data-id')},
            function(html){
                $(".modal-body").html(html);
            }
        );
        //alert("sd");
    });

        $("#ke-pembayaran").click(function(e){
        //     e.preventDefault();
        $(location).attr('href','?r=pembayaran&pg=pembayaran');
        //$('#hasil-pembayaran').html(data);
        //$("#data-pembayaran").load("view/pembayaran/pembayaran_data.php");
        });

         $("#simpan-pembayaran").click(function(e){ 
        e.preventDefault(); //mencegah action form biasa   
        //alert('dadsdsdsds');
        var url = "control/pembayaran.php"
        var id_pembayaran = $("#id_pembayaran").val();
        var id_penjualan = $("#id_penjualan").val();
        var tgl_bayar = $("#tgl_bayar").val();
        var tgl_tempo = $("#tgl_tempo").val();
        var id_jenis = $("#id_jenis").val();
        var pembayaran_ke = $("#pembayaran_ke").val();
        var jumlah_pembayaran = $("#jumlah_pembayaran").val();
        var telat = $("#telat").val();
        var denda = $("#denda").val();
        var ket_pembayaran = $("#ket_pembayaran").val();
        var input_on  = $("#input_on").val();
        var input_by  = $("#input_by").val();
        var edit_on  = $("#edit_on").val();
        var edit_by  = $("#edit_by").val();
        var del_on  = $("#del_on").val();
        var del_by  = $("#del_by").val();
        var del  = $("#del").val();
        
        $.ajax({
                  url: 'control/pembayaran.php',
                  type: 'GET',
                  data: 'aksi=tambah&id_pembayaran='+id_pembayaran+'&id_penjualan='+id_penjualan+'&tgl_bayar='+tgl_bayar+'&tgl_tempo='+tgl_tempo+'&id_jenis='+id_jenis+'&pembayaran_ke='+pembayaran_ke+'&jumlah_pembayaran='+jumlah_pembayaran+'&telat='+telat+'&denda='+denda+'&ket_pembayaran='+ket_pembayaran+'&input_on='+input_on+'&input_by='+input_by+'&edit_on='+edit_on+'&edit_by='+edit_by+'&del_by='+del_by+'&del_on='+del_on+'&del='+del,
                  success: function(data) {
                    //called jika sukses dan tampilkan di tag id username1
                     
                    $('#hasil-pembayaran').html(data);
                    $("#data-pembayaran").load("view/pembayaran/pembayaran_data.php");
                    
                    $('#modal-pembayaran-add').modal('hide');
                  },
                  error: function(e) {
                    //called when there is an error
                    //console.log(e.message);
                  }
                });
    });
    var main = "view/jenis_pembayaran/jenis_pembayaran_data.php";
    $("#data-jenis-pembayaran").load(main);
        $(".tambah-jenis-pembayaran").click(function(e){
        e.preventDefault();
        $("#modal-jenis-pembayaran-add").modal('show');
        $(".modal-title").html('Tambah Jenis Pembayaran');
        $.post("view/jenis_pembayaran/jenis_pembayaran_form.php",
            {id:$(this).attr('data-id')},
            function(html){
                $(".modal-body").html(html);
            }
        );
        //alert("sd");
    });

      $("#simpan-jenis-pembayaran").click(function(e){ 
        e.preventDefault(); //mencegah action form biasa   
        //alert('dadsdsdsds');
        var url = "control/jenis_pembayaran.php"
        var id_jenis = $("#id_jenis").val();
        var pembayaran_jenis = $("#pembayaran_jenis").val();
        var note = $("#note").val();
       
        
        $.ajax({
                  url: 'control/jenis_pembayaran.php',
                  type: 'GET',
                  data: 'aksi=tambah&id_jenis='+id_jenis+'&pembayaran_jenis='+pembayaran_jenis+'&note='+note,
                  success: function(data) {
                    //called jika sukses dan tampilkan di tag id username1
                     
                    $('#hasil-jenis-pembayaran').html(data);
                    $("#data-jenis-pembayaran").load("view/jenis_pembayaran/jenis_pembayaran_data.php");
                    $('#modal-jenis-pembayaran-add').modal('hide');
                  },
                  error: function(e) {
                    //called when there is an error
                    //console.log(e.message);
                  }
                });
    });

    var main = "view/penjualan/penjualan_data.php";
    $("#data-penjualan").load(main);


    var main = "view/developer/developer_data.php";
    $("#data-developer").load(main);
        $(".tambah-developer").click(function(e){
        e.preventDefault();
        $("#modal-developer-add").modal('show');
        $(".modal-title").html('Tambah Developer');
        $.post("view/developer/developer_form.php",
            {id:$(this).attr('data-id')},
            function(html){
                $(".modal-body").html(html);
            }
        );
        //alert("sd");
    });

        $("#simpan-developer").click(function(e){ 
        e.preventDefault(); //mencegah action form biasa   
        //alert('dadsdsdsds');
        var url = "control/developer.php"
        var id_dev = $("#id_dev").val();
        var nm_dev = $("#nm_dev").val();
        var nm_proyek = $("#nm_proyek").val();
        var alamat_proyek = $ ("#alamat_proyek").val();
        var no_telpon = $ ("#no_telpon").val();
        var kat_proyek = $ ("#kat_proyek").val();
        var tot_luas_lahan = $ ("#tot_luas_lahan").val();
        var type_perumahan = $ ("#type_perumahan").val();
        var izin_lokasi = $ ("#izin_lokasi").val();
        var imb = $ ("#imb").val();
        var sert_induk = $ ("#sert_induk").val();
        var pbb = $ ("#pbb").val();
        var input_on  = $("#input_on").val();
        var input_by  = $("#input_by").val();
        var edit_on  = $("#edit_on").val();
        var edit_by  = $("#edit_by").val();
        var del_on  = $("#del_on").val();
        var del_by  = $("#del_by").val();
        var del  = $("#del").val();
        $.ajax({
                  url: 'control/developer.php',
                  type: 'GET',
                 data: 'aksi=tambah&id_dev='+id_dev+'&nm_dev='+nm_dev+'&nm_proyek='+nm_proyek+'&alamat_proyek='+alamat_proyek+'&no_telpon='+no_telpon+'&kat_proyek='+kat_proyek+'&tot_luas_lahan='+tot_luas_lahan+'&type_perumahan='+type_perumahan+'&izin_lokasi='+izin_lokasi+'&imb='+imb+'&sert_induk='+sert_induk+'&pbb='+pbb+'&input_on='+input_on+'&input_by='+input_by+'&edit_on='+edit_on+'&edit_by='+edit_by+'&del_by='+del_by+'&del_on='+del_on+'&del='+del,
                  success: function(data) {
                    //called jika sukses dan tampilkan di tag id username1
                    $('#hasil-developer').html(data);
                    $("#data-developer").load("view/developer/developer_data.php");
                    $('#modal-developer-add').modal('hide');
                  },
                  error: function(e) {
                    //called when there is an error
                    //console.log(e.message);
                  }
                });
    });

   // var main = "view/kavling/kavling_data.php";
    //$("#data-kavling").load(main);
      //  $(".tambah-kavling").click(function(e){
       // e.preventDefault();
       // $("#modal-kavling-add").modal('show');
       // $(".modal-title").html('Tambah Kavling');
       // $.post("view/kavling/kavling_form.php",
        //    {id:$(this).attr('data-id')},
         //   function(html){
           //     $(".modal-body").html(html);
            //}
       // );
        //alert("sd");
   // });


});