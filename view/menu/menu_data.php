<?php
include'../../class/gapura_class.php';
include'../../class/msc_function.php';
include'../../class/gapura_object.php';
?>  
  <table id="datat_menu" class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th>No</th>
			<th>ID</th>
			<th>Titile</th>
			<th>Class</th>
			<th>Link</th>
			<th>Akses</th>
			<th>Parent</th>
			<th>icon</th>
			<th>Urut</th>
			<th>Dibuat</th>
			<th>Aktif</th>
			<th>AKSI</th>
		</tr>
	</thead>
	<tbody>
	<?php
		$arrayMenu = $menu->tampilMenu();
		if(isset($arrayMenu) && $arrayMenu !=NULL){
			foreach($arrayMenu as $data){
	?>
		<tr>
				<td><?php echo $c=$c+1; ?></td>
				<td><?php echo $data['id_menu']?></td>
				<td><?php echo $data['judul']?></td>
				<td><?php echo $data['folder']?></td>
				<td><?php echo $data['link']?></td>
				<td><?php echo $data['id_akses']?></td>
				<td><?php echo $data['parent']?></td>
				<td class="center"><i class="fa <?php echo $data['icon']?>"></i> <span class="nav-label">&nbsp;<?php echo $data['icon']?></span></td>
				<td class="center"><?php echo $data['urut']?></td>
				<td class="center">12100410</td>
				<td class="center">Y</td>
			<td>
				<button class="ubah-menu btn btn-success btn-xs" type="button" data-id="<?php echo $data['id_menu'] ?>"><i class="fa fa-edit"></i></button>
			</td>
		</tr>
	<?php
			}
		}
	?>
	</tbody>
</table>

<script>
$('#datat_menu').dataTable();
$("#datat_menu").on("click",".ubah-menu",function(e){
        e.preventDefault();
		$("#modal-menu-add").modal('show');
        $(".modal-title").html('Ubah menu');
        $.get("view/menu/menu_ubah.php",
            {id_menu:$(this).attr('data-id')},
            function(html){
                $(".modal-body").html(html);
            }
        );
    });
</script>

