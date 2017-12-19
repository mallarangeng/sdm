<?php
include'../../class/gapura_class.php';
include'../../class/gapura_function.php';
session_start();
$db = new Database();
$db->connectMySQL();
$diklat = new diklat();
$id_diklat=$_GET['id_diklat'];
$d=$diklat->bacadiklat($id_diklat);
    if ($d['id_diklat']> 0) {
        $nama_diklat        = $d['nama_diklat'];
        $penyelenggara      = $d['penyelenggara'];
        $instruktur         = $d['instruktur'];
        $tgl_diklat         = $d['tgl_diklat'];
        $durasi             = $d['durasi'];
        $lokasi             = $d['lokasi'];
        $ketua_kelas        = $d['ketua_kelas'];
        $stat_diklat        = $d['stat_diklat'];

    }else{
        $nama_diklat      = '';
        $penyelenggara    = '';
        $instruktur       = '';
        $tgl_diklat       = date('Y-m-d');
        $durasi           = '1';
        $lokasi           = '';
        $ketua_kelas      = '';
        $stat_diklat      = '';
    }
?>
<div class="panel-body">
    <form method="get" class="form-horizontal" id="form_2">

        <div class="form-group">
			<label class="col-sm-4 control-label">Nama Diklat</label>
            <div class="col-sm-8">
				<input type="hidden" class="form-control input-sm" id="id_diklat" value="<?php echo $id_diklat ?>">
				<input type="text" placeholder="Nama Diklat" class="form-control input-sm" id="nama_diklat" value="<?php echo $nama_diklat ?>">
            </div>
        </div>
		<div class="form-group">
			<label class="col-sm-4 control-label">Penyelenggara</label>
            <div class="col-sm-8">
				<input type="text" placeholder="Penyelenggara" class="form-control input-sm" id="penyelenggara" value="<?php echo $penyelenggara ?>">
            </div>
        </div>
		<div class="form-group">
			<label class="col-sm-4 control-label">instruktur</label>
            <div class="col-sm-8">
				<input type="text" placeholder="instruktur" class="form-control input-sm" id="instruktur" value="<?php echo $instruktur ?>">
            </div>
        </div>
        	<div class="form-group">
			<label class="col-sm-4 control-label">Tanggal</label>
            <div class="col-sm-4">
				<input type="text" value="<?php echo $tgl_diklat ?>" class="form-control input-sm" id="tgl_diklat" value="<?php echo $tgl_diklat ?>">
            </div>
        </div>
		<div class="form-group">
			<label class="col-sm-4 control-label">Durasi</label>
            <div class="col-sm-4">
				<input id="durasi" type="text" class="form-control input-sm" value="<?php echo $durasi ?>">
            </div>
        </div>
		<div class="form-group">
			<label class="col-sm-4 control-label">Lokasi</label>
            <div class="col-sm-8">
				<input type="text" placeholder="Lokasi" class="form-control input-sm" id="lokasi" value="<?php echo $lokasi ?>">
            </div>
        </div>
        <div class="form-group">
			<label class="col-sm-4 control-label">Ketua Kelas</label>
            <div class="col-sm-8">
				<input type="text" placeholder="ketua Kelas" class="form-control input-sm" id="ketua_kelas" value="<?php echo $ketua_kelas ?>">
				<input type="hidden" id="stat_diklat" value="berjalan">
				<input type="hidden" id="input_by">
				<input type="hidden" id="input_date">
				<input type="hidden" id="edit_by">
				<input type="hidden" id="edit_date">
            </div>
        </div>
        <div class="hr-line-dashed"></div>
    </form>
</div>
<script>
$('#tgl_diklat').datepicker({
						format: 'yyyy-mm-dd',
						keyboardNavigation: false,
						forceParse: false,
						autoclose: true
					});
     $("#durasi").TouchSpin({
                postfix: 'Jam'
            });
</script>
<script>

    $(function(){

        $("#form").validate({
            rules: {
                password: {
                    required: true,
                    minlength: 3
                },
                url: {
                    required: true,
                    url: true
                },
                number: {
                    required: true,
                    number: true
                },
                max: {
                    required: true,
                    maxlength: 4
                }
            },
            submitHandler: function(form) {
                form.submit();
            }
        });

        $("#form_2").validate({
            rules: {
                name: {
                    required: true,
                    minlength: 3
                },
                username: {
                    required: true,
                    minlength: 5
                },
                url: {
                    required: true,
                    url: true
                },
                number: {
                    required: true,
                    number: true
                },
                last_name: {
                    required: true,
                    minlength: 6
                }
            },
            messages: {
                number: {
                    required: "(Please enter your phone number)",
                    number: "(Please enter valid phone number)"
                },
                last_name: {
                    required: "This is custom message for required",
                    minlength: "This is custom message for min length"
                }
            },
            submitHandler: function(form) {
                form.submit();
            },
            errorPlacement: function(error, element) {
                $( element )
                        .closest( "form" )
                        .find( "label[for='" + element.attr( "id" ) + "']" )
                        .append( error );
            },
            errorElement: "span",
        });


    });
</script>