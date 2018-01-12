<?php
include'../../class/gapura_class.php';
include'../../class/gapura_function.php';
include'../../class/gapura_object.php';
$datafile = new datafile;
$df=$datafile->bacadatafile($kode_file);
    if ($df['kode_file']>0) {
        $kode_file         = $df['kode_file'];
        $nip               = $df['nip'];
        $kat_file          = $df['kat_file'];
        $nama_file         = $df['nama_file'];
    }else{
        $kode_file          = '';
        $nip                = '';
        $kat_file           = 'Lain-Lain';
        $nama_file          = '';
    }
?>




<div class="panel-body">
        <div class="form-group">
            <label class="col-sm-4 control-label">Kategori File</label>
            <div class="col-sm-8">
            <input type="hidden" name="kode_file" value="<?php echo $kode_file; ?>">
            <input type="hidden" name="nip" value="<?php echo $_GET['nip']; ?><?php echo $nip; ?>">
                  <select class="js-source-states" name="kat_file" style="width: 100%">                   
                                    <option value="<?php echo $kat_file; ?>"><?php echo $kat_file; ?></option>
                                    <option value="Lain-Lain">Lain-Lain</option>
                                    <option value="Foto">Foto</option>
                                </select>
            </div>
        </div>
        <div class="form-group">
			<label class="col-sm-4 control-label">Nama File</label>
            <div class="col-sm-8">
				<input type="text" placeholder="Nama File" class="form-control input-sm" value="<?php echo $nama_file; ?>" name="nama_file">
            </div>
        </div>
		<div class="form-group">
			<label class="col-sm-4 control-label">Cari File</label>
            <div class="col-sm-8">
    			            <label class="btn btn-primary btn-file btn-sm">
                                            <span class="pe pe-7s-search" aria-hidden="true"></span>
                                            Cari file lampiran <input type="file" name="gambar" hidden>
                                        </label> 
        </div>
        <div class="hr-line-dashed"></div>
        </div>
</div>
  <div class="alert alert-success">
                            <i class="pe pe-7s-paperclip
"></i>  Pastikan Format File JPG dan PDF Dengan ukuran kurang dari 1.0 Mb
                            </div>

<style type="text/css">
    
  .btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}


</style>
<script type="text/javascript">
    $(".js-source-states").select2();
</script>