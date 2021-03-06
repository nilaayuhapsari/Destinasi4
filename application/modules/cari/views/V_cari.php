<div class="main-wrapper">
    <div class="main">
        <div class="main-inner">

            <div class="content-title">
                <div class="container">
                    <h1>KULINER</h1>

                    <ul class="breadcrumb">
                        <li><a href="<?= base_url('listings'); ?>">Kembali</a> <i class="md-icon">keyboard_arrow_right</i></li>

                    </ul><!-- /.breadcrumb -->
                </div><!-- /.container -->
            </div><!-- /.content-title -->


            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-9">
                        <div class="content">
                            <div class="push-top-bottom">

                                <div class="row">

                                    <div class="col-sm-4">
                                        <div class="card">
                                            <div class="card-image" style="background-image: url('assets/img/tmp/foto/Yogyakarta.jpg');">
                                                <a href="<?= base_url('food_detail'); ?>"></a>

                                                <div class="card-image-rating">
                                                    <i class="md-icon">star</i>
                                                    <i class="md-icon">star</i>
                                                    <i class="md-icon">star</i>
                                                    <i class="md-icon">star</i>
                                                    <i class="md-icon">star</i>
                                                </div><!-- /.card-image-rating -->
                                            </div><!-- /.card-image -->

                                            <div class="card-content">
                                                <h3><a href="<?= base_url('food_detail'); ?>">Kuliner</a></h3>
                                                <h2><a href="<?= base_url('food_detail'); ?>">Loko Coffe Shop</a></h2>
                                            </div><!-- /.card-content -->

                                            <div class="card-actions">
                                                <div id="demo-state-btn" type="button" data-target="#1" data-toggle="modal" class="btn btn-primary btn-block" data-loading-text="Loading..." a>tambah</div>
                                            </div><!-- /.card-actions -->
                                        </div><!-- /.card -->
                                    </div><!-- /.col-* -->

                                </div><!-- /.row -->

                                <nav class="pagination-wrapper">
                                    <ul class="pagination">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                        </li>


                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div><!-- /.push-top-bottom -->
                        </div><!-- /.content -->
                    </div><!-- /.col-* -->

                    <div class="col-md-4 col-lg-3">
                        <div class="sidebar">
                            <div class="widget">
                                <h2 class="widgettitle">Daftar Populer</h2>

                                <div class="cards-small-wrapper">

                                    <div class="card-small">
                                        <div class="card-small-image">
                                            <a href="#" style="background-image: url('assets/img/tmp/foto/sambal.jpg');"></a>
                                        </div>
                                        <!-- /.card-small-image -->

                                        <div class="card-small-content">
                                            <h3><a href="k1.html">Spesial Sambal</a></h3>
                                            <h4><a href="k1.html">Kuliner</a></h4>
                                        </div>
                                        <!-- /.card-small-content -->
                                    </div>
                                    <!-- /.card-small -->

                                    <div class="card-small">
                                        <div class="card-small-image">
                                            <a href="#" style="background-image: url('assets/img/tmp/foto/sisi.jpg');"></a>
                                        </div>
                                        <!-- /.card-small-image -->

                                        <div class="card-small-content">
                                            <h3><a href="k1.html">Piano Lessons For Beginners</a></h3>
                                            <h4><a href="k1.html">Wisata</a></h4>
                                        </div>
                                        <!-- /.card-small-content -->
                                    </div>
                                    <!-- /.card-small -->

                                    <div class="card-small">
                                        <div class="card-small-image">
                                            <a href="#" style="background-image: url('assets/img/tmp/foto/sambal.jpg');"></a>
                                        </div>
                                        <!-- /.card-small-image -->

                                        <div class="card-small-content">
                                            <h3><a href="k1.html">Delicious Ocean Restaurant</a></h3>
                                            <h4><a href="k1.html">Kuliner</a></h4>
                                        </div>
                                        <!-- /.card-small-content -->
                                    </div>
                                    <!-- /.card-small -->

                                    <div class="card-small">
                                        <div class="card-small-image">
                                            <a href="#" style="background-image: url('assets/img/tmp/foto/sambal.jpg');"></a>
                                        </div>
                                        <!-- /.card-small-image -->

                                        <div class="card-small-content">
                                            <h3><a href="k1.html">Healthy Breakfast</a></h3>
                                            <h4><a href="k1.html">Kuliner</a></h4>
                                        </div>
                                        <!-- /.card-small-content -->
                                    </div>
                                    <!-- /.card-small -->

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
</div><!-- /.main-wrapper -->
<div id="1" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <center>
                    <h4 class="modal-title">Apakah anda ingin menambahkan ini?</h4>
                </center>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                <a href="<?= base_url('jadwal'); ?>"><button type="button" class="btn btn-primary">Iya</button></a>
            </div>
        </div>
    </div>
</div>