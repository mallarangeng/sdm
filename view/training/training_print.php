<?php
include'../../class/gapura_class.php';
include'../../class/gapura_function.php';
include'../../class/gapura_object.php';
$training = new training();
?>

<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    font-family: arial;
    font-size: 12px;
}
</style>


<H3 align="center">LAPORAN DATA TRAINING </H3>
PERIODE LAPORAN : <?php echo bulantahun($_GET['periode']); ?>
<table width="100%" border="0" cellpadding="1" cellspacing="0">
	<thead>
		<tr>
			
			<th>NO</th>
			<th>KODE</th>
			<th>NAMA TRAINING</th>
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
				 

           
	?>
		<tr>	
				<td align="center"><?php echo $c=$c+1; ?></td>
				<td><?php echo $data['id_training']?></td>
				<td><strong><?php echo $data['nama_training']?></strong></td>
				<td><?php echo $data['penyelenggara']?></td>
				<td><?php echo $data['instruktur']?></td>
				<td><?php echo $data['tgl_training']; ?></td>
				<td><?php echo $data['durasi']?> Jam</td>
				<td><?php echo $data['lokasi']?></td>
				<td><?php echo $data['tot_siswa']; ?> Siswa</td>
				<td><?php echo $data['ketua_kelas']?></td>
				<td><?php echo $data['stat_training']?></td>
				
		</tr>
	<?php
			}
		}
	?>
	</tbody>
</table>