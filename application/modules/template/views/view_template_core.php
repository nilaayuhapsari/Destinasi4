<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&subset=latin,latin-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">    
    <link href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/libraries/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="assets/css/leaflet.css" rel="stylesheet" type="text/css">
    <link href="assets/css/leaflet.markercluster.css" rel="stylesheet" type="text/css">
    <link href="assets/css/leaflet.markercluster.default.css" rel="stylesheet" type="text/css">        
    <link href="assets/css/materialist.css" rel="stylesheet" type="text/css" id="css-primary">
	
    <title>NHITB - Wisata,kuliner dan oleh-oleh</title>
</head>

<body class="">
<div class="page-wrapper">
	<div class="header-wrapper">
	<div class="header">
		<div class="header-inner">
			<div class="header-top">
				<div class="container">
					<a href="/">
						<img src="assets/img/logo1.png" alt="" class="header-top-logo">
					</a>

					<div class="nav-primary-wrapper collapse navbar-toggleable-sm">
						<ul class="nav nav-pills ">
							<li class="nav-item has-submenu">
								<a href="index" class="nav-link active">Halaman Utama</a>							
							</li>

							<li class="nav-item has-submenu">
								<a href="listings" class="nav-link ">Buat Jadwal</a>
							</li>

							<li class="nav-item has-submenu">
									<a href="i1" class="nav-link ">Daftarkan Destinasi</a>
								</li>
						</ul><!-- /.nav -->
					</div><!-- /.nav-primary-wrapper -->

					<ul class="nav nav-pills secondary">
						
						<li class="nav-item user-avatar-wrapper">
							<a href="#" class="nav-link circle user-avatar-image" style="background-image: url('assets/img/ar.png')"></a>
							<span class="user-avatar-status"></span>

							<ul class="header-more-menu">
								<li><a href="login">User</a></li>
								<li><a href="login_admin">Admin</a></li>
							</ul>							
						</li>
					</ul>

					<button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target=".nav-primary-wrapper">
                        <i class="md-icon">menu</i>
                    </button>						
				</div><!-- /.container -->
			</div><!-- /.header-top -->

			
				<div class="header-bottom">
					<div class="container">


						<ul class="nav nav-pills">
							<li class="nav-item"><a href="" class="nav-link">	</a></li>
							<li class="nav-item"><a href="" class="nav-link">	</a></li>
							<li class="nav-item"><a href="" class="nav-link">	</a></li>
							<li class="nav-item"><a href="" class="nav-link">	</a></li>
							<li class="nav-item"><a href="" class="nav-link">	</a></li>
							<li class="nav-item"><a href="listings_map" class="nav-link">WISATA</a></li>
							<li class="nav-item"><a href="" class="nav-link">	</a></li>
							<li class="nav-item"><a href="index_kuliner" class="nav-link">KULINER</a></li>
							<li class="nav-item"><a href="" class="nav-link">	</a></li>
							<li class="nav-item"><a href="index_oleh" class="nav-link">OLEH-OLEH</a></li>
							<li class="nav-item"><a href="" class="nav-link">	</a></li>
						</ul><!-- /.nav -->

						<div class="header-bottom-more">
						</div><!-- /.header-bottom-more -->
					</div><!-- /.container -->
				</div><!-- /.header-bottom -->		
				
		</div><!-- /.header-inner -->
	</div><!-- /.header -->
</div><!-- /.header-wrapper -->
	
    <div class="main-wrapper">
	    <div class="main">
	        <div class="main-inner">
	        	

	            <div class="content">
	                <div class="hero" style="background-image: url('assets/img/tmp/hero.jpg'); ">
	<div class="hero-content">
		<div class="container">
			<h1 style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">TEMUKAN DUNIAMU DISINI</h1>
			
			<p>
				Dengan web ini,kamu bisa melakukan apa yang kamu suka.seperti melihat dan mencari destinasi wisata,kuliner setempat,hingga mencari oleh-oleh hanya dengan melihat web ini
			</p>

			<a href="#" class="btn btn-primary">Lihat lebih banyak</a>
		</div><!-- /.container -->
	</div><!-- /.hero-content -->
	

	<div class="hero-form ">
	<div class="container">
		<form method="get" action="?">
			<div class="input-group first col-sm-12 col-md-4">
				<div class="input-group-addon">
					<i class="md-icon">my_location</i>
				</div><!-- /.input-group-addon -->

				<input type="text" class="form-control" placeholder="Cari Tujuanmu">
			</div><!-- /.input-group  -->

			<div class="input-group col-sm-12 col-md-6">
				<div class="input-group-addon">
					<i class="md-icon">search</i>
				</div><!-- /.input-group-addon -->

				<input type="text" class="form-control" placeholder="Cari Wisata atau Kuliner">
			</div><!-- /.input-group  -->				

			<div class="form-group last col-sm-12 col-md-2">
				<button type="submit" class="btn btn-primary btn-block">Search</button>
			</div><!-- /.col-* -->
		</form> 

		<div class="hero-form-sub">
			<strong class="hidden-sm-down">Atau cari berdasrkan kategori</strong>

			<ul>
				<li><a href="listings_map">Wisata</a></li>
				<li><a href="index_kuliner">Kuliner</a></li>
				<li><a href="index_oleh">Oleh-Oleh</a></li>
			</ul>
		</div>
	</div><!-- /.container -->
</div><!-- /.hero-form -->	

	<div class="hero-layer"></div>
</div><!-- /.hero -->

<div class="container">
	<div class="page-title">
		<h2>Populer Saat Ini</h2>

		<p>
			Lihat apa saja yang populer beberapa hari ini.
		</p>
	</br>
		<div class="cards-wrapper">
				<div class="row">
						<div class="col-xs-12 col-sm-6 col-lg-4">
							<div class="card">
								<div class="card-image small no-line" style="background-image: url('assets/img/wisata/borobudur.jpg');">
									<a href="listings_map"></a>
		
									<div class="card-image-icon">
										<i class="md-icon">room</i>
									</div><!-- /.card-image-icon -->
		
									<div class="card-image-count">
										<strong>0</strong>
										<span>item</span>
									</div><!-- /.card-image-count -->
								</div><!-- /.card-image -->
		
								<div class="card-content">
									<h2>
										<a href="listings_map">Wisata</a>
		
										<a href="listings_map" class="btn btn-transparent">Show All</a>
									</h2>
								</div><!-- /.card-content -->
							</div><!-- /.card -->
						</div><!-- /.col-* -->
					
						<div class="col-xs-12 col-sm-6 col-lg-4">
							<div class="card">
								<div class="card-image small no-line" style="background-image: url('assets/img/kuliner.png');">
									<a href="index_kuliner"></a>
		
									<div class="card-image-icon">
										<i class="md-icon">restaurant_menu</i>
									</div><!-- /.card-image-icon -->
		
									<div class="card-image-count">
										<strong>0</strong>
										<span>items</span>
									</div><!-- /.card-image-count -->
								</div><!-- /.card-image -->
		
								<div class="card-content">
									<h2>
										<a href="index_kuliner">Kuliner</a>
		
										<a href="index_kuliner" class="btn btn-transparent">Show All</a>
									</h2>
								</div><!-- /.card-content -->
							</div><!-- /.card -->
						</div><!-- /.col-* -->
					
						<div class="col-xs-12 col-sm-6 col-lg-4">
							<div class="card">
								<div class="card-image small no-line" style="background-image: url('assets/img/oleh/legong3.jpg');">
									<a href="index_oleh"></a>
		
									<div class="card-image-icon">
										<i class="md-icon">event</i>
									</div><!-- /.card-image-icon -->
		
									<div class="card-image-count">
										<strong>92</strong>
										<span>items</span>
									</div><!-- /.card-image-count -->
								</div><!-- /.card-image -->
		
								<div class="card-content">
									<h2>
										<a href="index_oleh">Oleh-oleh</a>
		
										<a href="index_oleh" class="btn btn-transparent">Show All</a>
									</h2>
								</div><!-- /.card-content -->
							</div><!-- /.card -->
						</div><!-- /.col-* -->
				</div><!-- /.row -->
			</div><!-- /.cards-wrapper -->
	</div><!-- /.page-title -->
	<div class="row">
		<div class="col-sm-12">
				<div class="col-12">
						<div class="card" style="color: ">
							<h1 class="btn btn-block text-white" style="font-size: 30px">WISATA</h1>
							</div>
							</div>
			</div>
	</div>
</br>
		<div class="row">
			<div class="col-sm-12">
					<div class="col-12">
							<div class="card" style="color: ">
								<h1 class="btn btn-block text-white" style="font-size: 30px">KULINER</h1>
								</div>
								</div>
				</div>
		</div>
	</br>
			<div class="container">
				</div><!-- /.page-title -->
				<div class="row">
					<div class="col-sm-12">
							<div class="col-12">
									<div class="card" style="color: ">
										<h1 class="btn btn-block text-white" style="font-size: 30px">OLEH-OLEH</h1>
										</div>
										</div>
						</div>
				</div>
			</br>
</div>
			</div>
		</div><!-- /.container -->
		<div class="container">
		<div class="card" style="background-image: url(assets/img/bg.jpg)">
				<div class="container">
					<div class="row">
					</br>
						<center><h1 style="color: white">Anda ingin Wisata,kuliner atau oleh-oleh anda</h1></center>
						<div class="col-md-11">
				
									<h3 class="text-right" style="color: white">Ada di dalam web ini?</h3>
									<h6 class="text-right" style="color: white"><div>Gampang!Langsung<a href="i1" class="text-primary" style="font-family: cursive"> Klik Disini.</a></div></h6>
								
						</div><!-- /.col-* -->
						</div>
						</div>
						</div>
					</div>
</br>
</br>
</br>
</br>
</br>
<div class="content-boxes" style="background-color: #dcdcdc">
	<div class="container">
		<div class="row">
			<center><h2>Bagaimana Langkah-langkahnya?</h2></center>
			<div class="col-sm-6 col-md-3">
					<div class="content-box">
						<div class="content-box-icon">
							<i class="md-icon">perm_identity</i>
						</div><!-- /.content-box-icon -->
	
						<h3>Login</h3>
	
						<p>
							Anda harus login sebagai pengguna terlebih dahulu!
						</p>
			

					
				</div><!-- /.box -->
			</div><!-- /.col-* -->

			<div class="col-sm-6 col-md-3">
					<div class="content-box">
						<div class="content-box-icon">
							<i class="md-icon">room</i>
						</div><!-- /.content-box-icon -->
	
						<h3>Tentukan Tujuan</h3>
	
						<p>
							Cari tempat yang menarik yang ada di luar sana.
						</p>

					
				</div><!-- /.box -->
			</div><!-- /.col-* -->

			<div class="col-sm-6 col-md-3">
				<div class="content-box">
					<div class="content-box-icon">
						<i class="md-icon">settings</i>
					</div><!-- /.content-box-icon -->

					<h3>Buat dan Atur jadwalmu</h3>

					<p>
						Jika anda ingin berlibur,buat list tempat apa saja yang ingin anda kunjungi dan atur waktu dan tanggalnya!
					</p>

					
				</div><!-- /.box -->
			</div><!-- /.col-* -->
							
			<div class="col-sm-6 col-md-3">
				<div class="content-box">
					<div class="content-box-icon">
						<i class="md-icon">train</i>
					</div><!-- /.content-box-icon -->

					<h3>Pergi</h3>

					<p>
						Jika sudah,maka anda bisa berlibur dengan tenang dan tanpa ribet.
					</p>

					
				</div><!-- /.box -->
			</div><!-- /.col-* -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</div><!-- /.boxes -->
<div class="partners">
	<center><h4>Bekerja sama dengan</h4></center>
	<div class="container">
			<a href="#">
					<img src="assets/img/jember.png" alt="" height="64">
				</a>
		<a href="#">
			<img src="assets/img/malang.svg" alt="" height="64">
		</a>

		<a href="#">
			<img src="assets/img/jatim.png" alt="" height="90">
		</a>

		<a href="#">
			<img src="assets/img/bwi.png" alt="" height="64">
		</a>

		<a href="#">
			<img src="assets/img/lumajang.png" alt="" height="64">
		</a>

		
	</div><!-- /.container -->
</div><!-- /.partners -->



	            </div><!-- /.content -->
	        </div><!-- /.main-inner -->
	    </div><!-- /.main -->
    </div><!-- /.main-wrapper -->

<div class="customizer">
	<div class="customizer-content">
		<h2>Color Variant</h2>

		<ul>
			<li><a href="assets/css/materialist-red.css" class="background-red"></a></li>
			<li><a href="assets/css/materialist-pink.css" class="background-pink"></a></li>
			<li><a href="assets/css/materialist-purple.css" class="background-purple"></a></li>			
			<li><a href="assets/css/materialist-deep-purple.css" class="background-deep-purple"></a></li>			
			<li><a href="assets/css/materialist-indigo.css" class="background-indigo"></a></li>			
			<li><a href="assets/css/materialist-blue.css" class="background-blue"></a></li>			
			<li><a href="assets/css/materialist-light-blue.css" class="background-light-blue"></a></li>			
			<li><a href="assets/css/materialist-cyan.css" class="background-cyan"></a></li>			
			<li><a href="assets/css/materialist-teal.css" class="background-teal"></a></li>			
			<li><a href="assets/css/materialist-green.css" class="background-green"></a></li>			
			<li><a href="assets/css/materialist-light-green.css" class="background-light-green"></a></li>			
			<li><a href="assets/css/materialist-lime.css" class="background-lime"></a></li>			
			<li><a href="assets/css/materialist-yellow.css" class="background-yellow"></a></li>			
			<li><a href="assets/css/materialist-amber.css" class="background-amber"></a></li>			
			<li><a href="assets/css/materialist-orange.css" class="background-orange"></a></li>			
			<li><a href="assets/css/materialist-deep-orange.css" class="background-deep-orange"></a></li>			
			<li><a href="assets/css/materialist-brown.css" class="background-brown"></a></li>			
			<li><a href="assets/css/materialist-blue-grey.css" class="background-blue-grey"></a></li>			
		</ul> 
	</div><!-- /.customizer-content -->

	<div class="customizer-title">
		<span><i class="fa fa-cog"></i> Customizer</span>
	</div><!-- /.customizer-title -->
</div><!-- /.customizer -->

<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/tether.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/leaflet.js"></script>
<script type="text/javascript" src="assets/js/leaflet.markercluster.js"></script>
<script type="text/javascript" src="assets/libraries/owl-carousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/materialist.js"></script>
</body>
</html>