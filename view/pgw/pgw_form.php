<?php
include'../../class/gapura_class.php';
include'../../class/gapura_function.php';
$db = new Database();
$db->connectMySQL();
$pgw = new pgw();
$da=$pgw->bacapgw($nip);
    if ($da['nip']>0) {
        $nip         = $da['nip'];
        $nama        = $da['nama'];
        $jekel       = $da['jekel'];
        $kota_lahir  = $da['kota_lahir'];
        $tgl_lahir   = $da['tgl_lahir'];
        $nipform     = 'readonly';//agar field nip read only saat edit data
    }
    else
    {
        $nip         = '';
        $nama        = '';
        $jekel       = 'Jenis Kelamin';
        $kota_lahir  = '';
        $tgl_lahir   = '';
    }
?>
<div class="panel-body">
    <form method="get" class="form-horizontal" id="form_2">
        <div class="hpanel">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#tab-1">DATA PRIBADI</a></li>
                <li class=""><a data-toggle="tab" href="#tab-2">UNIT KERJA</a></li>
                <li class=""><a data-toggle="tab" href="#tab-3">FORM 3</a></li>
            </ul>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane active">
                    <div class="panel-body">
                         <div class="form-group">
                               <label class="col-sm-4 control-label">NIP</label>
                               <div class="col-sm-6">
                               <input type="text" placeholder="nip" class="form-control input-sm" id="nip" value="<?php echo $nip ?>"<?php echo $nipform; ?>>
                                </div>
                         </div>
                        <div class="form-group">
                                <label class="col-sm-4 control-label">Nama Pegawai</label>
                                <div class="col-sm-8">
                                    <input type="hidden" id="nip" value="<?php echo $nip?>">
                                <input type="text" placeholder="Nama" class="form-control input-sm" id="nama" value="<?php echo $nama ?>">
                                </div>
                         </div>
                         <div class="form-group">
                                <label class="col-sm-4 control-label">Jenis Kelamin</label>
                                <div class="col-sm-4">
                                <select id="jekel" class="form-control m-b">
                                    <option value="<?php echo $jekel; ?>"><?php echo $jekel; ?></option>
                                    <option value="L">L</option>
                                    <option value="P">P</option>
                                </div>
                         </div>
                                <div class="form-group">
                                <label class="col-sm-4 control-label">Kota Lahir</label>
                                <div class="col-sm-6">
                                <input type="text" placeholder="Kota Lahir" class="form-control input-sm" id="kota_lahir" value="<?php echo $kota_lahir ?>">
                                </div>
                         </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Tanggal Lahir</label>
                                <div class="col-sm-4">
                                    <input type="text" placeholder="yyyy-mm-dd" class="form-control input-sm" id="tgl_lahir" value="<?php echo $tgl_lahir ?>">
                                </div>
                         </div>
                               <div class="form-group">
                                <label class="col-sm-4 control-label">Alamat</label>
                                <div class="col-sm-8">
                                <input type="text" placeholder="Alamat" class="form-control input-sm" id="alamat" value="<?php echo $alamat ?>">
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

<script>
$('#tgl_lahir').datepicker({
                        format: 'yyyy-mm-dd',
                        keyboardNavigation: false,
                        forceParse: false,
                        autoclose: true
                    });
     $("#durasi").TouchSpin({
                postfix: 'Jam'
            });
</script>