<?php
include'../../class/gapura_class.php';
include'../../class/msc_function.php';
$db = new Database();
$db->connectMySQL();
$training = new training();
?>
  <table id="datat_training" class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th>ID training</th>
			<th>Nama training</th>
			<th>Penyelenggara</th>
			<th>Insruktur</th>
			<th>Tgl training</th>
			<th>Durasi</th>
			<th>Lokasi</th>
			<th>Apsensi</th>		
			<th>Ketua Kelas</th>
			<th>Status</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<?php
		$arraytraining = $training->tampiltraining();
		if(isset($arraytraining) && $arraytraining !=NULL){
			foreach($arraytraining as $data){
	?>
		<tr>
			<td><?php echo $data['id_training']?></td>
				<td><?php echo $data['nama_training']?></td>
				<td><?php echo $data['penyelenggara']?></td>
				<td><?php echo $data['instruktur']?></td>
				<td><?php echo $data['tgl_training']?></td>
				<td><?php echo $data['durasi']?> Jam</td>
				<td><?php echo $data['lokasi']?></td>
				<td><i class="fa pe-7s-users"></td>
				<td><?php echo $data['ketua_kelas']?></td>
				<td><?php echo $data['stat_training']?></td>
			<td>
				<button class="ubah-training btn btn-success btn-xs" type="button" data-id="<?php echo $data['id_training'] ?>"><i class="fa fa-edit"></i></button>
			</td>
		</tr>
	<?php
			}
		}
	?>
	</tbody>
</table>

<script>
$('#datat_training').dataTable();
$("#datat_training").on("click",".ubah-training",function(e){
        e.preventDefault();
		$("#modal-training-add").modal('show');
        $(".modal-title").html('Ubah training');
        $.get("view/training/training_form.php",
            {id_training:$(this).attr('data-id')},
            function(html){
                $(".modal-body").html(html);
            }
        );
    });
</script>

