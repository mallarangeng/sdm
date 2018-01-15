<?php
include'../../class/gapura_class.php';
include'../../class/gapura_function.php';
include'../../class/gapura_object.php';
$training = new training();

?>


<div class="normalheader transition animated fadeIn">
	<div class="row">
    <div class="hpanel">
        <div class="panel-body">

            <h3 class="font-light m-b-xs">
                Laporan Data Training
            </h3>
            <small>Halaman untuk laporan data training</small>
        </div>
    </div>
</div>
</div>

<div class="content">
    <div class="row">
            <div class="hpanel">
            	<div class="panel-body">
<!-- Form untuk laporan data trainig -->
<form method="GET" action="" class="form-horizontal" id="myform">
               
			      <div class="form-group">
                    <div class="col-sm-8">
                        <div class="row">
							<div class="col-md-2">
                        	<label class="control-label">PILIH PERIODE</label>
                            </div>
                            <input type="hidden" name="r" value="training">
                            <input type="hidden" name="pg" value="training_lap">
                            <div class="col-md-2">
                            	<input type="text" name="periode" value="<?php echo date('Y'); ?>" class="form-control">
                            </div>
                            <div class="col-md-2">
                    		<select name="bulan" class="form-control" required>
                    			<option value="">-Bulan-</option>
                    			<option value="01">Januari </option>
                    			<option value="02">Februari</option>
                    			<option value="03">Maret</option>
                    			<option value="04">April</option>
                    			<option value="05">Mei</option>
                    			<option value="06">Juni</option>
                    			<option value="07">Juli</option>
                    			<option value="08">Agustus</option>
                    			<option value="09">September</option>
                    			<option value="10">Oktober</option>
                    			<option value="11">Nopember</option>
                    			<option value="12">Desember</option>
                    			<option value="">Semua Bulan</option>
                    			
                    		</select>
                    </div>
<button type="submit" class="btn btn-primary" name="taks" value="search"><i class="fa pe-7s-search
"></i> Cari Data</button>
	
	<?php 
	if ($_GET['taks']=='search'){			
	?>
	<a href="javascript:void(0);"
    onclick="window.open('view/training/training_print.php?periode=<?php echo $_GET['periode']; ?>&taks=search','Data Training','size=800,height=800,scrollbars=yes,resizeable=no')" class="btn btn-success"><i class="fa pe-7s-print
"></i> Print</a>
	<?php
		}
	?>
 
                            
                        </div>
                    </div>
                </div>
            </form>
            <!-- Tutup forom data training -->

<div class="table-responsive">
  <table id="datat_training" class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			
			<th>NO</th>
			<th>KODE & NAMA TRAINING</th>
			<th>ORGANIZER</th>
			<th>INSTRUKTUR</th>
			<th>TANGGAL</th>
			<th>DURASI</th>
			<th>LOKASI</th>
			<th>JML SISWA</th>		
			<th>KETUA KELAS</th>
			<th>STATUS</th>
			
		</tr>
	</thead>
	<tbody>
	<?php
		if ($_GET['taks']=='search'){
		$arraytraining = $training->lap_training();
		}
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
		<tr>	
				<td><?php echo $c=$c+1; ?></td>
				<td><strong><?php echo $data['id_training']?> <?php echo $data['nama_training']?></strong></td>
				<td><?php echo $data['penyelenggara']?></td>
				<td><?php echo $data['instruktur']?></td>
				<td><?php echo $data['tgl_training']; ?></td>
				<td><?php echo $data['durasi']?> Jam</td>
				<td><?php echo $data['lokasi']?></td>
				<td><?php echo $data['tot_siswa']; ?> Siswa</td>
				<td><?php echo $data['ketua_kelas']?></td>
				<td class="text-<?php echo $aa; ?>"><?php echo $data['stat_training']; ?></td>
		</tr>
	<?php
			}
		}
	?>
	</tbody>
</table>

</div>
</div>
</div>
</div>

<script src="vendor/jquery/dist/jquery.min.js"></script>
<script>
$(document).ready(function () {
  $('#myform').on('submit', function() {
    var bln = $('[name="bulan"]').val();
    $('[name="bulan"]').attr('disabled', true);
    var thn = $('[name="periode"]').val();
    thn += '-'+bln;
    $('[name="periode"]').val(thn);
  });
});
</script>