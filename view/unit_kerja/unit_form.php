<?php
include'../../class/gapura_class.php';
include'../../class/gapura_function.php';
include'../../class/gapura_object.php';

$da=$unit->bacaunit($id_unit);
    if ($da['id_unit']>0) {
        $id_unit          = $da['id_unit'];
        $nama_unit        = $da['nama_unit'];
        $ket_unit         = $da['ket_unit'];
        $i_by             = $da['i_by'];
        $i_date           = $da['i_date'];
        $e_by             = $da['e_by'];
        $e_date           = $da['e_date'];
    } else {
        $id_unit          = '';
        $nama_unit        = '';
        $ket_unit         = '';
        $i_by             = '';
        $i_date           = '';
        $e_by             = '';
        $e_date           = '';
    }
?>
<div class="panel-body">
    <form method="get" class="form-horizontal" id="form_2">

        <div class="form-group">
			<label class="col-sm-4 control-label">Nama unit</label>
            <div class="col-sm-8">
				<input type="hidden" class="form-control input-sm" id="id_unit" value="<?php echo $id_unit ?>">
				<input type="text" placeholder="Nama unit" class="form-control input-sm" id="nama_unit" value="<?php echo $nama_unit ?>">
            </div>
        </div>
		<div class="form-group">
			<label class="col-sm-4 control-label">Keterangan unit</label>
            <div class="col-sm-8">
			<input type="text" placeholder="Keterangan Keterangan" class="form-control input-sm" id="ket_unit" value="<?php echo $ket_unit ?>">
            <input type="hidden" id="i_by" value="<?php echo $i_by ?>">
            <input type="hidden" id="i_date" value="<?php echo $i_date ?>">

            </div>
        </div>
        <div class="hr-line-dashed"></div>
    </form>
</div>