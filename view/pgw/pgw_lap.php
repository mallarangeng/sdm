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
        <div class="col-lg-12">
            <div class="hpanel">
		<div class="panel-body">
	
			<form method="POST" action="#" class="form-horizontal">
                <div class="hr-line-dashed"></div>
			      <div class="form-group">
                    <div class="col-sm-8">
                        <div class="row">
							<div class="col-md-2">
                        	<label class="control-label">PILIH PERIODE</label>
                            </div>
                            <div class="col-md-3">
                            	<select class="form-control" name="bulan">
                            	<option value="">Pilih Bulan</option>
                            	<option value="01">Januari</option>
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
                            <div class="col-md-2"><input type="text" name="tahun" value="<?php echo date('Y'); ?>" class="form-control"></div>
                            <div class="col-md-2"><input type="submit" class="btn btn-primary" value="lihat" name="do" value="Tampilkan"></div>
                            
                        </div>
                    </div>
                </div>
            </form>

				<div class="row">
				    <div class="col-lg-12">
				     <div class="hpanel">
						<div class="panel-body">
							<strong>LAPORAN DATA PEGAWAI RESIGN BULAN <?php echo $periode=$_POST['tahun']."-".$_POST['bulan']; ?></strong>
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
			<?php
					if ($_POST['do']=='lihat') 
					{
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
							<strong>LAPORAN DATA PEGAWAI RESIGN BULAN <?php echo $periode=$_POST['tahun']."-".$_POST['bulan']; ?></strong>
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
					<th>TGL RESIGN</th>
					<th>JW KERJA</th>
					<th>JENIS KONTRAK</th>
					<th>CABANG</th>
					<th>PEND</th>
				</tr>
			</thead>
			<tbody>
			<?php
					if ($_POST['do']=='lihat') 
					{
					$arraypgw = $pgw->lap_pgw2();
					}
					if(isset($arraypgw) && $arraypgw !=NULL){
					foreach($arraypgw as $re){
			?>
				<tr>
						<td><?php echo $c=$c+1; ?></td>
						<td><?php echo $re['nip']?></td>
						<td><strong><?php echo $re['nama']?></strong></td>
						<td><?php echo $re['nama_unit']?></td>
						<td><?php echo $re['nm_posisi']?></td>
						<td><?php echo $re['nama_provider']?></td>
						<td><?php echo $re['tmt_kerja'];?></td>
						<td><?php echo $re['jw_kerja'];?></td>
						<td><?php echo $re['jenis_kontrak']?> - <?php echo $d['stat_peg']?></td>
						<td><?php echo $re['cabang']?></td>
						<td><?php echo $re['pend_terakhir'] ?></td>
						

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
</div>

<script>
	  $(".js-source-states").select2();
</script>

