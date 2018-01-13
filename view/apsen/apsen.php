<?php
include'../../class/gapura_class.php';
include'../../class/gapura_function.php';
include'../../class/gapura_object.php';
$apsensi = new apsensi;
$training = new training;
$dt=$training->bacatraining($id_training);
?>

<div class="content animate-panel">
    <div class="row">
        <div class="col-lg-12">
            <div class="hpanel">
                <div class="panel-heading">
                    DATA APSENSI SISWA 
                    <?php 
                        function base_url ()
        {
            return sprintf("http://localhost/msc/msc/");
            
            #panggil fungsi ini dengan cara di (echo base_url();)
        }
                    ?>
                    <?php echo base_url(); ?>
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
                <div class="modal fade hmodal-success" id="modal-lihat-sertifikat" tabindex="-1" role="dialog"  aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="color-line"></div>
                            <div class="modal-header">
                                <h4 class="modal-title">Modal title</h4>
                            </div>
                            <div class="modal-body">
                                <p>xx</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                
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
       
<button type="button" data-id="<?php echo $_GET['id'] ?>" class="tambah-apsen btn btn-primary">Tambah Siswa</button>
<button type="button" onclick="reload()" class="btn btn-primary"><i class="fa pe-7s-refresh"></i> Refresh</button>
<a href="?r=training&pg=training" class="btn btn-primary"><i class="fa pe-7s-graph1"></i> Training</a>
<a href="?r=training&pg=training" class="btn btn-primary"><i class="fa pe-7s-note"></i> Tanda Terima Sertifikat</a>
<a href="?r=training&pg=training" class="btn btn-primary"><i class="fa pe-7s-note2

"></i> Form Apsensi</a>
                    <p>
  <table id="datat_absen" class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>NO</th>
            <th>NIP</th>
            <th>NAMA</th>
            <th>STATUS<br> KEPEG</th>
            <th>UNIT</th>
            <th>PROVIDER</th>
            <th>JENIS DIKLAT</th>
            <th>TANGGAL</th>
            <th>DURASI</th>
            <th>SERTIFIKAT</th>
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
                <td><?php echo $data['tgl_training'];?></td>
                <td><?php echo $data['durasi']?> Jam</td>
                <td><button class="btn btn-default btn-xs" type="button"> <i class="fa pe-7s-upload"></i> Upload</button>
                    <button class="lihat-sertifikat btn btn-default btn-xs" type="button"> <i class="fa pe-7s-search"></i> View</button>
                    <button class="btn btn-default btn-xs" type="button"> <i class="fa fa-edit"></i> Edit</button>
                </td>

            <td>
                <button class="ubah-apsen btn btn-success btn-xs" type="button" data-id="<?php echo $data['id_apsensi'] ?>" title="INPUT : <?php echo $data['i_by'].'-'.$data['i_date'].'- EDIT : '.$data['e_by'].'-'.$data['e_date'] ?>"><i class="fa fa-edit"></i></button>
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