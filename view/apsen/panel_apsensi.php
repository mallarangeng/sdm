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