<?php
include'../../class/gapura_class.php';
include'../../class/gapura_function.php';
include'../../class/gapura_object.php';
$training=new training;
$datafile=new datafile;
$da=$pgw->detailpgw($nip);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Detail Pegawai</title>
</head>
<body>
	<h2>LAPORAN DATA PEGAWAI</h2>
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


            
</body>
</html>

<?php
$filename="PEGAWAI-".$_GET['nip'].".pdf";
#UNTUK PENAMAAN FILE PDF
$content = ob_get_clean();
$content = '<page style="font-family: freeserif">'.nl2br($content).'</page>';
 require_once('../../html2pdf/html2pdf.class.php');
 try
 {
  $html2pdf = new HTML2PDF('P','A4','en', false, 'ISO-8859-15',array(30, 0, 20, 0));
  $html2pdf->setDefaultFont('Arial');
  $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
  $html2pdf->Output($filename);
 }
 catch(HTML2PDF_exception $e) { echo $e; }
?>