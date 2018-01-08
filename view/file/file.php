<?php
include'../../class/gapura_class.php';
include'../../class/gapura_function.php';
include'../../class/gapura_object.php';
$datafile = new datafile;
?>


<div class="modal fade hmodal-success" id="modal-file-add" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="color-line"></div>
            <div class="modal-header">
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
                <p><?php echo $_GET['nip']; ?></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary" id="simpan-apsensi">Simpan Data</button>
            </div>
        </div>
    </div>
</div>
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
                <button type="submit" class="tambah-file btn btn-default btn-sm" data-id="<?php echo $_GET['nip']; ?>" id="simpan-apsensi">Tambah Lampiran</button><p><hr>
                   <div class="table-responsive">
                <table cellpadding="1" cellspacing="1" class="table table-condensed">
                    <thead>
                    <tr>
                        <th>NO</th>
                        <th>NAMA LAMPIRAN</th>
                        <th>FILE</th>
                        <th>AKSI</th>
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
                        <td>Purus Gravida Sagittis Limited</td>
                        <td>055 1753 4032</td>
                        <td>055 1753 4032</td>
                    </tr>
                    		<?php 
                    			}
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
			                <p>
			                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.Lorem
			                    ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan.
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