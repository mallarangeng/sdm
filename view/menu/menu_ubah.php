<?php
include'../../class/gapura_class.php';
include'../../class/gapura_function.php';
session_start();
$db = new Database();
$db->connectMySQL();
$menu = new menu();
$d= $menu->bacaMenu($id_menu);
?>
 <div class="panel-body">
    <form method="get" class="form-horizontal">

        <div class="form-group">
			<label class="col-sm-2 control-label">Title</label>
            <div class="col-sm-8">
			<input type="hidden" class="form-control input-sm" id="id_menu" value="<?php echo $d['id_menu']; ?>">
		<input type="text" placeholder="link folder" class="form-control input-sm" id="judul" value="<?php echo $d['judul']; ?>">
            </div>
        </div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Class</label>
            <div class="col-sm-8">
			<input type="text" placeholder="link folder" class="form-control input-sm" id="folder" value="<?php echo $d['folder']; ?>">
            </div>
        </div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Link</label>
            <div class="col-sm-8">
				<input type="text" placeholder="link nama file" class="form-control input-sm" id="link" value="<?php echo $d['link']; ?>">
            </div>
        </div>
		<div class="form-group"><label class="col-sm-2 control-label">Select</label>
            <div class="col-sm-6">
				<select id="parent" class="form-control m-b" name="account">
					<option value="<?php echo $d['parent']; ?>"><?php echo $d['parent']; ?></option>
					<option value="0">Jadikan Master Menu ?</option>
					<?php	
						$arrayParent = $menu->comboParent();
						if(isset($arrayParent) && $arrayParent !=Null){
							foreach ($arrayParent as $data) {
					?>
					<option value="<?php echo $data['id_menu']?>"><?php echo $data['id_menu'].'--'.$data['judul']?></option>
					<?php 
							}
						}
					?>
				</select>
            </div> <div class="tooltip-demo">
            <span data-toggle="tooltip" data-placement="right" title="Jika tidak memilih select Maka akan menjadi master menu"><i class="pe-7s-info text-info"></i></span>
                                </div>
        </div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Icon</label>
            <div class="col-sm-8">
				<input type="text" placeholder="Judul menu" class="form-control input-sm" id="icon" value="<?php echo $d['icon']; ?>">
            </div>
        </div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Urutan</label>
            <div class="col-sm-4">
				<input type="text" placeholder="Judul menu" class="form-control input-sm" id="urut" value="<?php echo $d['urut']; ?>">
            </div>
        </div>
        <div class="hr-line-dashed"></div>
    </form>
</div>