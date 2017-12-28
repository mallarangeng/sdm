<?php
include'../../class/gapura_class.php';
include'../../class/msc_function.php';
include'../../class/gapura_object.php';
?>
<div class="table-responsive">
  <table id="datat_pgw" class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th>nip</th>
			<th>Nama </th>		
			<th>ID Unit</th>
			<th>ID Posisi</th>
			<th>ID Provider</th>
			<th>TMT</th>
			<th>Jenis Kontrak</th>
			<th>CABANG</th>
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
				<td><a class="detail-pgw" data-id="<?php echo $d['nip']?>" href=""><?php echo $d['nama']?></a></td>
				<td><?php echo $d['id_unit']?></td>
				<td><?php echo $d['id_posisi']?></td>
				<td><?php echo $d['id_provider']?></td>
				<td><?php echo $d['tmt_kerja']?></td>
				<td><?php echo $d['jenis_kontrak']?></td>
				<td><?php echo $d['cabang']?></td>
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
</div>
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
$("#datat_pgw").on("click",".detail-pgw",function(e){
        e.preventDefault();
		$("#modal-pgw-detail").modal('show');
        $(".modal-title").html('Detail Informasi Pegawai');
        $.get("view/pgw/pgw_detail.php",
            {nip:$(this).attr('data-id')},
            function(html){
                $(".modal-body").html(html);
            }
        );
    });
</script>

