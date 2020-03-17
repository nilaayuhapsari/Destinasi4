<button data-target="#tambahdata" data-toggle="modal" class="btn btn-success">Tambah data</button>
<br>
<br/>
<div class="row">
					    <div class="col-sm-12">
					        <div class="panel">
					            <div class="panel-heading">
					                <h3 class="panel-title">Data Siswa</h3>
					            </div>
					
					            <!-- Striped Table -->
					            <!--===================================================-->
					            <div class="panel-body">
					                <div class="table-responsive">
					                    <table class="table table-striped">
					                        <thead>
					                            <tr>
					                                <th>Nama</th>
													<th>Jurusan</th>
													<th>Alamat</th>
													<th>Hobi</th>
													<th>No Telp</th>
													<th>Gambar</th>
                                                    <th>Setting</th>
					                            </tr>
					                        </thead>
					                        <tbody>
                                                <?php foreach($siswaku as $res) { 
													$id = $res->id_siswa;
													$gambar = $res->gambar;
													?>
					                            <tr>
                                                    <td><a href="#fakelink" class="btn-link"><?php echo $res->nama_siswa;?></a></td>
													<td><?php echo $res->jurusan;?></td>
													<td><?php echo $res->alamat;?></td>
													<td><?php echo $res->hobi;?></td>
													<td><?php echo $res->no_telp;?></td>
													<td><img width="100" height="100" src="<?php echo base_url ()?>assets/gambar/<?php echo $res->gambar?>" alt="Image"></td>


                                                    <td>
                                                    <button class="btn btn-info btn-rounded" data-target="#editdata<?=$res->id_siswa ?>" data-toggle="modal">Edit</button>
                                                    <button class="btn btn-danger btn-rounded" data-target="#hapusdata<?=$res->id_siswa ?>" data-toggle="modal">Hapus</button>
                                                    </td>
                                                </tr>
                                                <?php } ?>
					                        </tbody>
					                    </table>
					                </div>
					            </div>
					            <!--===================================================-->
					            <!-- End Striped Table -->
					
					        </div>
                        </div>
					</div>
                        
    <!--Tambah Bootstrap Modal-->
    <!--===================================================-->
	<?= form_open_multipart('data_siswa/tambah'); ?>
    <div class="modal fade" id="tambahdata" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
	
        <div class="modal-dialog">
            <div class="modal-content">

                <!--Modal header-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                    <h4 class="modal-title">Tambah Data</h4>
                </div>

                <!--Modal body-->
                <div class="modal-body">
                <form>
					                <div class="panel-body">
					                    <div class="row">
					                        <div class="col-sm-6">
					                            <div class="form-group">
					                                <label class="control-label">Nama</label>
					                                <input type="text" name="nama_siswa" class="form-control">
					                            </div>
					                        </div>
					                        <div class="col-sm-6">
					                            <div class="form-group">
					                                <label class="control-label">Jurusan</label>
					                                <input type="text" name="jurusan" class="form-control">
												</div>
												</div>
					                        <div class="col-sm-6">
					                            <div class="form-group">
					                                <label class="control-label">Alamat</label>
					                                <input type="text" name="alamat" class="form-control">
					                            </div>
												</div>
					                        <div class="col-sm-6">
					                            <div class="form-group">
					                                <label class="control-label">Hobi</label>
					                                <input type="text" name="hobi" class="form-control">
					                            </div>
												</div>
					                        <div class="col-sm-6">
					                            <div class="form-group">
					                                <label class="control-label">No Telp</label>
					                                <input type="text" name="no_telp" class="form-control">
					                            </div>
												</div>
					                        <div class="col-sm-6">
					                            <div class="form-group">
					                                <label class="control-label">Gambar</label>
					                                <input type="file" name="gambar" placeholder="gambar" class="form-control" id="userfile" onchange="tampilkanPreview(this,'preview')">
					                            </div>
					                        </div>
					                    </div>
					                </div>
					            </form>
                            </div>

                <!--Modal footer-->
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                    <button class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
	<?= form_close(); ?>
    <!--===================================================-->
	<!--End Default Bootstrap Modal-->
	


	<?php foreach($siswaku as $res) { ?>
	<!--Edit  Modal-->
    <!--===================================================-->
	<?= form_open_multipart('data_siswa/edit'); ?>
	<div class="modal fade" id="editdata<?= $res->id_siswa ?>" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
	<input type="hidden" name="id_siswa" value="<?= $res->id_siswa ?>">
        <div class="modal-dialog">
            <div class="modal-content">

                <!--Modal header-->
                <!-- <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                    <h4 class="modal-title">Tambah Data</h4>
                </div> -->

                <!--Modal body-->
                <div class="modal-body">
                <form>
					                <div class="panel-body">
					                    <div class="row">
					                        <div class="col-sm-6">
					                            <div class="form-group">
					                                <label class="control-label">Nama</label>
													<input type="text" name="nama_siswa" value="<?= $res->nama_siswa ?>" class="form-control">
					                            </div>
					                        </div>
					                        <div class="col-sm-6">
					                            <div class="form-group">
					                                <label class="control-label">Jurusan</label>
					                                <input type="text" name="jurusan" value="<?= $res->jurusan ?>" class="form-control">
												</div>
												</div>
					                        <div class="col-sm-6">
					                            <div class="form-group">
					                                <label class="control-label">Alamat</label>
					                                <input type="text" name="alamat" value="<?= $res->alamat ?>" class="form-control">
					                            </div>
												</div>
					                        <div class="col-sm-6">
					                            <div class="form-group">
					                                <label class="control-label">Hobi</label>
					                                <input type="text" name="hobi" value="<?= $res->hobi ?>" class="form-control">
					                            </div>
												</div>
					                        <div class="col-sm-6">
					                            <div class="form-group">
					                                <label class="control-label">No Telp</label>
					                                <input type="text" name="no_telp" value="<?= $res->no_telp ?>" class="form-control">
					                            </div>
												</div>
					                        <div class="col-sm-6">
					                            <div class="form-group">
					                                <label class="control-label">Gambar</label>
					                                <input type="file" name="gambar" placeholder="gambar" class="form-control" id="userfile" onchange="tampilkanPreview(this,'preview')">
													<img   src="<?= base_url(); ?>assets/gambar/<?= $res->gambar ?>" width="150px" />
					                            </div>
					                        </div>
					                    </div>
					                </div>
					            </form>
                            </div>

                <!--Modal footer-->
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                    <button class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
	<?= form_close(); ?>
	<?php } ?>
    <!--===================================================-->
	<!--End Default Bootstrap Modal-->
	

	<?php foreach($siswaku as $res) { ?>
	<!--Hapus Modal-->
    <!--===================================================-->
	<?= form_open_multipart('data_siswa/hapus/' . $res->id_siswa) ; ?>
	<div class="modal fade" id="hapusdata<?= $res->id_siswa ?>" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <!--Modal body-->
                <div class="modal-body">
					Apakah anda yakin ingin menghapus?
                </div>

                <!--Modal footer-->
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">Tidak</button>
                    <button class="btn btn-primary">Ya</button>
                </div>
            </div>
        </div>
    </div>
	<?= form_close(); ?>
	<?php } ?>
    <!--===================================================-->
    <!--End Default Bootstrap Modal-->

   

   