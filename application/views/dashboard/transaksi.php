<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Toko404 - Dashboard Admin</title>
    <!-- Favicon -->
    <link rel="icon" href="<?= base_url() ?>assets/img/brand/favicon.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <!-- Page plugins -->
    <!-- Argon CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/argon.css?v=1.2.0" type="text/css">

    <!-- framework bootstrap -->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <!-- datepicker bootstrap -->
    
    <script src="bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="bootstrap-datepicker/locales/bootstrap-datepicker.id.min.js"></script>

    <script>
    $( function() {
        $( "#date" ).datepicker({
        autoclose:true,
        todayHighlight:true,
        format:'yyyy-mm-dd',
        language: 'id'
        });
    } );
    </script>
</head>

<body>
    <!-- Sidenav -->
    <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
        <div class="scrollbar-inner">
            <!-- Brand -->
            <div class="sidenav-header  align-items-center"  style="height: 150px;">
                <a class="navbar-brand" href="javascript:void(0)">
                    <img src="<?= base_url() ?>assets/img/brand/404.png" class="navbar-brand-img" alt="..." style="max-height: 10rem;">
                </a>
            </div>
            <div class="navbar-inner">
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <!-- Nav items -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link " href="<?= base_url('DashboardAdmin')?>">
                                <i class="ni ni-tv-2 text-primary"></i>
                                <span class="nav-link-text">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('Member')?>">
                                <i class="ni ni-single-02 text-yellow"></i>
                                <span class="nav-link-text">Member</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="<?= base_url('Transaksi')?>">
                                <i class="ni ni-bullet-list-67 text-default"></i>
                                <span class="nav-link-text">Transaksi</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('Produk')?>">
                                <i class="ni ni-cart text-info"></i>
                                <span class="nav-link-text">Produk</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Divider -->
                    <hr class="my-3">
                    </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Topnav -->
        <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom" style="background-color: black !important;">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Search form -->
                    <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
                        <div class="form-group mb-0">
                            <div class="input-group input-group-alternative input-group-merge">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                                </div>
                                <input class="form-control" placeholder="Search" type="text">
                            </div>
                        </div>
                        <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </form>
                    <!-- Navbar links -->
                    <ul class="navbar-nav align-items-center  ml-md-auto ">
                        <li class="nav-item d-xl-none">
                            <!-- Sidenav toggler -->
                            <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item d-sm-none">
                            <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                                <i class="ni ni-zoom-split-in"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                        <li class="nav-item dropdown">
                            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="media align-items-center">
                                    <span class="avatar avatar-sm rounded-circle">
                                        <img alt="Image placeholder" src="<?= base_url() ?>assets/img/theme/401.png">
                                    </span>
                                    <div class="media-body  ml-2  d-none d-lg-block">
                                        <span class="mb-0 text-sm  font-weight-bold">Admin</span>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu  dropdown-menu-right ">
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome!</h6>
                                </div>
                                <a href="#!" class="dropdown-item">
                                    <i class="ni ni-single-02"></i>
                                    <span>My profile</span>
                                </a>
                                <a href="#!" class="dropdown-item">
                                    <i class="ni ni-settings-gear-65"></i>
                                    <span>Settings</span>
                                </a>
                                <a href="#!" class="dropdown-item">
                                    <i class="ni ni-calendar-grid-58"></i>
                                    <span>Activity</span>
                                </a>
                                <a href="#!" class="dropdown-item">
                                    <i class="ni ni-support-16"></i>
                                    <span>Support</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="<?= base_url('Login/logout');?>" class="dropdown-item">
                                    <i class="ni ni-user-run"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header -->
        <!-- Header -->
        <div class="header bg-primary pb-6" style="background-color: #343a40 !important;">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">
                            <h6 class="h2 text-white d-inline-block mb-0">Admin</h6>
                            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                    <li class="breadcrumb-item"><a href="<?= base_url('DashboardAdmin')?>"><i class="fas fa-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="<?= base_url('DashboardAdmin')?>">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="<?= base_url('Transaksi')?>">Transaksi</a></li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-lg-6 col-5 text-right">
                            <a href="#" class="btn btn-sm btn-neutral">New</a>
                            <a href="#" class="btn btn-sm btn-neutral">Filters</a>
                        </div>
                    </div>
                    <!-- Card stats -->
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card card-stats">
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title text-uppercase text-muted mb-0">Total Penjualan</h5>
                                            <span class="h2 font-weight-bold mb-0"><?= $total_penjualan?></span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                                <i class="ni ni-active-40"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card card-stats">
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title text-uppercase text-muted mb-0">Total Penyewaan</h5>
                                            <span class="h2 font-weight-bold mb-0"><?= $total_penyewaan?></span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                                <i class="ni ni-chart-pie-35"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card card-stats">
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title text-uppercase text-muted mb-0">Jumlah Transaksi</h5>
                                            <span class="h2 font-weight-bold mb-0"><?= $jumlah_transaksi?></span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                                                <i class="ni ni-money-coins"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page content -->
        <div class="container-fluid mt--6">
            <div class="row">
                <div class="col-xl-8">
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="mb-0">Daftar Transaksi Toko 404</h3>
                                </div>
                                <div class="col text-right">
                                    <a href="#!" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambahtransaksi" >+ Tambah Transaksi</a>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <!-- Projects table -->
                            <table class="table align-items-center table-flush" style="text-align:center;">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">ID Transaksi</th>
                                        <th scope="col">Tanggal Transaksi</th>
                                        <th scope="col">Nama Member</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Nota</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody style="text-align: center;">
                                    <?php foreach ($detail_transaksi as $jualbeli) { ?>
                                        <tr>
                                            <td>T00<?= $jualbeli->id_transaksi; ?></td>
                                            <td><?= $jualbeli->tgl_transaksi; ?></td>
                                            <td><?= $jualbeli->nama_member; ?></td>
                                            <td><?= $jualbeli->nama_kategori; ?></td>
                                            <td><?= $jualbeli->nama_status_order; ?></td>
                                            <td>
                                                <a href="<?= base_url('Transaksi/detail_transaksi')?>" 
                                                class="btn btn-success" style="font-size: .8rem; padding: .5rem 1rem;">Info</a>
                                            </td>
                                            <td> 
                                                <form method="post" action="<?= base_url('Transaksi/update_status')?>" enctype="multipart/form-data">
                                                    <input name="id_transaksi" type="hidden" value="<?= $jualbeli->id_transaksi; ?>">
                                                    <select name="id_status_order" id="selectjenis" class="btn btn-danger" style="font-size: .8rem; padding: .5rem 1rem;">
                                                    <?php foreach ($status_order as $order) { ?>
                                                        <option value="<?= $order->id_status_order; ?> "<?= $jualbeli->id_status_order == $order->id_status_order ? "selected" : null ?>><?= $order->nama_status_order; ?></option>  
                                                    <?php } ?>  
                                                    <!-- <option value="<?= $item->id_kategori;?>" <?= $produk->id_kategori == $item->id_kategori ? "selected" : null ?>><?= $item->nama_kategori;?></option>  -->                                         
                                                    </select>
                                                    <!--<a href="" nama="" class="btn btn-danger btn-hapus" style="font-size: .8rem; padding: .5rem 1rem; border-color: #11cdef; background-color: #11cdef;">Perbarui</a>-->
                                                    <button class="btn btn-info" type="submit" style="font-size: .8rem; padding: .5rem 1rem;">Perbarui</button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <footer class="footer pt-0">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6">
                        <div class="copyright text-center  text-lg-left  text-muted">
                            &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Patang Puluh patang</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Patang Puluh patang</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="<?= base_url() ?>assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/js-cookie/js.cookie.js"></script>
    <script src="<?= base_url() ?>assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <!-- Optional JS -->
    <script src="<?= base_url() ?>assets/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/chart.js/dist/Chart.extension.js"></script>
    <!-- Argon JS -->
    <script src="<?= base_url() ?>assets/js/argon.js?v=1.2.0"></script>
</body>

</html>



<!-- Modal Tambah Transaksi -->
<div class="modal fade bd-example-modal-lg" id="tambahtransaksi" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Transaksi</h5>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= base_url('transaksi/simpan_transaksi')?>" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="namaBunga" class="">Nama Member</label>
                                    <select name="nama_member" id="selectjenis" class="form-control">
                                    <?php foreach($nama_member as $nm){?>
                                        <option value="<?= $nm->nama_member;?>"><?= $nm->nama_member;?></option>
                                    <?php }?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="pilihanjenis" class="">Tanggal Transaksi</label>
                                <input type="date" class="form-control" id="date">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="namaBunga" class="">Nama Produk</label>
                                    <select name="nama_produk" id="nama_produk" class="form-control" >
                                    <?php foreach($produk as $pr){?>
                                        <option value="<?= $pr->nama_produk;?>"><?= $pr->nama_produk;?></option>
                                    <?php }?>
                                    </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="pilihanjenis" class="">Kategori</label>
                                <select name="nama_kategori" id="nama_kategori" class="form-control" >
                                    <?php foreach($kategori as $kt){?>
                                        <option value="<?= $kt->nama_kategori;?>"><?= $kt->nama_kategori;?></option>
                                    <?php }?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="stok" class="">Jumlah</label>
                                <input name="stok" placeholder="1" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="harga" class="">Harga</label>
                                <select name="harga" id="harga" class="form-control" >
                                    <?php foreach($produk as $pr){?>
                                        <option value="<?= $pr->harga;?>"><?= "Rp. ".number_format($pr->harga, 0, ".",".");?></option>
                                    <?php }?>
                                </select>
                            </div>
                        </div>    
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                            <!--<select name="total_harga" id="total_harga" class="form-control" >
                                    <?php foreach($produk as $pr){?>
                                        <option value="<?= $pr->harga;?>"><?= "Rp. ".number_format($pr->harga, 0, ".",".");?></option>
                                    <?php }?>
                                </select>-->
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="deskripsi" class="">Status Order</label>
                                <select name="status_order" id="selectjenis" class="form-control">
                                <?php foreach ($status_order as $order) { ?>
                                    <option value="<?= $order->id_status_order; ?> "><?= $order->nama_status_order; ?></option>  
                                <?php } ?>  
                                </select>
                            </div>
                        </div>
                    </div>
                    <button class="mt-2 btn btn-primary" type="submit">Simpan</button>
                    <button class="mt-2 btn btn-secondary" type="reset">Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Penutup Modal Tambah Transaksi -->


<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<!--    <script type="text/javascript">
        $(document).ready(function() {
        // Format Select2 pada id nisn
        $("#nama_produk").autocomplete({
            source : "<?php echo site_url('Transaksi/get_autofill')?>"
        });

        show_nama_produk(); // Memanggil fungsi untuk menampilkan Produk
        });

        // fungsi untuk menampilkan Produk
        function show_nama_produk() {
        $.ajax({
            url: "<?php echo base_url('Transaksi'); ?>",
            type: "GET",
            dataType: "JSON",
            success: function(x) {
            if (x.status == true) {
                $('#id_produk').html('<option value=""></option>');
                $.each(x.data, function(k, v) {
                $('#id_produk').append(`<option value="${v.id_produk}">${v.id_produk}</option>`);
                });
            }
            }
        });
        }

        // fungsi untuk menampilkan data siswa berdasarkan NISN
        function show_produk(x) {
        $.ajax({
            url: "<?php echo base_url('Transaksi'); ?>",
            type: "GET",
            dataType: "JSON",
            data: {
            id_produk: x
            },
            success: function(x) {
            if (x.status == true) {
                $('.data-produk').show()
                $('#nama_produk').val(x.data.nama_produk);
                $('#id_kategori').val(x.data.id_kategori);
                $('#harga').val(x.data.harga);
            }
            }
        });
        }
    </script> -->