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
    
    <title>Materialist - Login</title>
</head>

<body class="layout-empty">
    <a href="<?= base_url ('index'); ?>" class="return-back">
    <i class="fa fa-long-arrow-left"></i> Kembali</a>
</a>

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