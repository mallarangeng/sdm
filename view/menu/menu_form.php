<?php
include'../../class/gapura_class.php';
include'../../class/gapura_function.php';
include'../../class/gapura_object.php';
?>
<div class="panel-body">
    <form method="get" class="form-horizontal">

        <div class="form-group">
			<label class="col-sm-2 control-label">Title</label>
            <div class="col-sm-8">
				<input type="text" placeholder="Judul menu" class="form-control input-sm" id="judul">
            </div>
        </div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Class</label>
            <div class="col-sm-8">
				<input type="text" placeholder="link folder" class="form-control input-sm" id="folder">
            </div>
        </div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Link</label>
            <div class="col-sm-8">
				<input type="text" placeholder="link nama file" class="form-control input-sm" id="link">
            </div>
        </div>
		<div class="form-group"><label class="col-sm-2 control-label">ID Akses</label>
            <div class="col-sm-6">
				<select id="id_akses" class="form-control m-b">
					<?php	
						$arrayAkses = $akses->tampilakses();
						if(isset($arrayAkses) && $arrayAkses !=Null){
							foreach ($arrayAkses as $da) {
					?>
					<option value="<?php echo $da['id_akses']?>"><?php echo $da['id_akses'].'-'.$da['nama_akses']?></option>
					<?php 
							}
						}
					?>
				</select>
            </div>
        </div>
		<div class="form-group"><label class="col-sm-2 control-label">Select</label>
            <div class="col-sm-6">
				<select id="parent" class="form-control m-b">
					<option selected value="0">Jadikan Master Menu ?</option>
					<?php	
						$arrayParent = $menu->comboParent();
						if(isset($arrayParent) && $arrayParent !=Null){
							foreach ($arrayParent as $data) {
					?>
					<option value="<?php echo $data['id_menu']?>"><?php echo $data['id_menu'].'-'.$data['judul']?></option>
					<?php 
							}
						}
					?>
				</select>
            </div>
        </div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Icon</label>
            <div class="col-sm-8">
				<input type="text" placeholder="Masukan Code Icon" class="form-control input-sm" id="icon">
            </div>
        </div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Urutan</label>
            <div class="col-sm-4">
				<input type="text" placeholder="Urutan Menu" class="form-control input-sm" id="urut">
            </div>
        </div>
        <div class="hr-line-dashed"></div>
    </form>
</div>