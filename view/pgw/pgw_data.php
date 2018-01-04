<?php
include'../../class/gapura_class.php';
include'../../class/msc_function.php';
include'../../class/gapura_object.php';
?>
<div class="table-responsive">
  <table id="datat_pgw" class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th>NIP</th>
			<th>NAMA </th>		
			<th>UNIT</th>
			<th>POSISI</th>
			<th>PROFIDER</th>
			<th>TMT</th>
			<th>JW KERJA</th>
			<th>JENIS KONTRAK</th>
			<th>CABANG</th>
			<th>PENDIDIKAN</th>
			<th>AKSI</th>
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
				<td><?php echo $d['nama_unit']?></td>
				<td><?php echo $d['nm_posisi']?></td>
				<td><?php echo $d['nama_provider']?></td>
				<td><?php echo $d['tmt_kerja']?></td>
				<td><?php echo $d['jw_kerja']?></td>
				<td><?php echo $d['jenis_kontrak']?> - <?php echo $d['stat_peg']?></td>
				<td><?php echo $d['cabang']?></td>
				<td><button class="ubah-pendidikan btn btn-default btn-xs" type="button" data-id="<?php echo $d['id_pend'] ?>"><i class="fa pe-7s-study"></i></button> <?php echo $d['pend_terakhir'] ?></td>
				
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
$("#datat_pgw").on("click",".ubah-pendidikan",function(e){
        e.preventDefault();
		$("#modal-pgw-pendidikan").modal('show');
        $(".modal-title").html('Ubah data Pendidikan');
        
        $.get("view/pendidikan/pendidikan_form.php",
            {id_pend:$(this).attr('data-id')},
            function(html){
                $(".modal-body").html(html);

            }
        );
    });
</script>

