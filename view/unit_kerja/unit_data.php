<?php
include'../../class/gapura_class.php';
include'../../class/msc_function.php';
include'../../class/gapura_object.php';

?>
  <table id="datat_unit" class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th>ID unit</th>
			<th>Nama unit</th>
			<th>Ket unit</th>
			<th>Input By</th>
			<th>Input Date</th>
			<th>Edit By</th>
			<th>Edit Date</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<?php
		$arrayunit = $unit->tampilunit();
		if(isset($arrayunit) && $arrayunit !=NULL){
			foreach($arrayunit as $data){
	?>
		<tr>
			<td><?php echo $data['id_unit']?></td>
				<td><?php echo $data['nama_unit']?></td>
				<td><?php echo $data['ket_unit']?></td>
				<td><?php echo $data['i_by']?></td>
				<td><?php echo $data['i_date']?></td>
				<td><?php echo $data['e_by']?></td>
				<td><?php echo $data['e_date']?></td>
			<td>
				<button class="ubah-unit btn btn-success btn-xs" type="button" data-id="<?php echo $data['id_unit'] ?>"><i class="fa fa-edit"></i></button>
			</td>
		</tr>
	<?php
			}
		}
	?>
	</tbody>
</table>
<script>
$('#datat_unit').dataTable();
$("#datat_unit").on("click",".ubah-unit",function(e){
        e.preventDefault();
		$("#modal-unit-add").modal('show');
        $(".modal-title").html('Ubah Data unit');
        $.get("view/unit_kerja/unit_form.php",
            {id_unit:$(this).attr('data-id')},
            function(html){
                $(".modal-body").html(html);
            }
        );
    });
</script>

