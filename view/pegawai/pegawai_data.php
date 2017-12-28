<?php
include'../../class/gapura_class.php';
include'../../class/msc_function.php';
include'../../class/gapura_object.php';
?>
  <table id="datat_pegawai" class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th>Nip</th>
			<th>Nama</th>
			<th>Jekel</th>
			<th>Kota Lahir</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<?php
		$arrayPegawai = $pegawai->tampilpegawai();
		if(isset($arrayPegawai) && $arrayPegawai !=NULL){
			foreach($arrayPegawai as $data){
	?>
		<tr>
			<td><?php echo $data['nip']?></td>
				<td><?php echo $data['nama']?></td>
				<td><?php echo $data['jekel']?></td>
				<td><?php echo $data['kota_lahir']?></td>
				
			<td>
				<button class="ubah-pegawai btn btn-success btn-xs" type="button" data-id="<?php echo $data['nip'] ?>"><i class="fa fa-edit"></i></button>
			</td>
		</tr>
	<?php
			}
		}
	?>
	</tbody>
</table>
<script>
$('#datat_pegawai').dataTable();
$("#datat_pegawai").on("click",".ubah-pegawai",function(e){
        e.preventDefault();
		$("#modal-pegawai-add").modal('show');
        $(".modal-title").html('Ubah Data pegawai');
        $.get("view/pegawai/pegawai_form.php",
            {nip:$(this).attr('data-id')},
            function(html){
                $(".modal-body").html(html);
            }
        );
    });
</script>

