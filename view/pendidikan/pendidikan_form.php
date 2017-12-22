<?php
include'../../class/gapura_class.php';
include'../../class/gapura_function.php';
session_start();
$db = new Database();
$db->connectMySQL();
$pendidikan = new pendidikan();
$da=$pendidikan->bacapendidikan($id_pend);
    if ($da['id_pend']>0) {
        $nip              = $da['nip'];
        $pend_terakhir    = $da['pend_terakhir'];
        $prodi            = $da['prodi'];
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
			<label class="col-sm-4 control-label">Pendidikan Terakhir</label>
            <div class="col-sm-8">
				<input type="text" class="form-control input-sm" id="id_pend" value="<?php echo $id_pend ?>">
                <input type="text" class="form-control input-sm" id="nip" value="<?php echo $nip ?>">
				<select class="js-source-states" id="pend_terakhir" style="width: 100%">                    
                            <option value="S3">S3</option>
                            <option value="S2">S2</option>
                            <option value="S1">S1</option>
                            <option value="D4">D4</option>
                            <option value="D3">D3</option>
                            <option value="SMK/A">SMK/A</option>
                            <option value="SMP">SMP</option>
                            <option value="SD">SD</option>
                    </select>
            </div>
        </div>
            <div class="form-group">
            <label class="col-sm-4 control-label">Program Studi</label>
            <div class="col-sm-8">
                <input type="text" placeholder="Program Studi / Jurusan" class="form-control input-sm" id="prodi" value="<?php echo $prodi ?>">
            </div>
        </div>
           <div class="form-group">
            <label class="col-sm-4 control-label">Tahun Lulus (ext : 2015)</label>
            <div class="col-sm-4">
                <input type="text" class="form-control input-sm" placeholder="Ketikan Tahun" id="thn_lulus" value="<?php echo $thn_lulus ?>">
            </div>
        </div>
		<div class="form-group">
			<label class="col-sm-4 control-label">Pendidikan Asal</label>
            <div class="col-sm-8">
			<input type="text" placeholder="Pendidikan Asal" class="form-control input-sm" id="pend_asal" value="<?php echo $pend_asal ?>">
            <input type="hidden" id="i_by" value="<?php echo $i_by ?>">
            <input type="hidden" id="i_date" value="<?php echo $i_date ?>">
            </div>
        </div>
        <div class="hr-line-dashed"></div>
    </form>
</div>

<script type="text/javascript">
    $(".js-source-states").select2();
    $(".js-source-states-2").select2();

</script>