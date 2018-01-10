<?php
include'../../class/gapura_class.php';
include'../../class/gapura_function.php';
include'../../class/gapura_object.php';
$training=new training;
$datafile=new datafile;
$da=$pgw->detailpgw($nip);
?>
<div class="row">
<div class="col-xs-6">   
        <div class="hpanel">
            <div class="panel-heading hbuilt">
                <div class="panel-tools">
                </div>DATA PRIBADI
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                <table cellpadding="1" cellspacing="1" class="table table-condensed table-striped">
                    <tbody>
                    <tr>
                        <td>Nip</td>
                        <td>: <?php echo $da['nip']; ?></td>
                    </tr>
                    <tr>
                        <td>Nama </td>
                        <td >: <?php echo $da['nama']; ?></td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td>: <?php echo $da['jekel']; ?></td>
                    </tr>
                    <tr>
                        <td>Kota Lahir</td>
                        <td>: <?php echo $da['kota_lahir']; ?></td>
                    </tr>
                     <tr>
                        <td>Tgl Lahir</td>
                        <td>: <?php echo $da['tgl_lahir']; ?></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>: <?php echo $da['alamat']; ?></td>
                    </tr>
                        <tr>
                        <td>Input </td>
                        <td class="text-primary">: <?php echo $da['i_by']; ?> <?php echo $da['i_date']; ?></td>
                    </tr>
                        <tr>
                        <td>Edit </td>
                        <td class="text-primary">: <?php echo $da['e_by']; ?> <?php echo $da['e_date']; ?></td>
                    </tr>
        
                    </tbody>
                </table>
				</div>
            </div>
        </div>
    </div>
<div class="col-xs-6">
            <div class="hpanel">
            <div class="panel-heading hbuilt">
                <div class="panel-tools">
                </div>
                FOTO PEGAWAI
            </div>
            <div class="panel-body">
                                <?php
                              $arraydatafile=$datafile->lihatfoto();
                              if (count($arraydatafile)) {
                              foreach($arraydatafile as $foto) {
                            ?>
                            <img src="file_pgw/<?php echo $foto['gambar']; ?>" class="img-responsive" width="180">
                              
                              <?php 
                              }
                              }
                                else {
                                echo '<div class="alert alert-danger">Foto Tidak ditemukan !</div>';
                            }
                              ?>       
            </div>
        </div>
</div>
</div>
<div class="row">
<div class="col-xs-6">
	        <div class="hpanel">
            <div class="panel-heading hbuilt">
                <div class="panel-tools">
                </div>
                INFORMASI PEKERJAAN
            </div>
            <div class="panel-body">
                         <div class="table-responsive">
                <table cellpadding="1" cellspacing="1" class="table table-condensed table-striped">
                    <tbody>
                    <tr>
                        <td>Unit Kerja</td>
                        <td>: <?php echo $da['nama_unit']; ?></td>
                    </tr>
                    <tr>
                        <td>Posisi Kerja</td>
                        <td>: <?php echo $da['nm_posisi']; ?></td>
                    </tr>
                    <tr>
                        <td>Provider</td>
                        <td>: <?php echo $da['nama_provider']; ?></td>
                    </tr>
                    
                     <tr>
                        <td>Jenis Kontrak</td>
                        <td>: <?php echo $da['jenis_kontrak']; ?></td>
                    </tr>
                    <tr>
                        <td>Status Pegawai</td>
                        <td>: <?php echo $da['stat_peg']; ?></td>
                    </tr>
                    <tr>
                        <td>TMT Kerja</td>
                        <td class="text-primary">: <?php echo DateToIndo($da['tmt_kerja']); ?></td>
                    </tr>
                    <tr>
                        <td>Jangka Waktu</td>
                        <td class="text-primary">: <?php echo DateToIndo ($da['jw_kerja']); ?></td>
                    </tr>
                           
                    </tbody>
                </table>
				</div>
            </div>
        </div>
</div>

<div class="col-xs-6">
	        <div class="hpanel">
            <div class="panel-heading hbuilt">
                <div class="panel-tools">
  
                </div>
                DATA PENDIDIKAN
            </div>
            <div class="panel-body">
                     <table cellpadding="1" cellspacing="1" class="table table-condensed table-striped">
                    <tbody>
                    <tr>
                        <td>Pendidikan Akhir</td>
                        <td>: <?php echo $da['pend_terakhir']; ?></td>
                    </tr>
                    <tr>
                        <td>Program Studi</td>
                        <td>: <?php echo $da['prodi']; ?></td>
                    </tr>
                    <tr>
                        <td>Tahun Lulus</td>
                        <td>: <?php echo $da['thn_lulus']; ?></td>
                    </tr>
                    
                     <tr>
                        <td>Pendidikan Asal</td>
                        <td>: <?php echo $da['pend_asal']; ?></td>
                    </tr>
                                          
                    </tbody>
                </table>
            </div>
     
        </div>


</div>
</div>
<div class="row">
<div class="col-xs-6">
	        <div class="hpanel">
            <div class="panel-heading hbuilt">
                <div class="panel-tools">
  
                </div>
                HISTORY TRAINING
            </div>
            <div class="panel-body">
               <div class="table-responsive">
                <table cellpadding="1" cellspacing="1" class="table table-condensed table-striped">
                    <thead>
                    <tr>
                        <th>Date</th>
                        <th>Training</th>
                        <th>Durasi</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                            $arraytraining = $training->trainingdiikuti($nip);
                            if(isset($arraytraining) && $arraytraining !=NULL){
                                foreach($arraytraining as $tdi){                
                        ?>
                    <tr>
                        <td><?php echo DateToIndo($tdi['tgl_training']); ?></td>
                        <td><?php echo $tdi['nama_training']; ?></td>
                        <td><?php echo $tdi['durasi']; ?> Jam</td>
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

<div class="col-xs-6">
	        <div class="hpanel">
            <div class="panel-heading hbuilt">
                <div class="panel-tools">
  
                </div>
                DOKUMEN LAMPIRAN
            </div>
            <div class="panel-body">
                    <table cellpadding="1" cellspacing="1" class="table table-condensed">
                    <thead>
                    <tr>
                        <th>NO</th>
                        <th>NAMA LAMPIRAN</th>
                        <th>KATEGORI</th>
                        <th>DOWNLOAD</th>
                    </tr>
                    </thead>
                    <tbody>
                         <?php
                              $arraydatafile=$datafile->tampilDatafile();
                              if (count($arraydatafile)) {
                              foreach($arraydatafile as $d) {
                            ?>
                    <tr>
                        <td><?php echo $c=$c+1; ?></td>
                        <td><?php echo $d['nama_file']; ?></td>
                         <td><?php echo $d['kat_file']; ?></td>
                        
                        <td><a href="file_pgw/<?php echo $d['gambar']; ?>" class="btn btn-primary btn-xs" target="_blank"><i class="fa fa-download fa-1x"></i> DOWNLOAD</a></td>
                        
                    </tr>
                            <?php 
                                }
                            }
                            else {
                                echo '<div class="alert alert-danger">Data Tidak ditemukan !</div>';
                            }

                            ?>
                    </tbody>
                </table>
            </p>
            </div>
        </div>
</div>
</div>
<div class="row">
<div class="col-xs-6">
	        <div class="hpanel">
            <div class="panel-heading hbuilt">
                <div class="panel-tools">
  
                </div>
                HISTORY CUTI
            </div>
            <div class="panel-body">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.Lorem
                    ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan.
            </p>
            </div>
            <div class="panel-footer">
                This is standard panel footer
            </div>
        </div>
</div>
</div>
