<?php
include'../../class/gapura_class.php';
include'../../class/msc_function.php';
$db = new Database();
$db->connectMySQL();
$pgw = new pgw();
?>
  <table id="datat_pgw" class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th>nip</th>
			<th>Nama </th>
			<th>Jekel</th>
			<th>Tmpt Lahir</th>
			<th>Tgl Lahir</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<?php
		$arraypgw = $pgw->tampilpgw();
		if(isset($arraypgw) && $arraypgw !=NULL){
			foreach($arraypgw as $d){
	?>
		<tr>
			<td><?php echo $d['nip']?></td>
				<td><?php echo $d['nama']?></td>
				<td><?php echo $d['jekel']?></td>
				<td><?php echo $d['kota_lahir']?></td>
				<td><?php echo $d['tgl_lahir']?></td>
			<td>
				<button class="ubah-pgw btn btn-success btn-xs" type="button" data-id="<?php echo $d['nip'] ?>"><i class="fa fa-edit"></i></button>
			</td>
		</tr>
	<?php
			}
		}
	?>
	</tbody>
</table>
<script>
$('#datat_pgw').dataTable();
$("#datat_pgw").on("click",".ubah-pgw",function(e){
        e.preventDefault();
		$("#modal-pgw-add").modal('show');
        $(".modal-title").html('Ubah Data Pegawai');
        $.get("view/pgw/pgw_form.php",
            {nip:$(this).attr('data-id')},
            function(html){
                $(".modal-body").html(html);
            }
        );
    });
</script>

