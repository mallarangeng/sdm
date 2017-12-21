<?php
include'../../class/gapura_class.php';
include'../../class/msc_function.php';
$db = new Database();
$db->connectMySQL();
$posisi = new posisi();
?>
  <table id="datat_posisi" class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th>ID Posisi</th>
			<th>Nama Posisi</th>
			<th>Ket Posisi</th>
			<th>Input By</th>
			<th>Input Date</th>
			<th>Edit By</th>
			<th>Edit Date</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<?php
		$arrayPosisi = $posisi->tampilposisi();
		if(isset($arrayPosisi) && $arrayPosisi !=NULL){
			foreach($arrayPosisi as $data){
	?>
		<tr>
			<td><?php echo $data['id_posisi']?></td>
				<td><?php echo $data['nm_posisi']?></td>
				<td><?php echo $data['ket_posisi']?></td>
				<td><?php echo $data['i_by']?></td>
				<td><?php echo $data['i_date']?></td>
				<td><?php echo $data['e_by']?></td>
				<td><?php echo $data['e_date']?></td>
			<td>
				<button class="ubah-posisi btn btn-success btn-xs" type="button" data-id="<?php echo $data['id_posisi'] ?>"><i class="fa fa-edit"></i></button>
			</td>
		</tr>
	<?php
			}
		}
	?>
	</tbody>
</table>
<script>
$('#datat_posisi').dataTable();
$("#datat_posisi").on("click",".ubah-posisi",function(e){
        e.preventDefault();
		$("#modal-posisi-add").modal('show');
        $(".modal-title").html('Ubah Data posisi');
        $.get("view/posisi/posisi_form.php",
            {id_posisi:$(this).attr('data-id')},
            function(html){
                $(".modal-body").html(html);
            }
        );
    });
</script>

