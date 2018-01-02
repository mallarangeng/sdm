<?php
include'../../class/gapura_class.php';
include'../../class/gapura_function.php';
include'../../class/gapura_object.php';
$id_training=$_GET['id_training'];
$d=$training->bacatraining($id_training);
    if ($d['id_training']> 0) {
        $nama_training        = $d['nama_training'];
        $penyelenggara      = $d['penyelenggara'];
        $instruktur         = $d['instruktur'];
        $tgl_training         = $d['tgl_training'];
        $durasi             = $d['durasi'];
        $lokasi             = $d['lokasi'];
        $ketua_kelas        = $d['ketua_kelas'];
        $stat_training        = $d['stat_training'];

    }else{
        $nama_training      = '';
        $penyelenggara    = '';
        $instruktur       = '';
        $tgl_training       = date('Y-m-d');
        $durasi           = '1';
        $lokasi           = '';
        $ketua_kelas      = '';
        $stat_training      = '';
    }
?>
<div class="panel-body">
    <form method="get" class="form-horizontal" id="form_2">

        <div class="form-group">
			<label class="col-sm-4 control-label">Nama training</label>
            <div class="col-sm-8">
				<input type="hidden" class="form-control input-sm" id="id_training" value="<?php echo $id_training ?>">
				<input type="text" placeholder="Nama training" class="form-control input-sm" id="nama_training" value="<?php echo $nama_training ?>">
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
				<input type="text" value="<?php echo $tgl_training ?>" class="form-control input-sm" id="tgl_training" value="<?php echo $tgl_training ?>">
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
				<input type="hidden" id="stat_training" value="berjalan">
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
$('#tgl_training').datepicker({
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