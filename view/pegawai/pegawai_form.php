<?php
include'../../class/gapura_class.php';
include'../../class/gapura_function.php';
$db = new Database();
$db->connectMySQL();
$pegawai = new pegawai();
$da=$pegawai->bacapegawai($nip);
    if ($da['nip']>0) {
        $nip           = $da['nip'];
        $nama           = $da['nama'];
        $jekel          = $da['jekel'];
        $kota_lahir     = $da['kota_lahir'];
        
    } else {
        
        $nip           =  '';
        $nama           = '';
        $jekel          = '';
        $kota_lahir     = '';
    }
?>
<div class="panel-body">
    <form method="get" class="form-horizontal" id="form_2">
        <div class="hpanel">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#tab-1">FROM 1</a></li>
                <li class=""><a data-toggle="tab" href="#tab-2">FORM 2</a></li>
                <li class=""><a data-toggle="tab" href="#tab-3">FORM 3</a></li>
            </ul>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane active">
                    <div class="panel-body">
                        <div class="form-group">
                                <label class="col-sm-4 control-label">nip Pegawai <?php echo $_GET['nip']; ?></label>
                                <div class="col-sm-8">
                                <input type="hidden" id="nip" value="<?php echo $nip?>">
                                </div>
                         </div>
                        <div class="form-group">
                                <label class="col-sm-4 control-label">Nama Pegawai</label>
                                <div class="col-sm-8">
                                <input type="text" placeholder="Nama" class="form-control input-sm" id="nama" value="<?php echo $nama ?>">
                                </div>
                         </div>
                         <div class="form-group">
                                <label class="col-sm-4 control-label">Jenis Kelamin</label>
                                <div class="col-sm-8">
                                <input type="text" placeholder="Jenis Kelamin" class="form-control input-sm" id="jekel" value="<?php echo $jekel ?>">
                                </div>
                         </div>
                         <div class="form-group">
                                <label class="col-sm-4 control-label">Kota Lahir</label>
                                <div class="col-sm-8">
                                <input type="text" placeholder="Kota Lahir" class="form-control input-sm" id="kota_lahir" value="<?php echo $kota_lahir ?>">
                                </div>
                         </div>
                    </div>
                </div>
                <div id="tab-2" class="tab-pane">
                    <div class="panel-body">
                        <strong>FORM 2 DATA PEGAWAI</strong>
                    </div>
                </div>
                <div id="tab-3" class="tab-pane">
                    <div class="panel-body">
                        <strong>FORM 3 DATA PENDIDIKAN</strong>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>