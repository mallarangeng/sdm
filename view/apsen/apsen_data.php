<?php
include'../../class/gapura_class.php';
include'../../class/msc_function.php';
include'../../class/gapura_object.php';
$apsensi = new apsensi;
$training = new training;
$id_training=$_GET['id'];
$dt=$training->bacatraining($id_training);
?>

<div class="content animate-panel">
    <div class="row">
        <div class="col-lg-12">
            <div class="hpanel">
                <div class="panel-heading">
                    DATA TRAINING
                </div>
                <div class="modal fade hmodal-success" id="modal-apsen-add" tabindex="-1" role="dialog"  aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="color-line"></div>
                            <div class="modal-header">
                                <h4 class="modal-title">Modal title</h4>
                            </div>
                            <div class="modal-body">
                                <p>xx</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary" id="simpan-apsensi">Simpan Data</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                                <div class="panel-body">
                <dl>
                    <dt>Nama Training</dt>
                                    <dd class="text-success"><strong><?php echo $dt['nama_training']; ?></strong></dd>
                                    <dt>Penyelenggara</dt>
                                    <dd class="text-success"><?php echo $dt['penyelenggara']; ?></dd>
                                    <dt>Instruktur</dt>
                                    <dd class="text-success"><?php echo $dt['instruktur']; ?></dd>
                                    <dt>Tanggal / Durasi / Lokasi</dt>
                                    <dd class="text-success"><?php echo $dt['tgl_training']; ?> / <?php echo $dt['durasi']; ?> Jam  / <?php echo $dt['lokasi']; ?></dd>
                                    
                </dl>
            </div>
            <p>

					<div class="row">
                <div class="col-lg-12">
       
            <button type="button" data-id="<?php echo $_GET['id'] ?>" class="tambah-apsen btn btn-primary btn-sm ">Tambah Siswa</button>
            <button type="button" onclick="reload()" class="btn btn-default btn-sm "><i class="fa pe-7s-refresh">&nbsp;Refresh</i></button>
                    <p>
  <table id="datat_absen" class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>NO</th>
            <th>NIP</th>
            <th>NAMA</th>
            <th>STATUS KEPEG</th>
            <th>UNIT</th>
            <th>PROVIDER</th>
            <th>JENIS DIKLAT</th>
            <th>TANGGAL</th>
            <th>DURASI</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    <?php
        $arrayapsensi = $apsensi->tampilapsensi();
        if(isset($arrayapsensi) && $arrayapsensi !=NULL){
            foreach($arrayapsensi as $data){
    ?>
        <tr>
            <td><?php echo $c=$c+1;?></td>
                <td><?php echo $data['nip']?></td>
                <td><?php echo $data['nama']?></td>
                <td><?php echo $data['stat_peg']?></td>
                <td><?php echo $data['nama_unit']?></td>
                <td><?php echo $data['nama_provider']?></td>
                <td><?php echo $data['nama_training']?></td>
                <td><?php echo $data['tgl_training']?></td>
                <td><?php echo $data['durasi']?> Jam</td>

            <td>
                <button class="ubah-apsen btn btn-success btn-xs" type="button" data-id="<?php echo $data['id_apsensi'] ?>"><i class="fa fa-edit"></i></button>
            </td>
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
    </div>
    </div>
<script type="text/javascript">
    function reload() {
    location.reload();
}
</script>