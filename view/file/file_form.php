<div class="panel-body">
    <form method="get" class="form-horizontal" id="form_2">
        <div class="form-group">
            <label class="col-sm-4 control-label">Kategori File</label>
            <div class="col-sm-8">
            <input type="text" placeholder="Keterangan Keterangan" class="form-control input-sm" id="ket_unit" value="">

            </div>
        </div>
        <div class="form-group">
			<label class="col-sm-4 control-label">Nama File</label>
            <div class="col-sm-8">
				<input type="hidden" class="form-control input-sm" id="id_unit" value="">
				<input type="text" placeholder="Nama unit" class="form-control input-sm" id="nama_unit" value="">
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
    </form>
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