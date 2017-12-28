<?php
include'../../class/gapura_class.php';
include'../../class/msc_function.php';
include'../../class/gapura_object.php';
?>
  <table id="datat_provider" class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th>ID Provider</th>
			<th>Nama Provider</th>
			<th>Alamat</th>
			<th>Telpon</th>
			<th>Web</th>
			<th>Email</th>
			<th>Direktur</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<?php
		$arrayProvider = $provider->tampilprovider();
		if(isset($arrayProvider) && $arrayProvider !=NULL){
			foreach($arrayProvider as $data){
	?>
		<tr>
			<td><?php echo $data['id_provider']?></td>
				<td><?php echo $data['nama_provider']?></td>
				<td><?php echo $data['alamat']?></td>
				<td><?php echo $data['telpon']?></td>
				<td><?php echo $data['web']?></td>
				<td><?php echo $data['email']?></td>
				<td><?php echo $data['direktur']?></td>
				
			<td>
				<button class="ubah-provider btn btn-success btn-xs" type="button" data-id="<?php echo $data['id_provider'] ?>"><i class="fa fa-edit"></i></button>
			</td>
		</tr>
	<?php
			}
		}
	?>
	</tbody>
</table>
<script>
$('#datat_provider').dataTable();
$("#datat_provider").on("click",".ubah-provider",function(e){
        e.preventDefault();
		$("#modal-provider-add").modal('show');
        $(".modal-title").html('Ubah Data Provider');
        $.get("view/provider/provider_form.php",
            {id_provider:$(this).attr('data-id')},
            function(html){
                $(".modal-body").html(html);
            }
        );
    });
</script>

