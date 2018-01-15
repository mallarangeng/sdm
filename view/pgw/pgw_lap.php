		<?php
		include'../../class/gapura_class.php';
		include'../../class/gapura_function.php';
		include'../../class/gapura_object.php';
		$db = new Database();
		$db->connectMySQL();
		$pgw=new pgw;
		?>
<div class="content">
    <div class="row">
            <div class="hpanel">
		<div class="panel-body">
	
			<form method="GET" action="" class="form-horizontal" id="myform">
			      <div class="form-group">
                    <div class="col-sm-8">
                        <div class="row">
							<div class="col-md-2">
                        	<label class="control-label">PILIH PERIODE</label>
                            </div>
                            <input type="hidden" name="r" value="pgw">
                            <input type="hidden" name="pg" value="pgw_lap">
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
                            			
                            		</select>
                            </div>

                            <button type="submit" class="btn btn-primary" name="taks" value="search"><i class="fa pe-7s-search
"></i> Cari Data</button>
                            
                        </div>
                    </div>
                </div>
            </form>

				<div class="row">
				    <div class="col-lg-12">
				     <div class="hpanel">
						<div class="panel-body">
							<strong>LAPORAN DATA PEGAWAI RESIGN BULAN</strong>
						</div>
					</div>
					</div>
				</div>

		  <table id="datat_pgw" class="table table-striped table-bordered table-hover">
			<thead>
				<tr>
					<th>NO</th>
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
				</tr>
			</thead>
			<tbody>
			<?php   if ($_GET['taks']=='search'){
					$arraypgw = $pgw->lap_pgw();
					}	
					if(isset($arraypgw) && $arraypgw !=NULL){
					foreach($arraypgw as $d){
			?>
				<tr>
						<td><?php echo $c=$c+1; ?></td>
						<td><?php echo $d['nip']?></td>
						<td><strong><?php echo $d['nama']?></strong></td>
						<td><?php echo $d['nama_unit']?></td>
						<td><?php echo $d['nm_posisi']?></td>
						<td><?php echo $d['nama_provider']?></td>
						<td><?php echo $d['tmt_kerja'];?></td>
						<td><?php echo $d['jw_kerja'];?></td>
						<td><?php echo $d['jenis_kontrak']?> - <?php echo $d['stat_peg']?></td>
						<td><?php echo $d['cabang']?></td>
						<td><?php echo $d['pend_terakhir'] ?></td>
						

				</tr>
			<?php
					}
				}
			?>
			</tbody>
		</table>

		<div class="row">
				    <div class="col-lg-12">
				     <div class="hpanel">
						<div class="panel-body">
							<strong>LAPORAN DATA PEGAWAI RESIGN BULAN</strong>
						</div>
					</div>
					</div>
				</div>

		  <table id="datat_pgw" class="table table-striped table-bordered table-hover">
			<thead>
				<tr>
					<th>NO</th>
					<th>NIP</th>
					<th>NAMA </th>		
					<th>UNIT</th>
					<th>POSISI</th>
					<th>PROFIDER</th>
					<th>TMT</th>
					<th>JW KERJA</th>
					<th>TGL RESIGN</th>
					<th>JENIS KONTRAK</th>
					<th>CABANG</th>
					<th>PEND</th>
				</tr>
			</thead>
			<tbody>
			<?php
					if ($_GET['taks']=='search'){
					$arraypgw = $pgw->lap_pgw2();	
					}
					if(isset($arraypgw) && $arraypgw !=NULL){
					foreach($arraypgw as $data){
			?>
				<tr>
						<td><?php echo $b=$b+1; ?></td>
						<td><?php echo $data['nip']?></td>
						<td><strong><?php echo $data['nama']?></strong></td>
						<td><?php echo $data['nama_unit']?></td>
						<td><?php echo $data['nm_posisi']?></td>
						<td><?php echo $data['nama_provider']?></td>
						<td><?php echo $data['tmt_kerja'];?></td>
						<td><?php echo $data['jw_kerja'];?></td>
						<td><?php echo $data['tgl_aktif'];?></td>
						<td><?php echo $data['jenis_kontrak']?> - <?php echo $d['stat_peg']?></td>
						<td><?php echo $data['cabang']?></td>
						<td><?php echo $data['pend_terakhir'] ?></td>
						

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


