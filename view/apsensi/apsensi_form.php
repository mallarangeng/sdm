<?php
include'../../class/gapura_class.php';
include'../../class/gapura_function.php';
include'../../class/gapura_object.php';
$id=$_GET['id_training'];
$da=$akses->bacaakses($id_akses);
    if ($da['id_akses']>0) {
        $id_akses          = $da['id_akses'];
        $nama_akses        = $da['nama_akses'];
        $ket_akses         = $da['ket_akses'];
    }else{
        $id_akses          = '';
        $nama_akses        = '';
        $ket_akses         = '';
    }
?>
<script type="text/javascript">
    $(".js-source-states").select2();
</script>