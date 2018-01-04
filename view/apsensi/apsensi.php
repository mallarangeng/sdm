<?php
include'../../class/gapura_class.php';
include'../../class/gapura_function.php';
include'../../class/gapura_object.php';
$training = new training;
$pgw = new pgw;
$id_training = $_GET['id'];
$dt=$training->bacatraining($id_training);
?>
<div class="content animate-panel">
    <div class="row">
        <div class="col-lg-12">
            <div class="hpanel">
				<div class="modal fade hmodal-success" id="modal-apsensi-add" tabindex="-1" role="dialog"  aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="color-line"></div>
                            <div class="modal-header">
                                <h4 class="modal-title">Modal title</h4>
                            </div>
                            <div class="modal-body">
                                <div class="panel-body">
    <form method="get" class="form-horizontal" id="form_2">
        <div class="form-group">
            <label class="col-sm-4 control-label">Nama Peserta</label>
            <div class="col-sm-6">
                                   <select class="js-source-states" id="nip" style="width: 100%">
                                        <?php
                                            $arraypgw = $pgw->tampilpgw();
                                            if(isset($arraypgw) && $arraypgw !=NULL){
                                                foreach($arraypgw as $dataap){
                                        ?>               
                                    <option value="<?php echo $dataap['nip']?>"><?php echo $dataap['nip']?> <?php echo $dataap['nama']?></option>
                                    <?php
                                        }
                                    }
                                    ?>
                                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">ID Training</label>
            <div class="col-sm-6">
                <input type="text" id="id_training" value="<?php echo $_get['id']; ?>">
            </div>
        </div>
        <div class="hr-line-dashed"></div>
    </form>
</div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary" id="simpan-akses">Simpan Apsensi</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
					<div id="hasil">
                        
                        <div class="col-lg-6">
                        <div class="hpanel">
                            <div class="panel-heading">
                                <button type="button" data-id="<?php echo $dt['id_training'] ?>" class="tambah-apsensi btn btn-primary">
                                    Tambah Siswa <?php echo $dt['id_training']; ?>
                                </button>
                            </div>
                            <div class="panel-body">
                                <dl class="dl-horizontal">
                                    <dt>Nama Training</dt>
                                    <dd><?php echo $dt['nama_training']; ?></dd>
                                    <dt>Penyelenggara</dt>
                                    <dd><?php echo $dt['penyelenggara']; ?></dd>
                                    <dt>Instruktur</dt>
                                    <dd><?php echo $dt['instruktur']; ?></dd>
                                    <dt>Tanggal</dt>
                                    <dd><?php echo $dt['tgl_training']; ?></dd>
                                    <dt>Durasi</dt>
                                    <dd><?php echo $dt['durasi']; ?> Jam</dd>
                                    <dt>Lokasi</dt>
                                    <dd><?php echo $dt['lokasi']; ?></dd>
                                </dl>
                            </div>
                        </div>
                        </div>
                    </div>
					
					<div id="data-apsensi"></div>

                </div>
            </div>
        </div>
    </div>
    </div>
