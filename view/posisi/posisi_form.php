<?php
include'../../class/gapura_class.php';
include'../../class/gapura_function.php';
include'../../class/gapura_object.php';

$da=$posisi->bacaposisi($id_posisi);
    if ($da['id_posisi']>0) {
        $id_posisi        = $da['id_posisi'];
        $nm_posisi        = $da['nm_posisi'];
        $ket_posisi       = $da['ket_posisi'];
        $i_by             = $da['i_by'];
        $i_date           = $da['i_date'];
        $e_by             = $da['e_by'];
        $e_date           = $da['e_date'];
    } else {
        $id_posisi        = '';
        $nm_posisi        = '';
        $ket_posisi       = '';
        $i_by             = '';
        $i_date           = '';
        $e_by             = '';
        $e_date           = '';
    }
?>
<div class="panel-body">
    <form method="get" class="form-horizontal" id="form_2">

        <div class="form-group">
			<label class="col-sm-4 control-label">Nama Posisi</label>
            <div class="col-sm-8">
				<input type="hidden" class="form-control input-sm" id="id_posisi" value="<?php echo $id_posisi ?>">
				<input type="text" placeholder="Nama Posisi" class="form-control input-sm" id="nm_posisi" value="<?php echo $nm_posisi ?>">
            </div>
        </div>
		<div class="form-group">
			<label class="col-sm-4 control-label">Keterangan Posisi</label>
            <div class="col-sm-8">
			<input type="text" placeholder="Keterangan Keterangan" class="form-control input-sm" id="ket_posisi" value="<?php echo $ket_posisi ?>">
            <input type="hidden" id="i_by" value="<?php echo $i_by ?>">
            <input type="hidden" id="i_date" value="<?php echo $i_date ?>">

            </div>
        </div>
        <div class="hr-line-dashed"></div>
    </form>
</div>