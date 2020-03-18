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

				<form method="post">
					<div class="form-group">
						<label for="">Email</label>
						<input type="text" class="form-control">
					</div><!-- /.form-group -->
				<div class="form-group-btn">
					<a href="<?= base_url ('admin_dashboard'); ?>"><p class="btn btn-primary pull-right">Sig In</p></a>
				</div><!-- /.form-group-btn -->

				<div class="form-group-bottom-link">
					<a href="reset-password.html"><i class="fa fa-primary pull-left">Lupa Kata Sandi?</i></a>
					<a href="ganti.html"><i class="fa fa-primary pull-right">Ganti Password?</i></a>
				</div><!-- /.form-group-bottom-link -->
				</div><!-- /.form-group-bottom-link -->
			</form>
		</div><!-- /.col-* -->
	</div><!-- /.row -->
</div><!-- /.container -->