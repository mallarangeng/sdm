<?php
include'../../class/gapura_class.php';
include'../../class/msc_function.php';
include'../../class/gapura_object.php';
?>
  <table class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th>No</th>
			<th>Nip</th>
			<th>Nama</th>
			<th>Status</th>
			<th>Jenis Diklat</th>
			<th>Tanggal</th>
			<th>Tempat</th>
			<th>Durasi</th>
			<th>Penyelenggara</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>

		<tr>
			<td><?php echo $data['id_akses']?></td>
				<td><?php echo $data['nama_akses']?></td>
				<td><?php echo $data['ket_akses']?></td>
				<td><?php echo $data['ket_akses']?></td>
				<td><?php echo $data['ket_akses']?></td>
				<td><?php echo $data['ket_akses']?></td>
				<td><?php echo $data['ket_akses']?></td>
				<td><?php echo $data['ket_akses']?></td>
				<td><?php echo $data['ket_akses']?></td>
			<td>
				<button class="ubah-akses btn btn-success btn-xs" type="button" data-id="<?php echo $data['id_akses'] ?>"><i class="fa fa-edit"></i></button>
			</td>
		</tr>
	</tbody>
</table>


<script>
$('#datat_apsensi').dataTable();
$("#datat_apsensi").on("click",".ubah-akses",function(e){
        e.preventDefault();
		$("#modal-akses-add").modal('show');
        $(".modal-title").html('Ubah Data Akses');
        $.get("view/akses/akses_form.php",
            {id_akses:$(this).attr('data-id')},
            function(html){
                $(".modal-body").html(html);
            }
        );
    });
</script>

