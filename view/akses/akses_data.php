<?php
include'../../class/gapura_class.php';
include'../../class/msc_function.php';
$db = new Database();
$db->connectMySQL();
$akses = new akses();
?>
  <table id="datat_akses" class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th>ID Akses</th>
			<th>Nama Akses</th>
			<th>Ket Akses</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<?php
		$arrayAkses = $akses->tampilakses();
		if(isset($arrayAkses) && $arrayAkses !=NULL){
			foreach($arrayAkses as $data){
	?>
		<tr>
			<td><?php echo $data['id_akses']?></td>
				<td><?php echo $data['nama_akses']?></td>
				<td><?php echo $data['ket_akses']?></td>
			<td>
				<button class="ubah-akses btn btn-success btn-xs" type="button" data-id="<?php echo $data['id_akses'] ?>"><i class="fa fa-edit"></i></button>
			</td>
		</tr>
	<?php
			}
		}
	?>
	</tbody>
</table>
<script>
$('#datat_akses').dataTable();
$("#datat_akses").on("click",".ubah-akses",function(e){
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

