<?php
include'../../class/gapura_class.php';
include'../../class/gapura_function.php';
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
			<th>PEND</th>
	
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
				<td><?php echo DateToIndo($d['tmt_kerja']);?></td>
				<td><?php echo DateToIndo($d['jw_kerja']);?></td>
				<td><?php echo $d['jenis_kontrak']?> - <?php echo $d['stat_peg']?></td>
				<td><?php echo $d['cabang']?><small><?php echo $d['aktif'] ?></small></td>
				<td><?php echo $d['pend_terakhir'] ?></td>

				
			<td>
				<button class="ubah-pgw btn btn-success btn-xs" type="button" data-id="<?php echo $d['nip'] ?>"><i class="fa fa-edit"></i></button>
				<a href="?r=file&pg=file&nip=<?php echo $d['nip']?>" class="btn btn-default btn-xs" type="button" data-id="<?php echo $d['nip'] ?>"><i class="fa fa- pe-7s-paperclip"></i></a>
				 <a href="javascript:void(0);"
    onclick="window.open('view/pgw/pgw_cetak.php?nip=<?php echo $d['nip']; ?>','nama_window_pop_up','size=800,height=800,scrollbars=yes,resizeable=no')">PDF</a>
				
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

