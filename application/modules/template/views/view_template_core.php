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
                                        <a href="<?= base_url('index'); ?>" class="nav-link ">Halaman Utama</a>
                                    </li>

                                    <li class="nav-item has-submenu">
                                        <a href="<?= base_url('listings'); ?>" class="nav-link active">Buat Jadwal</a>
                                    </li>

                                    <li class="nav-item has-submenu">
                                        <a href="<?= base_url('i1'); ?>" class="nav-link ">Daftarkan Destinasi</a>
                                    </li>
                                </ul><!-- /.nav -->
                            </div><!-- /.nav-primary-wrapper -->

                            <ul class="nav nav-pills secondary">

                                <li class="nav-item user-avatar-wrapper">
                                    <a href="#" class="nav-link circle user-avatar-image" style="background-image: url('assets/img/ar.png')"></a>
                                    <span class="user-avatar-status"></span>
                                    <ul class="header-more-menu">
                                        <li><a href="<?= base_url('login_userr'); ?>">User</a></li>
                                        <li><a href="<?= base_url('login_admin'); ?>">Admin</a></li>
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
                                <li class="nav-item"><a href="" class="nav-link"> </a></li>
                                <li class="nav-item"><a href="" class="nav-link"> </a></li>
                                <li class="nav-item"><a href="" class="nav-link"> </a></li>
                                <li class="nav-item"><a href="" class="nav-link"> </a></li>
                                <li class="nav-item"><a href="" class="nav-link"> </a></li>
                                <li class="nav-item"><a href="<?= base_url('index_wisata'); ?>" class="nav-link">WISATA</a></li>
                                <li class="nav-item"><a href="" class="nav-link"> </a></li>
                                <li class="nav-item"><a href="<?= base_url('index_kuliner'); ?>" class="nav-link">KULINER</a></li>
                                <li class="nav-item"><a href="" class="nav-link"> </a></li>
                                <li class="nav-item"><a href="<?= base_url('index_oleh'); ?>" class="nav-link">OLEH-OLEH</a></li>
                                <li class="nav-item"><a href="" class="nav-link"> </a></li>
                            </ul><!-- /.nav -->


                        </div><!-- /.container -->
                    </div><!-- /.header-bottom -->
                </div><!-- /.header-inner -->
            </div><!-- /.header -->
        </div><!-- /.header-wrapper -->

        <div class="main-wrapper">
            <div class="main">
                <div class="main-inner">

                    <div class="content-title">
                        <div class="container">
                            <h1><b>Buat Jadwal Anda Disini!</b></h1>

                            <ul class="breadcrumb">
                                <li><a href="index.html">Kembali</a> <i class="md-icon">keyboard_arrow_right</i></li>
                            <!-- /.breadcrumb -->
                        </div>
                        <!-- /.container -->
                    </div>
                    <!-- /.content-title -->


                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                            </br>
                                <form>
                                    <div class="form-group">
                                            <label for=""><h5>Buat Nama Daftar Perjalanan Anda</h5></label>
                                            <input type="text" class="form-control" id="">
                                          </div>
                                        </form>
                                <div class="content">
                                        <div class="filter filter-white">
                                            <div class="row">
                                                <h5>Tentukan tujuan mu disini!</h5>
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <select class="form-control">
															<option>Malang</option>
															<option>Surabaya</option>
															<option>Lumajang</option>
															<option>Jember</option>
															<option>Banyuwangi</option>
															<option>dll.</option>
														</select>
                                                    </div>
                                                    <!-- /.form-group -->
                                                </div>
                                                <!-- /.col-* -->

                                                
                                                <!-- /.col-* -->

                                                <div class="col-md-2">
                                                    <a href="adding.html"><div class="form-group-btn form-group-btn-placeholder-gap">
                                                        <button type="submit" class="btn btn-primary btn-block">Buat</button>
                                                    </div></a>
                                                    <!-- /.form-group -->
                                                </div>
                                                <!-- /.col-* -->
                                            </div>
                                            <!-- /.row -->
                                        </div>
                                        <!-- /.filter -->
                                        <center><h5><b>ATAU</b></h5></center>
                                        <div class="content">
                                                    <div class="filter filter-white">
                                                        <div class="row">
                                                            <h5>Masukkan Nama Tujuan Anda</h5>
                                                            <div class="col-md-9">
                                                                    <div class="form-group">
                                                                            <input type="text" class="form-control">
                                                                        </div><!-- /.form-group -->
                                                                <!-- /.form-group -->
                                                            </div>
                                                            <!-- /.col-* -->
            
                                                            
                                                            <!-- /.col-* -->
            
                                                            <div class="col-md-2">
                                                                <a href="adding.html"><div class="form-group-btn form-group-btn-placeholder-gap">
                                                                    <a href="cari.html"><button type="submit" class="btn btn-primary btn-block">Buat</button></a>
                                                                </div></a>
                                                                <!-- /.form-group -->
                                                            </div>
                                                            <!-- /.col-* -->
                                                        </div>
                                                        <!-- /.row -->
                                                    </div>
                                                    <!-- /.filter -->

                                        </div>

                                    <!-- /.push-top-bottom -->
                                </div>
                                <!-- /.content -->
                            </div>
                            <!-- /.col-* -->
                            <br/>
                            <div class="col-md-5">
                                <div class="sidebar">
                                    <div class="widget">
                                        <h2 class="widgettitle">Daftar Perjalanan Yang Telah Anda Buat</h2>

                                        <div class="cards-small-wrapper">
                                            <div class="admin-box no-padding">
                                                <table class="table small-header">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nama</th>
                                                            <th>Waktu</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Liburan akhir tahun</td>
                                                                <td>2 jam yang lalu</td>  
                                                                <td class="min-width">
                                                                    <a href="#"><i class="md-icon">delete</i></a>
                                                                </td>           
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Liburan sekolah</td>
                                                                <td>5 menit yang lalu</td>  
                                                                <td class="min-width">
                                                                    <a href="#"><i class="md-icon">delete</i></a>
                                                                </td>           
                                                            </tr>
                                                             <tr>
                                                                <td>3</td>
                                                                <td>Liburan sekolah</td>
                                                                <td>5 menit yang lalu</td>  
                                                                <td class="min-width">
                                                                    <a href="#"><i class="md-icon">delete</i></a>
                                                                </td>           
                                                            </tr>
                                                            
                                                        
                                                    </tbody>
                                                </table><!-- /.table -->
                                            </div><!-- /.admin-box -->
                                        </div>
                                        <!-- /.cards-small-wrapper -->
                                    </div>
                                    <!-- /.widget -->
                                </div>
                                <!-- /.sidebar -->
                            </div>
                            <!-- /.col-* -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container -->
                </div>
                <!-- /.main-inner -->
            </div>
            <!-- /.main -->
        </div>
        <!-- /.main-wrapper -->

        <div class="footer-wrapper">
                <div class="footer">
                    <div class="footer-widgets">
                                <div class="counter">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-sm-12 col-md-3">
                                                    <h2>Web Liburan terbaik dengan banyak koneksi dan pilihan</h2>
                                                </div><!-- /.col-* -->
                                    
                                                <div class="col-sm-12 col-md-9">
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <i class="md-icon">people</i> 
                                                            <h3>11340 lebih</h3>
                                                            <p>Pengunjung</p>
                                                        </div><!-- /.col-* -->
                                                        <div class="col-sm-3">
                                                                <i class="md-icon">room</i> 
                                                                <h3>697</h3>
                                                                <p>Wisata yang terdaftar</p>
                                                            </div><!-- /.col-* -->
                                                        <div class="col-sm-3">
                                                            <i class="md-icon">location_city</i> 
                                                            <h3>593</h3>
                                                            <p>Kuliner yang terdaftar </p>
                                                        </div><!-- /.col-* -->							
                                    
                                                        <div class="col-sm-3">
                                                            <i class="md-icon">restaurant_menu</i> 
                                                            <h3>408</h3>
                                                            <p>Pusat oleh-oleh yang terdaftar</p>
                                                        </div><!-- /.col-* -->														
                                                    </div><!-- /.row -->
                                                </div><!-- /.col-* -->
                                            </div><!-- /.row -->
                                        </div><!-- /.container -->
                    </div><!-- /.footer-widgets -->
            
                    <div class="footer-top">
                        <div class="container">
                            <div class="footer-top-left">
                                    NHITB,Web terbaik untuk berlibur - Created by <a href="#">Kelompok3</a>
                            </div><!-- /.footer-top-left -->
            
                            <div class="footer-top-right">
                                <a class="footer-top-action">
                                    <i class="md-icon">vertical_align_top</i>
                                </a><!-- /.footer-top-action -->
            
                                <ul class="nav nav-pills">
                                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Pricing</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">FAQ</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                                </ul>
                            </div><!-- /.footer-top-right -->
                        </div><!-- /.container -->
                    </div><!-- /.footer-top -->
            
                    
                </div><!-- /.footer -->
            </div><!-- /.footer-wrapper -->
            </div><!-- /.page-wrapper -->
            
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