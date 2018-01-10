<?php
include'../../class/gapura_class.php';
include'../../class/gapura_function.php';
include'../../class/gapura_object.php';
$apsensi = new apsensi();
?>

<div class="table-responsive">
  <table id="datat_training" class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th>##</th>
			<th>NO</th>
			<th>KODE</th>
			<th>NAMA TRAINING</th>
			<th>PENYE LENGGARA</th>
			<th>INSTRUKTUR</th>
			<th>TANGGAL</th>
			<th>DURASI</th>
			<th>LOKASI</th>
			<th>JML SISWA</th>		
			<th>KETUA KELAS</th>
			<th>STATUS</th>
			<th>AKSI</th>
		</tr>
	</thead>
	<tbody>
	<?php
		$arraytraining = $training->tampiltraining();
		if(isset($arraytraining) && $arraytraining !=NULL){
			foreach($arraytraining as $data){
				 if($data['stat_training']=='Selesai'){
                  $aa='success';
                  }
                  else if($data['stat_training']=='Terjadwal'){  
                  $aa='info';
                 	}
                 	else {
                 		$aa='primary';

                }
	?>
		<tr>	<td><li class="fa pe-7s-notebook fa-2x"></li></td>
				<td><?php echo $c=$c+1; ?></td>
				<td><?php echo $data['id_training']?></td>
				<td><strong><?php echo $data['nama_training']?></strong></td>
				<td><?php echo $data['penyelenggara']?></td>
				<td><?php echo $data['instruktur']?></td>
				<td><?php echo DateToIndo($data['tgl_training']); ?></td>
				<td><?php echo $data['durasi']?> Jam</td>
				<td><?php echo $data['lokasi']?></td>
				<td><strong><a href="?r=apsen&pg=apsen&id=<?php echo $data['id_training']?>"><?php echo $data['tot_siswa']; ?> Siswa</a></strong></td>
				<td><?php echo $data['ketua_kelas']?></td>
				<td class="text-<?php echo $aa; ?>"><?php echo $data['stat_training']; ?></td>
			<td>
				<button class="ubah-training btn btn-success btn-xs" type="button" data-id="<?php echo $data['id_training'] ?>" title="INPUT : <?php echo $data['i_by'].'-'.$data['i_date'].'- EDIT : '.$data['e_by'].'-'.$data['e_date'] ?>"><i class="fa fa-edit"></i></button>
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
$('#datat_training').dataTable();
$("#datat_training").on("click",".ubah-training",function(e){
        e.preventDefault();
		$("#modal-training-add").modal('show');
        $(".modal-title").html('Ubah training');
        $.get("view/training/training_form.php",
            {id:$(this).attr('data-id')},
            function(html){
                $(".modal-body").html(html);
            }
        );
    });
</script>

