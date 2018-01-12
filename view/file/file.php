<?php
include'../../class/gapura_class.php';
include'../../class/gapura_function.php';
include'../../class/gapura_object.php';
$datafile = new datafile;
$foto=$datafile->lihatfoto($nip);
?>


<div class="modal fade hmodal-success" id="modal-file-add" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="color-line"></div>
            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal" role="form">
            <div class="modal-header">
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <input type="submit" class="btn btn-primary" name="simpanl" id="simpan-apsensi" value="Simpan Data">
            </div>
        </form>
        </div>
    </div>
</div>
        <?php
        if($_POST['simpanl'])
        {
            $nip=$_POST['nip'];
            $kat_file=$_POST['kat_file'];
            $nama_file=$_POST['nama_file'];
            $gambar=$nip."_".$_FILES['gambar']['name'];
            $datafile->tambahDatafile($nip,$kat_file,$nama_file,$gambar);
            echo"<meta http-equiv='refresh' content='0;url=?r=file&pg=file&nip=".$_GET[nip]."'>";              
        }
?>

<div class="modal fade hmodal-success" id="modal-file-edit" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="color-line"></div>
            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal" role="form">
            <div class="modal-header">
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <input type="submit" class="btn btn-primary" name="updatel" id="simpan-apsensi" value="Update Data">
            </div>
        </form>
        </div>
    </div>
</div>
        <?php
            if($_POST['updatel']){
                $kode_file=$_POST[kode_file];
                $nip=$_POST['nip'];
                $kat_file=$_POST['kat_file'];
                $nama_file=$_POST['nama_file'];
                $gambar=$_FILES['gambar']['name'];
            if (empty($gambar)){
                $datafile->updateDatafile($kode_file,$nip,$kat_file,$nama_file);
            }
            else 
            {
                $kode_file=$_POST[kode_file];
                $nip=$_POST['nip'];
                $kat_file=$_POST['kat_file'];
                $nama_file=$_POST['nama_file'];
                $gambar=$nip."_".$_FILES['gambar']['name'];
               $datafile->updateDatafile($kode_file,$nip,$kat_file,$nama_file,$gambar);
            }
            }
?>

<div class="normalheader transition animated fadeIn">
    <div class="hpanel">
        <div class="panel-body">
            <a class="small-header-action" href="#">
                <div class="clip-header">
                    <i class="fa fa-arrow-up"></i>
                </div>
            </a>
            <h3 class="font-light m-b-xs">
                Dokumen Lampiran Pegawai
            </h3>
            <small>File pendukung kelengkapan dokumen pegawai</small>
        </div>
    </div>
</div>


<div class="content animate-panel">
    <div class="row">
        <div class="col-lg-12">
            <div class="hpanel">
                <div class="panel-body">
                            <div class="col-xs-6">
                <button type="submit" class="tambah-file btn btn-default btn-sm" data-id="<?php echo $_GET['nip']; ?>" id="simpan-apsensi">Tambah Lampiran</button>
                <a href="?r=pgw&pg=pgw" class="btn btn-primary btn-sm">Data Pegawai</a>
                <p><hr>
                   <div class="table-responsive">
                <table cellpadding="1" cellspacing="1" class="table table-condensed">
                    <thead>
                    <tr>
                        <th>NO</th>
                        <th>NAMA LAMPIRAN</th>
                        <th>KATEGORI</th>
                        <th>DOWNLOAD</th>
                        <th>EDIT</th>
                    </tr>
                    </thead>
                    <tbody>
                         <?php
						      $arraydatafile=$datafile->tampilDatafile();
						      if (count($arraydatafile)) {
						      foreach($arraydatafile as $d) {
						    ?>
                    <tr>
                        <td><?php echo $c=$c+1; ?></td>
                        <td><?php echo $d['nama_file']; ?></td>
                         <td><?php echo $d['kat_file']; ?></td>
                        
                        <td><a href="file_pgw/<?php echo $d['gambar']; ?>" class="btn btn-primary btn-xs" target="_blank"><i class="fa fa-download fa-1x"></i> DOWNLOAD</a></td>
                        <td><button class="ubah-file btn btn-primary btn-xs" type="button" data-id="<?php echo $d['kode_file'] ?>"><i class="fa fa-edit"></i></button></td>
                    </tr>
                    		<?php 
                    			}
                    		}
                            else {
                                echo '<div class="alert alert-danger">Data Tidak ditemukan !</div>';
                            }

                    		?>
                    </tbody>
                </table>
                    </div>
                       </div>
                            <div class="col-xs-6">
                            	<button type="submit" class="btn btn-default btn-sm" id="simpan-apsensi"></button><p><hr>
                            	<div class="hpanel hgreen">
						            <div class="panel-heading hbuilt">
						                FOTO PEGAWAI
						            </div>
			            <div class="panel-body">
			                
                                    <?php
                              $arraydatafile=$datafile->lihatfoto();
                              if (count($arraydatafile)) {
                              foreach($arraydatafile as $foto) {
                            ?>
                            <img src="file_pgw/<?php echo $foto['gambar']; ?>" class="img-responsive" width="180">
			                  
                              <?php 
                              }
                              }
                              ?> 
			            </p>
			            </div>
			            <div class="panel-footer">
			                This is standard panel footer
			            </div>
        </div>
                            </div>
                		
            </div>
        </div>
    </div>
</div>