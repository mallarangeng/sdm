<?php
include'../../class/gapura_class.php';
include'../../class/gapura_function.php';
include'../../class/gapura_object.php';
$da=$pgw->bacapgw($nip);

    if ($da['nip']>0) {
        $nip         = $da['nip'];
        $nama        = $da['nama'];
        $jekel       = $da['jekel'];
        $kota_lahir  = $da['kota_lahir'];
        $tgl_lahir   = $da['tgl_lahir'];
        $nipform     = 'readonly';//agar field nip read only saat edit data
        $alamat      = $da['alamat'];
        $id_unit     = $da['id_unit'];
        $id_posisi   = $da['id_posisi'];
        $id_provider = $da['id_provider'];
        $tmt_kerja   = $da['tmt_kerja'];
        $jenis_kontrak  = $da['jenis_kontrak'];
        $cabang      = $da['cabang'];
        $stat_peg    = $da['stat_peg'];
        $aktif       = $da['aktif'];
        $note_aktif  = $da['note_aktif'];
        $id_akses    = $da['id_akses'];
    }
    else
    {
        $nip         = '';
        $nama        = '';
        $jekel       = 'Jenis Kelamin';
        $kota_lahir  = '';
        $tgl_lahir   = '';
        $alamat      = '';
        $id_unit     = '';
        $id_posisi   = '';
        $id_provider = '';
        $tmt_kerja   = '';
        $jenis_kontrak = '';
        $cabang      = '';
        $stat_peg    = '';
        $aktif       = '';
        $note_aktif  = '';
        $id_akses    = '';
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
                                <div class="col-sm-4">
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
                        <div class="form-group">
                                <label class="col-sm-4 control-label">Unit Kerja</label>
                                <div class="col-sm-6">
                                <select class="js-source-states" id="id_unit" style="width: 100%">
                                    <?php
                                            $arrayunit = $unit->tampilunit();
                                            if(isset($arrayunit) && $arrayunit !=NULL){
                                                foreach($arrayunit as $du){
                                        ?>                
                                    <option value="<?php echo $du['id_unit']?>"><?php echo $du['nama_unit']?></option>
                                    <?PHP 
                                        }
                                    }
                                    ?>
                                </select>
                                  </div>
                         </div>
                         <div class="form-group">
                                <label class="col-sm-4 control-label">Posisi Kerja</label>
                                <div class="col-sm-6">
                                <select class="js-source-states" id="id_posisi" style="width: 100%">
                                    <?php
                                            $arrayPosisi = $posisi->tampilposisi();
                                            if(isset($arrayPosisi) && $arrayPosisi !=NULL){
                                                foreach($arrayPosisi as $dp){
                                        ?>                   
                                    <option value="<?php echo $dp['id_posisi']?>"><?php echo $dp['nm_posisi']?></option>
                                    <?php
                                }
                            }
                            ?>
                                </select>
                                  </div>
                         </div>
                         <div class="form-group">
                                <label class="col-sm-4 control-label">Provider</label>
                                <div class="col-sm-6">
                                <select class="js-source-states" id="id_provider" style="width: 100%">
                                    <?php
                                        $arrayProvider = $provider->tampilprovider();
                                        if(isset($arrayProvider) && $arrayProvider !=NULL){
                                            foreach($arrayProvider as $data_prov){
                                    ?>              
                                    <option value="<?php echo $data_prov['id_provider']?>"><?php echo $data_prov['nama_provider']?></option>
                                    <?php
                                        }
                                    }
                                    ?>
                                </select>
                                  </div>
                         </div>
                                <div class="form-group">
                                <label class="col-sm-4 control-label">TMT Kerja</label>
                                <div class="col-sm-4">
                                    <input type="text" placeholder="yyyy-mm-dd" class="form-control input-sm" id="tmt_kerja" value="<?php echo $tmt_kerja ?>">
                                </div>
                         </div>
                          <div class="form-group">
                                <label class="col-sm-4 control-label">Jenis Kontrak</label>
                                <div class="col-sm-6">
                                <select class="js-source-states" id="jenis_kontrak" style="width: 100%">                   
                                    <option value="SDM">SDM</option>
                                    <option value="SDM">PEKERJAAN</option>
                                </select>
                                  </div>
                         </div>
                          
                           <div class="form-group">
                                <label class="col-sm-4 control-label">Cabang</label>
                                <div class="col-sm-4">
                                <select class="js-source-states" id="cabang" style="width: 100%">                   
                                    <option value="CGO">CGO</option>
                                    <option value="CKG">CKG</option>
                                </select>
                                  </div>
                         </div>

                    </div>
                </div>
                <div id="tab-3" class="tab-pane">
                    <div class="panel-body">
                        <div class="form-group">
                                <label class="col-sm-4 control-label">Status Pegawai</label>
                                <div class="col-sm-4">
                                <select class="js-source-states" id="stat_peg" style="width: 100%">                   
                                    <option value="OS">OS</option>
                                    <option value="PKWT">PKWT</option>
                                    <option value="TETAP">TETAP</option>
                                </select>
                                  </div>
                         </div>
                         <div class="form-group">
                                <label class="col-sm-4 control-label">Status Aktif</label>
                                <div class="col-sm-4">
                                <select class="js-source-states" id="aktif" style="width: 100%">                   
                                    <option value="Aktif">Aktif</option>
                                    <option value="Non Aktif">Non Aktif</option>
                                    
                                </select>
                                  </div>
                         </div>
                        <div class="form-group">
                                <label class="col-sm-4 control-label">Keterangan Aktif/Non aktif</label>
                                <div class="col-sm-8">
                                <input type="text" placeholder="Kota Lahir" class="form-control input-sm" id="note_aktif" value="<?php echo $kota_lahir ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Akses Ke sistem </label>
                                <div class="col-sm-4">
                                <select class="js-source-states" id="id_akses" style="width: 100%">
                                    <?php
                                        $arrayAkses = $akses->tampilakses();
                                        if(isset($arrayAkses) && $arrayAkses !=NULL){
                                            foreach($arrayAkses as $da){
                                    ?>                   
                                    <option value="<?php echo $da['id_akses']?>"><?php echo $da['nama_akses']?></option>
                                    <?php
                                        }
                                    }
                                    ?>

                                    
                                </select>
                                  </div>
                         </div>
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
$('#tmt_kerja').datepicker({
                        format: 'yyyy-mm-dd',
                        keyboardNavigation: false,
                        forceParse: false,
                        autoclose: true
                    });
     $("#durasi").TouchSpin({
                postfix: 'Jam'
            });
      $(".js-source-states").select2();
</script>