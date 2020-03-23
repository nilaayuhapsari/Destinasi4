<div class="container login-form">
	<div class="row">
		<div class="col-lg-5 col-lg-offset-4">
			<h2>Silahkan Login!</h2>

			<form method="post">
				<div class="form-group">
					<label for="">Username</label>
					<input type="text" class="form-control">
				</div><!-- /.form-group -->

				<div class="form-group">
					<label for="">Password</label>
					<input type="text" class="form-control">
				</div><!-- /.form-group -->

				<div class="form-group-btn">
					<a href="<?= base_url ('index'); ?>"><p class="btn btn-primary pull-right">Sig In</p></a>
				</div><!-- /.form-group-btn -->

				<div class="form-group-bottom-link">
					<a href="reset_password"><i class="fa fa-primary pull-left">Lupa Kata Sandi?</i></a>
					<a href="ganti"><i class="fa fa-primary pull-right">Ganti Password?</i></a>
				</div><!-- /.form-group-bottom-link -->
				<div class="form-group-bottom-link">
					<b><p class="text-white-50">Belum punya akun? <a href="registration" class="text-black">Daftar sekarang</a></p></b>
				</div><!-- /.form-group-bottom-link -->
			</form>
		</div><!-- /.col-* -->
	</div><!-- /.row -->
</div><!-- /.container -->
