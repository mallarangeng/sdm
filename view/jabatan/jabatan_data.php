<?php
include'../../class/gapura_class.php';
include'../../class/msc_function.php';
include'../../class/gapura_object.php';
?>

  <table id="datat_pendidikan" class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th>Id</th>
			<th>Nip</th>
			<th>Pend Terakhir</th>
			<th>Program Studi</th>
			<th>Thn Lulus</th>
			<th>Pendidikan Asal</th>
			<th>Input By</th>
			<th>Input Date</th>
			<th>Edit By</th>
			<th>Edit Date</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<?php
		$arraypendidikan = $pendidikan->tampilpendidikan();
		if(isset($arraypendidikan) && $arraypendidikan !=NULL){
			foreach($arraypendidikan as $data){
	?>
		<tr>
			<td><?php echo $data['id_pend']?></td>
				<td><?php echo $data['nip']?></td>
				<td><?php echo $data['pend_terakhir']?></td>
				<td><?php echo $data['prodi']?></td>
				<td><?php echo $data['thn_lulus']?></td>
				<td><?php echo $data['pend_asal']?></td>
				<td><?php echo $data['i_by']?></td>
				<td><?php echo $data['i_date']?></td>
				<td><?php echo $data['e_by']?></td>
				<td><?php echo $data['e_date']?></td>
			<td>
				<button class="ubah-pendidikan btn btn-success btn-xs" type="button" data-id="<?php echo $data['id_pend'] ?>"><i class="fa fa-edit"></i></button>
			</td>
		</tr>
	<?php
			}
		}
	?>
	</tbody>
</table>
<script>
$('#datat_pendidikan').dataTable();
$("#datat_pendidikan").on("click",".ubah-pendidikan",function(e){
        e.preventDefault();
		$("#modal-pendidikan-add").modal('show');
        $(".modal-title").html('Ubah Data pendidikan');
        $.get("view/pendidikan/pendidikan_form.php",
            {id_pend:$(this).attr('data-id')},
            function(html){
                $(".modal-body").html(html);
            }
        );
    });
</script>

