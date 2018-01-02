<?php
include'../../class/gapura_class.php';
include'../../class/gapura_function.php';
include'../../class/gapura_object.php';
$da=$pgw->detailpgw($nip);
$ip=$pgw->bacapgw($nip);
$pen=$pendidikan->ambil_nip($nip);
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
                        <td class="text-success">: <?php echo $da['i_by']; ?> <?php echo $da['i_date']; ?></td>
                    </tr>
                        <tr>
                        <td>Edit </td>
                        <td class="text-danger">: <?php echo $da['e_by']; ?> <?php echo $da['e_date']; ?></td>
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
                INFORMASI PEKERJAAN
            </div>
            <div class="panel-body">
                         <div class="table-responsive">
                <table cellpadding="1" cellspacing="1" class="table table-condensed table-striped">
                    <tbody>
                    <tr>
                        <td>Unit Kerja</td>
                        <td>: <?php echo $ip['nama_unit']; ?></td>
                    </tr>
                    <tr>
                        <td>Posisi Kerja</td>
                        <td>: <?php echo $ip['nm_posisi']; ?></td>
                    </tr>
                    <tr>
                        <td>Provider</td>
                        <td>: <?php echo $ip['nama_provider']; ?></td>
                    </tr>
                    
                     <tr>
                        <td>Jenis Kontrak</td>
                        <td>: <?php echo $ip['jenis_kontrak']; ?></td>
                    </tr>
                    <tr>
                        <td>Status Pegawai</td>
                        <td>: <?php echo $ip['stat_peg']; ?></td>
                    </tr>
                    <tr>
                        <td>TMT Kerja</td>
                        <td class="text-success">: <?php echo DateToIndo($ip['tmt_kerja']); ?></td>
                    </tr>
                    <tr>
                        <td>Jangka Waktu</td>
                        <td class="text-danger">: <?php echo DateToIndo ($ip['jw_kerja']); ?></td>
                    </tr>
                           
                    </tbody>
                </table>
				</div>
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
                DATA PENDIDIKAN
            </div>
            <div class="panel-body">
                     <table cellpadding="1" cellspacing="1" class="table table-condensed table-striped">
                    <tbody>
                    <tr>
                        <td>Pendidikan Akhir</td>
                        <td>: <?php echo $pen['pend_terakhir']; ?></td>
                    </tr>
                    <tr>
                        <td>Program Studi</td>
                        <td>: <?php echo $pen['prodi']; ?></td>
                    </tr>
                    <tr>
                        <td>Tahun Lulus</td>
                        <td>: <?php echo $pen['thn_lulus']; ?></td>
                    </tr>
                    
                     <tr>
                        <td>Pendidikan Asal</td>
                        <td>: <?php echo $pen['pend_asal']; ?></td>
                    </tr>
                                          
                    </tbody>
                </table>
            </div>
            <div class="panel-footer">
                This is standard panel footer
            </div>
        </div>


</div>
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
                    <tr>
                        <td>Henry</td>
                        <td>Purus Gravida Sagittis Limited</td>
                        <td>055 1753 4032</td>
                    </tr>
                    <tr>
                        <td>Shelly</td>
                        <td>Posuere Enim Inc.</td>
                        <td>0313 143 2317</td>
                    </tr>
                    <tr>
                        <td>Edan</td>
                        <td>Quisque Imperdiet Company</td>
                        <td>076 1743 8649</td>
                    </tr>
                    <tr>
                        <td>Sophia</td>
                        <td>Quam Incorporated</td>
                        <td>0863 826 7513</td>
                    </tr>
                    <tr>
                        <td>Griffith</td>
                        <td>Tempor Erat Corp.</td>
                        <td>0845 46 45</td>
                    </tr>

                    </tbody>
                </table>
</div>

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
                DOKUMEN LAMPIRAN
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