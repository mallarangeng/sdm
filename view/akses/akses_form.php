<?php
include'../../class/gapura_class.php';
include'../../class/gapura_function.php';
session_start();
$db = new Database();
$db->connectMySQL();
$akses = new akses();
$id_akses=$_GET['id_akses'];
$da=$akses->bacaakses($id_akses);
    if ($da['id_akses']>0) {
        $nama_akses        = $da['nama_akses'];
        $ket_akses         = $da['ket_akses'];
    }else{
        $nama_akses        = '';
        $ket_akses         = '';
    }
?>
<div class="panel-body">
    <form method="get" class="form-horizontal" id="form_2">

        <div class="form-group">
			<label class="col-sm-4 control-label">Nama Akses <?php echo $_GET['id_akses']; ?></label>
            <div class="col-sm-8">
				<input type="hidden" class="form-control input-sm" id="id_akses" value="<?php echo $id_akses ?>">
				<input type="text" placeholder="Nama Akses" class="form-control input-sm" id="nama_akses" value="<?php echo $nama_akses ?>">
            </div>
        </div>
		<div class="form-group">
			<label class="col-sm-4 control-label">Keterangan Akses</label>
            <div class="col-sm-8">
				<input type="text" placeholder="Keterangan Akses" class="form-control input-sm" id="ket_akses" value="<?php echo $ket_akses ?>">
            </div>
        </div>
        <div class="hr-line-dashed"></div>
    </form>
</div>