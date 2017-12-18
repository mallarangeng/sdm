<?php
include'../../class/gapura_class.php';
include'../../class/msc_function.php';
$db = new Database();
$db->connectMySQL();
$diklat = new diklat();
?>  
  <table id="datat_diklat" class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th>ID Diklat</th>
			<th>Nama Diklat</th>
			<th>Penyelenggara</th>
			<th>Insruktur</th>
			<th>Tgl Diklat</th>
			<th>Durasi</th>
			<th>Lokasi</th>
			<th>Jml Peserta</th>
			<th>Ketua Kelas</th>
			<th>Status</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<?php
		$arrayDiklat = $diklat->tampilDiklat();
		if(isset($arrayDiklat) && $arrayDiklat !=NULL){
			foreach($arrayDiklat as $data){
	?>
		<tr>
			<td><?php echo $data['id_diklat']?></td>
				<td><?php echo $data['nama_diklat']?></td>
				<td><?php echo $data['penyelenggara']?></td>
				<td><?php echo $data['instruktur']?></td>
				<td><?php echo $data['tgl_diklat']?></td>
				<td><?php echo $data['durasi']?></td>
				<td><?php echo $data['lokasi']?></td>
				<td><?php echo $data['jumlah']?></td>
				<td><?php echo $data['ketua_kelas']?></td>
				<td><?php echo $data['stat_diklat']?></td>
			<td>
				<button class="ubah-diklat btn btn-success btn-xs" type="button" data-id="<?php echo $data['id_diklat'] ?>"><i class="fa fa-edit"></i></button>
			</td>
		</tr>
	<?php
			}
		}
	?>
	</tbody>
</table>

<script>
$('#datat_diklat').dataTable();
$("#datat_diklat").on("click",".ubah-diklat",function(e){
        e.preventDefault();
		$("#modal-diklat-add").modal('show');
        $(".modal-title").html('Ubah Diklat');
        $.get("view/diklat/diklat_ubah.php",
            {id_diklat:$(this).attr('data-id')},
            function(html){
                $(".modal-body").html(html);
            }
        );
    });
</script>

