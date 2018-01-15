<?php
include'../../class/gapura_class.php';
include'../../class/gapura_function.php';
include'../../class/gapura_object.php';
$apsensi = new apsensi;
$training = new training;
$dt=$training->bacatraining($id_training);
?>  

<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    font-family: arial;
    font-size: 12px;
}
</style>

<table width="100%" border="0" cellpadding="1" cellspacing="0">
  <tr>
    <td colspan="4" align="center" valign="center"><h3>TANDA TERIMA SERTIFIKAT<h3></td>
  </tr>
  <tr>
    <td>NAMA TRAINING</td>
    <td>: <?php echo $dt['nama_training']; ?></td>
    <td>HARI / TANGGAL</td>
    <td>: <?php echo $dt['tgl_training']; ?></td>
  </tr>
  <tr>
    <td>MATERI</td>
    <td>: <?php echo $dt['nama_training']; ?></td>
    <td>JAM / DURASI</td>
    <td>: <?php echo $dt['durasi']; ?> Jam</td>
  </tr>
    <tr>
    <td>INSTRUKTUR</td>
    <td>: <?php echo $dt['instruktur']; ?></td>
    <td>LOKASI </td>
    <td>: <?php echo $dt['lokasi']; ?> </td>
  </tr>
</table>

<p>
  <table width="100%" cellpadding="1" cellspacing="2">
    <thead>
        <tr>
            <th>NO</th>
            <th>NIP</th>
            <th>NAMA</th>
            <th>UNIT</th>
            <th>PROVIDER</th>
            <th>PARAF</th>
            
        </tr>
    </thead>
    <tbody>
    <?php
        $arrayapsensi = $apsensi->tampilapsensi();
        if(isset($arrayapsensi) && $arrayapsensi !=NULL){
            foreach($arrayapsensi as $data){
    ?>
        <tr>
            <td align="center"><?php echo $c=$c+1;?></td>
                <td align="center"><?php echo $data['nip']?></td>
                <td><?php echo $data['nama']?></td>
                <td><?php echo $data['nama_unit']?></td>
                <td><?php echo $data['nama_provider']?></td>
                <td><?php echo $b=$b+1;?></td>
        </tr>
    <?php
            }
        }
    ?>
    </tbody>
</table>


