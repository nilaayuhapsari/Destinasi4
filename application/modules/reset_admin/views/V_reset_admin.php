<div class="container reset-form">
	<div class="row">
		<div class="col-lg-4 col-lg-offset-4">
			<form method="post">
				<div class="form-group">
					<label for="">Tuliskan alamat e-mail anda untuk mengirim password anda</label>
					<input type="text" class="form-control">
				</div><!-- /.form-group -->

				<div class="form-group-btn">
					<button data-target="#1" data-toggle="modal" type="button" class="btn btn-primary btn-block">Selesai</button>
				</div><!-- /.form-group-btn -->

				<div class="form-group-bottom-link">
					<a href="<?=base_url ('login_admin'); ?>" data-target="#2" data-toggle="modal"><i class="fa fa-long-arrow-left"></i> Kembali Untuk Login</a>
				</div><!-- /.form-group-bottom-link -->
			</form>
		</div><!-- /.col-* -->
	</div><!-- /.row -->
</div><!-- /.container -->
<div id="1" class="modal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
		  <div class="modal-content">
			<div class="modal-header">
			  <center><h4 class="modal-title">Apakah e-mail yang anda masukkan sudah benar?</h4></center>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-secondary" data-dismiss="modal">Belum</button>
			  <a href="<?=base_url ('reset_password'); ?>"><button type="button" class="btn btn-primary">Sudah</button></a>
			</div>
		  </div>
		</div>
	  </div>
	  <div id="2" class="modal" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
			  <div class="modal-content">
				<div class="modal-header">
				  <center><h4 class="modal-title">Password anda akan dikirimkan melalui e-mail anda,Terima Kasih</h4></center>
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button>
				</div>
				<div class="modal-footer">
				  <a href="<?=base_url ('login_admin'); ?>"><button type="button" class="btn btn-success">Oke</button></a>
				</div>
			  </div>
			</div>
		  </div>