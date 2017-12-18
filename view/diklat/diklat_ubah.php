<?php
include'../../class/gapura_class.php';
include'../../class/gapura_function.php';
session_start();
$db = new Database();
$db->connectMySQL();
$diklat = new diklat();
$id_diklat=$_GET['id_diklat'];
$d=$diklat->bacadiklat($id_diklat);
?>
<div class="panel-body">
    <form method="get" class="form-horizontal">

        <div class="form-group">
			<label class="col-sm-4 control-label">Nama Diklat</label>
            <div class="col-sm-8">
				<input type="hidden" class="form-control input-sm" id="id_diklat" value="<?php echo $d['id_diklat']; ?>">
				<input type="text" placeholder="Nama Diklat" class="form-control input-sm" id="nama_diklat" value="<?php echo $d['nama_diklat']; ?>">
            </div>
        </div>
		<div class="form-group">
			<label class="col-sm-4 control-label">Penyelenggara</label>
            <div class="col-sm-8">
				<input type="text" placeholder="Penyelenggara" class="form-control input-sm" id="penyelenggara" value="<?php echo $d['instruktur']; ?>" >
            </div>
        </div>
		<div class="form-group">
			<label class="col-sm-4 control-label">instruktur</label>
            <div class="col-sm-8">
				<input type="text" placeholder="instruktur" class="form-control input-sm" id="instruktur" value="<?php echo $d['instruktur']; ?>">
            </div>
        </div>
        	<div class="form-group">
			<label class="col-sm-4 control-label">Tanggal</label>
            <div class="col-sm-4">
				<input type="text" value="<?php echo date('Y-m-d'); ?>" class="form-control input-sm" id="tgl_diklat" value="<?php echo $d['tgl_diklat']; ?>">
            </div>
        </div>
		<div class="form-group">
			<label class="col-sm-4 control-label">Durasi</label>
            <div class="col-sm-4">
				<input id="durasi" type="text" class="form-control input-sm" value="1" value="<?php echo $d['durasi']; ?>">
            </div>
        </div>
		<div class="form-group">
			<label class="col-sm-4 control-label">Lokasi</label>
            <div class="col-sm-8">
				<input type="text" placeholder="Lokasi" class="form-control input-sm" id="lokasi" value="<?php echo $d['lokasi']; ?>">
            </div>
        </div>
        <div class="form-group">
			<label class="col-sm-4 control-label">Ketua Kelas</label>
            <div class="col-sm-8">
				<input type="text" placeholder="ketua Kelas" class="form-control input-sm" id="ketua_kelas" value="<?php echo $d['ketua_kelas']; ?>">
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
$('#tgl_diklat2').datepicker({
						format: 'yyyy-mm-dd',
						keyboardNavigation: false,
						forceParse: false,
						autoclose: true
					});
     $("#durasi2").TouchSpin({
                postfix: 'Jam'
            });
</script>