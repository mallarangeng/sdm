<?php
include'../../class/gapura_class.php';
include'../../class/gapura_function.php';
include'../../class/gapura_object.php';
$da=$akses->bacaakses($id_akses);
    if ($da['id_akses']>0) {
        $id_akses          = $da['id_akses'];
        $nama_akses        = $da['nama_akses'];
        $ket_akses         = $da['ket_akses'];
    }else{
        $id_akses          = '';
        $nama_akses        = '';
        $ket_akses         = '';
    }
?>
<div class="panel-body">
    <form method="get" class="form-horizontal" id="form_2">
        <div class="form-group">
			<label class="col-sm-4 control-label">Nama Akses</label>
            <input type="text" id="id_training" value="<?php echo $_GET['id_training']; ?>">
            <div class="col-sm-6">
		                           <select class="js-source-states" id="nip" style="width: 100%">
                                        <?php
                                            $arraypgw = $pgw->tampilpgw();
                                            if(isset($arraypgw) && $arraypgw !=NULL){
                                                foreach($arraypgw as $dataap){
                                        ?>               
                                    <option value="<?php echo $dataap['nip']?>"><?php echo $dataap['nama']?></option>
                                    <?php
                                        }
                                    }
                                    ?>
                                </select>
            </div>
        </div>
        <div class="hr-line-dashed"></div>
    </form>
</div>
<script type="text/javascript">
    $(".js-source-states").select2();
</script>