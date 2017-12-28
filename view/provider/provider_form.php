<?php
include'../../class/gapura_class.php';
include'../../class/gapura_function.php';
include'../../class/gapura_object.php';

$id_provider=$_GET['id_provider'];
$dp=$provider->bacaprovider($id_provider);
    if ($dp['id_provider']>0) {
        $nama_provider        = $dp['nama_provider'];
        $alamat               = $dp['alamat'];
        $telpon               = $dp['telpon'];
        $web                  = $dp['web'];
        $email                = $dp['email'];
        $direktur             = $dp['direktur'];
    }else{
        $nama_provider        = '';
        $alamat               = '';
        $telpon               = '';
        $web                  = '';
        $email                = '';
        $direktur             = '';
    }
?>
<div class="panel-body">
    <form method="get" class="form-horizontal" id="form_2">

        <div class="form-group">
			<label class="col-sm-4 control-label">Nama provider</label>
            <div class="col-sm-8">
				<input type="hidden" class="form-control input-sm" id="id_provider" value="<?php echo $id_provider ?>">
				<input type="text" placeholder="Nama Provider" class="form-control input-sm" id="nama_provider" value="<?php echo $nama_provider ?>">
            </div>
        </div>
		<div class="form-group">
			<label class="col-sm-4 control-label">Alamat</label>
            <div class="col-sm-8">
				<input type="text" placeholder="Alamat" class="form-control input-sm" id="alamat" value="<?php echo $alamat ?>">
            </div>
        </div>
		<div class="form-group">
			<label class="col-sm-4 control-label">Telpon</label>
            <div class="col-sm-8">
				<input type="text" placeholder="telpon" class="form-control input-sm" id="telpon" value="<?php echo $telpon ?>">
            </div>
        </div>
    <div class="form-group">
            <label class="col-sm-4 control-label">Web</label>
            <div class="col-sm-8">
                <input type="text" placeholder="web" class="form-control input-sm" id="web" value="<?php echo $web ?>">
            </div>
        </div>
		<div class="form-group">
			<label class="col-sm-4 control-label">Email</label>
            <div class="col-sm-4">
				<input id="email" placeholder="email" type="text" class="form-control input-sm" value="<?php echo $email ?>">
            </div>
        </div>
		<div class="form-group">
			<label class="col-sm-4 control-label">Direktur</label>
            <div class="col-sm-8">
			<input type="text" placeholder="Direktur" class="form-control input-sm" id="direktur" value="<?php echo $direktur ?>">
                <input type="hidden" id="input_by">
                <input type="hidden" id="input_date">
                <input type="hidden" id="edit_by">
                <input type="hidden" id="edit_date">
            </div>
        </div>
        <div class="hr-line-dashed"></div>
    </form>
</div>