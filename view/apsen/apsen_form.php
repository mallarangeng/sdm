<?php
include'../../class/gapura_class.php';
include'../../class/gapura_function.php';
include'../../class/gapura_object.php';
$da=$apsensi->bacaapsen($id_apsensi);
    if ($da['id_apsensi']>0) {
        $id_apsensi        = $da['id_apsensi'];
        $nip               = $da['nip'];
        $id_training       = $da['id_training'];
        $i_by               = $da['i_by'];
        $i_date             = $da['i_date'];
        $e_by               = $da['e_by'];
        $e_date             = $da['e_date'];
        
    } else {
        $id_apsensi        = '';
        $nip               = '';
        $id_training       = '';
        $i_by               = '';
        $i_date             = '';
        $e_by               = '';
        $e_date             = '';
    }
?>
<div class="panel-body">
    <form method="get" class="form-horizontal" id="form_2">

        <div class="form-group">
			<label class="col-sm-4 control-label">ID Training</label>
            <div class="col-sm-8">
			<input type="hidden" id="id_apsensi" value="<?php echo $id_apsensi; ?>">
            <input type="text" class="form-control input-sm" id="id_training" value="<?php echo $_GET['id_training']; ?><?php echo $id_training; ?>" readonly>
            </div>
        </div>
		<div class="form-group">
			<label class="col-sm-4 control-label">Nama Siswa</label>
            <div class="col-sm-8">

                                   <select class="js-source-states" id="nip" style="width: 100%">
                                        <?php
                                            $arraypgw = $pgw->tampilpgw();
                                            if(isset($arraypgw) && $arraypgw !=NULL){
                                                foreach($arraypgw as $dataap){
                                        ?>               
                                    <option value="<?php echo $dataap['nip']?>"><?php echo $dataap['nip']?> <?php echo $dataap['nama']?></option>
                                    <?php
                                        }
                                    }
                                    ?>
                                </select>
                                <input type="hidden" id="i_by" value="<?php echo $i_by ?>">
                                <input type="hidden" id="i_date" value="<?php echo $i_date ?>">


            </div>
        </div>
        <div class="hr-line-dashed"></div>
    </form>
</div>

<script type="text/javascript">
    $(".js-source-states").select2();
</script>