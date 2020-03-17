<style>
        .badge {
            display: inline-block;
            padding: .25em .4em;
            font-size: 75%;
            font-weight: 700;
            line-height: 1;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: .25rem;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out
        }
        
        @media (prefers-reduced-motion:reduce) {
            .badge {
                transition: none
            }
        }
        
        a.badge:focus,
        a.badge:hover {
            text-decoration: none
        }
        
        .badge:empty {
            display: none
        }
        
        .btn .badge {
            position: relative;
            top: -1px
        }
        
        .badge-pill {
            padding-right: .6em;
            padding-left: .6em;
            border-radius: 10rem
        }
        
        .badge-primary {
            color: #fff;
            background-color: #007bff
        }
        
        a.badge-primary:focus,
        a.badge-primary:hover {
            color: #fff;
            background-color: #0062cc
        }
        
        a.badge-primary.focus,
        a.badge-primary:focus {
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .5)
        }
        
        .badge-secondary {
            color: #fff;
            background-color: #6c757d
        }
        
        a.badge-secondary:focus,
        a.badge-secondary:hover {
            color: #fff;
            background-color: #545b62
        }
        
        a.badge-secondary.focus,
        a.badge-secondary:focus {
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(108, 117, 125, .5)
        }
        
        .badge-success {
            color: #fff;
            background-color: #28a745
        }
        
        a.badge-success:focus,
        a.badge-success:hover {
            color: #fff;
            background-color: #1e7e34
        }
        
        a.badge-success.focus,
        a.badge-success:focus {
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .5)
        }
        
        .badge-info {
            color: #fff;
            background-color: #17a2b8
        }
        
        a.badge-info:focus,
        a.badge-info:hover {
            color: #fff;
            background-color: #117a8b
        }
        
        a.badge-info.focus,
        a.badge-info:focus {
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(23, 162, 184, .5)
        }
        
        .badge-warning {
            color: #212529;
            background-color: #ffc107
        }
        
        a.badge-warning:focus,
        a.badge-warning:hover {
            color: #212529;
            background-color: #d39e00
        }
        
        a.badge-warning.focus,
        a.badge-warning:focus {
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(255, 193, 7, .5)
        }
        
        .badge-danger {
            color: #fff;
            background-color: #dc3545
        }
        
        a.badge-danger:focus,
        a.badge-danger:hover {
            color: #fff;
            background-color: #bd2130
        }
        
        a.badge-danger.focus,
        a.badge-danger:focus {
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .5)
        }
        
        .badge-light {
            color: #212529;
            background-color: #f8f9fa
        }
        
        a.badge-light:focus,
        a.badge-light:hover {
            color: #212529;
            background-color: #dae0e5
        }
        
        a.badge-light.focus,
        a.badge-light:focus {
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(248, 249, 250, .5)
        }
        
        .badge-dark {
            color: #fff;
            background-color: #343a40
        }
        
        a.badge-dark:focus,
        a.badge-dark:hover {
            color: #fff;
            background-color: #1d2124
        }
        
        a.badge-dark.focus,
        a.badge-dark:focus {
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(52, 58, 64, .5)
        }
    </style>
                    <div class="filter filter-white">
                        <div class="row">

                            

                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Cari Pengguna">
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.col-* --><div class="col-md-3">
                                <div class="form-group">
                                    <select class="form-control">
                                            <option>Online</option>
                                            <option>Offline</option>
                                            
                                        </select>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.col-* -->

                            <div class="col-md-2">
                                <div class="form-group-btn form-group-btn-placeholder-gap">
                                    <a href="#"><button type="submit"
                                            class="btn btn-primary btn-block">Cari</button></a>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.col-* -->
                        </div>
                        <!-- /.row -->
                    </div>


                </div>
                <!-- /.admin-title -->

                <div class="admin-box no-padding">
                    <table class="table small-header">
                        <thead>
                            <tr>
                                <th>&nbsp;</th>
                                <th>Nama</th>
                                <th>Sebagai</th>
                                <th>&nbsp;</th>
                                <th>Status</th>
                                <th>Tindakan</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td class="min-width">
                                    <div class="user-avatar">
                                        <img src="assets/img/ar.png">
                                    </div>
                                    <!-- /.user-avatar -->
                                </td>
                                <td>See H. Oceguera</td>
                                <td>Pengguna</td>
                                <td> </td>
                                <td><span class="badge badge-pill badge-success">Online</span></td>
                                <td class="min-width">
                                    <a href="#" class="btn btn-primary"><i class="md-icon">delete</i> Hapus</a>
                                </td>
                            </tr>

                            <tr>
                                <td class="min-width">
                                    <div class="user-avatar">
                                        <img src="assets/img/ar.png">
                                    </div>
                                    <!-- /.user-avatar -->
                                </td>
                                <td>Claude M. Tinsley</td>
                                <td>Pengguna</td>
                                <td></td>
                                <td><span class="badge badge-pill badge-danger">Offline</span></td>
                                <td class="min-width">
                                    <a href="#" class="btn btn-primary"><i class="md-icon">delete</i> Hapus</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="min-width">
                                    <div class="user-avatar">
                                        <img src="assets/img/ar.png">
                                    </div>
                                    <!-- /.user-avatar -->
                                </td>
                                <td>Claude M. Tinsley</td>
                                <td>Pengguna</td>
                                <td></td>
                                <td><span class="badge badge-pill badge-success">Online</span></td>
                                <td class="min-width">
                                    <a href="#" class="btn btn-primary"><i class="md-icon">delete</i> Hapus</a>
                                </td>
                            </tr>



                        </tbody>
                    </table>
                    <!-- /.table -->
                </div>
                <!-- /.admin-box -->

                <nav class="pagination-wrapper">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>

                        <li class="page-item active">
                            <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                        </li>

                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>

                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>

                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- /.container-fluid -->