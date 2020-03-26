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

    <div class="admin-wrapper">
        <div class="admin-sidebar">
            <a href="/" class="hidden-md-down">
                <img src="assets/img/logo-light1.png" alt="" class="admin-sidebar-logo">
            </a>

            <div class="dashboard-nav-primary collapse navbar-toggleable-md">
                <ul class="nav nav-pills nav-stacked">
                    <li class="nav-item">
                        <a href="admin-dashboard.html" class="nav-link active"><i class="md-icon">home</i> Halaman admin</a>
                    </li>

                    <li class="nav-item">
                        <a href="admin-kategori.html" class="nav-link"><i class="md-icon">view_list</i> List Kategori <span>9</span></a>
                    </li>

                    <li class="nav-item">
                        <a href="admin-listings.html" class="nav-link"><i class="md-icon">view_list</i> List Ajuan <span>3</span></a>
					</li>
					
					<li class="nav-item">
						<a href="data.html" class="nav-link"><i class="md-icon">view_list</i> Data Kategori <span>3</span></a>
					</li>

                    <li class="nav-item">
                        <a href="admin-reviews.html" class="nav-link "><i class="md-icon">rate_review</i> Komentar</a>
                    </li>

                    <li class="nav-item">
                        <a href="admin-users.html" class="nav-link "><i class="md-icon">people</i> Pengguna <span>1</span></a>
                    </li>

                    <li class="nav-item">
                        <a href="admin-settings.html" class="nav-link "><i class="md-icon">settings</i> Pengaturan</a>
                    </li>

                    <li class="nav-item">
                        <a href="index.html" class="nav-link"><i class="md-icon">power_settings_new</i> Keluar</a>
                    </li>
                </ul>
            </div>

            <hr class="hidden-md-down">

        </div>
        <!-- /.admin-sidebar -->

        <div class="admin-main">
            <div class="admin-header">
                <div class="admin-header-navigation">
                    <div class="container-fluid">
                        <ul class="nav nav-pills">
                                <h1><?= $menu; ?></h1>
                        </ul>

                        <ul class="nav nav-pills secondary">
                            <li class="nav-item user-avatar-wrapper hidden-sm-down">
                                <a href="#" class="nav-link circle user-avatar-image" style="background-image: url('assets/img/ar.png')"></a>
                                <span class="user-avatar-status"></span>

                                <ul class="header-more-menu">
                                    <li><a href="#">Profile</a></li>
                                    <li><a href="index.html">Logout</a></li>
                                </ul>
                            </li>
                        </ul>

                        <button class="navbar-toggler pull-xs-right hidden-lg-up" type="button" data-toggle="collapse" data-target=".dashboard-nav-primary">
                        <i class="md-icon">menu</i>
                    </button>
                    </div>
                    <!-- /.container -->
                </div>
                <!-- /.admin-header-navigation -->

			<div class="admin-header-search">
				<form method="get" action="?">
					<div class="input-group">
						<div class="input-group-addon">
							
						</div><!-- /.input-group-addon -->

						
					</div><!-- /.form-group -->
				</form>
			</div><!-- /.admin-header-search -->
		</div><!-- /admin-header -->

		<div class="admin-content">
			<div class="container-fluid">
				<div class="admin-title">
	

</div><!-- /.admin-title -->

<?php $this->load->view($namamodule . '/' . $namafileview);	 ?>

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